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
                <div class="col-md-4">
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
                <div class="col-md-8">
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
                                <div class="form-group{{ $errors->has('addresses') ? ' has-error' : '' }}">
                                    {{--<label for="last_name" class="control-label"></label>--}}
                                    {!! Form::text('addresses', null, ['class' => 'form-control custom-form','placeholder'=>'Address']) !!}
                                    @if ($errors->has('addresses'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('addresses') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                                    {!! Form::select('country_id', $countries, null, ['class'=>'custom-select custom-form', 'placeholder'=>'---Select Country---']) !!}
                                    @if ($errors->has('country_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                                    {!! Form::select('city_id', [], null, ['class'=>'custom-select custom-form']) !!}
                                    @if ($errors->has('city_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('commune_id') ? ' has-error' : '' }}">
                                    {!! Form::select('commune_id', [], null, ['class'=>'custom-select custom-form']) !!}
                                    @if ($errors->has('commune_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('commune_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
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
                            <div class="col-sm-6">
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
                            <div class="col-sm-6">
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
                                <button class="btn btnContact clear_form" type="button">clear</button>
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            get_child("country_id", "city_id", "/api/cities/");
            get_child("city_id", "commune_id", "/api/communes/");
        });
        $(".clear_form").click(function () {
            $(this).closest('form').find("input[type=text], textarea, select").val("");
            $('select[name="city_id"]').empty();
            $('select[name="city_id"]').append('<option value="">---Please choose country first---</option>');
            $('select[name="commune_id"]').empty();
            $('select[name="commune_id"]').append('<option value="">---Please choose city first---</option>');
        });
    </script>
@stop
