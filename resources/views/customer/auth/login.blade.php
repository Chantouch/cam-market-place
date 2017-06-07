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
                        Login
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- LOGIN-AREA START -->
    <div class="lognin-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">Login</h4>
                </div>
            </div>
            <div class="row m-b-20">
                <!-- Registered-Customers Start -->
                <div class="col-sm-7 text">
                    <h1 class="wow fadeInLeftBig">Learn to Code in <strong>1 Month</strong></h1>
                    <div class="description wow fadeInLeftBig">
                        <p>
                            We have been working very hard to create the new version of our course.
                            It comes with a lot of new features, easy to follow videos and images. Check it out now!
                        </p>
                    </div>
                    <div class="top-big-link wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#pricing">Our prices</a>
                        <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a>
                    </div>
                </div>
                <div class="col-md-5">
                    {!! Form::open(['route' => ['customers.login.post'], 'method' => 'POST']) !!}
                    <div class="registered-customers">
                        <h3>REGISTERED CUSTOMERS</h3>
                        <div class="registered">
                            <p>If you have an account with us, Please log in.</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        {!! Form::text('email', null,['class'=>'custom-form', 'placeholder'=>'Email Address']) !!}
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        {!! Form::password('password',['class'=>'custom-form', 'placeholder'=>'Password']) !!}
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>
                                            <label class="forgot">
                                                <a href="{{ route('password.request') }}">Forgot our password?</a>
                                            </label>
                                        </p>
                                        <button class="btn btnContact" type="submit">login</button>
                                        <a href="{{ route('customers.register') }}" class="btn btnContact">Register?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- Registered-Customers End -->
            </div>
        </div>
    </div>
    <!-- LOGIN-AREA END -->
@stop

@section('scripts')
    {{--<script src="{!! asset('js/countUp.js') !!}"></script>--}}
    {{--<script type="text/javascript">--}}
    {{--"use strict";--}}
    {{--var count = new countUp("error", 0, 404, 0, 3);--}}
    {{--window.onload = function () {--}}
    {{--// fire animation--}}
    {{--count.start();--}}
    {{--};--}}
    {{--</script>--}}
@stop
