<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:image" content="../../zenix.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>{{ config('app.name', 'Stade') }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/images/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    @stack('styles')
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('frontend.partials.backend.header')
        @include('frontend.partials.backend.sidebar')

        @yield('content')

        @include('frontend.partials.backend.footer')

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{asset('backend/vendor/peity/jquery.peity.min.js')}}"></script>
	
	<script src="{{asset('backend/vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
	<script src="{{asset('backend/js/deznav-init.js')}}"></script>
    <script src="{{asset('backend/js/demo.js')}}"></script>
    <script src="{{asset('backend/js/styleSwitcher.js')}}"></script>
    @stack('scripts')

</body>

</html>
