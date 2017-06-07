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
                <div class="col-md-12">
                    {!! Form::open(['route' => ['customers.register.account'], 'method' => 'POST']) !!}
                    <div class="new-customers">
                        <h3>NEW CUSTOMERS</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    {{--<label for="first_name" class="control-label"></label>--}}
                                    {!! Form::text('first_name', null, ['class' => 'form-control custom-form','placeholder'=>'First name']) !!}
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    {{--<label for="last_name" class="control-label"></label>--}}
                                    {!! Form::text('last_name', null, ['class' => 'form-control custom-form','placeholder'=>'Last name']) !!}
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" class="custom-form" placeholder="Address"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="custom-select custom-form">
                                    <option>Country</option>
                                    <option>Bangladesh</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="custom-select custom-form">
                                    <option>City</option>
                                    <option>Dhaka</option>
                                    <option>New York</option>
                                    <option>London</option>
                                    <option>Melbourne</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    {{--<label for="phone_number" class="control-label"></label>--}}
                                    {!! Form::text('phone_number', null, ['class' => 'form-control custom-form','placeholder'=>'Phone number']) !!}
                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <select class="custom-select custom-form">
                                    <option>Post Code</option>
                                    <option>012345</option>
                                    <option>0123456</option>
                                    <option>01234567</option>
                                    <option>012345678</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{--<label for="email" class="control-label"></label>--}}
                                    {!! Form::text('email', null, ['class' => 'form-control custom-form','placeholder'=>'Email address']) !!}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {{--<label for="password" class="control-label"></label>--}}
                                    {!! Form::password('password', ['class' => 'form-control custom-form','placeholder'=>'Password']) !!}
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    {{--<label for="password_confirmation" class="control-label"></label>--}}
                                    {!! Form::password('password_confirmation', ['class' => 'form-control custom-form','placeholder'=>'Password confirmation']) !!}
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="checked" name="create-account"/>
                                Sign up for our newsletter!
                            </label>
                            <label>
                                <input type="checkbox" name="billing-address"/>
                                Receive special offers from our partners!
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- <input type="submit" class="custom-form custom-submit no-margin" value="register" /> -->
                                <button class="btn btnContact" type="submit">register</button>
                            </div>
                            <div class="col-sm-6">
                                <!--  <input type="submit" class="custom-form custom-submit no-margin" value="clear" /> -->
                                <button class="btn btnContact" type="submit">clear</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN-AREA END -->
@stop
