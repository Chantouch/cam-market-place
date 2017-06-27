@extends('layouts.front.app')
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
                        Address
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb area -->
    <div class="cart-page-content">
        <div class="container">
            <div class="row m-b-30">
                <div class="col-md-12">
                    {{--<h2 class="text-center">Your Dashboard</h2>--}}
                    {!! Form::open(['route' => ['customers.addresses.store'], 'method' => 'POST']) !!}
                    @include('customer.address.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop