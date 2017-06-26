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
                        Information
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb area -->
    <div class="cart-page-content">
        <div class="container">
            {!! Form::model($profile, ['route' => ['customers.identity.patch'], 'method' => 'patch']) !!}
            <div class="row">
                <div class="col-md-6">
                    {!! Form::label('first_name', 'First Name:') !!}
                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <div class="form-line">
                            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your last name']) !!}
                        </div>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::label('email', 'Email:') !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="form-line">
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your last name']) !!}
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::label('password', 'Password:') !!}
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="form-line">
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter your password']) !!}
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>

                <div class="col-md-6">
                    {!! Form::label('last_name', 'Last Name:') !!}
                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <div class="form-line">
                            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your last name']) !!}
                        </div>
                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::label('dob', 'Date of birth:') !!}
                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <div class="form-line">
                            {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Enter your dob']) !!}
                        </div>
                        @if ($errors->has('dob'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::label('confirm_password', 'Password confirm:') !!}
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="form-line">
                            {!! Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Enter your confirmation password']) !!}
                        </div>
                        @if ($errors->has('confirm_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('confirm_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" m-b-20 pull-right">
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        <a href="{!! route('customers.dashboard') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop