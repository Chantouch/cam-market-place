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
                        Dashboard
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
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Information</h1>
                            <hr/>
                            <p>Your information we will not share to others and keep it privately.</p>
                            <br/>
                            <a href="{!! route('customers.identity') !!}" class="btn btn-block btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Addresses</h1>
                            <hr/>
                            <p>Multiple address that can make our delivery serve you when selected product and dedicate
                                address to us.</p>
                            <br/>
                            <a href="#" class="btn btn-block btn-primary">Add or Edit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Order History</h1>
                            <hr/>
                            <p>All of what you have ordered we will keep it for you to review and details.</p>
                            <br/>
                            <a href="#" class="btn btn-block btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop