<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="/images/logo.jpg">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?fa<mily=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="/css/frontstyle.css"/>

    
</head>
<body>
    <div id="app">
		@include('frontend.partials.header')
		@include('frontend.partials.nav')
		@yield('content')
		@include('frontend.partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/nouislider.min.js"></script>
	<script src="/js/jquery.zoom.min.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>
