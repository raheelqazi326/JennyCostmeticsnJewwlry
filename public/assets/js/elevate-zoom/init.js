

(function ($) {
    "use strict";
    if (!(device.mobile() || device.ipad() || device.androidTablet())){
        $(".ct-js-zoomImage").elevateZoom({
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 500,
            lensFadeIn: 500,
            lensFadeOut: 500,
            zoomWindowWidth: 350,
            zoomWindowHeight: 350
        });
    }

})(jQuery);