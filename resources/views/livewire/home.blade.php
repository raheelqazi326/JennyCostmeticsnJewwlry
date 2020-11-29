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

