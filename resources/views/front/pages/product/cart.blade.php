@extends('layouts.front.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/xZoom/xzoom.css') !!}" media="all"/>
    <link type="text/css" rel="stylesheet" media="all" href="{!! asset('plugins/xZoom/magnific-popup.css') !!}"/>
@stop
@section('content-area')
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        <a title="Automotive & Motorcycle" href="index.html">My account</a>
                        <span class="navigation-pipe">&gt;</span>
                        Shopping cart
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <div class="cart-page-content">
        <div class="container cart">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">Shopping cart</h4>
                    <div class="table-responsive">
                        @if (sizeof(Cart::content()) > 0)
                            <table class="cart-table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Product name</th>
                                    <th></th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td>
                                            <a href="{!! route('products.details', [$item->model->slug]) !!}">
                                                @foreach($item->model->images->take(1) as $image)
                                                    <img class="img-responsive"
                                                         src="{!! asset($item->model->img_path.'large/'.$image->img_name) !!}"
                                                         title="{!! $item->name !!}">
                                                @endforeach
                                            </a>
                                        </td>
                                        <td>
                                            <h6>
                                                <a href="{!! route('products.details', [$item->model->slug]) !!}">{!! $item->name !!}</a>
                                            </h6>
                                        </td>
                                        <td><a href="#">Edit</a></td>
                                        <td>
                                            <div class="cart-price">{!! $item->price !!}</div>
                                        </td>
                                        <td>
                                            <form>
                                                <select class="quantity" data-id="{{ $item->rowId }}">
                                                    <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                                    <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                                    <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                                    <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                                    <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="cart-subtotal">{{ Cart::instance('default')->subtotal() }}</div>
                                        </td>
                                        <td>
                                            <form action="{{ url('carts', [$item->rowId]) }}" method="POST"
                                                  class="side-by-side">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>

                                            <form action="{{ url('switchToWishlist', [$item->rowId]) }}" method="POST"
                                                  class="side-by-side">
                                                {!! csrf_field() !!}
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="table-image"></td>
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                                    <td>${{ Cart::instance('default')->subtotal() }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="table-image"></td>
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">Tax</td>
                                    <td>${{ Cart::instance('default')->tax() }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="border-bottom">
                                    <td class="table-image"></td>
                                    <td style="padding: 40px;"></td>
                                    <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                                    <td class="table-bg">${{ Cart::total() }}</td>
                                    <td class="column-spacer"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="actions">
                                        <div class="cartPage-btn">
                                            <ul>
                                                <li><a href="#" class="cbtn">Continue Shopping</a></li>
                                                <li><a href="#" class="cbtn">UPDATE SHOPPING CART</a></li>
                                                <li><a href="#" class="cbtn">CLEAR SHOPPING CART</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
                            <a href="#" class="btn btn-success btn-lg">Proceed to Checkout</a>

                            <div style="float:right">
                                <form action="{{ url('/emptyCart') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                                </form>
                            </div>
                        @else

                            <h3>You have no items in your shopping cart</h3>
                            <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- start cart discount code area -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="cart-discount-code-area">
                        <h2>Discount codes</h2>
                        <p>Enter your coupon code if you have one.</p>
                        <input type="text">
                        <a href="#">Apply coupon</a>
                    </div>
                </div>
                <!-- End cart discount code area -->
            </div>
            <div class="row">
                <!-- Start Stmate shoping and cart -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="Stmate-shoping-and-cart">
                        <h2>Estimate Shipping and Tax</h2>
                        <p>Enter your destination to get a shipping estimate.</p>
                        <form>
                            <div class="shippingTitle"><p><span>*</span>Country</p></div>
                            <div class="selectOption">
                                <div class="selectParent">
                                    <select>
                                        <option value="">Please Select</option>
                                        <option value="1">Country 1</option>
                                        <option value="2">Country 2</option>
                                        <option value="1">Country 3</option>
                                        <option value="2">Country 4</option>
                                        <option value="1">Country 5</option>
                                        <option value="2">Country 6</option>
                                        <option value="1">Country 7</option>
                                        <option value="2">Country 8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="shippingTitle"><p>State/Province</p></div>
                            <div class="selectOption">
                                <div class="selectParent">
                                    <select>
                                        <option value="">Please Select</option>
                                        <option value="1">Region 1</option>
                                        <option value="2">Region 2</option>
                                        <option value="1">Region 3</option>
                                        <option value="2">Region 4</option>
                                        <option value="1">Region 5</option>
                                        <option value="2">Region 6</option>
                                        <option value="1">Region 7</option>
                                        <option value="2">Region 8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="shippingTitle"><p>Zip/Postal Code</p></div>
                            <div class="selectOption">
                                <input type="text">
                            </div>
                            <button type="submit">Get Quotes</button>
                        </form>
                    </div>
                </div>
                <!-- End Stmate shoping and cart -->
            </div>
        </div>
    </div>
    <!-- End page content -->
@stop

@section('scripts')
    <!-- XZOOM JQUERY PLUGIN  -->
    <script type="text/javascript" src="{!! asset('plugins/xZoom/xzoom.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/xZoom/magnific-popup.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/xZoom/setup.js') !!}"></script>
    <script>
        (function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "PATCH",
                    url: '{{ url("/carts") }}' + '/' + id,
                    data: {
                        'quantity': this.value,
                    },
                    success: function (data) {
                        window.location.href = '{{ url('/carts') }}';
                    }
                });

            });

        })();

    </script>
@stop