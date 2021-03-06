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
                        <a title="My Account" href="{!! route('customers.dashboard') !!}">My account</a>
                        <span class="navigation-pipe">&gt;</span>
                        Shopping cart
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb area -->
    <div class="cart-page-content">
        <div class="container cart">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">Shopping cart</h4>
                    <div class="table-responsive">
                        @if (sizeof(Cart::content()) > 0)
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th width="150">Product Image</th>
                                    <th>Product name</th>
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
                                                    <img class="img-thumbnail"
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
                                        <td>
                                            <div class="cart-price">${!! $item->price !!}</div>
                                        </td>
                                        <td>
                                            <form>
                                                <div class="selectOption">
                                                    <div class="selectParent">
                                                        <select class="quantity" data-id="{!! $item->rowId !!}">
                                                            <option {!! $item->qty == 1 ? 'selected' : '' !!}>1</option>
                                                            <option {!! $item->qty == 2 ? 'selected' : '' !!}>2</option>
                                                            <option {!! $item->qty == 3 ? 'selected' : '' !!}>3</option>
                                                            <option {!! $item->qty == 4 ? 'selected' : '' !!}>4</option>
                                                            <option {!! $item->qty == 5 ? 'selected' : '' !!}>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="cart-subtotal">
                                                ${!! ($item->qty*$item->price) !!}
                                                <input type="hidden" value="{!! $item->qty*$item->price !!}" name="pro_qty">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6 right-left-0">
                                                    {!! Form::open(['route' => ['products.carts.destroy',$item->rowId], 'method' => 'delete', 'class'=>'cart-action']) !!}
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                    {!! Form::open(['route' => ['products.switch.wishlist',$item->rowId], 'method' => 'POST', 'class'=>'cart-action']) !!}
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fa fa-heart"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="table-image"></td>
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                                    <td>${!! Cart::instance('default')->subtotal() !!}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="table-image"></td>
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">Tax</td>
                                    <td>${!! Cart::instance('default')->tax() !!}</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="border-bottom">
                                    <td class="table-image"></td>
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                                    <td class="table-bg">${!! Cart::total() !!}</td>
                                    <td class="column-spacer"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="cartPage-btn">
                                            <ul>
                                                <li><a href="{!! route('home') !!}" class="cbtn">Continue Shopping</a>
                                                </li>
                                                <li>
                                                    {!! Form::open(['route' => ['products.empty.carts'], 'method' => 'delete']) !!}
                                                    {!! csrf_field() !!}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" class="cbtn" value="CLEAR SHOPPING CART">
                                                    {!! Form::close() !!}
                                                </li>
                                                <li><a href="{!! route('customers.checkout') !!}" class="cbtn">CHECK
                                                        OUT</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        @else
                            <h3>You have no items in your shopping cart</h3>
                            <a href="{!! route('home') !!}" class="btn btn-primary btn-lg">Continue Shopping</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End page content -->
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
                    url: '{!! url("/products/carts") !!}' + '/' + id,
                    data: {
                        'quantity': this.value,
                    },
                    success: function (data) {
                        window.location.href = '{!! url('/products/carts') !!}';
                    }
                });
            });
        })();
    </script>
@stop