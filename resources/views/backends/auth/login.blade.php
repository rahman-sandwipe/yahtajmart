@php
	$settings_site=App\Models\Settings::latest()->first();
@endphp
@extends('backends.master')
@section('page_title')
	<title>Admin Login</title>
@endsection
@section('dashboard_layouts')
<div class="vertical-align-wrap">
	<div class="vertical-align-middle auth-main">
		<div class="auth-box">
			<div class="top">
				<img src="{{ asset($settings_site->web_logo) }}" alt="Lucid">
			</div>
			<div class="card">
				<div class="header">
					<p class="lead">Login to your account</p>
				</div>
				<div class="body">
                    <form method="POST" action="{{ route('admin.login') }}" class="form-auth-small">
                        @csrf
                        <!-- Email Address -->
						<div class="form-group">
							<label for="signin-email" class="control-label sr-only">Email</label>
							<input type="email" name="email" :value="old('email')" id="signin-email" class="form-control" required autofocus autocomplete="username" placeholder="Email" >
						</div>
						<div class="form-group">
							<label for="signin-password" class="control-label sr-only">Password</label>
							<input type="password" name="password" :value="old('password')" id="signin-password" class="form-control" required placeholder="Password">
						</div>
						<div class="form-group clearfix">
							<label class="fancy-checkbox element-left">
							    <input type="checkbox" name="remember" id="remember_me"><span>Remember me</span>
							</label>								
						</div>
						<button type="submit" class="btn btn-success btn-lg btn-block">LOGIN</button>
						<div class="bottom">
							<span class="helper-text m-b-10"><i class="fa fa-lock"></i>
								<a href="{{ route('password.request') }}">Forgot password?</a>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection