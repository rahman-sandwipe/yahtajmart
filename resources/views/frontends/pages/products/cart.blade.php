<?php
    $cart_Items=App\Models\Frontends\ShoppingCart::with('products')->where(['user_id'=>auth()->user()->id])->latest()->get();
?>
@extends('frontends.master')
@section('page_title')
   <title>Cart - Multipurpose eCommerce Flatform</title>
@endsection
@section('front_layouts')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('user.dashboard') }}" rel='nofollow'>
                <i class="fi-rs-home mr-5"></i>
            </a>
            <span></span> Shop
            <span></span> Cart
        </div>
    </div>
</div>
<div class="container mb-80 mt-50">
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h1 class="heading-2 mb-10">Your Cart</h1>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are <span class="text-brand">3</span> products in your cart</h6>
                <h6 class="text-body"><a href="#" class="text-muted"><i class="fi-rs-trash mr-5"></i>Clear Cart</a></h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive shopping-summery">
                <table class="table table-wishlist">
                    <thead>
                        <tr class="main-heading">
                            <th class="custome-checkbox start pl-30">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                <label class="form-check-label" for="exampleCheckbox11"></label>
                            </th>
                            <th scope="col" colspan="2">Product</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0 @endphp
                        @php $subtotal = 0 @endphp
                        {{-- @if(count($itemDetails)>0) --}}
                            @foreach($cart_Items as $itemDetails)
                                @php $total += $itemDetails->products['offer_price'] * $itemDetails['quantity'] @endphp
                                <tr class="pt-30">
                                    <td class="custome-checkbox pl-30">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"></label>
                                    </td>
                                    <td class="image product-thumbnail pt-40">
                                        <img src="{{ asset($itemDetails->products->thumb) }}" width="100" alt="#">
                                    </td>
                                    <td data-th="Product" class="product-des product-name">
                                        <h6 class="mb-5">
                                            <a class='product-name mb-10 text-heading' href="">{{ $itemDetails->products->title }}</a>
                                            <button class="btn btn-danger btn-sm cart_remove"><i class="fi-rs-trash"></i> Delete</button>
                                        </h6>
                                    </td>
                                    <td class="price" data-th="Price">
                                        <h4 class="text-body">BDT {{ $itemDetails->products->offer_price }}</h4>
                                    </td>
                                    <td class="text-center detail-info" data-th="Stock">
                                        <div class="detail-extralink mr-15">
                                            <div class="detail-qty border radius">
                                                <a href="{{ route('decrementQty', $itemDetails->id ) }}" onclick="event.preventDefault(); document.getElementById('decrementQty-form').submit();" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <form id="decrementQty-form" action="{{ route('decrementQty',$itemDetails->id) }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                
                                                <input type="text" name="quantity" class="qty-val" value="{{ $itemDetails->quantity }}" min="1" max="5">
                                                
                                                <a href="{{ route('incrementQty', $itemDetails->id ) }}" onclick="event.preventDefault(); document.getElementById('incrementQty-form').submit();" class="qty-up">
                                                    <i class="fi-rs-angle-small-up"></i>
                                                </a>
                                                <form id="incrementQty-form" action="{{ route('incrementQty',$itemDetails->id) }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-th="Price">
                                        <h4 class="text-brand">BDT {{ $itemDetails->products->offer_price * $itemDetails->quantity }} </h4>
                                    </td>
                                </tr>
                            @endforeach
                        {{-- @else
                         <h4 class="text-danger text-center">Product Not found!</h4>
                        @endif --}}
                    </tbody>
                </table>
            </div>
            <div class="divider-2 mb-30"></div>
            <div class="cart-action d-flex justify-content-between">
                <a href="{{ route('home') }}" class="btn">
                    <i class="fi-rs-arrow-left mr-10"></i>
                    <span>Continue Shopping</span>
                </a>
                <a class="btn  mr-10 mb-sm-15">
                    <i class="fi-rs-refresh mr-10"></i>
                    <span>Update Cart</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="border p-md-4 cart-totals ml-30">
                <div class="table-responsive">
                    {{-- <div class="p-40">
                        <h4 class="mb-10">Apply Coupon</h4>
                        <p class="mb-30"><span class="font-lg text-muted">Using A Promo Code?</p>
                        <form action="#">
                            <input class="coupon mb-15" name="coupon" placeholder="Enter Your Coupon">
                            
                            <button class="btn btn-block" type="submit"><i class="fi-rs-label mr-10"></i>Apply</button>
                        </form>
                    </div> --}}
                    <table class="table no-border">
                        <tbody>
                            <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Total</h6>
                                </td>
                                <td class="cart_total_amount">
                                    <h4 class="text-brand text-end">BDT {{ $total }}</h4>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Shipping</h6>
                                </td>
                                <td class="cart_total_amount">
                                    <h5 class="text-heading text-end">+ Delevery Fee</h5>
                                </td>
                                <td scope="col" colspan="2">
                                    <div class="divider-2 mt-10 mb-10"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('shipping.checkout') }}" class="btn mb-20 w-100">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection