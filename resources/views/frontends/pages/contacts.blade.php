@extends('frontends.master')
@section('page_title')
   <title>Contact us - Multipurpose eCommerce Flatform</title>
@endsection
@section('front_layouts')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href='index.html' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Contact us
        </div>
    </div>
</div>
<div class="page-content pt-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-12 m-auto">
                <section class="mb-50">
                    <div class="row mb-60">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h4 class="mb-15 text-brand">Office</h4>
                            {!! $contacts->office_address !!}
                            {{-- <a class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-5"></i>View map</a> --}}
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h4 class="mb-15 text-brand text-center">Shop</h4>
                            {!! $contacts->shop_address !!}
                        </div>
                        <div class="col-md-4">
                            <h4 class="mb-15 text-brand">Studio</h4>
                            {!! $contacts->studio_address !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="contact-from-area padding-20-row-col">
                                <h3 class="text-brand mb-10">Contact form</h3>
                                <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-style mb-20">
                                                <input name="name" class="form-control" placeholder="First Name" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-style mb-20">
                                                <input name="email" class="form-control" placeholder="Your Email" type="email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-style mb-20">
                                                <input name="telephone" class="form-control" placeholder="Your Phone" type="tel" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-style mb-20">
                                                <input name="subject" class="form-control" placeholder="Subject" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="textarea-style mb-30">
                                                <textarea name="message" class="form-textarea" placeholder="Message"></textarea>
                                            </div>
                                            <button class="submit submit-auto-width" type="submit">Send message</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 pl-50 d-lg-block d-none">
                            <img class="border-radius-15 mt-50" src="{{ asset('frontends/imgs/page/contact-2.png') }}" alt="" />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection