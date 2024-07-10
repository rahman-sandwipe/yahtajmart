@php
   $socials = App\Models\Social::orderBy('id','DESC')->get();
   $config  = App\Models\Settings::where('id','1')->first();
@endphp
<!doctype html>
<html lang="en">
    <head>
		@yield('page_title')
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="description" content="{{ $config->web_metadesc }}">
		<meta name="title" content="{{ $config->web_name }}">
		<meta name="author" content="{{ $config->web_authors }}">
		<link rel="icon" href="{{ asset($config->web_fevicon) }}" type="image/x-icon">
		
		<!-- CSS File -->
		@include('backends.inc.styles')
		<style>
			.preview-images-zone {
				width: 100%;
				border: 1px solid #ddd;
				min-height: 72px;
				border-radius: 5px;
				padding: 1px;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-wrap: wrap;
				box-sizing: border-box;
			}
			.preview-image {
				width: 100px;
				height: 50px;
				margin: 10px;
				overflow: hidden;
				position: relative;
			}
			.preview-image img {
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
		</style>
	</head>
	<body class="theme-cyan">
		<!-- Page Loader -->
		@include('backends.inc.preloader')

        
		<!-- Overlay For Sidebars -->
		<div id="wrapper">
            @if (Auth::guard('admin')->user())

			
            <!--  Navbar  -->
            @include('backends.inc.navbar')
            
            
            <!--  Navbar  -->
            @include('backends.inc.sidebar')
			
            @else
            @endif
            @yield('dashboard_layouts')
			@yield('page_scripts')
		</div>
		<!-- Javascript -->
		@include('backends.inc.scripts')
		@yield('scripts')
		<script>
			@if (Session::has('message'))
				var type = "{{ Session::get('alert-type', 'info') }}"
				switch (type) {
					case 'info':
	
						toastr.options.timeOut = 10000;
						toastr.info("{{ Session::get('message') }}");
						var audio = new Audio('audio.mp3');
						audio.play();
						break;
					case 'success':
	
						toastr.options.timeOut = 10000;
						toastr.success("{{ Session::get('message') }}");
						var audio = new Audio('audio.mp3');
						audio.play();
	
						break;
					case 'warning':
	
						toastr.options.timeOut = 10000;
						toastr.warning("{{ Session::get('message') }}");
						var audio = new Audio('audio.mp3');
						audio.play();
	
						break;
					case 'error':
	
						toastr.options.timeOut = 10000;
						toastr.error("{{ Session::get('message') }}");
						var audio = new Audio('audio.mp3');
						audio.play();
	
						break;
				}
			@endif
		</script>
	</body>
</html>