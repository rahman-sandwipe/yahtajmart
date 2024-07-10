<div class="cart-dropdown-wrap cart-dropdown-hm2">
    <ul>
        @auth
        @foreach ($cart_Pop as $cartItem)
        <li>
            <div class="shopping-cart-img">
                <a href="{{ route('product_details',$cartItem->products->slug) }}">
                    <img alt="{{ $config->web_name }}" src="{{ asset($cartItem->products->thumb) }}" />
                </a>
            </div>
            <div class="shopping-cart-title">
                <h4><a href="{{ route('product_details',$cartItem->products->slug) }}">{{ $cartItem->products->title }}</a></h4>
                <h4><span>1 × </span>{{ $cartItem->products->offer_price }} BDT</h4>
            </div>
            <div class="shopping-cart-delete">
                <a href="#"><i class="fi-rs-cross-small"></i></a>
            </div>
        </li>
        @endforeach
        @endauth
    </ul>
    <div class="shopping-cart-footer">
        @guest
            <p class="text-danger text-center">Product no found</p>
        @endguest
        @auth
        <div class="shopping-cart-total">
            @php $mtotal = 0 @endphp          
            @foreach ($cart_Items as $cItem)
            @php $mtotal += $cItem->products['offer_price'] * $cItem['quantity'] @endphp
            @endforeach        
            
            <h4>Total <span>BDT {{ $mtotal }}</span></h4>
        </div>
        <div class="shopping-cart-button">
            <a class="outline" href="{{ route('shipping.cart') }}">View cart</a>
            <a href="{{ route('shipping.checkout') }}">Checkout</a>
        </div>
        @endauth 
    </div>
</div>