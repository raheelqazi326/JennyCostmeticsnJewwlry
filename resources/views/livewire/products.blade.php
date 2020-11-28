<div class="ct-contentWrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop55">Welcome to Diana’s Jewelry</h4>
                <p class="ct-u-paddingTop30 ct-u-paddingBottom20 ct-u-size15 text-justify">
                    Every woman loves to accessorize her wardrobe with jewelry. When you shop jewelry online at us, you’ll discover a huge assortment of women’s jewelry, including the finest and fashion rings, bracelets, necklaces, earrings, charms, pendants, and pins. You’ll
                    find fabulous jewelry designs in 14K and 18K gold, stainless steel, bronze, and more.
                </p>
                <div class="ct-u-paddingBottom40">
                    <a class="ct-detailsLink" href="#"><i class="fa fa-long-arrow-right fa-fw"></i> details</a>
                </div>
                <form action="#">
                    <div class="ct-sortingBar ct-u-paddingRight10 ct-u-paddingLeft10">
                        <ul class="ct-sortBy list-inline list-unstyle pull-left ct-u-paddingBoth15">
                            <li class="ct-showElements is-active" id="ct-js-showTiles">
                                <a href="#">
                                    <i class="fa fa-th fa-fw"></i>
                                </a>
                            </li>
                            <li class="ct-showElements" id="ct-js-showList">
                                <a href="#">
                                    <i class="fa fa-th-list fa-fw"></i>
                                </a>
                            </li>
                            <li>
                                <span class="ct-sortBy-text ct-u-paddingRight10">Sort By:</span>
                                <select class="ct-select ct-select--default">
                                    <option value="price">Price</option>
                                    <option value="newness">Newness</option>
                                    <option value="rating">Rating</option>
                                    <option value="popularity">Popularity</option>
                                </select>
                                <span id="test"></span>
                            </li>
                        </ul>
                        <ul class="ct-showPages list-inline list-unstyled pull-right ct-u-paddingBoth15">
                            <li>
                                <span class="ct-u-paddingRight10">Show:</span>
                                <select class="ct-select ct-select--small" wire:model="perPage">
                                    <option value="10">10</option>
                                    <option value="1">1</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span class="ct-u-paddingLeft10">per page</span>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ct-searchBox ct-u-marginBottom60">
                        <div class="ct-searchBookmark">
                            <a href="#" class="ct-js-filter">
                                <div class="ct-searchBookmark-header">Filter by: Price, Silver</div>
                            </a>
                            <div class="ct-searchContent">
                                <div class="ct-searchContent-category ct-searchContent-category--transparent">Price</div>
                                <div class="ct-searchContent-description">
                                    <div class="ct-searchContent-slider">
                                        <div class="ct-js-noUiSliderPrice ct-u-marginBottom40"></div>
                                        <input type="text" class="form-control" id="lower-value">
                                        <input type="text" class="form-control" id="upper-value">
                                    </div>
                                </div>
                                <div class="ct-searchContent-category">Metal</div>
                                <div class="ct-searchContent-description">
                                    <!-- labels have to be next to each other -->
                                    <label for="checkbox1">
                                        <input type="checkbox" id="checkbox1"><span>18k Yellow Gold</span>
                                    </label><label for="checkbox2">
                                        <input type="checkbox" id="checkbox2"><span>18k White Gold</span>
                                    </label><label for="checkbox3">
                                        <input type="checkbox" id="checkbox3"><span>14k White Gold</span>
                                    </label><label for="checkbox4">
                                        <input type="checkbox" id="checkbox4"><span>14k White Gold</span>
                                    </label><label for="checkbox5">
                                        <input type="checkbox" id="checkbox5"><span>Platinum</span>
                                    </label><label for="checkbox6">
                                        <input type="checkbox" id="checkbox6"><span>Silver</span>
                                    </label><label for="checkbox7">
                                        <input type="checkbox" id="checkbox7"><span>Stainless steel</span>
                                    </label>
                                </div>
                                <div class="ct-searchContent-category">Size</div>
                                <div class="ct-searchContent-description">
                                    <label for="checkbox8">
                                        <input type="checkbox" id="checkbox8"><span>Less than 4mm</span>
                                    </label><label for="checkbox9">
                                    <input type="checkbox" id="checkbox9"><span>4-6mm</span>
                                </label><label for="checkbox10">
                                    <input type="checkbox" id="checkbox10"><span>7-8mm</span>
                                </label>
                                </div>
                                <div class="ct-searchContent-category">Color</div>
                                <div class="ct-searchContent-color">
                                    <select class="ct-js-colorSelector">
                                        <option value="0" data-color="#d2a48a" selected="selected">salmon</option>
                                        <option value="1" data-color="#e1c99b">yellow</option>
                                        <option value="2" data-color="#deddd9">grey</option>
                                        <option value="3" data-color="#cd5c5c">indianred</option>
                                        <option value="4" data-color="#6495ed">cornflowerblue</option>
                                        <option value="5" data-color="#8fbc8f">darkseagreen</option>
                                        <option value="6" data-color="#ffd700">gold</option>
                                        <option value="7" data-color="#ffa500">orange</option>
                                        <option value="8" data-color="#db7093">palevioletred</option>
                                        <option value="9" data-color="#696969">dimgrey</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="ct-showProducts ct-showProducts--default">
                    <ul class="ct-productsList list-unstyled list-inline">
                        @foreach ($products as $product)
                            <li>
                                <div class="ct-productShop ct-productShop--zoom ct-productShop--smaller">
                                    <div class="ct-productShop-category">
                                        <span class="ct-productShop-h5">{{ $product->category->name }}</span>
                                        <div class="clearfix"></div>
                                        <div class="text-center">
                                            @php
                                                $file = asset('storage/'.$product->images[0]->image);
                                            @endphp
                                            <img class="ct-js-zoomImage" src="{{ $file }}" data-zoom-image="{{ $file }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="ct-productShop-content">
                                        <!-- IF WE DONT HAVE ANY ICON INFO like BEST SELLER or BEST PRICE f.e. :
                                            <div class="ct-productShop-content-description-h5 text-uppercase">Best Seller</div>
                                            Then we add extra class ct-noHeader so that we could put padding Top 40px to justify the top to text
                                        -->
                                        <div class="ct-productShop-content-description ct-noHeader">
                                            <a href="/product/{{ $product->id }}">
                                                <h3>{{ $product->name }}</h3>
                                                <span>
                                                    {{-- <del>169.99</del> --}}
                                                    ${{ $product->price }}
                                                </span>
                                            </a>
                                            <div class="ct-listElementDescription">
                                                <div class="ct-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star ct-u-colorGrey"></i>
                                                    <div class="ct-reviews">
                                                        <a href="/product/{{ $product->id }}">8 customer reviews</a>
                                                    </div>
                                                </div>
                                                <div class="ct-u-paddingTop10 ct-u-paddingBottom15">
                                                    <a class="ct-detailsLink" href="/product/{{ $product->id }}"><i class="fa fa-long-arrow-right fa-fw"></i> details</a>
                                                </div>
                                                {{-- <div>
                                                    <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart"></i></a>
                                                    <div class="ct-or text-uppercase ct-u-paddingBottom20">
                                                        OR
                                                    </div>
                                                    <a class="btn btn-default ct-u-size18 text-uppercase" href="checkout.html" role="button">Speed Buy <i class="fa fa-long-arrow-right ct-u-paddingLeft10"></i></a>
                                                </div> --}}
                                            </div>
                                            <span class="ct-productShop-shopCart" style="width:100%">
                                                {{-- <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a> --}}
                                                <a class="btn btn-default btn-hidden" style="margin-left: -31%" href="/product/{{ $product->id }}" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="ct-pagination ct-u-paddingBoth15">
                        <div class="ct-totalItems pull-left" style="line-height: 200%">
                            Items {{ $products->firstItem() }}
                            to {{ $products->lastItem() }}
                            of {{ $products->total() }} total
                        </div>
                        <div class="ct-pages pull-right">
                            {{-- <span>Page:</span> --}}
                            {{ $products->links() }}
                            {{-- <ul class="ct-numerPages list-unstyled list-inline">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul> --}}
                            {{-- <a class="ct-rightArrow" href="#"><i class="fa fa-long-arrow-right fa-fw"></i></a> --}}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-md-pull-9">
                <div class="widget">
                    <div class="widget-inner">
                        <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop35">Brands</h4>
                        <ul class="ct-productCategories ct-u-paddingTop30">
                            <li><a href="#">DaVonna - </a><span>(7)</span></li>
                            <li><a href="#">Disney - </a><span>(5)</span></li>
                            <li><a href="#">Glitzy Rocks - </a><span>(1)</span></li>
                            <li><a href="#">Junior Jewels - </a><span>(1)</span></li>
                            <li><a href="#">Little Diva Diamonds - </a><span>(1)</span></li>
                            <li><a href="#">Miadora - </a><span>(1)</span></li>
                            <li><a href="#">Molly and Emma - </a><span>(11)</span></li>
                            <li><a href="#">Molly Glitz - </a><span>(9)</span></li>
                            <li><a href="#">Mondevio - </a><span>(45)</span></li>
                            <li><a href="#">Nickelodeon - </a><span>(7)</span></li>
                            <li><a href="#">Pearlyta - </a><span>(12)</span></li>
                            <li><a href="#">Sterling Essentials - </a><span>(10)</span></li>
                            <li><a href="#">Tressa - </a><span>(5)</span></li>
                        </ul>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-inner">
                        <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left">Specials</h4>
                        <div class="ct-specials ct-u-marginBoth20">
                            <img class="ct-js-zoomImage" src="assets/images/demo-content/specials-item.jpg" data-zoom-image="assets/images/demo-content/specials-item-large.jpg" alt="">
                            <div class="ct-specialsDescription">
                                <span>14K White Gold Rings, 0.33 Carat Diamond Stud</span>
                                <span class="ct-u-size22"><del>150.00</del> $129.00</span>
                                <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-inner">
                        <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left">Manufacturers</h4>
                        <ul class="ct-productCategories ct-u-paddingTop30">
                            <li><a href="#">A Jaffe</a></li>
                            <li><a href="#">A. Link</a></li>
                            <li><a href="#">Aaron Basha</a></li>
                            <li><a href="#">Add-a-Pearl</a></li>
                            <li><a href="#">Alan Friedman</a></li>
                            <li><a href="#">Alberto Bossi</a></li>
                            <li><a href="#">Alex Soldier</a></li>
                            <li><a href="#">Alwand Vahan</a></li>
                            <li><a href="#">Amadena</a></li>
                            <li><a href="#">Andrew Meyer</a></li>
                            <li><a href="#">Angela Tonali</a></li>
                            <li><a href="#">Arezzo Gold & Jewelry</a></li>
                            <li><a href="#">Armadani</a></li>
                        </ul>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-inner">
                        <div class="ct-advert text-right">
                            <img src="assets/images/demo-content/mega-sale-item.jpg" alt="Mega Sale Image">
                            <div class="ct-advert-descriptionBox">
                                <div class="ct-advert-info ct-u-paddingBottom10"><span class="ct-u-size45">40% OFF</span><br><span class="ct-u-size28"><em>Mega Sale</em></span></div>
                                <div class="ct-advert-details ct-u-paddingTop10"><a class="ct-detailsLink" href="#"><i class="fa fa-long-arrow-right fa-fw"></i>details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
