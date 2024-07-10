<?php
    $cart_Items=App\Models\Frontends\ShoppingCart::with('products')->where(['user_id'=>auth()->user()->id])->latest()->get();
?>
@extends('frontends.master')
@section('page_title')
   <title>Checkout Shipping - Multipurpose eCommerce Flatform</title>
@endsection
@section('front_layouts')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href='index.html' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Shop
            <span></span> Checkout
        </div>
    </div>
</div>
<div class="container mb-80 mt-50">
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h1 class="heading-2 mb-10">Checkout</h1>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are <span class="text-brand">3</span> products in your cart</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="row">
                <h4 class="mb-30">Billing Details</h4>
                <div class="auth-card__body card-body p-5 pt-3">
                    <form method="POST" action="{{ route('user.register') }}" class="row">@csrf
                        <div class="mb-3 col-12" >
                            <label for="name" class="form-label">Full Name<sup class="text-danger">*</sup></label>
                            <input class="form-control @error('name') @enderror" value="{{ Auth::guard('web')->user()->name }}" name=name type=text id="name" placeholder="Your full name" required>
                            @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror    
                        </div>
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label">Email<sup class="text-danger">*</sup></label>
                            <input class="form-control @error('email') @enderror" value="{{ Auth::guard('web')->user()->email }}" placeholder="Your email" name=email type=email id="email">
                            @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="phone" class="form-label">Phone <sup class="text-danger">*</sup></label>
                            <input class="form-control @error('phone') @enderror" value="{{ Auth::guard('web')->user()->number }}" name=phone type=text id="phone" placeholder="Phone number" required>
                            @error('phone') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                        </div>
                        
                        <div class="mb-3 col-12">
                            <label for="address" class="form-label">Address <sup class="text-danger">*</sup></label>
                            <input class="form-control" value="{{ Auth::guard('web')->user()->address }}" placeholder="Address..." name="address" type="text" id="address" required>
                        </div>
                        
                        <div class="mb-3 col-12">
                            <label for="s_noteINPUT" class="form-label">Note</label>
                            <textarea name="additional_info" id="s_noteINPUT" rows="3" class="form-control" placeholder="write here..."></textarea>
                        </div>
                        <div class="d-grid col-12">
                            <button class="btn btn-primary btn-auth-submit" type=submit> Pay Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-5">
            <div class="border p-40 cart-totals ml-30 mb-50">
                <div class="d-flex align-items-end justify-content-between mb-30">
                    <h4>Your Order</h4>
                    <h6 class="text-muted">Subtotal</h6>
                </div>
                <div class="divider-2 mb-30"></div>
                <div class="table-responsive order_table checkout">
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
                                @php $total = 0 @endphp
                                @php $subtotal = 0 @endphp
                                @foreach($cart_Items as $itemDetails)
                                    @php $total += $itemDetails->products['offer_price'] * $itemDetails['quantity'] @endphp
                                @endforeach
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
                                        <form action="">
                                            <select name="" id="" class="text-heading text-end coupon">
                                                <option value="0">Free Delivery 0 BDT</option>
                                                <option value="70">In Side Chattogram 70 BDT</option>
                                                <option value="150">Out Side Chattogram 150 BDT</option>
                                            </select>
                                        </form>
                                        {{-- <h5 class="">Delevery Fee 60 BDT</h5> --}}
                                    </td>
                                    <td scope="col" colspan="2">
                                        <div class="divider-2 mt-10 mb-10"></div>
                                    </td>
                                </tr>
                                <tr>
                                    @php
                                        $subtotal += $total + 0;
                                    @endphp
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">Subtotal</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-brand text-end">BDT {{ $subtotal }}</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="payment ml-30">
                <h4 class="mb-30">Payment</h4>
                <div class="payment_option">
                    <div class="custome-radio">
                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                    </div>
                    <div class="custome-radio">
                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                    </div>
                    <div class="custome-radio">
                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Online Getway</label>
                    </div>
                </div>
                <div class="payment-logo d-flex">
                    <img class="mr-15" src="assets/imgs/theme/icons/payment-paypal.svg" alt="">
                    <img class="mr-15" src="assets/imgs/theme/icons/payment-visa.svg" alt="">
                    <img class="mr-15" src="assets/imgs/theme/icons/payment-master.svg" alt="">
                    <img src="assets/imgs/theme/icons/payment-zapper.svg" alt="">
                </div>
                <a href="#" class="btn btn-fill-out btn-block mt-30">Place an Order<i class="fi-rs-sign-out ml-15"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection