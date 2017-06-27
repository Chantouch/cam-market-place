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
                                    <h1 class="tag-title">
                                        @if($address->alias != null){!! $address->alias !!}@else My address @endif
                                    </h1>
                                    <hr/>
                                    <p>{!! $address->first_name. ' ' .$address->last_name !!}</p>
                                    <p>{!! $address->company !!}</p>
                                    <p>{!! $address->vat_number !!}</p>
                                    <p>{!! $address->address_complement !!}</p>
                                    <p>{!! $address->zip_postal_code. ' ' .Helper::relationship($address->city) !!}</p>
                                    <p>{!! Helper::relationship($address->country) !!}</p>
                                    <p>{!! $address->phone !!}</p>
                                    <br/>
                                    <div class="row">
                                        {!! Form::open(['route' => ['customers.addresses.destroy', $address->hashid], 'method' => 'delete']) !!}
                                        <div class="col-md-6">
                                            <a href="{!! route('customers.addresses.edit', [$address->hashid]) !!}"
                                               class="btn btn-block btn-primary">Update</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-block btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-md-12 m-t-20">
                    <a href="{!! route('customers.addresses.create') !!}"
                       class="btn btn-block btn-primary">Create new address</a>
                </div>
            </div>
        </div>
    </div>
@stop