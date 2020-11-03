<div class="ct-contentWrapper">
    <div class="container">
        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">My Cart</h4>
        <form action="#">
            <table class="ct-wishList ct-js-wishList ct-js-cartShop ct-u-marginBoth30">
                <thead>
                    <tr>
                        <th class="ct-wishList-image"></th>
                        <th class="ct-wishList-description">Product name</th>
                        <th class="ct-wishList-price">Unit Price</th>
                        <th class="ct-wishList-quantity">Quantity</th>
                        <th class="ct-wishList-total">Total</th>
                        <th class="ct-wishList-button"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ct-wishList-image"><img src="assets/images/demo-content/wishlist-item2.jpg" alt="Wishlist Product 1"></td>
                        <td class="ct-wishList-description"><a class="ct-wishList-itemLink" href="single-product.html">I Am Loved® Diamond Shaped Pendant in Sterling Silver & 14K Gold</a></td>
                        <td class="ct-wishList-price">$239.00</td>
                        <td class="ct-wishList-quantity"> <input class="spinner" value="1"></td>
                        <td class="ct-wishList-total">$239.00</td>
                        <td class="ct-wishList-button"><a class="btn btn-default btn-md ct-js-buttonX" href="#">X</a></td>
                    </tr>
                    <tr>
                        <td class="ct-wishList-image"><img src="assets/images/demo-content/wishlist-item1.jpg" alt="Wishlist Product 2"></td>
                        <td class="ct-wishList-description"><a class="ct-wishList-itemLink" href="single-product.html">1/2 ct. tw. Champagne, Colored With Diamond Twist Earrings in Sterling Silver</a></td>
                        <td class="ct-wishList-price">$435.99</td>
                        <td class="ct-wishList-quantity"> <input class="spinner" value="1"></td>
                        <td class="ct-wishList-total">$435.99</td>
                        <td class="ct-wishList-button"><a class="btn btn-default btn-md ct-js-buttonX" href="#">X</a></td>
                    </tr>
                    <tr>
                        <td class="ct-wishList-image"><img src="assets/images/demo-content/wishlist-item3.jpg" alt="Wishlist Product 3"></td>
                        <td class="ct-wishList-description"><a class="ct-wishList-itemLink" href="single-product.html">Triton Men's Striped Band in Titanium & Sterling Silver, 7MM</a></td>
                        <td class="ct-wishList-price">$190.00</td>
                        <td class="ct-wishList-quantity"> <input class="spinner" value="1"></td>
                        <td class="ct-wishList-total">$190.00</td>
                        <td class="ct-wishList-button"><a class="btn btn-default btn-md ct-js-buttonX" href="#">X</a></td>
                    </tr>
                </tbody>
            </table>
            <!-- this div will appear if we will close each element in this table or there won't be any element here in the beggining. This is generating by JS in main.js-->
            <div class="ct-wishList-noProducts ct-u-size15 ct-u-paddingBottom30">No products were added to your cart.</div>
            <div class="ct-shopSections">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="ct-cartLeftSection">
                            <input type="text" class="form-control ct-stickedInput" placeholder="Coupon Code"><button class="btn btn-default">Apply <i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="ct-cartRightSection">
                            <div class="ct-u-paddingBottom40 ct-cartRightSection-buttons">
                                <button class="btn btn-default btn-md pull-left">Continue Shopping <i class="fa fa-long-arrow-right fa-fw"></i></button>
                                <button class="btn btn-default btn-md pull-right">To Checkout <i class="fa fa-long-arrow-right fa-fw"></i></button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ct-u-size15">
                                <div class="ct-u-paddingBottom20">
                                    <span class="pull-left">Cart Subtotal</span>
                                    <span class="pull-right">$864.99</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ct-u-paddingBottom30">
                                    <span class="pull-left">Shipping Service</span>
                                    <span class="pull-right">Free Shipping</span>
                                    <div class="clearfix"></div>
                                </div>
                                <hr class="ct-u-paddingBottom30">
                                <div class="ct-u-paddingBottom30">
                                    <span class="pull-left">Order Total</span>
                                    <span class="pull-right ct-u-size20">$864.99</span>
                                    <div class="clearfix"></div>
                                </div>
                                <hr class="ct-u-paddingBottom30">
                                <div class="ct-u-paddingBottom30">
                                    <div id="ct-js-calculateShipping" class="ct-calculateShipping">
                                        <span class="pull-left">Calculate Shipping</span>
                                <span class="pull-right">
                                    <span class="ct-triangleDown ct-js-changeTriangle"></span>
                                </span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ct-calculateShippingSection">
                                    <div class="ct-u-paddingBottom20">
                                        <label for="country" class="control-label change-label ct-u-size15">Country*</label>
                                        <select class="ct-select ct-select--full" id="country">
                                            <option value="ARG">Argentina</option>
                                            <option value="BR">Brasil</option>
                                            <option value="CHI">China</option>
                                            <option value="ENG">England</option>
                                            <option value="FR">France</option>
                                            <option value="GER">Germany</option>
                                            <option value="SP">Spain</option>
                                            <option value="POL">Poland</option>
                                            <option value="POR">Portgual</option>
                                            <option value="USA">United States</option>
                                        </select>
                                    </div>
                                    <div class="ct-u-paddingBottom20">
                                        <label for="state" class="control-label change-label">State*</label>
                                        <select class="ct-select ct-select--full" id="state">
                                            <option value="AB">Alabama</option>
                                            <option value="AR">Arizona</option>
                                            <option value="CF">California</option>
                                            <option value="FD">Florida</option>
                                            <option value="ID">Indiana</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NY">New York</option>
                                            <option value="OH">Ohio</option>
                                            <option value="TX">Texas</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="ct-u-paddingBottom20">
                                        <label for="postcode" class="control-label change-label">Postcode/Zip*</label>
                                        <input type="text" class="form-control" id="postcode" required>
                                    </div>
                                    <div class="ct-u-paddingBottom20">
                                        <button class="btn btn-default btn-md">Update Tools <i class="fa fa-long-arrow-right fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

