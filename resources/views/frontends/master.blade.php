@php
   $category=App\Models\Category::where(['status'=>'public'])->latest()->get();
   $config=App\Models\Settings::latest()->first();
   $supports=App\Models\SupportCenter::latest()->first();
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        @yield('page_title')
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="{{ $config->web_name }} :: {{ $config->web_tagline }}" />
        <meta property="og:type" content="Ecommerce Website" />
        <meta property="og:url" content="{{ $config->web_link }}" />
        <meta property="og:image" content="{{ asset($config->web_logo) }}" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset($config->web_fevicon) }}" />
        <!-- Template CSS -->
        @include('frontends.inc.styles')
    </head>

    <body>
        {{-- @include('frontends.pages.page-inc.modal-quick-view') --}}
        <!-- End Modal & Quick view -->


        @include('frontends.inc.header')
        <!--End header-->

        
        @yield('front_layouts')
        <!-- End Pages assets -->


        @include('frontends.inc.footer')
        <!-- Preloader Start & fOOTER-->
        
        <!-- Vendor JS-->
        @include('frontends.inc.scripts')
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':

                        toastr.options.timeOut = 10000;
                        toastr.options.positionClass = 'toast-bottom-right';
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