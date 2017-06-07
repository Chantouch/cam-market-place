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
            <div class="row">
                <!-- Registered-Customers Start -->
                <div class="col-md-12">
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
