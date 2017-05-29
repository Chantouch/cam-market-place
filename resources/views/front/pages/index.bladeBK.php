@extends('layouts.front.app')
@section('slideshow-area')
    <!-- Start slider -->
    <div class="col-xs-12 col-sm-5 col-md-7">
        <div class="slider-area">
            @if(isset($sliders))
                @if(!empty($sliders))
                    @if(count($sliders->home_slider))
                        <div id="slider-home" class="nivoSlider">
                            <?php $i = 1;?>
                            @foreach($sliders->image_slider as $slider)
                                <img style="display:none" src="{!! asset($slider->img_path.$slider->img_name) !!}"
                                     data-thumb="{!! $slider->img_path.$slider->img_name !!}"
                                     alt="{!! $slider->name !!}"
                                     title="#htmlcaption<?php echo $i;?>"/>
                                <?php
                                $i++;
                                ?>
                            @endforeach
                        </div>
                        <?php $j = 1;?>
                        @foreach($sliders->image_slider as $slider)
                            <div id="htmlcaption<?php echo $j;?>"
                                 class="pos-slideshow-caption nivo-html-caption nivo-caption">
                                <div class="pos-slideshow-info pos-slideshow-info7">
                                    <div class="container">
                                        <div class="pos_description hidden-xs hidden-sm">
                                            {!! $slider->description!!}
                                            <div class="pos-slideshow-readmore">
                                                <a href="{!! $slider->url !!}"
                                                   title="{!! $slider->caption !!}">{!! $slider->caption !!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $j++;?>
                        @endforeach
                    @else
                        <div id="slider-home" class="nivoSlider">
                            <img style="display:none" src="img/home-4/slider/7.jpg" data-thumb="img/home-4/slider/7.jpg"
                                 alt="" title="#htmlcaption7"/>
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
                    @endif
                @endif
            @else
                <div id="slider-home" class="nivoSlider">
                    <img style="display:none" src="img/home-4/slider/7.jpg" data-thumb="img/home-4/slider/7.jpg"
                         alt="" title="#htmlcaption7"/>
                </div>
                <div id="htmlcaption7" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                    <div class="pos-slideshow-info pos-slideshow-info7">
                        <div class="container">
                            <div class="pos_description hidden-xs hidden-sm">
                                <div class="title1"><span class="txt"><strong>Dream</strong> soluton</span></div>
                                <div class="title2"><span class="txt">For every type of sleeper</span></div>
                                <div class="pos-slideshow-readmore">
                                    <a href="http://bootexperts.com/" title="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
<<<<<<< HEAD
</div>
<!-- End slider -->
<div class="col-xs-12 col-sm-3 col-md-2">
    <!-- Start categori slide product -->
    <div class="categori-slide-product home-slide">
        <div class="slide-product-title">
            <h5>SALE OFF</h5>
        </div>
        <div class="slide-product">
            <!-- Start slide product item -->
            <div class="slide-product-item">
                <?php for($i=1;$i<=3;$i++){?>
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
               <?php for($i=4;$i<=6;$i++){?>
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
                <?php for($i=7;$i<=9;$i++){?>
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
                <?php for($i=10;$i<=12;$i++){?>
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
=======
    <!-- End slider -->
    <div class="col-xs-12 col-sm-3 col-md-2">
        <!-- Start categori slide product -->
        <div class="categori-slide-product home-slide">
            <div class="slide-product-title">
                <h5>SALE OFF</h5>
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
>>>>>>> c9aad0fe8c5879a68c5f02e175b802cc99d62dca
            </div>
        </div>
        <!-- End categori slide product -->
    </div>
@stop
@section('content-area')
    <!-- Start two banner area -->
    <div class="two-banner-area">
        <div class="container">
            <div class="row">
                <?php for($i=1;$i<=3;$i++){?>
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
                    <div class="featured-item">
                        <!-- Start featured item -->
                        <?php for($i=1;$i<=17;$i++){?>
                        <div class="col-sm-3">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="{!! url('single_product')!!}">
                                        <img src="{!! asset('img/product/'.$i.'.jpg') !!}" alt="">
                                    </a>
                                </div>
                                <div class="featured-info">
                                    <a href="{!! url('single_product')!!}">Faded Short Sleeves T-shirt</a>
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
                                            to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
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
                                <?php for($i=1;$i<=3;$i++){?>
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
                                <?php for($i=4;$i<=6;$i++){?>
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
                                <?php for($i=7;$i<=9;$i++){?>
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
                                <?php for($i=10;$i<=12;$i++){?>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Faded Short Sleeves
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Blouse</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Faded Short Sleeves
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Blouse</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Faded Short Sleeves
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Blouse</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Faded Short Sleeves
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Blouse</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Faded Short Sleeves
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/blouse.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Blouse</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress5.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-summer-dress6.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Summer
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress7.jpg"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress8.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress9.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress10.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress11.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress12.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress13.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress14.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress15.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress16.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                                            <a href="{!! url('single_product')!!}">
                                                                <img src="img/home-4/product/printed-chiffon-dress17.jpg"
                                                                     alt="">
                                                            </a>
                                                            <span class="price-percent-reduction">-20%</span>
                                                        </div>
                                                        <div class="featured-info">
                                                            <a href="{!! url('single_product')!!}">Printed Chiffon
                                                                Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Faded Short Sleeves T-shirt</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/blouse.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Blouse</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-summer-dress5.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Summer Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-summer-dress6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Summer Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-chiffon-dress7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Chiffon Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-chiffon-dress8.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Chiffon Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-chiffon-dress9.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Chiffon Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-summer-dress6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Summer Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-chiffon-dress7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Chiffon Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-chiffon-dress8.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Chiffon Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-chiffon-dress9.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Chiffon Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/faded-short-sleeves-tshirt1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Faded Short Sleeves T-shirt</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/blouse.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Blouse</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-dress2.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-dress3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Dress</a>
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
                                        <a href="{!! url('single_product')!!}">
                                            <img src="img/home-4/product/printed-summer-dress5.jpg" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="{!! url('single_product')!!}">Printed Summer Dress</a>
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
