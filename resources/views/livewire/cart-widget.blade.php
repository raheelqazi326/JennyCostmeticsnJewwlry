<div class="ct-topBar-basket">
    <a href="/cart">
        <span class="ct-topBar-basket-cart">
            <i class="fa fa-fw fa-shopping-cart"></i>
            Cart:
        </span>
        <span class="ct-topBar-basket-quantity">{{ $totalItems }} item(s)</span>
        <span class="ct-topBar-basket-price"> - ${{ $totalPrice }}</span>
    </a>
    <div class="ct-topBar-basket-info">
        @foreach ($items as $item)
            <div class="ct-cartItem">
                <a href="{{ $item->id }}">
                    <div class="ct-cartItem-image pull-left">
                        <img src="{{ asset('storage/'.$item->image) }}" alt="">
                    </div>
                    <div class="ct-cartItem-title">
                        {{ $item->name }}
                    </div>
                    <div class="ct-cartItem-price">
                        ${{ $item->price }}
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>
        @endforeach
        {{-- <div class="ct-cartItem">
            <a href="single-product.html">
                <div class="ct-cartItem-image pull-left">
                    <img src="{{ asset('assets/images/demo-content/shop-cart-ring2.png') }}" alt="">
                </div>
                <div class="ct-cartItem-title">
                    Barbara Bixby Sterling 18K Gold Citrine or Pink
                </div>
                <div class="ct-cartItem-price">
                    $290.99
                </div>
                <div class="clearfix"></div>
            </a>
        </div> --}}
        <div class="clearfix"></div>
        <div class="ct-cartSubtotal">
            <div class="pull-left ct-fw-600">Subtotal</div>
            <div class="pull-right ct-fw-600">${{ $totalPrice }}
            </div> 
            <div class="clearfix"></div>
        </div>
        <div class="ct-cartGoNext text-uppercase ct-u-paddingBoth20">
            <a class="btn btn-default ct-u-width-49pc" href="/cart" role="button">View Cart <i class="fa fa-angle-double-right fa-fw"></i></a>
            <a {{ !count($items)?"disabled":"" }} class="btn btn-default pull-right ct-u-width-49pc" href="{{ url('/checkout') }}" role="button">Checkout <i class="fa fa-angle-double-right fa-fw"></i></a>
        </div>
    </div>
</div>