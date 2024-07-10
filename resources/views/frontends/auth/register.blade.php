@extends('frontends.master')
@section('page_title')
   <title>Register Customer - Multipurpose eCommerce Flatform</title>
@endsection
@section('front_layouts')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <div class="breadcrumb-item d-inline-block">
                <a href="{{ route('home') }}"title="Home"> Home </a>
            </div>
            <span></span>
            <div class="breadcrumb-item d-inline-block active">
                <div itemprop="item"> Register </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content pt-10 pb-10">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-xl-6 col-lg-8">
                <div class="card bg-body-tertiary border-0 auth-card">
                    <div class="auth-card__header card-header bg-body-tertiary border-0 p-5 pb-0">
                        <div class="d-flex flex-column flex-md-row align-items-start gap-3">
                            <div class="auth-card__header-icon bg-white p-3 rounded">
                                <i class="fi fi-rs-user-add mr-10" style="font-size: 70px"></i>
                            </div>
                            <div>
                                <h3 class="auth-card__header-title fs-4 mb-1">Register an account</h3>
                                <p class="auth-card__header-description text-muted">Your personal data will be used to support your experience throughout this website, to manage access to your account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="auth-card__body  bg-body-tertiary card-body p-5 pt-3">
                        <form method="POST" action="{{ route('user.register') }}" class="js-base-form dirty-check">@csrf
                            <div class="mb-3 position-relative" >
                                <label for="name" class="form-label">Full name</label>
                                <input class="form-control @error('name') is-invalid @enderror" data-counter="250" placeholder="Your full name" name=name type=text id="name">
                                @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror    
                            </div>
                            <div class="mb-3 position-relative" >
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" data-counter="60" placeholder="Your email" autocomplete="email" name=email type=email id="email">
                                @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="mb-3 position-relative" >
                                <label for="phone" class="form-label">Phone (optional)</label>
                                <input class="form-control js-phone-number-mask form-control @error('number') is-invalid @enderror" data-counter="250" placeholder="Phone number" autocomplete="tel" name=number type=text id="phone">
                                @error('number') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="mb-3 position-relative" >
                                <label for="password" class="form-label">Password</label>
                                <input type=password name=password class="form-control @error('password') is-invalid @enderror" data-counter="250" placeholder="Password">
                                @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="mb-3 position-relative" >
                                <label for="password_confirmation" class="form-label">Password confirmation</label>
                                <input type=password name=password_confirmation class="form-control @error('password_confirmation') is-invalid @enderror" data-counter="250" placeholder="Password confirmation">
                                @error('password_confirmation') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-auth-submit" type=submit> Register</button>
                            </div>
                            <div class="mt-3 text-center"> Already have an account?
                                <a href="{{ route('user.login') }}" class="ms-1 text-decoration-underline">Login</a>
                            </div>
                            <div class="card-login mt-20">
                                <a href="#Google" class="social-login google-login">
                                    <img src="{{ asset('frontends/imgs/theme/icons/logo-google.svg') }}">
                                    <span>Continue with Google</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection