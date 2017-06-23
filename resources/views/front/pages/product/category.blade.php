@extends('layouts.front.app')
@section('style')

@stop
@section('content-area')
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="{!! route('home') !!}" class="home">
                            <i class="fa fa-home"></i>
                        </a>
                        <span class="navigation-pipe">&gt;</span>
                        {!! $category->name !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start shop area -->
    <div class="shop-area shop">
        <div class="container">
            <div class="row">
                <!-- Start shop categori area -->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="shop-categori-area">
                        <div class="sidebar-menu-title">
                            <h2><i class="fa fa-th-list"></i>Catalog</h2>
                        </div>
                        <div class="shop-categori">
                            <div class="shop-categori-inner">
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Categories</span>
                                    <ul>
                                        @if(isset($categories))
                                            @foreach($categories as $category)
                                                <li>
                                                    <span><input type="checkbox" class="checkbox"></span>
                                                    <label>
                                                        <a href="{!! route('products.category.slug', [$category->slug]) !!}">{!! str_limit($category->name,25) !!}
                                                            <span> ({!! count($category->products) !!})</span></a>
                                                    </label>
                                                    @if(count($category->children))
                                                        @include('front.pages.product.catalog-category',['children' => $category->children])
                                                    @endif
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Availability</span>
                                    <ul>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">
                                                    In stock<span> ({!! count($products->where('qty',!null)) !!})</span>
                                                </a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Condition</span>
                                    <ul>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">
                                                    New<span> ({!! count($products->where('new',1)) !!})</span>
                                                </a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Manufacturer</span>
                                    <ul>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Fashion Manufacturer<span> (17)</span></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Price</span>
                                    <ul>
                                        <li class="price-range">
                                            <label for="amount">Range: <input type="text" id="amount" readonly
                                                                              style="border:0; color:#f6931f; font-weight:bold;"></label>
                                            <div id="slider-range"></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Size</span>
                                    <ul>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">S<span> (17)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">M<span> (17)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">L<span> (17)</span></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Compositions</span>
                                    <ul>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Cotton<span> (3)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Polyester<span> (12)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Viscose<span> (2)</span></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Styles</span>
                                    <ul>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Casual<span> (3)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Dressy<span> (1)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Girly<span> (13)</span></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                                <!-- Start Categori -->
                                <div class="categoris categori-border">
                                    <span class="cat-title">Properties</span>
                                    <ul>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Colorful Dress<span> (1)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Maxi Dress<span> (1)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Midi Dress<span> (11)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Short Dress<span> (2)</span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" class="checkbox"></span>
                                            <label>
                                                <a href="">Short Sleeve<span> (2)</span></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Categori -->
                            </div>
                        </div>
                        <div class="tag-area">
                            <h2 class="tag-title">Tags</h2>
                            <div class="tags">
                                @if(isset($category->tags))
                                    @foreach($category->tags as $tag)
                                        <a href="#">{!! $tag->tags !!}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End shop categori area -->

                <!-- Start categori content -->
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div id="content-shop" class="categori-content">
                        @if(count($category->images))
                            <div class="categori-baner">
                                @foreach($category->images->take(1) as $image)
                                    <img src="{!! asset($category->path.$image->img_name) !!}"
                                         alt="{!! $category->name !!}" class="img-thumbnail">
                                @endforeach
                            </div>
                        @endif
                        <h1 class="page-heading product-listing"><span class="cat-name">{!! $category->name !!}</span>
                            <span class="heading-counter">
                                There are {!! count($items) !!} products.
                            </span>
                        </h1>
                        <!-- Start catagori short -->
                        <div class="catagori-short">
                            <ul id="gridlist" class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#grid" data-toggle="tab"><i class="fa fa-th-large"></i></a>
                                </li>
                                <li><a href="#list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <div class="chose-box">
                                <p class="selector1 hidden-xs">
                                    <label>Sort by</label>
                                    <select class="selectProductSort form-control" id="selectProductSort1">
                                        <option selected="selected" value="position:asc">--</option>
                                        <option value="price:asc">Price: Lowest first</option>
                                        <option value="price:desc">Price: Highest first</option>
                                        <option value="name:asc">Product Name: A to Z</option>
                                        <option value="name:desc">Product Name: Z to A</option>
                                        <option value="quantity:desc">In stock</option>
                                        <option value="reference:asc">Reference: Lowest first</option>
                                        <option value="reference:desc">Reference: Highest first</option>
                                    </select>
                                </p>
                                <p class="selector1 selector2">
                                    <label>Show</label>
                                    <select class="selectProductSort form-control" id="selectProductSort2">
                                        <option selected="selected" value="position:asc">12</option>
                                        <option value="price:asc">24</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <!-- End catagori short -->
                        <div id="my-tab-content" class="tab-content">
                            <!-- Start categori grid view -->
                            <div id="grid" class="tab-pane active categoti-grid-view row">
                                @if(isset($category))
                                    @if(count($items))
                                        @foreach($items as $product)
                                            <div class="col-xs-12 col-sm-6 col-md-4">
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
                                                        <a href="{!! route('products.details', [$product->slug]) !!}">{!! str_limit($product->name, 30) !!}</a>
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
                                                            <input type="hidden" name="name"
                                                                   value="{{ $product->name }}">
                                                            <input type="hidden" name="price"
                                                                   value="{{ $product->price }}">
                                                            <input type="hidden" name="qty" value="1">
                                                            <button class="btn wishlist" name="submit" type="submit"
                                                                    value="wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </button>
                                                            <button class="btn fetu-comment" name="comment"
                                                                    type="button">
                                                                <i class="fa fa-signal"></i>
                                                            </button>
                                                            <button class="btn add-to-card" name="submit" type="submit"
                                                                    value="cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </button>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>There is no product.</p>
                                    @endif
                                @endif
                            </div>
                            <!-- End categori grid view -->
                            <div id="list" class="tab-pane categori-list-view row">
                                @if(isset($category))
                                    @if(count($items))
                                        @foreach($items as $product)
                                            <div class="col-sm-12">
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
                                                        <p class="product-text">
                                                            {!! $product->short_description !!}
                                                        </p>
                                                        <span class="price">{!! Helper::currency($product->currency).$product->price !!}</span>
                                                        {!! Form::open(['route' => ['products.carts.store'], 'method' => 'POST']) !!}
                                                        <div class="featured-button">
                                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                                            <input type="hidden" name="name"
                                                                   value="{{ $product->name }}">
                                                            <input type="hidden" name="price"
                                                                   value="{{ $product->price }}">
                                                            <input type="hidden" name="qty" value="1">
                                                            <button class="btn wishlist" name="submit" type="submit"
                                                                    value="wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </button>
                                                            <button class="btn fetu-comment" name="comment"
                                                                    type="button">
                                                                <i class="fa fa-signal"></i>
                                                            </button>
                                                            <button class="btn add-to-card" name="submit" type="submit"
                                                                    value="cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </button>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>There is no product.</p>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <!-- Start categori show item -->
                        <div class="categori-show-item">
                            <div class="cat-show-item">
                                {!! $items->render() !!}
                                <p>Showing 1 - 8 of 8 items</p>
                            </div>
                            <div class="cat-show-button">
                                <a class="cat-button" href="#"><span>Compare(0)<i class="fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <!-- End categori show item -->
                    </div>
                </div>
                <!-- Start categori content -->
            </div>
        </div>
    </div>
    <!-- End shop area -->
@stop

@section('scripts')
    <script type="text/javascript" src="{!! asset('js/jqueryui.js') !!}"></script>
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [0, 400],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
    </script>
@stop