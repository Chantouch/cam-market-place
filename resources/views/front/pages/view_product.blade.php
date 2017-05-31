@extends('layouts.front.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/xZoom/xzoom.css') !!}" media="all"/>
    <link type="text/css" rel="stylesheet" media="all" href="{!! asset('plugins/xZoom/magnific-popup.css') !!}" />
@stop
@section('slideshow-area')
    <div class="col-xs-12 col-sm-8 col-md-9">
        <!-- Start page content -->
        <div class="single-products">
            <!-- Start single product image -->
            <div class="col-sm-5">
                <div class="single-product-image">
                    <div id="content-eleyas">
                        <div class="featured-image">
                            <img id="img_01" src="images/small/image1.jpg" data-zoom-image="images/large/image1.jpg"/>
                        </div>
                        <div id="gal1">
                            <div class="tab-pane" id="view1">
                                <a href="#" data-image="images/small/image1.jpg"
                                   data-zoom-image="images/large/image1.jpg">
                                    <img id="img_01" src="images/thumb/image1.jpg"/>
                                </a>
                            </div>
                            <div class="tab-pane" id="view2">
                                <a href="#" data-image="images/small/image1.jpg"
                                   data-zoom-image="images/large/image1.jpg">
                                    <img id="img_01" src="images/thumb/image1.jpg"/>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End single product image -->
            <!-- Start single product details -->
            <div class="col-sm-7">
                <div class="single-product-details">
                    <h1>Printed Chiffon Dress</h1>
                    <div class="sin-social">
                        <p>
                            <a class="btn btn-default twitter" href="#"><i class="fa fa-twitter"></i>Tweet</a>
                            <a class="btn btn-default facebook" href="#"><i class="fa fa-facebook"></i>Share</a>
                            <a class="btn btn-default google-plus" href="#"><i class="fa fa-google-plus"></i>Google+</a>
                            <a class="btn btn-default pinterest" href="#"><i class="fa fa-pinterest"></i>Pinterest</a>
                        </p>
                    </div>
                    <p class="rating-and-review">
                        <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i></span>
                        <a href="#">Read reviews (0)</a>
                        <a href="#">Write a review</a>
                    </p>
                    <h2><span>£ 19.81</span></h2>
                    <p><strong>Reference:</strong> demo_1 </p>
                    <p><strong>Condition:</strong> New product </p>
                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                        Accessorize with a straw hat and you're ready for summer!</p>
                    <p class="sin-item"><span class="sin-item-text"> 292 Items </span><span class="sin-item-btn">In stock</span>
                    </p>
                    <form method="post" action="#">
                        <div class="numbers-row">
                            <label>Quantity</label>
                            <input type="number" name="french-hens" id="french-hens">
                            <div class="inc button">+</div>
                            <div class="dec button">-</div>
                        </div>
                    </form>
                    <p class="selector1">
                        <label>Size</label>
                        <select id="selectProductSort1" class="selectProductSort form-control">
                            <option value="position:asc" selected="selected">S</option>
                            <option value="price:asc">M</option>
                            <option value="price:desc">L</option>
                        </select>
                    </p>
                    <p class="selector1">
                        <label>Color</label>
                        <a href="#" title="Orange" class="color orange"></a><a href="#" title="Blue"
                                                                               class="color blue"></a>
                    </p>
                    <p class="buttons_bottom_block no-print" id="add_to_cart">
                        <button class="exclusive" name="Submit" type="submit">
                            <span>Add to cart</span>
                        </button>
                    </p>
                    <p class="sin-adto-cart-bottom">
                        <a href="#"><i class="fa fa-envelope-o"></i>Send to a friend</a>
                        <a href="#"><i class="fa fa-print"></i>Print</a>
                        <a href="#"><i class="fa fa-heart"></i>Add to wishlist</a>
                    </p>
                </div>
            </div>
            <!-- End single product details -->
        </div>
    </div>
@stop
@section('content-area')
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
                                <p class="tab-info-one">Fashion has been creating well-designed collections since 2010.
                                    The brand offers feminine designs delivering stylish separates and statement dresses
                                    which have since evolved into a full ready-to-wear collection in which every item is
                                    a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful
                                    elegance and unmistakable signature style. All the beautiful pieces are made in
                                    Italy and manufactured with the greatest attention. Now Fashion extends to a range
                                    of accessories including shoes, hats, belts and more!</p>
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
                                                <img src="img/product/faded-short-sleeves-tshirt.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-info">
                                            <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                            <span class="price">$16.51</span>
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
                        <h3>16 other products in the same category: </h3>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="featured-item">
                        <!-- Start featured item -->
                        <?php for($i = 1;$i <= 17;$i++){?>
                        <div class="col-sm-3 col-xs-12">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{!! asset('img/product/'.$i.'.jpg') !!}" alt="">
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
                        <?php } ?>
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
@stop