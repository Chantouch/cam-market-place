<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]>
<html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="{{ config('app.locale') }}" class="no-js">
    <head>

        <!-- Title setting -->
        <title>@yield('title') {{ config('app.name', ': Cam Market Place') }}</title>
        <!-- meta setting -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" id="token">
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>

        <!-- Favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <!-- Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Khula:400,800,700,600,300" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fancb/jquery.fancybox.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/nivo-slider.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="home-4">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
        your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start main area -->
    <div class="main-area">
        <!-- Start header -->
        @include('layouts.front.header')
        <!-- End header -->
        <!-- Start categori and slider -->
        @include('layouts.front.slideshow');
        <!-- End categori and slider -->
        <!-- Yield content -->
        @yield('content-area')
        <!-- Start brand and client -->
        @include('layouts.front.partner')
        <!-- End brand and client -->
        <!-- Start blog area -->
        @include('layouts.front.blog')
        <!-- End blog area -->
        <!-- Start footer -->
        @include('layouts.front.footer')
        <!-- End footer -->
    </div>
    <!-- End main area -->
    <!-- JS -->

    <!-- jquery-1.11.3.min js
            ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>

    <!-- bootstrap js
            ============================================ -->
    <script src="js/bootstrap.min.js"></script>

    <!-- owl.carousel.min js
            ============================================ -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- jquery.nivo.slider.pack js
            ============================================ -->
    <script src="js/jquery.nivo.slider.pack.js"></script>

    <!-- jqueryui js
            ============================================ -->
    <script src="js/jquery.fancybox.js"></script>

    <!-- jquery.scrollUp.min js
            ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>

    <!-- wow js
            ============================================ -->
    <script src="js/wow.js"></script>

    <!-- jquery.meanmenu js
            ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- plugins js
            ============================================ -->
    <script src="js/plugins.js"></script>

    <!-- main js
            ============================================ -->
    <script src="js/main.js"></script>
    </body>
</html>