@extends('layouts.front.app')
@section('style')
    <style>
        .accordion_container {
            width: 100%;
            padding: 1em;
        }

        .accordion_head {
            background-color: #FFF;
            color: #555;
            cursor: pointer;
            font-family: arial;
            font-size: 14px;
            margin: 10px 0 0px 0px;
            padding: 10px 11px;
            font-weight: bold;
            border: 1px solid #ddd;
        }

        .accordion_body {
            background: #EEE;
            padding: 1em;
        }

        .accordion_body p {
            padding: 2px 2px;
            margin: 0px;
        }

        .check-mark,
        .question-mark {
            border-style: solid;
            border-width: 1px;
            border-radius: 50%;
            float: right;
            height: 28px;
            line-height: 16px;
            padding: 5px;
            position: relative;
            width: 28px;
            text-align: center;
            top: -4px;
        }

        .check-mark {
            border-color: #c4db30;
            color: #c4db30;
        }

        .question-mark {
            border-color: #086cff;
            color: #086cff;
            font-size: 1.3em;
        }

        .plusminus {
            float: left;
            margin-right: 10px;
        }

        .next-button {
            /* display: none; */
        }
    </style>
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
                    <div class="accordion_container">
                        <div class="row">
                            <div class="col-xs-12 col-md-8 col-lg-8">
                                <div class="accordion_main">
                                    <div class="accordion_head"><span class="updown">&#9660;</span>
                                        PERSONAL INFORMATION
                                        <span class="question-mark" aria-hidden="true">?</span>
                                    </div>
                                    <div class="accordion_body">
                                        @if(!Auth::guard('customer')->check())
                                            <div class="content-info">
                                                <div class="col-md-6">
                                                    <div class="checkout-reg">
                                                        <div class="checkReg commonChack">
                                                            <div class="checkTitle">
                                                                <h6 class="ct-design">CHECKOUT AS A GUEST OR
                                                                    REGISTER</h6>
                                                            </div>
                                                            <p>Register with us forfuture convenience</p>
                                                            <input type="radio" name="checkout_type"><label>Checkout
                                                                as
                                                                Guest</label><br>
                                                            <input type="radio"
                                                                   name="checkout_type"><label>Register</label><br><br>
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
                                            <div class="block-area-button">
                                                <button class="btn btn-default add-tag-btn next-button"
                                                        data-toggle="dropdown" aria-expanded="false">Continue
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="accordion_main">
                                    <div class="accordion_head"><span class="updown">&#9660;</span> ADDRESS INFORMATION
                                        <span class="question-mark" aria-hidden="true">?</span>
                                    </div>
                                    <div class="accordion_body" style="display: none;">
                                        <div class="content-info">
                                            <div class="billing-info" style="margin: 0;">
                                                <p>Select a billing address from your address book or enter a new
                                                    address.</p>
                                                <select>
                                                    <option value="exist">
                                                        {!! isset($user->addresses)==null ? $user->addresses : "You don't have address" !!}
                                                    </option>
                                                    <option value="new">Add New Address</option>
                                                </select>
                                            </div>
                                            <div class="block-area-button">
                                                <button class="btn btn-default add-tag-btn next-button"
                                                        data-toggle="dropdown" aria-expanded="false">Continue
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion_main">
                                    <div class="accordion_head"><span class="updown">&#9660;</span> SHIPPING METHOD
                                        <span
                                                class="question-mark" aria-hidden="true">?</span>
                                    </div>
                                    <div class="accordion_body" style="display: none;">
                                        {{ Form::hidden('shipping_method', '0') }}
                                        {!! Form::checkbox('shipping_method', '1', null, ['class' => 'filled-in', 'id'=> 'shipping_method', 'checked', 'disabled']) !!}
                                        STORE DELIVERY
                                        <p>Free of Charged!</p>
                                        <br>
                                        <div class="block-area-button">
                                            <button class="btn btn-default add-tag-btn next-button"
                                                    data-toggle="dropdown" aria-expanded="false">Continue
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion_main">
                                    <div class="accordion_head"><span class="updown">&#9660;</span> PAYMENT INFORMATION
                                        <span
                                                class="question-mark" aria-hidden="true">?</span>
                                    </div>
                                    <div class="accordion_body" style="display: none;">
                                        {{ Form::hidden('payment_method', '0') }}
                                        {!! Form::checkbox('payment_method', '1', null, ['class' => 'filled-in', 'id'=> 'payment_method', 'checked', 'disabled']) !!}
                                        CASH ON DELIVERY (COD)
                                        <div class="block-area-button">
                                            <button class="btn btn-default add-tag-btn next-button"
                                                    data-toggle="dropdown" aria-expanded="false">Continue
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion_main">
                                    <div class="accordion_head"><span class="updown">&#9660;</span> ORDER OVERVIEW <span
                                                class="question-mark" aria-hidden="true">?</span>
                                    </div>
                                    <div class="accordion_body" style="display: none;">
                                        <div class="content-info">
                                            @if (sizeof(Cart::content()) > 0)
                                                @foreach (Cart::content() as $item)
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="product">
                                                            @if(count($item->model->images))
                                                                @foreach($item->model->images->take(1) as $image)
                                                                    <img class="img-responsive"
                                                                         src="{!! asset($item->model->img_path.'large/'.$image->img_name) !!}"
                                                                         title="{!! $item->model->name !!}">
                                                                @endforeach
                                                            @else
                                                                <img class="img-responsive"
                                                                     src="{!! asset('uploads/product/no-photo-available.jpg') !!}"
                                                                     title="{!! $item->model->name !!}">
                                                            @endif
                                                            <p class="product_name">
                                                                <strong>{!! $item->model->name !!}</strong>
                                                            </p>
                                                            <p>{!! $item->model->short_description !!}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="block-area-button">
                                            <button class="btn btn-default add-tag-btn next-button" type="submit">
                                                Order Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end .col-xs-6 -->
                            <div class="col-xs-12 col-md-4 col-lg-4">
                                <section id="checkout-summary" class="card js-cart"
                                         data-refresh-url="http://lvshoppings.com/cart?ajax=1">
                                    <div class="card-block">
                                        <div class="cart-summary-products">
                                            <p>{!! count(Cart::content()) !!} item</p>
                                            <p>
                                                <a href="javascript:void(0);" data-toggle="collapse"
                                                   data-target="#cart-summary-product-list">
                                                    Show details
                                                </a>
                                            </p>
                                            <div class="collapse" id="cart-summary-product-list">
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
                            <!-- end .col-xs-6 -->
                        </div>
                        <!-- end .accordion_container -->
                    </div>
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
        $('.next').on('click', function () {
            moveTab("Continue");
        });

        $(document).ready(function () {
            $(".accordion_head").click(function () {
                if ($('.accordion_body').is(':visible')) {
                    $(".accordion_body").slideUp(300);
                    $(".updown").text('\u25BC');
                }
                if ($(this).next(".accordion_body").is(':visible')) {
                    $(this).next(".accordion_body").slideUp(300);
                    $(this).children(".updown").text('\u25BC');
                } else {
                    $(this).next(".accordion_body").slideDown(300);
                    $(this).children(".updown").text('\u25B2');
                }
            });
        });

        $(".accordion_body select").change(function () {
            let $this = $(this);
            if ($this.val() === "new") {
                $('.billing-info').empty();
                $('.billing-info').append('<div class="form-group"> {!! Form::text('shipping_address', null, ['class'=> 'form-control', 'placeholder'=>'Enter your shipping address here', 'id'=>'address']) !!} </div>');
            }
        });
        $(".accordion_body input").change(function () {
            nextQuestion($(this));
        });
        $(".next-button").click(function () {
            if ($('input[name="shipping_address"]').length > 0) {
                if ($('input[name="shipping_address"]').val().length > 0) {
                    $(".form-group").removeClass('has-error');
                    $(".form-group span").empty();
                    nextQuestion($(this));
                } else {
                    $(".form-group").addClass('has-error');
                    $(".form-group span").empty();
                    $(".form-group input[name='shipping_address']").focus();
                    $(".form-group").append('<span class="help-block">Please enter your shipping address</span>');
                }
            } else {
                nextQuestion($(this));
            }

        });

    </script>
@stop