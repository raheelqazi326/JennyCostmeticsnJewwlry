<div class="ct-contentWrapper">
    <div class="container">
        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Checkout</h4>
        <div class="row">
            <div class="col-md-8">
                <div class="ct-u-size16 ct-fw-600 ct-u-paddingBottom20 ct-u-paddingTop30">Billing Details</div>
                <form class="ct-u-paddingTop10" action="#">
                    <div class="form-group">
                        <label for="country2" class="control-label">Country*</label>
                        <select class="ct-select ct-select--full" id="country2">
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
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstname" class="control-label">First Name*</label>
                                <input type="text" class="form-control" id="firstname" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname" class="control-label change-label">Last Name*</label>
                                <input type="text" class="form-control" id="lastname" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company" class="control-label">Company Name*</label>
                        <input type="text" class="form-control" id="company" required>
                    </div>
                    <div class="form-group">
                        <label for="streetaddress" class="control-label">Your Address*</label>
                        <input type="text" class="form-control" id="streetaddress" placeholder="Street Address" required>
                        <div class="ct-u-paddingTop10">
                            <input type="text" class="form-control" placeholder="Apartment, Unit, Suite, etc." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="control-label">Town/City*</label>
                        <input type="text" class="form-control" id="city" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="region" class="control-label">State*</label>
                                <select class="ct-select ct-select--full" id="region">
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
                            <div class="col-sm-6">
                                <label for="postcode2" class="control-label change-label">Postcode/Zip*</label>
                                <input type="text" class="form-control" id="postcode2" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="email" class="control-label">Email Address*</label>
                                <select class="ct-select ct-select--full" id="email">
                                    <option value="firstemail">example@yahoo.com</option>
                                    <option value="secondemail">second.example@yahoo.com</option>
                                    <option value="thirdemail">third.example@yahoo.com</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="control-label change-label">Phone*</label>
                                <input type="text" class="form-control" id="phone" required>
                            </div>
                        </div>
                    </div>

                    <div class="ct-u-size16 ct-fw-600 ct-u-paddingTop40 ct-u-paddingBottom30">Shipping Address</div>
                    <div class="form-group ct-u-paddingBottom10">
                        <div class="checkbox ct-js-differentAddress">
                            <input type="checkbox" id="differentAddress">
                            <label for="differentAddress">
                                <span class="ct-u-size16">Ship To A Different Address?</span>
                            </label>
                        </div>
                    </div>

                    <div class="ct-differentShippingAddress is-notActive">
                        <div class="form-group">
                            <label for="difcountry" class="control-label">Country*</label>
                            <select class="ct-select ct-select--full" id="difcountry">
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
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="diffirstname" class="control-label">First Name*</label>
                                    <input type="text" class="form-control" id="diffirstname" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="diflastname" class="control-label change-label">Last Name*</label>
                                    <input type="text" class="form-control" id="diflastname" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="difcompany" class="control-label">Company Name*</label>
                            <input type="text" class="form-control" id="difcompany" required>
                        </div>
                        <div class="form-group">
                            <label for="difstreetaddress" class="control-label">Your Address*</label>
                            <input type="text" class="form-control" id="difstreetaddress" placeholder="Street Address" required>
                            <div class="ct-u-paddingTop10">
                                <input type="text" class="form-control" placeholder="Apartment, Unit, Suite, etc." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="difcity" class="control-label">Town/City*</label>
                            <input type="text" class="form-control" id="difcity" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="difregion" class="control-label">State*</label>
                                    <select class="ct-select ct-select--full" id="difregion">
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
                                <div class="col-sm-6">
                                    <label for="difpostcode" class="control-label change-label">Postcode/Zip*</label>
                                    <input type="text" class="form-control" id="difpostcode" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="difemail" class="control-label">Email Address*</label>
                                    <select class="ct-select ct-select--full" id="difemail">
                                        <option value="firstemail">example@yahoo.com</option>
                                        <option value="secondemail">second.example@yahoo.com</option>
                                        <option value="thirdemail">third.example@yahoo.com</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="difphone" class="control-label change-label">Phone*</label>
                                    <input type="text" class="form-control" id="difphone" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="notes" class="control-label">Town/City*</label>
                            <textarea id="notes" class="form-control" rows="4" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="ct-cartRightSection ct-cartRightSection--bordered ct-u-marginTop30">
                    <div class="ct-u-paddingBottom30">
                        <div class="ct-u-size16 ct-fw-600 pull-left">Order Summary</div>
                        <div class="ct-u-size14 pull-right"><a href="my-cart.html" class="ct-u-editCart">Edit Cart</a></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ct-cartRightSection-currentCart">
                        <div class="ct-u-paddingTop10">
                            <img class="pull-left" src="assets/images/demo-content/wishlist-item2.jpg" alt="Wishlist Product 1">
                            <div class="ct-u-size14 ct-u-paddingTop10"><a href="single-product.html">Diamond Shaped Pendant</a></div>
                            <div class="ct-u-size16 ct-u-paddingTop20"><span class="ct-fw-600">$239.00</span> <span class="ct-u-size14">x</span> 1</div>
                            <div class="clearfix"></div>
                        </div>
                        <hr>
                        <div class="ct-u-paddingTop10">
                            <img class="pull-left" src="assets/images/demo-content/wishlist-item1.jpg" alt="Wishlist Product 1">
                            <div class="ct-u-size14 ct-u-paddingTop10"><a href="single-product.html">Diamond Twist Earrings</a></div>
                            <div class="ct-u-size16 ct-u-paddingTop20"><span class="ct-fw-600">$435.99</span> <span class="ct-u-size14">x</span> 1</div>
                            <div class="clearfix"></div>
                        </div>
                        <hr>
                        <div class="ct-u-paddingTop10">
                            <img class="pull-left" src="assets/images/demo-content/wishlist-item3.jpg" alt="Wishlist Product 1">
                            <div class="ct-u-size14 ct-u-paddingTop10"><a href="single-product.html">Striped Band</a></div>
                            <div class="ct-u-size16 ct-u-paddingTop20"><span class="ct-fw-600">$190.00</span> <span class="ct-u-size14">x</span> 1</div>
                            <div class="clearfix"></div>
                        </div>
                        <hr>
                    </div>
                    <div class="ct-u-size15">
                        <div class="ct-u-paddingBottom30 ct-u-paddingTop30">
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
                        <hr>
                    </div>
                    <div class="ct-u-size16 ct-fw-600 ct-u-paddingTop40 ct-u-paddingBottom10">Paymant Method</div>
                    <div class="ct-u-paddingTop20">
                        <div class="radio">
                            <input type="radio" id="directBank" name="paymant">
                            <label for="directBank">
                                <span class="ct-u-size15 ct-fw-600">Direct Bank Transfer</span>
                            </label>
                            <div class="ct-u-size15 ct-u-paddingLeft34 ct-u-paddingBoth20 text-justify">
                                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                            </div>
                        </div>
                        <hr>
                        <div class="radio ct-u-paddingTop20">
                            <input type="radio" id="cheque" name="paymant">
                            <label for="cheque">
                                <span class="ct-u-size15 ct-fw-600">Cheque Payment</span>
                            </label>
                            <div class="ct-u-size15 ct-u-paddingLeft34 ct-u-paddingBoth20 text-justify">
                                Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                            </div>
                        </div>
                        <hr>
                        <div class="radio ct-u-paddingTop20">
                            <input type="radio" id="paypal" name="paymant">
                            <label for="paypal">
                                <span class="ct-u-size15 ct-fw-600">Paypal <img src="assets/images/demo-content/paypal.jpg" alt="Paypal"></span>
                            </label>
                            <div class="ct-u-size15 ct-u-paddingLeft34 ct-u-paddingBoth20 text-justify">
                                Pay via PayPal: you can pay with your credit card if you don’t have a PayPal account.
                            </div>
                        </div>
                    </div>
                    <div class="ct-finishOrder ct-u-paddingTop30">
                        <button type="submit" class="btn btn-default">Place Order <i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


