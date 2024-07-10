@extends('frontends.master')
@section('page_title')
   <title>Login Customer - Multipurpose eCommerce Flatform</title>
@endsection
@section('front_layouts')
<main class="main" id="main-section">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb-item d-inline-block">
                    <a href="{{ route('home') }}"title="Home"> Home </a></div>
                <span></span>
                <div class="breadcrumb-item d-inline-block active">
                    <div itemprop="item"> Login </div>
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
                                    <h3 class="auth-card__header-title fs-4 mb-1">Login an account</h3>
                                    <p class="auth-card__header-description text-muted">Your personal data will be used to support your experience throughout this website, to manage access to your account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="auth-card__body card-body p-5 pt-3">
                            <form method="POST" action="{{ route('user.login') }}" class="js-base-form dirty-check"> @csrf
                                
                                <div class="mb-3 position-relative" >
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control ps-5" name="email" type="email" id="email" data-counter="60" placeholder="Your email" required>
                                </div>
                                <div class="mb-3 position-relative" >
                                    <label for="password" class="form-label">Password</label>
                                    <input type=password name=password class="form-control ps-5" data-counter="30" placeholder="Password">
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-6" >
                                        <input type=hidden name=remember value="0">
                                        <label class="form-check">
                                            <label class="fancy-checkbox element-left">
                                                <input type="checkbox" name="remember" id="remember_me" class="form-check-input"><span>Remember me</span>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-6 text-end" >
                                        <a href="" class="text-decoration-underline">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Login <i class="fi fi-rs-arrow-right text-center"></i></button>
                                </div>
                                <div class="mt-3 text-center"> 
                                    <span>Don't have an account?</span>
                                    <a href="{{ route('user.register') }}" class="ms-1 text-decoration-underline">Register now</a>
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
</div>
@endsection