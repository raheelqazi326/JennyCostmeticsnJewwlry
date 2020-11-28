{{-- Stop trying to control. --}}
<div class="ct-js-owl owl-carousel ct-mainCarousel ct-mainCarousel--arrowsMiddle" data-snap-ignore="true" data-pagination="false" data-items="1" data-autoPlay="false" data-bg="true" data-animations="true" data-height="525" data-navigation="true">
    <div class="item" data-bg="./assets/images/demo-content/slider-image.jpg">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="ct-u-colorBlack">
                            <span class="animated" data-fx="fadeIn">Customized Diamond</span>
                            <br>
                            <span class="ct-u-colorWhite animated" data-fx="fadeIn" data-time="200">& Wedding Rings</span></h1>
                        <div class="text-center ct-u-paddingTop15 ct-u-paddingBottom30">
                            <hr class="hr-slider animated" data-fx="fadeIn">
                        </div>
                        <div class="text-center">
                            <a class="btn btn-blackTransparent animated" data-fx="fadeInUp" href="/products" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/products" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                <div class="container">
                    <i class="fa fa-angle-right fa-fw"></i> View all Nickelodeon Offers
                </div>
            </a>
        </div>
    </div>
    <div class="item" data-bg="./assets/images/demo-content/slider-image2.jpg">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4 col-sm-12">
                        <h1 class="ct-u-colorWhite text-right animated" data-fx="fadeInRight">Experience The Breathtaking</h1>
                        <h2 class="ct-u-colorWhite text-right animated" data-fx="fadeInRightBig">Interchangable Collections</h2>
                        <div class="text-right ct-mobileCenter ct-u-paddingTop40">
                            <a class="btn btn-blackTransparent btn-blackTransparent--white animated" data-fx="bounceInUp" href="/products" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/products" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                <div class="container">
                    <i class="fa fa-angle-right fa-fw"></i> View all Nickelodeon Offers
                </div>
            </a>
        </div>
    </div>
    <div class="item" data-bg="./assets/images/demo-content/slider-image3.jpg">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4 col-sm-12">
                        <h1 class="text-right ct-u-colorWhite animated" data-fx="fadeInRight">Inspired By Past, Designed</h1>
                        <h2 class="text-right ct-u-colorWhite animated" data-fx="fadeInRightBig">For Future</h2>
                        <div class="text-right ct-mobileCenter ct-u-paddingTop40">
                            <a class="btn btn-blackTransparent btn-blackTransparent--white animated" data-fx="bounceInUp" href="/products" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/products" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                <div class="container">
                    <i class="fa fa-angle-right fa-fw"></i> View all Nickelodeon Offers
                </div>
            </a>
        </div>
    </div>
    <div class="item" data-bg="./assets/images/demo-content/slider-image4.jpg">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <h1 class="ct-u-colorWhite animated" data-fx="fadeInLeft">Unique Jewelry</h1>
                        <h2 class="ct-u-colorWhite animated" data-fx="fadeInLeftBig">Large Selection</h2>
                        <div class="text-left ct-mobileCenter ct-u-paddingTop40">
                            <a class="btn btn-transparentWhite animated" data-fx="bounceInUp" href="/products" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/products" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                <div class="container">
                    <i class="fa fa-angle-right fa-fw"></i> View all Products
                </div>
            </a>
        </div>
    </div>
</div>
<div class="ct-contentWrapper">
    <div class="container">
        <!-- FIRST SHOP ELEMENTS SLIDER - FEATURED ITEMS -->
        <h4 class="ct-headerBox text-center ct-u-borderBottom3 ct-u-paddingBottom15 ct-u-paddingTop55">Featured Items</h4>
        <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
            <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                @foreach ($feature_products as $product)
                    <div class="item">
                        <div class="ct-productShop ct-productShop--default">
                            <div class="ct-productShop-category">
                                <span class="ct-productShop-h5">{{ $product->category->name }}</span>
                                <div class="clearfix"></div>
                                @php 
                                    $file = asset("storage/".$product->images[0]->image);
                                @endphp
                                <img class="" src="{{ $file }}" data-zoom-image="{{ $file }}" alt="{{ $product->name }}">
                            </div>
                            <div class="ct-productShop-content">
                                <div class="ct-productShop-content-description">
                                    <a href="/product/{{ $product->id }}">
                                        <h3>{{ $product->name }}</h3>
                                        <span>
                                            {{-- <del>sad</del>  --}}
                                            ${{ $product->price }}
                                        </span>
                                    </a>
                                    <span class="ct-productShop-shopCart" style="width:100%">
                                        {{-- <a class="btn btn-default" href="my-cart.html" role="button">
                                            <i class="fa fa-shopping-cart fa-fw"></i>
                                        </a> --}}
                                        <a class="btn btn-default btn-hidden" style="margin-left: -31%" href="/product/{{ $product->id }}" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- SECOND SHOP ELEMENTS SLIDER - LATEST PRODUCTS -->
        <h4 class="ct-headerBox ct-u-borderBottom3 text-center ct-u-paddingBottom15 ct-u-paddingTop55">Latest Products</h4>
        <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
            <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                @foreach ($latest_products as $product)
                    <div class="item">
                        <div class="ct-productShop ct-productShop--default">
                            <div class="ct-productShop-category">
                                <span class="ct-productShop-h5">{{ $product->category->name }}</span>
                                <div class="clearfix"></div>
                                @php 
                                    $file = asset("storage/".$product->images[0]->image);
                                @endphp
                                <img class="" src="{{ $file }}" data-zoom-image="{{ $file }}" alt="{{ $product->name }}">
                            </div>
                            <div class="ct-productShop-content">
                                <div class="ct-productShop-content-description">
                                    <a href="/product/{{ $product->id }}">
                                        <h3>{{ $product->name }}</h3>
                                        <span>
                                            {{-- <del>sad</del>  --}}
                                            ${{ $product->price }}
                                        </span>
                                    </a>
                                    <span class="ct-productShop-shopCart" style="width:100%">
                                        {{-- <a class="btn btn-default" href="my-cart.html" role="button">
                                            <i class="fa fa-shopping-cart fa-fw"></i>
                                        </a> --}}
                                        <a class="btn btn-default btn-hidden" style="margin-left: -31%" href="/product/{{ $product->id }}" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- THIRD SHOP ELEMENTS SLIDER - TOP RATED PRODUCTS -->
        <h4 class="ct-headerBox text-center ct-u-borderBottom3  ct-u-paddingBottom15 ct-u-paddingTop55">Top Rated Products</h4>

        <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
            <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                @foreach ($top_rated_products as $product)
                    <div class="item">
                        <div class="ct-productShop ct-productShop--default">
                            <div class="ct-productShop-category">
                                <span class="ct-productShop-h5">{{ $product->category->name }}</span>
                                <div class="clearfix"></div>
                                @php 
                                    $file = asset("storage/".$product->images[0]->image);
                                @endphp
                                <img class="" src="{{ $file }}" data-zoom-image="{{ $file }}" alt="{{ $product->name }}">
                            </div>
                            <div class="ct-productShop-content">
                                <div class="ct-productShop-content-description">
                                    <a href="/product/{{ $product->id }}">
                                        <h3>{{ $product->name }}</h3>
                                        <span>
                                            {{-- <del>sad</del>  --}}
                                            ${{ $product->price }}
                                        </span>
                                    </a>
                                    <span class="ct-productShop-shopCart" style="width:100%">
                                        {{-- <a class="btn btn-default" href="my-cart.html" role="button">
                                            <i class="fa fa-shopping-cart fa-fw"></i>
                                        </a> --}}
                                        <a class="btn btn-default btn-hidden" style="margin-left: -31%" href="/product/{{ $product->id }}" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

