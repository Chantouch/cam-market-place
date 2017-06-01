<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]>
<html lang="{{ config('app.locale') }}" class="ie6">    <![endif]-->
<!--[if IE 7 ]>
<html lang="{{ config('app.locale') }}" class="ie7">    <![endif]-->
<!--[if IE 8 ]>
<html lang="{{ config('app.locale') }}" class="ie8">    <![endif]-->
<!--[if IE 9 ]>
<html lang="{{ config('app.locale') }}" class="ie9">    <![endif]-->
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
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/favicon.ico') !!}">
    <!-- Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Khula:400,800,700,600,300" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/owl.theme.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/owl.transitions.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/fancb/jquery.fancybox.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/meanmenu.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/normalize.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/main.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/nivo-slider.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/responsive.css') !!}">
    @yield('style')
    <script src="{!! asset('js/vendor/modernizr-2.8.3.min.js') !!}"></script>
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
    <div class="page-content">
        <!-- Yield content -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <p>{{ $message }}</p>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <!-- Start page content -->
    <div class="page-content">
        @yield('content-area')
    </div>
    <!-- End page content -->
    <!-- Start brand and client -->
    <div class="brand-and-client">
        @include('layouts.front.partner')
    </div>
    <!-- End brand and client -->
    <!-- Start blog area -->
    <div class="blog-area">
        @include('layouts.front.blog')
    </div>
    <!-- End blog area -->
    <!-- Start footer -->
    <footer>
        @include('layouts.front.footer')
    </footer>
    <!-- End footer -->
</div>
<!-- End main area -->
<!-- JS -->
<!-- jquery-1.11.3.min js============================================ -->
<script src="{!! asset('js/vendor/jquery-1.11.3.min.js') !!}"></script>

<!--Config zoom in product detail-->
<script type="text/javascript" src="{!! asset('js/jquery.ez-plus.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/web.js?m=20100203') !!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#zoom_03').ezPlus({
            gallery: 'gallery_01', cursor: 'pointer', galleryActiveClass: 'active',
            imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
        });

        //pass the images to Fancybox
        $('#zoom_03').bind('click', function (e) {
            var ez = $('#zoom_03').data('ezPlus');
            $.fancyboxPlus(ez.getGalleryList());
            return false;
        });

    });
</script>
<!-- bootstrap js============================================ -->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<!-- owl.carousel.min js============================================ -->
<script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
<!-- jquery.nivo.slider.pack js============================================ -->
<script src="{!! asset('js/jquery.nivo.slider.pack.js') !!}"></script>
<!-- jqueryui js============================================ -->
<script src="{!! asset('js/jquery.fancybox.js') !!}"></script>
<!-- jquery.scrollUp.min js============================================ -->
<script src="{!! asset('js/jquery.scrollUp.min.js') !!}"></script>
<!-- wow js============================================ -->
<script src="{!! asset('js/wow.js') !!}"></script>
<!-- jquery.meanmenu js============================================ -->
<script src="{!! asset('js/jquery.meanmenu.js') !!}"></script>
<!-- plugins js============================================ -->
<script src="{!! asset('js/plugins.js') !!}"></script>
<!-- main js============================================ -->
<script src="{!! asset('js/main.js') !!}"></script>
@yield('scripts')
</body>
</html>