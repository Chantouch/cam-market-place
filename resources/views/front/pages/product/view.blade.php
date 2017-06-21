@extends('layouts.front.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/xZoom/xzoom.css') !!}" media="all"/>
    <link type="text/css" rel="stylesheet" media="all" href="{!! asset('plugins/xZoom/magnific-popup.css') !!}"/>
@stop
@section('content-area')
    <!-- Start breadcume area -->
    <div class="breadcume-area">
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
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="{!! route('home') !!}" class="home">
                            <i class="fa fa-home"></i>
                        </a>
                        <span class="navigation-pipe">&gt;</span>
                        @foreach($product->categories as $category)
                            <a title="{!! $category->name !!}"
                               href="{!! route('products.category.slug', [$category->slug]) !!}" class="next"
                               target="_blank">
                                {!! $category->name !!}
                            </a>
                            <span class="navigation-pipe">&gt;</span>
                            @if(!empty($category->sub_category))
                                @foreach($category->sub_category as $category)
                                    {{ $loop->first ? '' : ', ' }}
                                    {!! $category->name !!}
                                @endforeach
                            @endif
                        @endforeach
                        {{--Electronics--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->

    <!-- Start single product area -->
    <div class="container">
        <div class="row">
            <div class="single-products">
                <!-- Start single product image -->
                <div class="col-sm-4">
                    <div class="single-product-image">
                        <div id="magnific">
                            @foreach($product->images->take(1) as $image)
                                @if($product->new == 1)
                                    <span class="new-box">
                                            <span class="new-label">New</span>
                                        </span>
                                @endif
                                <img class="xzoom5" id="xzoom-magnific"
                                     src="{!! asset($product->img_path.'small/'.$image->img_name) !!}"
                                     xoriginal="{!! asset($product->img_path.'large/'.$image->img_name) !!}"/>
                            @endforeach
                            <div class="xzoom-thumbs">
                                @foreach($product->images as $image)
                                    <a href="{!! asset($product->img_path.'large/'.$image->img_name) !!}">
                                        <img class="xzoom-gallery5" width="80"
                                             src="{!! asset($product->img_path.'small/'.$image->img_name) !!}"
                                             title="{!! $product->name !!}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single product image -->
                <!-- Start single product details -->
                <div class="col-sm-8">
                    <div class="single-product-details">
                        <h1>{!! $product->name !!}</h1>
                        <div class="sin-social">
                            @include('front.pages.product.share', ['url' =>  route('products.details', [$product->slug])])
                        </div>
                        <p class="rating-and-review">
                                <span>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </span>
                            <a href="#">Read reviews (0)</a>
                            <a href="#">Write a review</a>
                        </p>
                        <h2><span>{!! Helper::currency($product->currency).$product->price !!}</span></h2>
                        <p><strong>Reference:</strong> {!! $product->code !!} </p>
                        <p>
                            <strong>Condition:</strong>
                            @if($product->new == 1)
                                New Product
                            @endif
                        </p>
                        <p>{!! $product->short_description !!}</p>
                        <p class="sin-item"><span class="sin-item-text"> {!! $product->qty !!} Items </span>
                            <span class="sin-item-btn">In stock</span></p>
                        <div class="numbers-row">
                            <label for="qty">Quantity</label>
                            <input type="number" name="french-hens" id="qty" value="1" minlength="1">
                            <div class="inc button">+</div>
                            <div class="dec button">-</div>
                        </div>
                        {{--<p class="selector1">--}}
                        {{--<label for="size">Size</label>--}}
                        {{--<select id="size" class="selectProductSort form-control">--}}
                        {{--<option value="position:asc" selected="selected">S</option>--}}
                        {{--<option value="price:asc">M</option>--}}
                        {{--<option value="price:desc">L</option>--}}
                        {{--</select>--}}
                        {{--</p>--}}
                        {{--<p class="selector1">--}}
                        {{--<label>Color</label>--}}
                        {{--<a href="#" title="Orange" class="color orange"></a>--}}
                        {{--<a href="#" title="Blue" class="color blue"></a>--}}
                        {{--</p>--}}
                        <p class="buttons_bottom_block no-print" id="add_to_cart">
                            {!! Form::open(['route' => ['products.carts.store'], 'method' => 'POST']) !!}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="qty" value="" id="sub_qty">
                            <button class="exclusive" name="submit" type="submit" value="cart">
                                <span>Add to cart</span>
                            </button>
                            {!! Form::close() !!}
                        </p>
                        {!! Form::open(['route' => ['products.wish-lists.store'], 'method' => 'POST']) !!}
                        <p class="sin-adto-cart-bottom">
                            <a href="#" class="wishilist-print-send-friend"><i class="fa fa-envelope-o"></i>Send to a
                                friend</a>
                            <button class="wishilist-print-send-friend"><i class="fa fa-print"></i>Print</button>
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="qty" value="" id="wishlist_qty">
                            <button class="wishilist-print-send-friend" name="submit" type="submit">
                                <i class="fa fa-heart"></i>Add to wishlist
                            </button>
                        </p>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- End single product details -->
            </div>
        </div>
    </div>
    <!-- End single product area -->
    <!-- Start single product info -->
    <div class="container">
        <div class="row">
            <div class="single-product-info">
                <div id="content-product-review">
                    <div class="col-xs-12 col-sm-3">
                        <ul id="tabs" class="review-tab" data-tabs="tabs">
                            <li class="active"><a href="#info1" data-toggle="tab">More info</a></li>
                            <li><a href="#info2" data-toggle="tab">Data sheet</a></li>
                            <li><a href="#info3" data-toggle="tab">accessories</a></li>
                            <li><a href="#info4" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div id="my-tab-content-2" class="tab-content">
                            <div class="tab-pane active" id="info1">
                                <p class="tab-info-one">
                                    {!! $product->description !!}
                                </p>
                            </div>
                            <div class="tab-pane" id="info2">
                                <table class="table-data-sheet">
                                    <tbody>
                                    <tr class="odd">
                                        <td>Compositions</td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Styles</td>
                                        <td>Casual</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Properties</td>
                                        <td>Short Sleeve</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="info3">
                                <div class="tab-info-product">
                                    <!-- Start featured item -->
                                    <div class="featured-inner">
                                        <div class="featured-image">
                                            <a href="single-product.html">
                                                <img src="{!! asset('img/product/faded-short-sleeves-tshirt.jpg') !!}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="featured-info">
                                            <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                            <span class="price">$16.51</span>
                                        </div>
                                    </div>
                                    <!-- End featured item -->
                                    <!-- Start featured item -->
                                    <div class="featured-inner">
                                        <div class="featured-image">
                                            <a href="single-product.html">
                                                <img src="{!! asset('img/product/blouse.jpg') !!}" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-info">
                                            <a href="single-product.html">Blouse</a>
                                            <span class="price">$27.00</span>
                                        </div>
                                    </div>
                                    <!-- End featured item -->
                                    <!-- Start featured item -->
                                    <div class="featured-inner">
                                        <div class="featured-image">
                                            <a href="single-product.html">
                                                <img src="{!! asset('img/product/printed-dress1.jpg') !!}" alt="">
                                            </a>
                                            <span class="price-percent-reduction">-20%</span>
                                        </div>
                                        <div class="featured-info">
                                            <a href="single-product.html">Printed Dress</a>
                                            <span class="price">$26.00</span>
                                        </div>
                                    </div>
                                    <!-- End featured item -->
                                    <!-- Start featured item -->
                                    <div class="featured-inner">
                                        <div class="featured-image">
                                            <a href="single-product.html">
                                                <img src="{!! asset('img/product/printed-dress2.jpg') !!}" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-info">
                                            <a href="single-product.html">Printed Dress</a>
                                            <span class="price">$50.00</span>
                                        </div>
                                    </div>
                                    <!-- End featured item -->
                                    <!-- Start featured item -->
                                    <div class="featured-inner">
                                        <div class="featured-image">
                                            <a href="single-product.html">
                                                <img src="{!! asset('img/product/printed-summer-dress4.jpg') !!}"
                                                     alt="">
                                            </a>
                                            <span class="price-percent-reduction">-20%</span>
                                        </div>
                                        <div class="featured-info">
                                            <a href="single-product.html">Printed Summer Dress</a>
                                            <span class="price">$28.00</span>
                                        </div>
                                    </div>
                                    <!-- End featured item -->
                                    <!-- Start featured item -->
                                    <div class="featured-inner">
                                        <div class="featured-image">
                                            <a href="single-product.html">
                                                <img src="{!! asset('img/product/printed-summer-dress.jpg') !!}" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-info">
                                            <a href="single-product.html">Printed Summer Dress</a>
                                            <span class="price">$30.00</span>
                                        </div>
                                    </div>
                                    <!-- End featured item -->
                                </div>
                            </div>
                            <div class="tab-pane" id="info4">
                                <div class="product-tab-review">
                                    <h5>Good</h5>
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                    <span>eleyas ahmed</span>
                                    <span class="tab-tate-pro">25/11/2015</span>
                                </div>
                                <a href="" class="pro-tab-review"><span>Write your review!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End single product info -->
    <!-- Start featured product -->
    <div class="featured-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="area-title">
                        @if(!$product->categories->isEmpty())
                            @foreach($product->categories->random(1) as $category)
                                <h3>{!! count($category->products) !!} other products in the same category: </h3>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="featured-product">
                    <div class="featured-item">
                        @if(!$product->categories->isEmpty())
                            @foreach($product->categories->random(1) as $category)
                                @foreach($category->products as $product)
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="{!! route('products.details', [$product->slug]) !!}">
                                                    @foreach($product->images->take(1) as $image)
                                                        <img class="img-thumbnail"
                                                             src="{!! asset($product->img_path.'small/'.$image->img_name) !!}"
                                                             title="{!! $product->name !!}">
                                                    @endforeach
                                                </a>
                                            </div>
                                            <div class="featured-info">
                                                <a href="{!! route('products.details', [$product->slug]) !!}">{!! $product->name !!}</a>
                                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                </p>
                                                <span class="price">{!! Helper::currency($product->currency).$product->price !!}</span>
                                                {!! Form::open(['route' => ['products.carts.store'], 'method' => 'POST']) !!}
                                                <div class="featured-button">
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <button class="btn wishlist" name="submit" type="submit"
                                                            value="wishlist">
                                                        <i class="fa fa-heart"></i>
                                                    </button>
                                                    <button class="btn fetu-comment" name="comment" type="button">
                                                        <i class="fa fa-signal"></i>
                                                    </button>
                                                    <button class="btn add-to-card" name="submit" type="submit"
                                                            value="cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to cart</span>
                                                    </button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End featured product -->
@stop

@section('scripts')
    <!-- XZOOM JQUERY PLUGIN  -->
    <script type="text/javascript" src="{!! asset('plugins/xZoom/xzoom.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/xZoom/magnific-popup.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/xZoom/setup.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/quantity.js') !!}"></script>
@stop