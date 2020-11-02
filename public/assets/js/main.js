/**
 * createIT main javascript file.
 */

var $devicewidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var $deviceheight = (window.innerHeight > 0) ? window.innerHeight : screen.height;
var $bodyel = jQuery("body");
var $navbarel = jQuery(".navbar");
var $topbarel = jQuery(".ct-topBar");

/* ========================== */
/* ==== HELPER FUNCTIONS ==== */


var $lgWidth = 1199;
var $mdWidth = 991;
var $smWidth = 767;
var $xsWidth = 479;

function validatedata($attr, $defaultValue) {
    "use strict";
    if ($attr !== undefined) {
        return $attr
    }
    return $defaultValue;
}

function parseBoolean(str, $defaultValue) {
    "use strict";
    if (str == 'true') {
        return true;
    } else if (str == "false") {
        return false;
    }
    return $defaultValue;
}

(function ($) {
    "use strict";
    if(document.getElementById('ct-js-wrapper')){
        var snapper = new Snap({
            element: document.getElementById('ct-js-wrapper')
        });

        snapper.settings({
            addBodyClasses: true
        });
    }

    $(document).ready(function () {

        // Add Color // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $(".ct-js-color").each(function(){
            $(this).css("color", '#' + $(this).attr("data-color"))
        });

        // Add Space // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $(".ct-js-spacer").each(function(){
            $(this).css("height", $(this).attr("data-value"))
        });


        // Snap Navigation in Mobile // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



        if ($devicewidth > 767 && document.getElementById('ct-js-wrapper')) {
            snapper.disable();
        }

        $(".navbar-toggle").click(function () {
            if($bodyel.hasClass('snapjs-left')){
                snapper.close();
            } else{
                snapper.open('left');
            }
        });
        $(".navbarShop-toggle").click(function () {
            if($bodyel.hasClass('snapjs-right')){
                snapper.close();
            } else{
                snapper.open('right');
            }
        });

        $('.ct-menuMobile .ct-menuMobile-navbar .dropdown > a').click(function(e) {
            return false; // iOS SUCKS
        });
        $('.ct-menuMobile .ct-menuMobile-navbar .dropdown > a').click(function(e){
            var $this = $(this);
            if($this.parent().hasClass('open')){
                $(this).parent().removeClass('open');
            } else{
                $('.ct-menuMobile .ct-menuMobile-navbar .dropdown.open').toggleClass('open');
                $(this).parent().addClass('open');
            }
        });

        // Animations Init // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        if ($().appear) {
            if (device.mobile() || device.tablet()) {
                $("body").removeClass("cssAnimate");
            } else {

                $('.cssAnimate .animated').appear(function () {
                    var $this = $(this);

                    $this.each(function () {
                        if ($this.data('time') != undefined) {
                            setTimeout(function () {
                                $this.addClass('activate');
                                $this.addClass($this.data('fx'));
                            }, $this.data('time'));
                        } else {
                            $this.addClass('activate');
                            $this.addClass($this.data('fx'));
                        }
                    });
                }, {accX: 50, accY: -350});
            }
        }

        // Tooltips and Popovers // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $("[data-toggle='tooltip']").tooltip();

        $("[data-toggle='popover']").popover({trigger: "hover", html: true});


        // Link Scroll to Section // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $('.ct-js-btnScroll[href^="#"]').click(function (e) {
            e.preventDefault();

            var target = this.hash, $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 70
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
        $('.ct-js-btnScrollUp').click(function (e) {
            e.preventDefault();
            $("body,html").animate({scrollTop: 0}, 1200);
            return false;
        });

        // Navbar Search // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        var $searchform = $(".ct-navbar-search");
        $('#ct-js-navSearch').click(function(e){
            e.preventDefault();
            $navbarel.addClass('is-inactive');


            $searchform.fadeIn();

                if (($searchform).is(":visible")) {
                    $searchform.find("[type=text]").focus();
                }

            return false;
        })

        // Placeholder Fallback // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        if ($().placeholder) {
            $("input[placeholder],textarea[placeholder]").placeholder();
        }

        /* ******************
         MAGIC BORDER IN MENU
         ******************** */

        if ($devicewidth > 767) {
            $(function () {

                var $el, leftPos, newWidth, $mainNav = $(".navbar-nav");

                if ($mainNav.length > 0) {
                    $mainNav.each(function () {
                        var $this = $(this);
                        //if ($this.find("> li.active").length > 0) {
                        if ($this.find("> li.active").length > 0) {
                            $this.append("<li id='magic-line'></li>");
                            var $magicLine = $("#magic-line");

                            $magicLine.width($mainNav.find("> li.active").width()).css("left", $mainNav.find("> li.active").position().left).data("origLeft", $magicLine.position().left).data("origWidth", $magicLine.width());

                            $(".navbar-nav > li").hover(function () {
                                $el = $(this);
                                leftPos = $el.position().left;
                                newWidth = $el.width();
                                $magicLine.stop().animate({
                                    left: leftPos, width: newWidth
                                });
                            }, function () {
                                if ($('body').hasClass('onepager')) {
                                    $magicLine.stop().animate({
                                        left: $mainNav.find("> li.active").position().left, width: $mainNav.find("> li.active").width()
                                    });
                                } else {
                                    $magicLine.stop().animate({
                                        left: $magicLine.data("origLeft"), width: $magicLine.data("origWidth")
                                    });
                                }
                            });
                            if ($().attrchange) {
                                $mainNav.find('> li:not(#magic-line)').attrchange({
                                    trackValues: true, /* Default to false, if set to true the event object is
                                     updated with old and new value.*/
                                    callback: function (event) {
                                        //event    	          - event object
                                        //event.attributeName - Name of the attribute modified
                                        //event.oldValue      - Previous value of the modified attribute
                                        //event.newValue      - New value of the modified attribute
                                        //Triggered when the selected elements attribute is added/updated/removed
                                        $magicLine.stop().animate({
                                            left: $mainNav.find("> li.active").position().left, width: $mainNav.find("> li.active").width()
                                        });
                                    }
                                });
                            }
                        }
                    })
                }
            });
        }



        // INIT SCRIPTS FILES -------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        //STACKTABLE
        $('.ct-js-wishList').stacktable();

        //SELECT2
        $(".ct-select").select2();

        //MAGNIFIC POPUP
        if(jQuery().magnificPopup){
            jQuery('.ct-js-popupGallery').each(function() { // the containers for all your galleries
                jQuery(this).magnificPopup({
                    disableOn: 700,
                    type: 'image',
                    mainClass: 'ct-magnificPopup--image',
                    removalDelay: 160,
                    preloader: true,
                    delegate: '.ct-js-magnificPopupImage',
                    closeBtnInside: true,
                    closeOnContentClick: false,
                    closeOnBgClick: true,
                    gallery: {
                        enabled: true
                    }
                });
            });
        }


        /*
         ****************
         shopList and shopDefault displaying and hiding elements by buttons
         ****************
         */

        var $tilesItems = $("#ct-js-showTiles");
        var $listItems = $("#ct-js-showList");
        var $showProducts = $(".ct-showProducts");

        if($tilesItems && $listItems){
            $tilesItems.on("click",function(e){
                e.preventDefault();

                var $existListClass = $(".ct-showProducts--list");

                if($existListClass){
                    $showProducts.removeClass("ct-showProducts--list");
                    $showProducts.addClass("ct-showProducts--default");
                    $showProducts.css("display", "none");
                    $showProducts.fadeIn();

                    $(this).addClass("is-active");
                    $listItems.removeClass("is-active");
                }
            });

            $listItems.on("click",function(e){
                e.preventDefault();

                var $existDefaultClass = $(".ct-showProducts--list");

                if($existDefaultClass){
                    $showProducts.removeClass("ct-showProducts--default");
                    $showProducts.addClass("ct-showProducts--list");
                    $showProducts.css("display", "none");
                    $showProducts.fadeIn();

                    $(this).addClass("is-active");
                    $tilesItems.removeClass("is-active");
                }
            });
        }

        /* WISHLIST PRODUCTS DELETING ITEMS FROM CURRENT LIST*/

        var $buttonX =  $(".ct-wishList .ct-js-buttonX");

        if($devicewidth > 768){
            var pom = 0;
            var $wishTr = $("table.ct-wishList.large-only tbody tr");
            var $len = $wishTr.length;


            $buttonX.on("click", function(){
                $(this).closest('tr').fadeOut();


                $wishTr.each(function(){
                    if($(this).css("display") === "none"){
                        pom += 1;
                    }
                });

                //if we have displayed all elements to none, then we can show the announcement about there are no any products here
                if(pom == $len){
                    $(".ct-wishList-noProducts").fadeIn();
                    $(".ct-shopSections").fadeOut();
                }

                return false;
            });

            if($(".ct-wishList.large-only tbody tr").length === 0){
                $(".ct-wishList-noProducts").css("display", "block");
                $(".ct-shopSections").css("display", "none");
            }
        }
        else{

            //Hide one element which is single
            $(".st-head-row-main").hide();

            $buttonX.on("click", function(){

                /* Script wishtlist works in different amount of columns so we need to have an if for checking different tables where 1 column more */
                var $howMany;
                if($("table.ct-wishList.ct-js-cartShop.small-only").length == 1){
                    $howMany = 5;
                }
                else{
                    $howMany = 4;
                }

                /* stacktable js is creating another table via js with a lot of rows so we need to delete 4 or 5 previous rows together with button row ofc*/
                for(var i=0; i<$howMany; i++){
                    $(this).closest('tr').prev().remove();
                }
                $(this).closest('tr').remove();

                /* On mobile it will stay one row tr > td.st-head-row-main which we needed to hide earlier */
                if($(".ct-wishList.small-only tbody tr").length == 1){
                    $(".ct-wishList-noProducts").css("display", "block");
                    $(".ct-shopSections").css("display", "none");

                }
                return false;
            });

            /* On mobile it will stay one row tr > td.st-head-row-main which we needed to hide earlier */
            if($(".ct-wishList.small-only tbody tr").length === 1){
                $(".ct-wishList-noProducts").css("display", "block");
                $(".ct-shopSections").css("display", "none");
            }
        }


        // CALCULATE SHIPPING - SHOW BLOCK OF ELEMENTS AND HIDE, HIDING SHOP sections when there is no any elements */

        $("#ct-js-calculateShipping").on("click", function(){

            var $shipSection = $(".ct-calculateShippingSection");

            if($(".ct-calculateShippingSection.is-active").length < 1){
                //$shipSection.fadeIn();
                $shipSection.css("height", "auto");
                $shipSection.css("opacity", "1");
                $shipSection.addClass("is-active");
                $(".ct-js-changeTriangle").removeClass("ct-triangleDown");
                $(".ct-js-changeTriangle").addClass("ct-triangleUp");
            }
            else{
                //$shipSection.fadeOut();
                $shipSection.css("height", "0");
                $shipSection.css("opacity", "0");
                $shipSection.removeClass("is-active");
                $(".ct-js-changeTriangle").removeClass("ct-triangleUp");
                $(".ct-js-changeTriangle").addClass("ct-triangleDown");
            }
        });

        // DISPLAY DIFFERENT ADDRESS FORM in checkout

        $(".ct-js-differentAddress").on("click",function(){

            var $differentAddressSection = $(".ct-differentShippingAddress");

            if($(".ct-differentShippingAddress.is-active").length < 1){
                //$differentAddressSection.fadeIn();
                $differentAddressSection.css("height", "auto");
                $differentAddressSection.css("opacity", "1");
                $differentAddressSection.addClass("is-active");
                $("#differentAddress").prop("checked", true);
            }
            else {
                $differentAddressSection.css("height", "0");
                $differentAddressSection.css("opacity", "0");
                //$differentAddressSection.fadeOut();
                $differentAddressSection.removeClass("is-active");
                $("#differentAddress").prop("checked", false);
            }

            return false;
        });

        //RESIZE TEXT + -
        $('a.plus').on("click",function(){
            var curSize = parseInt($('.adjust-text').css('font-size'), 10)+1;
            if(curSize<=24)
                $('.adjust-text').css('font-size', curSize);
            return false;
        });
        $('a.minus').on("click",function(){
            var curSize = parseInt($('.adjust-text').css('font-size'), 10)-1;
            if(curSize>=10)
                $('.adjust-text').css('font-size', curSize);
            return false;
        });

        //VIdeo TAbs
        $('.ct-videoBox:first').css('display','block');

        $('.ct-videoProduct').on("click",function(){
            if($('.ct-videoProduct.is-active')){
                $('.ct-videoProduct.is-active').each(function(){
                    $(this).removeClass('is-active');
                });
            }
            if(!($(this).hasClass('is-active')))
                $(this).addClass('is-active');

            var elnum = $(this).index();
            $('.ct-videoBox').each(function(){
                $(this).css("display", "none");
            });
            $('.ct-videoBox').eq(elnum).css("display", "block");
        });

        //Colourful stars in single products ratings
        $(".ct-ratingsRight ul li span:nth-child(2) span").each(function(){
            if($(this).attr("data-width")){
                var $barWidth = $(this).attr("data-width");
                $(this).css("width", $barWidth+'%');
            }
        });

        //MULTIPLE SEARCHER
        $(".ct-js-filter").on("click",function(){
            var $this = $(this);
            var next = $this.next();

            if(next.hasClass("open")){
                next.hide();
                next.removeClass("open");
                if($this.hasClass("active")){
                    $this.removeClass("active");
                }
            }
            else{
                next.addClass("open");
                next.show();
                $this.addClass("active");
            }
            return false;
        });

        //ADDING EXTRA DOLAR TO INPUTS
        $('#lower-value').val('$' + $('#lower-value').val());
        $('#upper-value').val('$' + $('#upper-value').val());

        //DATA Bg in highlights
        if($(".ct-highlightsItem-content").length > 0){
            $(".ct-highlightsItem-content").each(function(){
                if($(this).attr("data-bg")){
                    $(this).css('background-image', 'url("' + $(this).attr("data-bg") + '")');
                }
                else{
                    $(this).css("background-color","grey");
                }
            });
        }


    });

    $(window).on('resize', function() {
        if ($(window).width() < 768) {
            snapper.enable();
        } else{
            snapper.close();
            snapper.disable();
        }
    });

    $(document).mouseup(function (e) {
        var $searchform = $(".ct-navbar-search");

        if(!$('#ct-js-navSearch').is(e.target)){
            if (!$searchform.is(e.target) // if the target of the click isn't the container...
                && $searchform.has(e.target).length === 0) // ... nor a descendant of the container
            {
                $navbarel.removeClass('is-inactive');
                $searchform.fadeOut();
            }
        }
    });

    $(window).on("load", function(){
        // Masonry For Sidebar // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        if (jQuery().masonry  && (jQuery(window).width()<992) && (jQuery(window).width()>767)) {

            jQuery('.ct-js-sidebar .row').masonry({
                itemSelector: '.col-sm-6.col-md-12',
                layoutMode: 'sloppyMasonry',
                resizable: false, // disable normal resizing
                // set columnWidth to a percentage of container width
                masonry: { }
            });
        }

        var $preloader = $('.ct-preloader');
        var $content = $('.ct-preloader-content');

        var $timeout = setTimeout(function(){
            $($preloader).addClass('animated').addClass('fadeOut');
            $($content).addClass('animated').addClass('fadeOut');
        }, 0);
        var $timeout2 = setTimeout(function(){
            $($preloader).css('display', 'none').css('z-index', '-9999');
        }, 500);
    });

})(jQuery);




