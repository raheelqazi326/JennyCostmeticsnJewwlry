<div class="ct-contentWrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop40">Single Product</h4> --}}
                <div class="ct-productSection ct-u-paddingBoth50">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ct-productGallery ct-js-popupGallery" data-snap-ignore="true">
                                <div id="sync1" class="owl-carousel">
                                    @foreach ($product->images as $image)
                                        @php
                                            $file = asset('storage/'.$image->image);
                                        @endphp
                                        <div class="item">
                                            <a href="{{ $file }}" class="ct-js-magnificPopupImage"><img src="{{ $file }}" alt="Product 1"></a>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="sync2" class="owl-carousel ct-u-paddingBoth20">
                                    @foreach ($product->images as $image)
                                        @php
                                            $file = asset('storage/'.$image->image);
                                        @endphp
                                        <div class="item">
                                            <img src="{{ $file }}" alt="Product 1" style="width:200px; height:100px">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="ct-socialSection ct-u-paddingTop10">
                                <span>Share this product:</span>
                                <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                    <li><a href="#" data-toggle="tooltip" title="Email to a friend."><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="https://www.facebook.com/createITpl" data-toggle="tooltip" title="Share on facebook."><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/createitpl" data-toggle="tooltip" title="Share on twitter."><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="col-md-7">
                            <div class="ct-productCustomization">
                                <h3>{{ $product->name }}</h3>
                                <div class="ct-categoryDivider">
                                    <h5>{{ $product->category->name }}</h5>
                                    {{-- <button class="btn btn-sm btn-default" wire:click="addToWishlist">Add to wishlist</button> --}}
                                </div>
                                <div class="ct-price">
                                    {{-- <span class="ct-u-size24"><del>$310.00</del></span> --}}
                                    <span class="ct-u-colorBlack ct-u-size40">${{ $product->price }}</span>
                                    {{-- <span class="ct-u-size15">(Free Delivery)</span> --}}
                                </div>
                                {{-- <div class="ct-code ct-u-paddingBoth20">
                                    <div class="pull-left ct-u-paddingRight15">
                                        <span class="ct-code-black">Code</span><span class="ct-code-grey">DR2633-750-W</span>
                                    </div>
                                    <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.createit.pl&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;amp" style="overflow:hidden;max-width:100%;height:30px" scrolling="no" frameborder="0"
                                        allowTransparency="true"></iframe>
                                    <div class="clearfix"></div>
                                </div> --}}
                                <div class="ct-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ct-u-colorGrey"></i>
                                    <i class="fa fa-star ct-u-colorGrey"></i>
                                    <div class="ct-reviews">
                                        <a href="#">2 customer reviews</a>
                                    </div>
                                </div>

                                {{-- <form action="#">
                                    <div class="ct-pincode ct-u-paddingBoth20">
                                        <div class="ct-pincodeBox">
                                            <span>Check Availability At:</span><input type="text" class="form-control" placeholder="enter your pincode">
                                        </div>
                                        <button class="btn btn-default btn-sm" type="submit">Check</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form> --}}
                                <form wire:submit.prevent="addToCart">
                                    <div class="ct-productSize">
                                        <div class="ct-u-size16 ct-u-paddingBottom10">Select Size:</div>
                                        <div class="">
                                            @foreach ($product->sizes as $size)
                                                <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="{{ $size->id }}"> <span style="width:auto; min-width:46px; padding:1px">{{ $size->value }}</span>
                                                </label>
                                            @endforeach
                                            {{-- <a href="#" class=""><i class="fa fa-fw fa-file-text-o"></i> Ring Size Guide</a> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="ct-u-size16 ct-u-paddingTop10">Select Color:</div>
                                    <select class="ct-js-colorSelector">
                                        <option value="0" data-color="#d2a48a" selected="selected">salmon</option>
                                        <option value="1" data-color="#e1c99b">yellow</option>
                                        <option value="2" data-color="#deddd9">grey</option>
                                    </select> --}}
                                    <div class="ct-productQuantity">
                                        <div class="ct-u-size16 ct-u-paddingBottom10">Select Quantity:</div>
                                        <div class="">
                                            @if ($product->stock)
                                                <select class="ct-select ct-select--small">
                                                    @for ($i = 1; $i <= $product->stock; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            @else
                                                <span class="text-danger"> Product Out of Stock</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ct-u-paddingBoth20">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-shopping-cart"> Add To Cart</i></button>
                                        {{-- <div class="ct-or text-uppercase ct-u-paddingBottom20">
                                            OR
                                        </div> --}}
                                        {{-- <a class="btn btn-default ct-u-size18 text-uppercase" href="checkout.html" role="button">Speed Buy <i class="fa fa-long-arrow-right ct-u-paddingLeft10"></i></a> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="ct-u-paddingTop20 ct-u-paddingBottom30">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Product Specification</a></li>
                        <li role="presentation"><a href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab">Delivery Date Estimate</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Customer Reviews</a></li>
                        <li role="presentation"><a href="#questions" aria-controls="questions" role="tab" data-toggle="tab">Community Q&amp;A</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <div class="adjust-text">
                                <div class="ct-u-paddingBottom30 ct-u-paddingTop10 ct-panelWidget">
                                    <a href="#" class="pull-left"><i class="fa fa-fw fa-file-text-o"></i> Ring Size Guide</a>
                                    <span class="pull-right">Adjust Text Size <a href="#" class="plus">+</a><a href="#" class="minus">-</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <p>Bands of brilliance. Pave set with simulated diamonds, this distinctive, double band bar ring makes quite the impression on your finger.<br> Sterling Silver, 18K Rose Gold-Clad Sterling Silver, or 18K Yellow Gold-Clad
                                    Sterling Silver.<br> For more details on this ring's fit, please refer to the Ring Size Guide above.
                                </p>
                                <ul class="list-unstyled ct-advantageList">
                                    <li>Sterling silver</li>
                                    <li>Total Diamonique simulated diamond weight is approximately 9/10 carat</li>
                                    <li>Pave-set, round simulated diamonds set into a polished, open, double-band bar design</li>
                                    <li>Sizes 5, 6, 7, 8, 9, 10; due to the special nature of the plating process, we don’t not recommend resizing by a jeweler</li>
                                    <li>Measures approximately 3/8"L x 3/4"W</li>
                                    <li>Imported</li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="specification">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table ct-table ct-u-marginBoth20">
                                        <thead>
                                            <tr>
                                                <th colspan="2">General</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Brand</th>
                                                <td>BlueStone</td>
                                            </tr>
                                            <tr>
                                                <th>Model Number</th>
                                                <td>1564</td>
                                            </tr>
                                            <tr>
                                                <th>Precious/Artificial Jewellery</th>
                                                <td>Precious Jewellery</td>
                                            </tr>
                                            <tr>
                                                <th>Type</th>
                                                <td>Ring</td>
                                            </tr>
                                            <tr>
                                                <th>Model Name</th>
                                                <td>The Carysa</td>
                                            </tr>
                                            <tr>
                                                <th>Occasion</th>
                                                <td>Love</td>
                                            </tr>
                                            <tr>
                                                <th>Color</th>
                                                <td>White Gold</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table ct-table ct-u-marginBoth20">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Diamond Features</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Diamond Weight</th>
                                                <td>0.032 carat</td>
                                            </tr>
                                            <tr>
                                                <th>Number of Diamonds</th>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>Diamond Shape</th>
                                                <td>Round</td>
                                            </tr>
                                            <tr>
                                                <th>Diamond Color Grade</th>
                                                <td>G</td>
                                            </tr>
                                            <tr>
                                                <th>Natural/Synthetic Diamond</th>
                                                <td>Natural Diamon</td>
                                            </tr>
                                            <tr>
                                                <th>Diamond Clarity</th>
                                                <td>SI1</td>
                                            </tr>
                                            <tr>
                                                <th>Diamond Color</th>
                                                <td>White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table ct-table ct-u-marginBoth20">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Gold Features</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Gold Purity</th>
                                                <td>14 K</td>
                                            </tr>
                                            <tr>
                                                <th>Gold Weight</th>
                                                <td>2.82</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table ct-table ct-u-marginBoth20">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Body &amp; Design Features</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Base Material</th>
                                                <td>White Gold</td>
                                            </tr>
                                            <tr>
                                                <th>Gemstone</th>
                                                <td>Diamon, Peridot</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table ct-table ct-u-marginBoth20">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Additional Features</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Certification</th>
                                                <td>GIA Certified, BIS Hallmark</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="delivery">
                            <div class="ct-u-paddingBottom30 ct-u-paddingTop10 ct-panelWidget">
                                <div class="adjust-text">
                                    <span class="pull-right">Adjust Text Size <a href="#" class="plus">+</a><a href="#" class="minus">-</a></span>
                                    <div class="clearfix"></div>
                                    <div class="ct-fw-600 ct-u-paddingBottom10">Estimate Delivery Dates for:</div>
                                    <div class="ct-u-paddingBottom10">DR2633-750-W — Certified Radiant-Cut Diamond Doubled Engagement Ring in 14K White Gold</div>
                                    <form action="#">
                                        <div class="input-group">
                                            <label for="zipcode" class="pull-left">ZIP/Postal Code:</label>
                                            <input type="text" class="form-control" id="zipcode">
                                            <button class="btn btn-default" type="button"><i class="fa fa-fw fa-long-arrow-right"></i></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            <div class="ct-reviewImageBox">
                                <img src="{{ asset('assets/images/demo-content/review-image.jpg') }}" alt="Review Image">
                            </div>
                            <div class="ct-ratings">
                                <div class="ct-ratingsLeft">
                                    <h4>Rating Snapshot</h4>
                                    <div class="ct-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star ct-u-colorGrey"></i>
                                        <i class="fa fa-star ct-u-colorGrey"></i>
                                        <div class="ct-reviews">
                                            <a href="#">2 customer reviews</a>
                                        </div>
                                    </div>
                                    <div class="ct-u-paddingTop10">Overall Rating 2.8 out of 5</div>
                                    <div class="ct-u-paddingTop15 ct-fs-i">(21 of 56 (38%) reviewers would recommend this product to a friend.)</div>
                                </div>
                                <div class="ct-ratingsRight">
                                    <ul class="list-unstyled ct-u-paddingTop15">
                                        <li><span>5 stars</span><span><span data-width="60"></span></span><span>12</span></li>
                                        <li><span>4 stars</span><span><span data-width="20"></span></span><span>7</span></li>
                                        <li><span>3 stars</span><span><span data-width="50"></span></span><span>7</span></li>
                                        <li><span>2 stars</span><span><span data-width="80"></span></span><span>17</span></li>
                                        <li><span>1 star</span><span><span data-width="45"></span></span><span>13</span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="ct-range ct-u-paddingTop25">
                                    <div>Sizing Snapshot</div>
                                    <div>Fit Snug</div>
                                    <div class="ct-rangeSlider">
                                        <div class="ct-js-noUiSliderDisabled ct-noUiSlider"></div>
                                    </div>
                                    <div>Runs Large</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h4 class="ct-fw-600 ct-u-paddingBottom30 ct-u-marginBottom0 ct-u-paddingTop30">2 Reviews</h4>

                            <div class="ct-feedback ct-u-paddingTop30">
                                <span class="pull-left">Very Beautiful Ring!!</span><span></span>
                                <span class="pull-right"><i class="fa fa-pencil fa-fw"></i>  Posted by: <a href="#" class="author">Karen1234</a></span>
                                <div class="clearfix"></div>
                                <div class="ct-stars ct-u-paddingBoth10">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="ct-feedbackDescription ct-u-paddingBottom20">
                                    This ring looks really elegant and dainty!! Love it!! This is really a pretty ring. get all kinds of compliments, I normally wear an 8 on my ring finger, so I orderd the size 10 for my pointer finger. perfect fit. I bought the clad & it is awesome.
                                </div>
                                <div class="ct-recommendation ct-u-paddingBoth20">
                                    <span class="ct-fw-600">Would you recommend this product as a gift?</span><br>
                                    <span>Yes</span><br>
                                    <span class="ct-fw-600">Who would this be a perfect gift for?</span><br>
                                    <span>Families</span><br>
                                    <div class="ct-recommendationReport ct-u-paddingBoth25">Was this review helpful to you? <a href="#">Yes</a><a href="#">No</a><span><i class="fa fa-fw fa-long-arrow-right"></i> <a href="#"> Report Inappropriate Review</a></span></div>
                                    <div>
                                        <span>Share this review:</span>
                                        <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                            <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                                            <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-feedback ct-u-paddingTop30">
                                <span class="pull-left">Cute but not confortable</span><span></span>
                                <span class="pull-right"><i class="fa fa-pencil fa-fw"></i>  Posted by: <a href="#" class="author">Jessie Macdonalds</a></span>
                                <div class="clearfix"></div>
                                <div class="ct-stars ct-u-paddingBoth10">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star ct-u-colorGrey"></i>
                                    <i class="fa fa-star ct-u-colorGrey"></i>
                                    <i class="fa fa-star ct-u-colorGrey"></i>
                                </div>
                                <div class="ct-feedbackDescription ct-u-paddingBottom20">
                                    I wore this ring twice and one of the stones already popped out! It is a cute ring but not very comfortable. I wore it on my left hand ring finger and it is scratchy. I purchaed the ring in both silver and gold. I don't want to return it but I might have
                                    to.
                                </div>
                                <div class="ct-recommendation ct-u-paddingBoth20">
                                    <div class="ct-u-paddingBottom20 ct-u-marginBottom20 ct-u-borderBottomDarkGrey"><span class="ct-fw-600">Sizing Feedback:</span> <span class="ct-fs-i">It’s much smaller than expected..</span></div>
                                    <span class="ct-fw-600">Would you recommend this product as a gift?</span><br>
                                    <span>No</span><br>
                                    <span class="ct-fw-600">Who would this be a perfect gift for?</span><br>
                                    <span>Me!</span><br>
                                    <div class="ct-recommendationReport ct-u-paddingBoth25">Was this review helpful to you? <a href="#">Yes</a><a href="#">No</a><span><i class="fa fa-fw fa-long-arrow-right"></i> <a href="#"> Report Inappropriate Review</a></span></div>
                                    <div>
                                        <span>Share this review:</span>
                                        <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                            <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                                            <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-feedback ct-u-paddingTop25">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4 class="ct-fw-600 ct-u-paddingBottom20 ct-u-marginBottom0">Help others! Write a review</h4>
                                        <div class="ct-u-size16">All fields are mandatory.</div>
                                        <form class="form-horizontal ct-u-paddingTop30">
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Review Title:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="title" required>
                                                    <span>(Maximum 20 words)</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="review" class="col-sm-3 control-label">Your Review:</label>
                                                <div class="col-sm-9">
                                                    <textarea id="review" class="form-control" rows="6"></textarea>
                                                    <span>Please do not include: HTML, references to other retailers, pricing, personal informations, any profane, inflammatory or copyrighted comments, or any copied content.</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label">Your Rating:</label>
                                                <div class="col-sm-9">
                                                    <div class="lead">
                                                        <div id="stars-existing" class="starrr" data-rating='4'></div>
                                                    </div>
                                                    <span>(Click to rate on scale of 1-5)</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label">Name:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="name" required>
                                                    <span>(First and last name)</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="ct-range ct-u-paddingTop25" data-snap-ignore="true">
                                                        <div>Sizing Snapshot</div>
                                                        <div>Fit Snug</div>
                                                        <div class="ct-rangeSlider">
                                                            <div class="ct-js-noUiSlider ct-noUiSlider"></div>
                                                        </div>
                                                        <div>Runs Large</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ct-u-paddingTop30">
                                                <button type="submit" class="btn btn-default">
                                                    Submit   <i class="fa fa-long-arrow-right fa-fw"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="widget">
                                            <div class="widget-inner">
                                                <div class="ct-widgetReview">
                                                    <h3>What makes a good review</h3>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <div><i class="fa fa-fw fa-long-arrow-right"></i> Have you used this product?</div>
                                                            <p>It's always better to review a product you have personally experienced.</p>
                                                        </li>
                                                        <li>
                                                            <div><i class="fa fa-fw fa-long-arrow-right"></i> Educate your readers</div>
                                                            <p>Provide a relevant, unbiased overview of the product. Readers are interested in the pros and the cons of the product.</p>
                                                        </li>
                                                        <li>
                                                            <div><i class="fa fa-fw fa-long-arrow-right"></i> Be yourself, be informative</div>
                                                            <p>Let your personality shine through, but it's equally important to provide facts to back up your opinion.</p>
                                                        </li>
                                                        <li>
                                                            <div><i class="fa fa-fw fa-long-arrow-right"></i> Stay concise</div>
                                                            <p>Be creative but also remember to stay on topic. A catchy title gets attention!</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane tab-pane-inner" id="questions">
                            <div role="tabpanel">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs pull-left ct-u-marginBottom20" role="tablist">
                                    <li role="presentation" class="active"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Featured Q&amp;A</a></li>
                                    <li role="presentation"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">View All Q&amp;A</a></li>
                                </ul>
                                <div class="ct-dividedTabSearch pull-right">
                                    <form role="form" action="#">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Search All Questions For This Product">
                                            <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-fw fa-long-arrow-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="featured">
                                        <h5>Questions With Most Answers</h5>
                                        <div class="panel-group ct-u-marginBottom40" id="accordion2" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> What country was it made in?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 1 answer</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseOne">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <span>Asked 2 months ago</span>
                                                                <p class="text-justify">If so, please let me know if it fit. I called to request an additional link and they said no. Many years ago I ended up buying 2 of the watch I wanted so I could add links but I won't
                                                                    do that again. I am shocked they didn't make this in an 8" or a little bigger since the large in other watches and bracelets always sell out. Thanks to anybody that can help!</p>
                                                            </div>
                                                            <div class="ct-questionImage">
                                                                <a href="#">
                                                                    <img src="{{ asset('assets/images/demo-content/user-rounded-image.jpg') }}" class="img-rounded" alt="User Rounded Image">
                                                                    <span>Dana Kevis</span>
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="ct-u-paddingTop20 ct-bottomBox">
                                                                <button class="btn btn-default">Answer this question</button>
                                                                <div>
                                                                    <a href="#"><i class="fa fa-fw fa-flag"></i> (Report as Inappropriate)</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Is the goldtone more 14K or 18K looking?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 1 answer</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <span>Asked 2 months ago</span>
                                                                <p class="text-justify">If so, please let me know if it fit. I called to request an additional link and they said no. Many years ago I ended up buying 2 of the watch I wanted so I could add links but I won't
                                                                    do that again. I am shocked they didn't make this in an 8" or a little bigger since the large in other watches and bracelets always sell out. Thanks to anybody that can help!</p>
                                                            </div>
                                                            <div class="ct-questionImage">
                                                                <a href="#">
                                                                    <img src="{{ asset('assets/images/demo-content/user-rounded-image.jpg') }}" class="img-rounded" alt="User Rounded Image">
                                                                    <span>Dana Kevis</span>
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="ct-u-paddingTop20 ct-bottomBox">
                                                                <button class="btn btn-default">Answer this question</button>
                                                                <div>
                                                                    <a href="#"><i class="fa fa-fw fa-flag"></i> (Report as Inappropriate)</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Fit a 6" wrist? What is band made of?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 1 answer</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <span>Asked 2 months ago</span>
                                                                <p class="text-justify">If so, please let me know if it fit. I called to request an additional link and they said no. Many years ago I ended up buying 2 of the watch I wanted so I could add links but I won't
                                                                    do that again. I am shocked they didn't make this in an 8" or a little bigger since the large in other watches and bracelets always sell out. Thanks to anybody that can help!</p>
                                                            </div>
                                                            <div class="ct-questionImage">
                                                                <a href="#">
                                                                    <img src="{{ asset('assets/images/demo-content/user-rounded-image.jpg') }}" class="img-rounded" alt="User Rounded Image">
                                                                    <span>Dana Kevis</span>
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="ct-u-paddingTop20 ct-bottomBox">
                                                                <button class="btn btn-default">Answer this question</button>
                                                                <div>
                                                                    <a href="#"><i class="fa fa-fw fa-flag"></i> (Report as Inappropriate)</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5>Can you answer these questions?</h5>
                                        <div class="panel-group ct-u-marginBottom40" id="accordion3" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Where is the watch made?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFive">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Imported from where?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingSix">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> About this watch</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-default btn-md" type="submit">Ask a Question</button>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="all">
                                        <div class="panel-group ct-u-marginBottom10" id="accordion4" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingSeven">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Where is the watch made?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingEight">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Has anybody ordered this that would normally order an 8"?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingNine">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> About this watch</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTen">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Can additional links be purchased for this band?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingEleven">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                            <span class="pull-left"><i class="fa fa-fw fa-long-arrow-right"></i> Has anybody ordered this that would normally order an 8"?</span>
                                                            <span class="pull-right"><i class="fa fa-fw fa-comment"></i> 0 answers</span>
                                                            <span class="clearfix"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                                    <div class="panel-body">
                                                        <div class="ct-question">
                                                            <div class="ct-questionDescription">
                                                                <p class="text-justify">There are no answers for this question yet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ct-pagination text-right ct-u-paddingBottom20 ct-u-bgcolor-transparent">
                                            <div class="ct-pages">
                                                <span>Page:</span>
                                                <ul class="ct-numerPages list-unstyled list-inline">
                                                    <li><a class="active" href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                </ul>
                                                <a class="ct-rightArrow" href="#"><i class="fa fa-long-arrow-right fa-fw"></i></a>
                                            </div>
                                        </div>
                                        <button class="btn btn-default btn-md" type="submit">Ask a Question</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop40">Product Videos:</h4>
                <div role="tabpanel" class="ct-u-paddingTop20 ct-u-paddingBottom30">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Product Videos</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="videos">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="ct-videoBox">
                                        <iframe src="http://player.vimeo.com/video/9211288" width="100%" height="372" frameborder="0" allowfullscreen></iframe>
                                        <p class="ct-videoBox-description ct-u-paddingTop20">Sed quis elit ut enim auctor euismod ut at sem. Mauris tristique turpis nisi, egetuiui aliquet diam cursus gravida. Fusce sapien quam, varius eu metus non. Fusce sapien quam, varius eu metus non.</p>
                                    </div>
                                    <div class="ct-videoBox">
                                        <iframe src="http://player.vimeo.com/video/45071079" width="100%" height="372" frameborder="0" allowfullscreen></iframe>
                                        <p class="ct-videoBox-description ct-u-paddingTop20 ct-u-paddingTop20">Fusce sapien quam, varius eu metus non. Mauris tristique turpis nisi, egetuiui aliquet diam cursus gravida. Mauris tristique turpis nisi, egetuiui aliquet diam cursus gravida.</p>
                                    </div>
                                    <div class="ct-videoBox">
                                        <iframe src="http://player.vimeo.com/video/55442188" width="100%" height="372" frameborder="0" allowfullscreen></iframe>
                                        <p class="ct-videoBox-description ct-u-paddingTop20">Mauris tristique turpis nisi, egetuiui aliquet diam cursus gravida. Mauris tristique turpis nisi, egetuiui aliquet diam cursus gravida. Fusce sapien quam, varius eu metus non.</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="ct-videoProduct is-active">
                                        <img src="{{ asset('assets/images/demo-content/video-image-1-small.jpg') }}" alt="Video 1">
                                        <div class="ct-videoProduct-description">
                                            Certified Radiant-Cut Diamond Double Frame Engagement Ring in 18K White Gold
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ct-videoProduct">
                                        <img src="{{ asset('assets/images/demo-content/video-image-2-small.jpg') }}" alt="Video 2">
                                        <div class="ct-videoProduct-description">
                                            Diamond Split Shank Frame Engagement Ring in 10K White Gold
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ct-videoProduct">
                                        <img src="{{ asset('assets/images/demo-content/video-image-3-small.jpg') }}" alt="Video 3">
                                        <div class="ct-videoProduct-description">
                                            Butterfly-Cut Diamond with Square Frame Engagement Ring in 10K White Gold
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        @if(count($category_products))
            <h4 class="ct-headerBox text-left ct-u-borderBottom3 ct-u-paddingBottom15 ct-u-paddingTop55">Related Products</h4>
            <div class="ct-u-paddingBottom50 ct-u-paddingTop35">
                <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTopRight" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                    @foreach ($category_products as $product)
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">{{ $product->category->name }}</span>
                                    <div class="clearfix"></div>
                                    @php
                                        $file = asset('storage/'.$product->images[0]->image)
                                    @endphp
                                    <img class="ct-js-zoomImage" src="{{ $file }}" data-zoom-image="{{ $file }}" alt="{{ $product->name }}">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="{{ route('product', ['id' => $product->id]) }}">
                                            <h3>{{ $product->name }}</h3>
                                            <span>
                                                {{-- <del>450.99</del> --}}
                                                ${{ $product->price }}
                                            </span>
                                        </a>
                                        <span class="ct-productShop-shopCart" style="width:100%">
                                            {{-- <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a> --}}
                                            <a class="btn btn-default btn-hidden" style="margin-left: 31%" href="{{ route('product', ['id' => $product->id]) }}" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@push('scripts')

    <script src="{{ asset('assets/js/color-selector/colorselector.js') }}"></script>
    <script src="{{ asset('assets/js/color-selector/init.js') }}"></script>

    <script src="{{ asset('assets/js/nouislider/jquery.nouislider.all.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider/init.js') }}"></script>

    <script src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/js/stars-rating/rating.js') }}"></script>

@endpush