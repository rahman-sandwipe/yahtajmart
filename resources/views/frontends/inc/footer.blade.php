<?php
	$socials=App\Models\Social::orderBy('id','ASC')->get();
?>
<footer class="main">
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