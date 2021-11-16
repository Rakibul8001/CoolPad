<!-- Meta Tag -->
@yield('meta')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0>
<!-- Title Tag  -->
<title>@yield('title')</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
<!-- Web Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- StyleSheet -->
<link rel="manifest" href="/manifest.json">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
<!-- Fancybox -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
<!-- Themify Icons -->
<link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/niceselect.css')}}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
<!-- Flex Slider CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/flex-slider.min.css')}}">
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
<!-- Slicknav -->
<link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
<!-- Jquery Ui -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">

{{-- User profile --}}
<link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/theme-elements.css')}}">


<!-- Eshop StyleSheet -->
<link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
<!-- mi StyleSheet -->
{{-- <link rel="stylesheet" href="{{asset('frontend/css/index.css')}}"> --}}
<link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">
<!-- product list page StyleSheet -->
<link rel="stylesheet" href="{{asset('frontend/css/list.css')}}">


@stack('styles')
