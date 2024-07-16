
@auth
	
<?php
	$cart_Products=App\Models\Frontends\ShoppingCart::where(['user_id'=>auth()->user()->id])->get();
	$cart_Pop=App\Models\Frontends\ShoppingCart::with('products')->where(['user_id'=>auth()->user()->id])->latest()->take(3)->get();
	$cart_Items=App\Models\Frontends\ShoppingCart::with('products')->where(['user_id'=>auth()->user()->id])->latest()->get();
?>
@endauth
<header class="header-area header-style-1 header-height-2">
	<div class="mobile-promotion">
		<span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
	</div>
	<div class="header-top header-top-ptb-1 d-none d-lg-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-3 col-lg-4">
					<div class="header-info">
						<ul>
							<li><a href="page-about.html">About Us</a></li>
							@if (Auth::guard('web')->check())
								<li><a href="{{ route('user.login') }}">My Account</a></li>
							@else
								<li>
									<a href="{{ route('user.dashboard') }}">
										<i class="fi fi-rs-user-add mr-10"></i>
										<samp>My Account</samp>
									</a>
								</li>
							@endif
							<li>
								<a href="shop-order.html">Order Tracking</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4">
					<div class="text-center">
						<div id="news-flash" class="d-inline-block">
							<ul>
								<li>100% Secure delivery without contacting the courier</li>
								<li>Supper Value Deals - Save more with coupons</li>
								<li>Trendy 25silver jewelry, save up 35% off today</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4">
					<div class="header-info header-info-right">
						<ul>
							<li><span class="pr-2">Times:</span>
								<strong class="text-brand">
									<?php echo date('d M Y, h:i A', time())?>
								</strong>
							</li>
							{{-- <li>
								<a class="language-dropdown-active" href="">English <i class="fi-rs-angle-small-down"></i></a>
								<ul class="language-dropdown">
									<li>
										<a href="#"><img src="assets/imgs/theme/flag-fr.png" alt="" />Français</a>
									</li>
								</ul>
							</li> --}}
							<li>
								<a class="language-dropdown-active" href="#">CURRENCY: BDT</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
		<div class="container">
			<div class="header-wrap">
				<div class="logo logo-width-1">
					<a href="{{ route('home') }}">
						<img src="{{ asset($config->web_logo) }}" alt="logo" />
					</a>
				</div>
				<div class="header-right">
					<div class="search-style-2">
						<form action="#">
							<select class="select-active">
								<option>All Categories</option>
								@foreach ($category as $row)
								<option value="{{ $row->id }}">{{ $row->name }}</option>
								@endforeach
							</select>
							<input type="text" placeholder="Search for items..." />
						</form>
					</div>
					<div class="header-action-right">
						<div class="header-action-2">
							<div class="search-location">
								<form action="#">
									<select class="select-active">
										<option>Your Location</option>
										<option>Alabama</option>
										<option>Alaska</option>
										<option>Arizona</option>
										<option>Delaware</option>
										<option>Florida</option>
										<option>Georgia</option>
										<option>Hawaii</option>
										<option>Indiana</option>
										<option>Bangladesh</option>
										<option>India</option>
										<option>Pakishtan</option>
									</select>
								</form>
							</div>
							
							
							<div class="header-action-icon-2">
								<a class='mini-cart-icon' href={{ route('shipping.cart') }}>
									<img alt="Nest" src="{{ asset('frontends/imgs/theme/icons/icon-cart.svg') }}" />
									@auth
										<span class="pro-count blue">{{ count($cart_Products) }}</span>
									@endauth
								</a>
								<a href={{ route('shipping.cart') }}><span class="lable">Cart</span></a>
								@include('frontends.pages.page-inc.cart-modal')
								<!-- Add To Cart -->
							</div>
							<div class="header-action-icon-2">
								@if (Auth::guard('web')->check())
								<a href="{{ route('user.dashboard') }}">
									<img class="svgInject" alt="Nest" src="{{ asset('frontends/imgs/theme/icons/icon-user.svg') }}" />
								</a>
								<a href='page-account.html'><span class="lable ml-0">Account</span></a>
								<div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
									<ul>
										<li>
											<a href='page-account.html'><i class="fi fi-rs-user mr-10"></i>My Account</a>
										</li>
										<li>
											<a href='page-account.html'><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
										</li>
										<li>
											<a href='page-account.html'><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
										</li>
										<li>
											<a href='shop-wishlist.html'><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
										</li>
										<li>
											<a href='page-account.html'><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
										</li>
										<li>
											<a class="nav-link" href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
												<i class="fi-rs-sign-out mr-10"></i><span>Logout</span>
											</a>
											<form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>   
										</li>
									</ul>
								</div>
								@else
								<a href='page-account.html'>
									<i class="fi fi-rs-user-add mr-10"></i>
									<span class="lable ml-0">Account</span>
								</a>
								<div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
									<ul>
										<li>
											<a href="{{ route('user.login') }}"><i class="fi fi-rs-user mr-10"></i>Login</a>
										</li>
										<li>
											<a href="{{ route('user.register') }}"><i class="fi fi-rs-user-add mr-10"></i>Register</a>
										</li>
									</ul>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom header-bottom-bg-color sticky-bar">
		<div class="container">
			<div class="header-wrap header-space-between position-relative">
				<div class="logo logo-width-1 d-block d-lg-none">
					<a href='index.html'><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
				</div>
				<div class="header-nav d-none d-lg-flex">
					<div class="main-categori-wrap d-none d-lg-block">
						<a class="categories-button-active" href="#">
							<span class="fi-rs-apps"></span> <span class="et">Browse</span> Categories
							<i class="fi-rs-angle-down"></i>
						</a>
						<div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
							<div class="d-flex categori-dropdown-inner">
								<ul>
									@foreach ($category as $row)
									<li>
										<a href="{{ route('category',$row->slug) }}">
											<img src="{{ asset($row->thumb) }}" />{{ $row->name }}
										</a>
									</li>
									@endforeach
								</ul>
							</div>
							
							
							{{-- <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div> --}}
						</div>
					</div>
					<div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
						<nav>
							<ul>
								{{-- <li class="hot-deals">
									<img src="assets/imgs/theme/icons/icon-hot.svg" alt="hot deals" />
									<a href='shop-grid-right.html'>Deals</a>
								</li> --}}
								<li>
									<a class='active' href="{{ route('home') }}"><i class="fi-rs-home mr-5" style="font-size: 14px"></i>Home</a>
								</li>
								<li>
									<a href="{{ route('shops') }}">Shop</a>
								</li>
								<li>
									<a href="{{ route('blog') }}">Blog</a>
								</li>
								<li><a href="{{ route('faqs') }}">FAQs</a></li>
								<li><a href="{{ route('abouts') }}">About Us</a></li>
								<li><a href="{{ route('contacts') }}">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="hotline d-none d-lg-flex">
					<img src="{{ asset('frontends/imgs/theme/icons/icon-headphone.svg') }}" alt="hotline" />
					<p>{{ $config->number }}<span>24/7 Support Center</span></p>
				</div>
				<div class="header-action-icon-2 d-block d-lg-none">
					<div class="burger-icon burger-icon-white">
						<span class="burger-icon-top"></span>
						<span class="burger-icon-mid"></span>
						<span class="burger-icon-bottom"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>



<div class="mobile-header-active mobile-header-wrapper-style">
	<div class="mobile-header-wrapper-inner">
		<div class="mobile-header-top">
			<div class="mobile-header-logo">
				<a href='index.html'><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
			</div>
			<div class="mobile-menu-close close-style-wrap close-style-position-inherit">
				<button class="close-style search-close">
					<i class="icon-top"></i>
					<i class="icon-bottom"></i>
				</button>
			</div>
		</div>
		<div class="mobile-header-content-area">
			<div class="mobile-search search-style-3 mobile-header-border">
				<form action="#">
					<input type="text" placeholder="Search for items…" />
					<button type="submit"><i class="fi-rs-search"></i></button>
				</form>
			</div>
			<div class="mobile-menu-wrap mobile-header-border">
				<!-- mobile menu start -->
				<nav>
					<ul class="mobile-menu font-heading">
						<li class="menu-item-has-children">
							<a href='index.html'>Home</a>
						</li>
						<li class="menu-item-has-children">
							<a href='shop-grid-right.html'>shop</a>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Vendors</a>
						</li>
						<li class="menu-item-has-children">
							<a href='blog-category-fullwidth.html'>Blog</a>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Pages</a>
							<ul class="dropdown">
								<li><a href='page-about-2.html'>About Us</a></li>
								<li><a href='page-contact.html'>Contact</a></li>
								<li><a href='page-account.html'>My Account</a></li>
								<li><a href='page-login.html'>Login</a></li>
								<li><a href='page-register.html'>Register</a></li>
								<li><a href='page-forgot-password.html'>Forgot password</a></li>
								<li><a href='page-reset-password.html'>Reset password</a></li>
								<li><a href='page-purchase-guide.html'>Purchase Guide</a></li>
								<li><a href='page-privacy-policy.html'>Privacy Policy</a></li>
								<li><a href='page-terms.html'>Terms of Service</a></li>
								<li><a href='page-404.html'>404 Page</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- mobile menu end -->
			</div>
			<div class="mobile-header-info-wrap">
				<div class="single-mobile-header-info">
					<a href='page-contact.html'><i class="fi-rs-marker"></i> Our location </a>
				</div>
				<div class="single-mobile-header-info">
					<a href='page-login.html'><i class="fi-rs-user"></i>Log In / Sign Up </a>
				</div>
				<div class="single-mobile-header-info">
					<a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
				</div>
			</div>
			<div class="mobile-social-icon mb-50">
				<h6 class="mb-15">Follow Us</h6>
				<a href="#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
			</div>
			{{-- <div class="site-copyright">Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</div> --}}
		</div>
	</div>
</div>