<div class="container">
    <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Checkout</h4>
    <div class="row">
        <form class="ct-u-paddingTop10" wire:submit.prevent="save">
            <div class="col-md-8">
                <div class="ct-u-size16 ct-fw-600 ct-u-paddingBottom20 ct-u-paddingTop30">Billing Details</div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="fullname" class="control-label">Full Name*</label>
                            <input type="text" class="form-control" id="fullname" wire:model.lazy="fullname">
                            @error('fullname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="email" class="control-label">Email Address*</label>
                            <input type="text" class="form-control" id="email" wire:model.lazy="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label for="phone" class="control-label change-label">Phone*</label>
                            <input type="number" class="form-control" id="phone" wire:model.lazy="phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country2" class="control-label">Country*</label>
                    <input type="text" class="form-control" id="country2" wire:model.lazy="country">
                    @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="streetaddress" class="control-label">Your Address*</label>
                    <input type="text" class="form-control" id="streetaddress" placeholder="Street Address" wire:model.lazy="line1">
                    @error('line1')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="ct-u-paddingTop10">
                        <input type="text" class="form-control" placeholder="Apartment, Unit, Suite, etc." wire:model.lazy="line2">
                        @error('line2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="control-label">Town/City*</label>
                    <input type="text" class="form-control" id="city" wire:model.lazy="city">
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="region" class="control-label">State*</label>
                            <input type="text" class="form-control" id="region" wire:model.lazy="state">
                            @error('state')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label for="postcode2" class="control-label change-label">Postcode/Zip*</label>
                            <input type="text" class="form-control" id="postcode2" wire:model.lazy="zipcode">
                            @error('zipcode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ct-cartRightSection ct-cartRightSection--bordered ct-u-marginTop30">
                    <div class="ct-u-paddingBottom30">
                        <div class="ct-u-size16 ct-fw-600 pull-left">Order Summary</div>
                        <div class="ct-u-size14 pull-right"><a href="{{ route('cart') }}" class="ct-u-editCart">Edit Cart</a></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ct-cartRightSection-currentCart">
                        @foreach ($items as $item)
                            <div class="ct-u-paddingTop10">
                                <img class="pull-left" src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->name }}">
                                <div class="ct-u-size14 ct-u-paddingTop10"><a href="{{ route('product', ['id'=>$item->id]) }}">{{ $item->name }}</a></div>
                                <div class="ct-u-size16 ct-u-paddingTop20"><span class="ct-fw-600">${{ $item->price }}</span> <span class="ct-u-size14">x</span> {{ $item->qty }}</div>
                                <div class="clearfix"></div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                    <div class="ct-u-size15">
                        <div class="ct-u-paddingBottom30 ct-u-paddingTop30">
                            <span class="pull-left">Cart Subtotal</span>
                            <span class="pull-right">${{ $totalPrice }}</span>
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
                            <span class="pull-right ct-u-size20">${{ $totalPrice }}</span>
                            <div class="clearfix"></div>
                        </div>
                        <hr>
                    </div>
                    {{-- <div class="ct-u-size16 ct-fw-600 ct-u-paddingTop40 ct-u-paddingBottom10">Paymant Method</div>
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
                    </div> --}}
                    <div class="ct-finishOrder ct-u-paddingTop30">
                        <button type="submit" class="btn btn-default">Place Order <i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


