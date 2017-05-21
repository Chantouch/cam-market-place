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
    <header>
        <!-- Start top call-to acction -->
        <div class="top-bar-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="top-call-to-acction">
                            <p>
                                <a href="tel:0123-456-789"><i class="fa fa-phone"></i> Call us now: 0123-456-789</a>
                                <a href="mailto:admin@bootexperts.com"><i class="fa fa-envelope-o"></i> E-mail:
                                    admin@bootexperts.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 pull-right">
                        <div class="social-and-menu">
                            <div class="top-menu">
                                <nav>
                                    <ul>
                                        <li><a href="#">English <i class="fa fa-caret-down"></i></a>
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Fran�ais</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">USD <i class="fa fa-caret-down"></i></a>
                                            <ul>
                                                <li><a href="#">Dollar (USD)</a></li>
                                                <li><a href="#">Pound (GBP)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="top-social">
                                <p>
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                                    <a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                                    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                    <a href="www.vimeo.com/?"><i class="fa fa-vimeo-square"></i></a>
                                    <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top call-to acction -->
        <!-- Start logo and search area -->
        <div class="logo-and-search-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.html"><img src="img/home-4/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <!-- Start user info adn search -->
                        <div class="user-info-adn-search">
                            <div class="user-info">
                                <p>
                                    <a href="#"><i class="fa fa-user"></i> My Account</a>
                                    <a href="wishlists.html"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    <a href="#"><i class="fa fa-key"></i> Sign out</a>
                                    <a href="#"><i class="fa fa-signal"></i> Compare</a>
                                </p>
                            </div>
                            <div class="search-and-cart">
                                <div class="search-categori">
                                    <div class="categori">
                                        <form id="select-categoris" method="post" class="form-horizontal">
                                            <select name="language">
                                                <option value="">Categories</option>
                                                <option value="12">Automotive</option>
                                                <option value="21">electronic</option>
                                                <option value="25">Camera</option>
                                                <option value="26">Electronic</option>
                                                <option value="27">Cosmetic</option>
                                                <option value="28">Medical</option>
                                                <option value="29">Laptop</option>
                                                <option value="30">Phasellus</option>
                                                <option value="22">mobile</option>
                                                <option value="31">Camcorders</option>
                                                <option value="32">Electronic</option>
                                                <option value="33">Cosmetic</option>
                                                <option value="34">Laptop</option>
                                                <option value="35">Medical</option>
                                                <option value="36">Phasellus</option>
                                                <option value="23">laptop</option>
                                                <option value="37">Phasellus</option>
                                                <option value="38">Healthcare</option>
                                                <option value="39">Electronic</option>
                                                <option value="40">Cosmetic</option>
                                                <option value="13">Electronics</option>
                                                <option value="24">camcorder</option>
                                                <option value="46">Healthcare</option>
                                                <option value="47">Laptop</option>
                                                <option value="48">Camera</option>
                                                <option value="41">Medical</option>
                                                <option value="49">Camera</option>
                                                <option value="50">Camcorders</option>
                                                <option value="51">Camcorders</option>
                                                <option value="42">Healthcare</option>
                                                <option value="52">Medical</option>
                                                <option value="53">Healthcare</option>
                                                <option value="54">Healthcare</option>
                                                <option value="14">Sports</option>
                                                <option value="43">category 1</option>
                                                <option value="60">day</option>
                                                <option value="61">evening</option>
                                                <option value="62">night</option>
                                                <option value="44">category 2</option>
                                                <option value="63">kids</option>
                                                <option value="64">men</option>
                                                <option value="65">Women</option>
                                                <option value="45">category 3</option>
                                                <option value="66">clothing</option>
                                                <option value="67">Accessories</option>
                                                <option value="15">Smartphone</option>
                                                <option value="55">category 1</option>
                                                <option value="56">category 2</option>
                                                <option value="57">category 3</option>
                                                <option value="16">Beauty</option>
                                                <option value="58">category 1</option>
                                                <option value="59">category 2</option>
                                                <option value="17">Bags, Shoes</option>
                                                <option value="18">Networking</option>
                                                <option value="19">Accessories</option>
                                                <option value="20">Entertainment</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="search-box">
                                        <input type="text" class="form-control input-sm" maxlength="64"
                                               placeholder="Enter your search key ... "/>
                                        <button type="submit">Search</button>
                                    </div>
                                </div>
                                <div class="shoping-cart">
                                    <a href="cart.html"><span>My Cart (3)</span></a>
                                    <div class="add-to-cart-product">
                                        <div class="cart-product product-item11">
                                            <div class="cart-product-image">
                                                <a href="single-product.html"><img
                                                        src="img/cart/faded-short-sleeves-tshirt.jpg" alt="Product"></a>
                                            </div>
                                            <div class="cart-product-info">
                                                <p><span>1</span>x<a href="single-product.html">Faded...</a></p>
                                                <a href="single-product.html">S, Orange</a>
                                                <span class="price">� 19.81</span>
                                            </div>
                                            <div class="cart-product-remove">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                        <div class="cart-product">
                                            <div class="cart-product-image">
                                                <a href="single-product.html"><img src="img/cart/printed-dress.jpg"
                                                                                   alt="Product"></a>
                                            </div>
                                            <div class="cart-product-info">
                                                <p><span>1</span>x<a href="single-product.html">blouse</a></p>
                                                <a href="single-product.html">S, Black</a>
                                                <span class="price">� 32.40</span>
                                            </div>
                                            <div class="cart-product-remove">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                        <div class="cart-product">
                                            <div class="cart-product-image">
                                                <a href="single-product.html"><img
                                                        src="img/cart/printed-summer-dress.jpg" alt="Product"></a>
                                            </div>
                                            <div class="cart-product-info">
                                                <p><span>1</span>x<a href="single-product.html">Printed...</a></p>
                                                <a href="single-product.html">S, Yellow</a>
                                                <span class="price">� 36.60</span>
                                            </div>
                                            <div class="cart-product-remove">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                        <div class="cart-price">
                                            <div class="cart-product-line fast-line">
                                                <span>Shipping</span>
                                                <span class="free-shiping">$10.50</span>
                                            </div>
                                            <div class="cart-product-line">
                                                <span>Total</span>
                                                <span class="total">� 88.81</span>
                                            </div>
                                        </div>
                                        <div class="cart-checkout">
                                            <a href="checkout.html">Check out<i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End user info adn search -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End logo and search area -->
        <!-- Start mainmenu-area -->
        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a class="home" href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index-2.html"><span>Home2</span></a></li>
                                        <li><a href="index-3.html"><span>Home3</span></a></li>
                                        <li><a href="index-4.html"><span>Home4</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About us</a></li>
                                <li><a href="shop-grid.html">shop</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-non-sidebar.html">Blog non sidebar</a></li>
                                        <li><a href="single-blog.html">Single blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html"><span>About us</span></a></li>
                                        <li><a href="blog.html"><span>Blog</span></a></li>
                                        <li><a href="blog-non-sidebar.html"><span>blog non sidebar</span></a></li>
                                        <li><a href="single-blog.html"><span>single blog</span></a></li>
                                        <li><a href="shop-grid.html"><span>shop grid</span></a></li>
                                        <li><a href="shop-list.html"><span>shop list</span></a></li>
                                        <li><a href="single-product.html"><span>single product</span></a></li>
                                        <li><a href="cart.html"><span>cart</span></a></li>
                                        <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                        <li><a href="checkout.html"><span>checkout</span></a></li>
                                        <li><a href="login.html"><span>Login</span></a></li>
                                        <li><a href="contact-us.html"><span>contact us</span></a></li>
                                        <li><a href="404.html"><span>404</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End mainmenu-area -->
        <!-- Start mobile menu -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 np">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="nav">
                                    <li><a class="home" href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html"><span>Home2</span></a></li>
                                            <li><a href="index-3.html"><span>Home3</span></a></li>
                                            <li><a href="index-4.html"><span>Home4</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="shop-grid.html">shop</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-non-sidebar.html">Blog non sidebar</a></li>
                                            <li><a href="single-blog.html">Single blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html"><span>About us</span></a></li>
                                            <li><a href="blog.html"><span>Blog</span></a></li>
                                            <li><a href="blog-non-sidebar.html"><span>blog non sidebar</span></a></li>
                                            <li><a href="single-blog.html"><span>single blog</span></a></li>
                                            <li><a href="shop-grid.html"><span>shop grid</span></a></li>
                                            <li><a href="shop-list.html"><span>shop list</span></a></li>
                                            <li><a href="single-product.html"><span>single product</span></a></li>
                                            <li><a href="cart.html"><span>cart</span></a></li>
                                            <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                            <li><a href="checkout.html"><span>checkout</span></a></li>
                                            <li><a href="contact-us.html"><span>contact us</span></a></li>
                                            <li><a href="404.html"><span>404</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End mobile menu -->
    </header>
    <!-- End header -->
    <!-- Start categori and slider -->
    <div class="categori-and-slider">
        <div class="container">
            <div class="row">
                <!-- Start categori -->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="categori-menu">
                        <div class="sidebar-menu-title">
                            <h2><i class="fa fa-th-list"></i>Categories</h2>
                        </div>
                        <div class="sidebar-menu">
                            <ul>
                                <li><a href="shop-grid.html">Automotive & Motorcycle</a>
                                    <div class="megamenudown-sub">
                                        <div class="mega-top">
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>electronic</span></a>
                                                <a href="shop-grid.html"><span>Camera & Camcorders</span></a>
                                                <a href="shop-grid.html"><span>Electronic</span></a>
                                                <a href="shop-grid.html"><span>Cosmetic</span></a>
                                                <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                                <a href="shop-grid.html"><span>Laptop & Computer</span></a>
                                                <a href="shop-grid.html"><span>Phasellus laoreet</span></a>
                                            </div>
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>electronic</span></a>
                                                <a href="shop-grid.html"><span>Camera & Camcorders</span></a>
                                                <a href="shop-grid.html"><span>Electronic</span></a>
                                                <a href="shop-grid.html"><span>Cosmetic</span></a>
                                                <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                                <a href="shop-grid.html"><span>Laptop & Computer</span></a>
                                                <a href="shop-grid.html"><span>Phasellus laoreet</span></a>
                                            </div>
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>laptop</span></a>
                                                <a href="shop-grid.html"><span>Phasellus laoreet</span></a>
                                                <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                                <a href="shop-grid.html"><span>Electronic</span></a>
                                                <a href="shop-grid.html"><span>Cosmetic</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Electronics</a>
                                    <div class="megamenudown-sub">
                                        <div class="mega-top">
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html"
                                                   class="title"><span>camera & camcorder</span></a>
                                                <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                                <a href="shop-grid.html"><span>Laptop & Computer</span></a>
                                                <a href="shop-grid.html"><span>Camera</span></a>
                                            </div>
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>Medical</span></a>
                                                <a href="shop-grid.html"><span>Camera</span></a>
                                                <a href="shop-grid.html"><span>Camcorders</span></a>
                                                <a href="shop-grid.html"><span>Camera & Camcorders</span></a>
                                            </div>
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>Healthcare</span></a>
                                                <a href="shop-grid.html"><span>Medical</span></a>
                                                <a href="shop-grid.html"><span>Healthcare</span></a>
                                                <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html">Sports & Outdoors</a>
                                    <div class="megamenudown-sub">
                                        <div class="mega-top">
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>category 1</span></a>
                                                <a href="shop-grid.html"><span>day</span></a>
                                                <a href="shop-grid.html"><span>evening</span></a>
                                                <a href="shop-grid.html"><span>night</span></a>
                                            </div>
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>category 2</span></a>
                                                <a href="shop-grid.html"><span>kids</span></a>
                                                <a href="shop-grid.html"><span>men</span></a>
                                                <a href="shop-grid.html"><span>Women</span></a>
                                            </div>
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html" class="title"><span>category 3</span></a>
                                                <a href="shop-grid.html"><span>clothing</span></a>
                                                <a href="shop-grid.html"><span>Accessories</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html">Smartphone & Tablets</a>
                                    <div class="megamenudown-sub mini">
                                        <div class="mega-top">
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html"><span>category 1</span></a>
                                                <a href="shop-grid.html"><span>category 2</span></a>
                                                <a href="shop-grid.html"><span>category 3</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html">Health & Beauty</a>
                                    <div class="megamenudown-sub mini">
                                        <div class="mega-top">
                                            <div class="mega-item-menu">
                                                <a href="shop-grid.html"><span>category 1</span></a>
                                                <a href="shop-grid.html"><span>category 2</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html" class="single-menu">Bags, Shoes & Accessories</a></li>
                                <li><a href="shop-grid.html" class="single-menu">Computers & Networking</a></li>
                                <li><a href="shop-grid.html" class="single-menu">Laptops & Accessories</a></li>
                                <li><a href="shop-grid.html" class="single-menu">Entertainment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End categori -->
                <!-- Start slider -->
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div class="slider-area">
                        <div id="slider" class="nivoSlider">
                            <img style="display:none" src="img/home-4/slider/7.jpg" data-thumb="img/home-4/slider/7.jpg"
                                 alt="" title="#htmlcaption7"/>
                            <img style="display:none" src="img/home-4/slider/8.jpg" data-thumb="img/home-4/slider/8.jpg"
                                 alt="" title="#htmlcaption8"/>
                        </div>
                        <div id="htmlcaption7" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                            <div class="pos-slideshow-info pos-slideshow-info7">
                                <div class="container">
                                    <div class="pos_description hidden-xs hidden-sm">
                                        <div class="title1"><span class="txt"><strong>Dream</strong> soluton</span>
                                        </div>
                                        <div class="title2"><span class="txt">For every type of sleeper</span></div>
                                        <div class="pos-slideshow-readmore">
                                            <a href="http://bootexperts.com/" title="Shop now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="htmlcaption8" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                            <div class="pos-slideshow-info pos-slideshow-info8">
                                <div class="container">
                                    <div class="pos_description hidden-xs hidden-sm">
                                        <div class="title1"><span class="txt"><strong>Dream</strong> soluton</span>
                                        </div>
                                        <div class="title2"><span class="txt">For every type of sleeper</span></div>
                                        <div class="pos-slideshow-readmore">
                                            <a href="http://bootexperts.com/" title="Shop now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End slider -->
            </div>
        </div>
    </div>
    <!-- End categori and slider -->
    <!-- Start two banner area -->
    <div class="two-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="banner-left">
                        <div class="banner-image">
                            <a href="#">
                                <img src="img/home-4/banner/cms41.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="banner-right">
                        <div class="banner-image">
                            <a href="#">
                                <img src="img/home-4/banner/cms42.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="banner-right">
                        <div class="banner-image">
                            <a href="#">
                                <img src="img/home-4/banner/cms43.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End two banner area -->
    <!-- Start featured product -->
    <div class="featured-product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="area-title">
                        <h3>Featured Products</h3>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="featured-item">
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$16.51</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/blouse.jpg" alt="">
                                    </a>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Blouse</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$27.00</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$26.00</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$50.00</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-summer-dress5.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$28.00</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-summer-dress6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$30.00</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$16.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress8.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$16.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress9.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$16.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress10.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$306.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress11.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$26.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress12.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$26.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress13.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$120.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress14.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$20.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress15.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$30.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress16.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$200.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        <!-- Start featured item -->
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="img/home-4/product/printed-chiffon-dress17.jpg" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                    </p>
                                    <span class="price">$200.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End featured product -->
    <!-- Start categori area -->
    <div class="categori-area">
        <div class="container">
            <div class="row">
                <!-- Start categori slide product -->
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="categori-slide-product">
                        <div class="slide-product-title">
                            <h3>sale off</h3>
                        </div>
                        <div class="slide-product">
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-summer-dress1.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-5%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress3.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">printed chiffon dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress5.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End slide product item -->
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress2.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress4.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress6.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End slide product item -->
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress7.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress11.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress10.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End slide product item -->
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress8.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress4.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product-mini/printed-chiffon-dress12.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End slide product item -->
                        </div>
                    </div>
                </div>
                <!-- End categori slide product -->
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <!-- Start popular tab categori -->
                    <div class="popular-tab-categori">
                        <div class="container-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="area-title">
                                        <h3>Popular categories</h3>
                                    </div>
                                </div>
                                <div id="content" class="tab-menu-slide">
                                    <ul id="tabs" class="popular-tab-menu" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#tab1" data-toggle="tab">
                                                <i class="fa fa-laptop"></i>
                                                <h3>Electronic</h3>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab">
                                                <i class="fa fa-mobile"></i>
                                                <h3>Cosmetic</h3>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab">
                                                <i class="fa fa-plug"></i>
                                                <h3>Medical & Healthcare</h3>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab4" data-toggle="tab">
                                                <i class="fa fa-microphone"></i>
                                                <h3>Laptop & Computer</h3>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab5" data-toggle="tab">
                                                <i class="fa fa-gamepad"></i>
                                                <h3>Phasellus laoreet</h3>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="my-tab-content" class="tab-content row">
                                        <!-- Start popular tab product -->
                                        <div class="tab-pane active" id="tab1">
                                            <div class="popular-tab-product-4 featured-product-area">
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Faded Short Sleeves
                                                                T-shirt</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.51</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Blouse</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$27.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$50.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$28.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$306.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$120.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$20.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                            </div>
                                        </div>
                                        <!-- End popular tab product -->
                                        <!-- Start popular tab product -->
                                        <div class="tab-pane" id="tab2">
                                            <div class="popular-tab-product-4 featured-product-area">
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$28.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Faded Short Sleeves
                                                                T-shirt</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.51</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Blouse</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$27.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$50.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$306.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$120.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$20.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                            </div>
                                        </div>
                                        <!-- End popular tab product -->
                                        <!-- Start popular tab product -->
                                        <div class="tab-pane" id="tab3">
                                            <div class="popular-tab-product-4 featured-product-area">
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$306.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Faded Short Sleeves
                                                                T-shirt</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.51</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Blouse</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$27.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$50.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$28.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$120.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$20.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                            </div>
                                        </div>
                                        <!-- End popular tab product -->
                                        <!-- Start popular tab product -->
                                        <div class="tab-pane" id="tab4">
                                            <div class="popular-tab-product-4 featured-product-area">
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$20.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Faded Short Sleeves
                                                                T-shirt</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.51</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Blouse</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$27.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$50.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$28.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$306.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$120.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                            </div>
                                        </div>
                                        <!-- End popular tab product -->
                                        <!-- Start popular tab product -->
                                        <div class="tab-pane" id="tab5">
                                            <div class="popular-tab-product-4 featured-product-area">
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Faded Short Sleeves
                                                                T-shirt</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.51</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Blouse</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$27.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$50.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$28.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Summer Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.00</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$16.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$306.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$26.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$120.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$20.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$30.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                <!-- Start featured item -->
                                                <div class="col-sm-3">
                                                    <div class="featured-inner">
                                                        <div class="featured-image">
                                                            <a href="single-product.html">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <p class="reating">
                                                                        <span class="rate">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                            </p>
                                                            <span class="price">$200.40</span>
                                                            <div class="featured-button">
                                                                <a href="wishlists.html" class="wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="#" class="fetu-comment"><i
                                                                        class="fa fa-signal"></i></a>
                                                                <a href="cart.html" class="add-to-card"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                            </div>
                                        </div>
                                        <!-- End popular tab product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End popular tab categori -->
                </div>
            </div>
        </div>
    </div>
    <!-- End categori area -->
    <!-- Start purches progress -->
    <div class="purches-progress-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="area-title">
                        <h3>Purchase progress</h3>
                    </div>
                </div>
                <div class="progress-area">
                    <div class="col-sm-3">
                        <div class="progrtee-box icon">
                            <h4>step 1</h4>
                            <p>select your items</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="progrtee-box icon1">
                            <h4>step 1</h4>
                            <p>select your items</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="progrtee-box icon2">
                            <h4>step 1</h4>
                            <p>select your items</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="progrtee-box icon3">
                            <h4>step 1</h4>
                            <p>select your items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End purches progress -->
    <!-- Start two banner area -->
    <div class="two-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="banner-left">
                        <div class="banner-image">
                            <a href="#">
                                <img src="img/home-4/banner/cms44.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-right">
                        <div class="banner-image">
                            <a href="#">
                                <img src="img/home-4/banner/cms45.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End two banner area -->
    <!-- Start camera and cosmatic area -->
    <div class="camera-and-cosmatic-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="area-title">
                        <h3>Camera & Camcorders</h3>
                    </div>
                    <div class="camera-area">
                        <p class="extra-link">
                            <a href="#"><i class="fa fa-bar-chart"></i>10 products here</a>
                            <a href="#"><i class="fa fa-star-o"></i>View more in category</a>
                        </p>
                        <div class="row">
                            <div class="camera-slide featured-product-area">
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/blouse.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-summer-dress5.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-summer-dress6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-chiffon-dress7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-chiffon-dress8.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-chiffon-dress9.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="area-title">
                        <h3>Cosmetic</h3>
                    </div>
                    <div class="cosmatic-area">
                        <p class="extra-link">
                            <a href="#"><i class="fa fa-bar-chart"></i>10 products here</a>
                            <a href="#"><i class="fa fa-star-o"></i>View more in category</a>
                        </p>
                        <div class="row">
                            <div class="camera-slide featured-product-area">
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-summer-dress6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-chiffon-dress7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-chiffon-dress8.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-chiffon-dress9.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/blouse.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                                <!-- Start featured item -->
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="img/home-4/product/printed-summer-dress5.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End camera and cosmatic area -->
    <!-- Start brand and client -->
    <div class="brand-and-client">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="area-title">
                        <h3>BRAND & CLIENTS</h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="brand-logo featured-product-area home4-d">
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/2.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/5.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/6.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End brand and client -->
    <!-- Start blog area -->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="area-title">
                        <h3>The Blog</h3>
                    </div>
                </div>
                <div class="blog-box featured-product-area">
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/4-home-default.jpg" alt=""></a>
                        <span class="blog-date">2015-08-12 04:40:21</span>
                        <div class="blog-info">
                            <h3><a href="single-blog.html">Share the Love for PrestaShop 1.6</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been...</p>
                            <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/3-home-default.jpg" alt=""></a>
                        <span class="blog-date">2015-08-12 04:40:21</span>
                        <div class="blog-info">
                            <h3><a href="single-blog.html">Answers to your Questions about PrestaShop</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been...</p>
                            <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/2-home-default.jpg" alt=""></a>
                        <span class="blog-date">2015-08-12 04:40:21</span>
                        <div class="blog-info">
                            <h3><a href="single-blog.html">What is Bootstrap? � The History and the Hype</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been...</p>
                            <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/1-home-default.jpg" alt=""></a>
                        <span class="blog-date">2015-08-12 04:40:21</span>
                        <div class="blog-info">
                            <h3><a href="single-blog.html">From Now we are certified web agency</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been...</p>
                            <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End blog area -->
    <!-- Start footer -->
    <footer>
        <!-- Start footer top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Start footer top box -->
                    <div class="col-sm-3">
                        <div class="footer-top-box">
                            <i class="fa fa-phone-square"></i>
                            <a href="tel:+-0123-456-789">+ 0(123) 456 789</a>
                            <p>Order by phone</p>
                        </div>
                    </div>
                    <!-- End footer top box -->
                    <!-- Start footer top box -->
                    <div class="col-sm-3">
                        <div class="footer-top-box">
                            <i class="fa fa-clock-o"></i>
                            <span>Working time</span>
                            <p>Mon - sun: 8.00 - 18.00</p>
                        </div>
                    </div>
                    <!-- End footer top box -->
                    <!-- Start footer top box -->
                    <div class="col-sm-3">
                        <div class="footer-top-box">
                            <i class="fa fa-paper-plane"></i>
                            <span>Free shipping</span>
                            <p>on order over $199</p>
                        </div>
                    </div>
                    <!-- End footer top box -->
                    <!-- Start footer top box -->
                    <div class="col-sm-3">
                        <div class="footer-top-box last">
                            <i class="fa fa-history"></i>
                            <span>Money back 100%</span>
                            <p>Within 30 days affter delivery</p>
                        </div>
                    </div>
                    <!-- End footer top box -->
                </div>
            </div>
        </div>
        <!-- End footer top -->
        <!-- Start footer medil -->
        <div class="footer-medil">
            <div class="container">
                <div class="row">
                    <!-- Start footer categori -->
                    <div class="col-sm-8">
                        <div class="footer-categori">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i> Automotive & Motorcycle</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Electronics</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Sports & Outdoors</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Smartphone & Tablets</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Health & Beauty</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Bags, Shoes & Accessories</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Computers & Networking</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Laptops & Accessories</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Entertainment</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End footer categori -->
                    <!-- Start footer search area -->
                    <div class="col-sm-4">
                        <div class="footer-search-area">
                            <h4>Newsletter</h4>
                            <form method="post" action="#">
                                <div class="form-group">
                                    <button class="submitNew" name="submitNewsletter" type="submit">
                                        <i class="fa fa-envelope"></i>
                                    </button>
                                    <input type="text" value="Enter your e-mail" size="18" name="email"
                                           id="newsletter-input" class="inputNew form-control grey newsletter-input">
                                </div>
                            </form>
                            <div class="hiring">
                                <div class="img_in"><img alt="icon" src="img/hire_logo.jpg"></div>
                                <div class="info">
                                    <h4>we�re hiring!</h4>
                                    <p>Click <a href="#">here</a> for more information</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End footer search area -->
                </div>
                <!-- Start footer medil information -->
                <div class="footer-medil-information">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="info-box">
                                <h4>Store Information</h4>
                                <ul>
                                    <li>My Company</li>
                                    <li>Paris - France</li>
                                    <li>0123-456-789</li>
                                    <li><a href="mailto:admin@bootexperts.com">admin@bootexperts.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info-box">
                                <h4>Information</h4>
                                <ul>
                                    <li class="item"><a title="Specials" href="">Specials</a></li>
                                    <li class="item"><a title="New products" href=""> New products</a></li>
                                    <li class="item"><a title="Best sellers" href=""> Best sellers</a></li>
                                    <li class="item"><a title="Contact us" href="contact-us.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info-box">
                                <h4><a href="#">My account</a></h4>
                                <ul>
                                    <li class="item"><a title="Specials" href="">My orders</a></li>
                                    <li class="item"><a title="New products" href=""> My credit slips</a></li>
                                    <li class="item"><a title="Best sellers" href=""> My addresses</a></li>
                                    <li class="item"><a title="Contact us" href="">My personal info</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info-box">
                                <h4>extra link</h4>
                                <ul>
                                    <li class="item"><a title="Specials" href="">gift cards</a></li>
                                    <li class="item"><a title="New products" href="">e- gift cards</a></li>
                                    <li class="item"><a title="Best sellers" href="">corporate gift cards</a></li>
                                    <li class="item"><a title="Contact us" href="">check balance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End footer medil information -->
            </div>
        </div>
        <!-- End footer medil -->
        <!-- Start footer copyright -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2015 <a href="http://bootexperts.com">BootExperts</a>. All rights
                                reserved.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-card pull-right">
                            <img src="img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer copyright -->
    </footer>
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