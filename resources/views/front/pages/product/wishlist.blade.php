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
    <div class="container">
        <p><a href="{{ route('home') }}">Home</a> / Wishlist</p>
        <h1>Your Wishlist</h1>
        <hr>
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
        @if (sizeof(Cart::instance('wishlist')->content()) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th class="table-image"></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th class="column-spacer"></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach (Cart::instance('wishlist')->content() as $item)
                    <tr>
                        <td class="table-image">
                            <a href="{!! route('products.details', [$item->model->slug]) !!}">
                                @foreach($item->model->images->take(1) as $image)
                                    <img class="img-responsive"
                                         src="{!! asset($item->model->img_path.'large/'.$image->img_name) !!}"
                                         title="{!! $item->name !!}">
                                @endforeach
                            </a>
                        </td>
                        <td><a href="{!! route('products.details', [$item->model->slug]) !!}">{{ $item->name }}</a></td>
                        <td>${{ $item->subtotal }}</td>
                        <td class=""></td>
                        <td>
                            {{--<form action="{{ url('wishlist', [$item->rowId]) }}" method="POST" class="side-by-side">--}}
                            {{--{!! csrf_field() !!}--}}
                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                            {{--<input type="submit" class="btn btn-danger btn-sm" value="Remove">--}}
                            {{--</form>--}}

                            {!! Form::open(['route' => ['products.wish-lists.destroy', $item->rowId], 'method' => 'DELETE']) !!}
                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            {!! Form::close() !!}

                            {{--<form action="{{ url('switchToCart', [$item->rowId]) }}" method="POST" class="side-by-side">--}}
                            {{--{!! csrf_field() !!}--}}
                            {{--<input type="submit" class="btn btn-success btn-sm" value="To Cart">--}}
                            {{--</form>--}}

                            {!! Form::open(['route' => ['products.switch.cart', $item->rowId], 'method' => 'POST']) !!}
                            <button type="submit" class="btn btn-danger btn-sm">To Cart</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="spacer"></div>
            <a href="{!! route('home') !!}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
            <div style="float:right">
                {{--<form action="{{ url('/emptyWishlist') }}" method="POST">--}}
                {{--{!! csrf_field() !!}--}}
                {{--<input type="hidden" name="_method" value="DELETE">--}}
                {{--<input type="submit" class="btn btn-danger btn-lg" value="Empty Wishlist">--}}
                {{--</form>--}}
                {!! Form::open(['route' => ['products.empty.wishlist', $item->rowId], 'method' => 'POST']) !!}
                <button type="submit" class="btn btn-danger btn-sm">Empty Wishlist</button>
                {!! Form::close() !!}
            </div>
        @else
            <h3>You have no items in your Wishlist</h3>
            <a href="{!! route('home') !!}" class="btn btn-primary btn-lg">Continue Shopping</a>
        @endif
        <div class="spacer"></div>
    </div> <!-- end container -->
@stop
@section('scripts')
    <!-- XZOOM JQUERY PLUGIN  -->
    <script type="text/javascript" src="{!! asset('plugins/xZoom/xzoom.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/xZoom/magnific-popup.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/xZoom/setup.js') !!}"></script>
@stop