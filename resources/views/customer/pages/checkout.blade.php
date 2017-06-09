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
                        <a title="Return to Home" href="{!! route('home') !!}" class="home"><i
                                    class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Checkout
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start checkout content -->
    <div class="checkout checkout-content-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">CHECKOUT</h4>
                </div>
                {!! Form::open(['route' => ['customers.post-checkout'], 'method' => 'POST']) !!}
                <div class="checkout-content">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="checkout-sidebar">
                            <h4>YOUR CHECKOUT PROGRESS</h4>
                            <ul>
                                <li><a href="#">Billing Address</a></li>
                                <li><a href="#">Sipping Address</a></li>
                                <li><a href="#">Shipping Method</a></li>
                                <li><a href="#">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="panel sauget-accordion">
                                <div id="headingOne" role="tab" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a aria-controls="checkoutMethod" aria-expanded="true" href="#checkoutMethod"
                                           data-parent="#accordion" data-toggle="collapse" class="">
                                            <span>1</span> PERSONAL INFO
                                        </a>
                                    </h4>
                                </div>
                                <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse in"
                                     id="checkoutMethod" aria-expanded="true" style="">
                                    @if(!Auth::guard('customer')->check())
                                        <div class="content-info">
                                            <div class="col-md-6">
                                                <div class="checkout-reg">
                                                    <div class="checkReg commonChack">
                                                        <div class="checkTitle">
                                                            <h6 class="ct-design">CHECKOUT AS A GUEST OR REGISTER</h6>
                                                        </div>
                                                        <p>Register with us forfuture convenience</p>
                                                        <input type="radio" name="checkout_type"><label>Checkout as
                                                            Guest</label><br>
                                                        <input type="radio" name="checkout_type"><label>Register</label><br><br>
                                                    </div>
                                                    <div class="regSaveTime commonChack">
                                                        <h6>REGISTER AND SAVE TIME!</h6>
                                                        <p>Register with us for future convenience:</p>
                                                        <ul>
                                                            <li>Fast and easy checkout</li>
                                                            <li>Easy access to your history and status</li>
                                                        </ul>
                                                    </div>
                                                    <a class="checkPageBtn pull-right" href="">CONTINUE</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-login">
                                                    <div class="checkTitle">
                                                        <h6 class="ct-design">Login</h6>
                                                    </div>
                                                    <p class="alrdyReg">ALREADY REGISTERED?</p>
                                                    <p class="plxLogin">Please log in below:</p>
                                                    <div class="loginFrom">
                                                        <p class="plxLoginP"><span>*</span> Email Address</p>
                                                        <input type="text"><br>
                                                        <p class="plxLoginP"><span>*</span> Password</p>
                                                        <input type="text">
                                                        <p class="rqudField">* Required Fields</p>
                                                        <p class="plxLogin">Forgot your password ?</p>
                                                    </div>
                                                    <a class="checkPageBtn pull-right" href="">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="content-info">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="billing-info">
                                                        <form id="logout-form" action="{{ route('customers.logout') }}"
                                                              method="POST"
                                                              style="display: none; visibility: hidden">
                                                            {{ csrf_field() }}
                                                        </form>
                                                        <p>Connected
                                                            as {!! Auth::guard('customer')->user()->first_name !!}</p>
                                                        <p>
                                                            Not you?
                                                            <a href="{!! route('customers.logout') !!}"
                                                               onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();"> Logout
                                                            </a>
                                                        </p>
                                                        <p>if you sign out now, your cart will be emptied</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="panel sauget-accordion">
                                <div id="headingTwo" role="tab" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a aria-controls="billingInformation" aria-expanded="false"
                                           href="#billingInformation" data-parent="#accordion" data-toggle="collapse"
                                           class="collapsed">
                                            <span>2</span> ADDRESS
                                        </a>
                                    </h4>
                                </div>
                                <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse"
                                     id="billingInformation" aria-expanded="false" style="height: 0px;">
                                    <div class="content-info">
                                        <div class="billing-info">
                                            <p>Select a billing address from your address book or enter a new
                                                address.</p>
                                            <select>
                                                <option>Boot Experts, Bonosrie D- Block, Dkaka, 1201, Bangladesh
                                                </option>
                                                <option>Add New Address</option>
                                            </select>
                                            <div class="method-input-box">
                                                <p><input type="radio" name="address" value="address" checked><label>Ship
                                                        to this address</label></p>
                                                <p><input type="radio" name="address" value="dadress"><label>Ship to
                                                        different address</label></p>
                                            </div>
                                            <div class="block-area-button">
                                                <button class="btn btn-default add-tag-btn">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel sauget-accordion">
                                <div id="headingThree" role="tab" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a aria-controls="shippingMethod" aria-expanded="false" href="#shippingMethod"
                                           data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                            <span>3</span> Shipping Method
                                        </a>
                                    </h4>
                                </div>
                                <div aria-labelledby="headingThree" role="tabpanel" class="panel-collapse collapse"
                                     id="shippingMethod" aria-expanded="false">
                                    <div class="content-info">
                                        <div class="shiping-method">
                                            <p>
                                                <small>Flat Rate</small>
                                            </p>
                                            <p>Fixed $40.00</p>
                                            <div class="block-area-button">
                                                <button class="btn btn-default add-tag-btn">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel sauget-accordion">
                                <div id="headingFour" role="tab" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a aria-controls="paymentInformation" aria-expanded="false"
                                           href="#paymentInformation" data-parent="#accordion" data-toggle="collapse"
                                           class="collapsed">
                                            <span>4</span> Payment Information
                                        </a>
                                    </h4>
                                </div>
                                <div aria-labelledby="headingFour" role="tabpanel" class="panel-collapse collapse"
                                     id="paymentInformation" aria-expanded="false">
                                    <div class="content-info">
                                        <div class="checkout-option">
                                            <div class="method-input-box">
                                                <p><input type="radio" name="payment" value="check"><label>Check / Money
                                                        order </label></p>
                                                <p><input type="radio" name="payment" value="card" checked><label>Credit
                                                        Card (saved) </label></p>
                                            </div>
                                            <div class="master-card-info">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Name on Card <sup>*</sup></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="cardtype form-group">
                                                        <label>Credit Card Type</label>
                                                        <select class="form-control">
                                                            <option>--Please Select--</option>
                                                            <option>American Express</option>
                                                            <option>Visa</option>
                                                            <option>MasterCard</option>
                                                            <option>Discover</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Credit Card Number <sup>*</sup></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="expirationdate form-group">
                                                        <label>Expiration Date</label>
                                                        <select class="form-control month-select">
                                                            <option>Month</option>
                                                            <option>01 - January</option>
                                                            <option>02 - February</option>
                                                            <option>03 - March</option>
                                                            <option>04 - April</option>
                                                            <option>05 - May</option>
                                                            <option>06 - June</option>
                                                            <option>07 - July</option>
                                                            <option>08 - August</option>
                                                            <option>09 - September</option>
                                                            <option>10 - October</option>
                                                            <option>11 - November</option>
                                                            <option>12 - December</option>
                                                        </select>
                                                        <select class="form-control year-select">
                                                            <option>Year</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                        </select>
                                                    </div>
                                                    <div class="verificationcard form-group">
                                                        <label>Card Verification Number <sup>*</sup></label>
                                                        <input type="text" class="form-control">
                                                        <a href="#">What is this?</a>
                                                    </div>
                                                </form>
                                                <div class="block-area-button">
                                                    <button class="btn btn-default add-tag-btn">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel sauget-accordion">
                                <div id="headingFive" role="tab" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a aria-controls="orderReview" aria-expanded="false" href="#orderReview"
                                           data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                            <span>5</span> Order Review
                                        </a>
                                    </h4>
                                </div>
                                <div aria-labelledby="headingFive" role="tabpanel" class="panel-collapse collapse"
                                     id="orderReview" aria-expanded="false">
                                    <div class="content-info">
                                        <div class="review-bar">
                                            <div class="col-sm-6">
                                                <div class="product">
                                                    <img alt="Blouse" src="img/product/faded-short-sleeves-tshirt.jpg">
                                                    <p class="product_name"><strong>Blouse</strong></p>
                                                    <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="product-review">
                                                    <label>Quality:</label>
                                                    <p>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </p>
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Title:</label>
                                                            <input type="email" class="form-control"
                                                                   id="exampleInputEmail1" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Comment:</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <section id="checkout-summary" class="card js-cart"
                                 data-refresh-url="http://lvshoppings.com/cart?ajax=1">
                            <div class="card-block">
                                <div class="cart-summary-products">
                                    <p>{!! count(Cart::content()) !!} item</p>
                                    <p>
                                        <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
                                            Show details
                                        </a>
                                    </p>
                                    <div class="collapse" id="cart-summary-product-list">
                                        <div class="media">
                                            <div class="media-left media-top">
                                                <img src="img_avatar1.png" class="media-object" style="width:80px">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media Top</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            </div>
                                        <ul class="media-list">
                                            @foreach (Cart::content() as $item)
                                                <li class="media">
                                                    <div class="media-left">
                                                        <a href="{!! route('products.details', [$item->model->slug]) !!}"
                                                           title="{!! str_limit($item->name,10) !!}">
                                                            @foreach($item->model->images->take(1) as $image)
                                                                <img src="{!! asset($item->model->img_path.'thumb/'.$image->img_name) !!}"
                                                                     title="{!! $item->name !!}">
                                                            @endforeach
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="product-name">{!! $item->name !!}</span>
                                                        <span class="product-quantity">x{!! $item->qty !!}</span>
                                                        <span class="product-price pull-xs-right">{!! Helper::currency($item->model->currency).$item->price !!}</span>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-products">
                                    <span class="label">Subtotal</span>
                                    <span class="value">{{ Helper::currency($item->model->currency).Cart::subtotal() }}</span>
                                </div>
                                <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-shipping">
                                    <span class="label">Shipping</span>
                                    <span class="value">Free</span>
                                </div>
                            </div>
                            <hr>
                            <div class="card-block cart-summary-totals">
                                <div class="cart-summary-line cart-total">
                                    <span class="label">Total (tax excl.)</span>
                                    <span class="value">{{ Helper::currency($item->model->currency).Cart::total() }}</span>
                                </div>
                                <div class="cart-summary-line">
                                    <span class="label sub"></span>
                                    <span class="value sub"></span>
                                </div>
                            </div>
                        </section>
                    </div>
                    <button type="submit">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- End checkout content -->
@stop
@section('scripts')
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
                    url: '{{ url("/products/carts") }}' + '/' + id,
                    data: {
                        'quantity': this.value,
                    },
                    success: function (data) {
                        window.location.href = '{{ url('/products/carts') }}';
                    }
                });
            });
        })();
    </script>
@stop