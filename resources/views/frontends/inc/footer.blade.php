<?php
	$socials=App\Models\Social::orderBy('id','ASC')->get();
?>
<footer class="main">
	<section class="featured section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
					<div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
						<div class="banner-icon">
							<img src="assets/imgs/theme/icons/icon-1.svg" alt="" />
						</div>
						<div class="banner-text">
							<h3 class="icon-box-title">Best prices & offers</h3>
							<p>Orders $50 or more</p>
						</div>
					</div>
				</div>
				<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
					<div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
						<div class="banner-icon">
							<img src="assets/imgs/theme/icons/icon-2.svg" alt="" />
						</div>
						<div class="banner-text">
							<h3 class="icon-box-title">Free delivery</h3>
							<p>24/7 amazing services</p>
						</div>
					</div>
				</div>
				<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
					<div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
						<div class="banner-icon">
							<img src="assets/imgs/theme/icons/icon-3.svg" alt="" />
						</div>
						<div class="banner-text">
							<h3 class="icon-box-title">Great daily deal</h3>
							<p>When you sign up</p>
						</div>
					</div>
				</div>
				<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
					<div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
						<div class="banner-icon">
							<img src="assets/imgs/theme/icons/icon-4.svg" alt="" />
						</div>
						<div class="banner-text">
							<h3 class="icon-box-title">Wide assortment</h3>
							<p>Mega Discounts</p>
						</div>
					</div>
				</div>
				<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
					<div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
						<div class="banner-icon">
							<img src="assets/imgs/theme/icons/icon-5.svg" alt="" />
						</div>
						<div class="banner-text">
							<h3 class="icon-box-title">Easy returns</h3>
							<p>Within 30 days</p>
						</div>
					</div>
				</div>
				<div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
					<div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
						<div class="banner-icon">
							<img src="assets/imgs/theme/icons/icon-6.svg" alt="" />
						</div>
						<div class="banner-text">
							<h3 class="icon-box-title">Safe delivery</h3>
							<p>Within 30 days</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
		<div class="row align-items-center">
			<div class="col-12 mb-30">
				<div class="footer-bottom"></div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<p class="font-sm mb-0">&copy; 2024, <strong class="text-brand">{{ $config->web_name }}</strong> - {{ $config->web_tagline }} <br />All rights reserved</p>
			</div>
			<div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
				<img src="{{ asset($config->web_logo) }}" alt="">
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
				<div class="mobile-social-icon">
					<h6>Follow Us</h6>
					
					@foreach ($socials as $social)
					<a href="{{ $social->link }}" class="{{ $social->icon }}"></a>
					@endforeach
					
					{{-- <a href="#"><img src="{{ asset('icons/icon-facebook-white.svg') }}" alt="" /></a>
					<a href="#"><img src="{{ asset('icons/icon-twitter-white.svg') }}" alt="" /></a>
					<a href="#"><img src="{{ asset('icons/icon-instagram-white.svg') }}" alt="" /></a>
					<a href="#"><img src="{{ asset('icons/icon-pinterest-white.svg') }}" alt="" /></a>
					<a href="#"><img src="{{ asset('icons/icon-youtube-white.svg') }}" alt="" /></a> --}}
				</div>
				<p class="font-sm">Up to 15% discount on your first subscribe</p>
			</div>
		</div>
	</div>
</footer>
{{-- <div id="preloader-active">
	<div class="preloader d-flex align-items-center justify-content-center">
		<div class="preloader-inner position-relative">
			<div class="text-center">
				<img src="{{ asset($config->web_logo) }}" />
			</div>
		</div>
	</div>
</div> --}}