@extends('layouts.front.app')

@section('content-area')
    <div class="categori-and-slider">
        <div class="container">
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif
            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif
            <div class="row">
                <!-- Start category -->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    @include('layouts.front.menu-left')
                </div>
                <!-- End category -->

                <!-- Start slider -->
                <div class="col-xs-12 col-sm-5 col-md-7">
                    @include('front.pages.slider-area')
                </div>
                <!-- End slider -->

                <!-- Start categori slide product -->
                <div class="col-xs-12 col-sm-3 col-md-2">
                    <div class="categori-slide-product home-slide">
                        <div class="slide-product-title">
                            <h5>SALE OFF</h5>
                        </div>
                        <div class="slide-product">
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <?php for($i = 1;$i <= 3;$i++){?>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="{!! url('single-product') !!}">
                                            <img src="{!! asset('img/product/'.$i.'.jpg') !!}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-5%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="{!! url('single-product') !!}">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <!-- End slide product item -->
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <?php for($i = 4;$i <= 6;$i++){?>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="{!! url('single-product') !!}">
                                            <img src="{!! asset('img/product/'.$i.'.jpg') !!}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-5%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="{!! url('single-product') !!}">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <!-- End slide product item -->
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <?php for($i = 7;$i <= 9;$i++){?>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="{!! url('single-product') !!}">
                                            <img src="{!! asset('img/product/'.$i.'.jpg') !!}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-5%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="{!! url('single-product') !!}">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <!-- End slide product item -->
                            <!-- Start slide product item -->
                            <div class="slide-product-item">
                                <?php for($i = 10;$i <= 12;$i++){?>
                                <div class="item3">
                                    <div class="product-image">
                                        <a href="{!! url('single-product') !!}">
                                            <img src="{!! asset('img/product/'.$i.'.jpg') !!}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-5%</span>
                                    </div>
                                    <div class="product-info">
                                        <a href="{!! url('single-product') !!}">Printed Summer Dress</a>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End categori slide product -->
            </div>
        </div>
    </div>

    <!-- Start two banner area -->
    <div class="two-banner-area">
        <div class="container">
            <div class="row">
                <?php for($i = 1;$i <= 3;$i++){?>
                <div class="col-sm-4">
                    <div class="banner-left">
                        <div class="banner-image">
                            <a href="#">
                                <img src="{!! asset('img/banner/'.$i.'.jpg') !!}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <?php }?>
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
                    @include('front.pages.feature-item')
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
                    @include('front.pages.sale-off')
                </div>
                <!-- End categori slide product -->
                <div class="col-xs-12 col-sm-12 col-md-9">
                    {{--<!-- Start popular tab categori -->--}}
                    @include('front.pages.popular-category')
                    {{--<!-- End popular tab categories -->--}}
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
            @include('front.pages.cam-cos')
        </div>
    </div>
    <!-- End camera and cosmatic area -->
@stop
@section('scripts')
    <script type="text/javascript">
        $('#slider-home').nivoSlider({
            effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown'
            slices: 15,                       // For slice animations
            boxCols: 8,                       // For box animations
            boxRows: 4,                       // For box animations
            animSpeed: "@if(!empty($sliders) ){!! $sliders->speed !!}@endif",                   // Slide transition speed
            pauseTime: "@if(!empty($sliders) ){!! $sliders->speed !!}@endif",                  // How long each slide will show
            startSlide: 0,                    // Set starting Slide (0 index)
            directionNav: true,               // Next & Prev navigation
            controlNav: true,                 // 1,2,3... navigation
            controlNavThumbs: false,          // Use thumbnails for Control Nav, style of image
            pauseOnHover: "@if(!empty($sliders) ){!! $sliders->pause_on_hover !!}@endif",               // Stop animation while hovering
            manualAdvance: false,             // Force manual transitions, auto play
            prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',                 // Prev directionNav text
            nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>',                 // Next directionNav text
            randomStart: true,               // Start on a random slide
            beforeChange: function () {
            },       // Triggers before a slide transition
            afterChange: function () {
            },        // Triggers after a slide transition
            slideshowEnd: function () {
            },       // Triggers after all slides have been shown
            lastSlide: function () {
            },          // Triggers when last slide is shown
            afterLoad: function () {
            }           // Triggers when slider has loaded
        });
    </script>

@stop
