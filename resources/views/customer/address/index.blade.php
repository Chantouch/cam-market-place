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
                {{--<h2 class="text-center">Your Dashboard</h2>--}}
                @if(count($addresses))
                    @foreach($addresses as $address)
                        <div class="col-md-4 text-center">
                            <div class="box">
                                <div class="box-content">
                                    <h1 class="tag-title">Information</h1>
                                    <hr/>
                                    <p>Your information we will not share to others and keep it privately.</p>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{!! route('customers.identity') !!}"
                                               class="btn btn-block btn-primary">Update</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{!! route('customers.identity') !!}"
                                               class="btn btn-block btn-primary">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <a href="{!! route('customers.identity') !!}"
                       class="btn btn-block btn-primary">Delete</a>
                @endif
            </div>
        </div>
    </div>
@stop