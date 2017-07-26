@extends('layouts.backend.app')
@section('style-plugins')
    <!-- Bootstrap Select Css -->
    <style>

    </style>
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD NEW IMAGES TO PRODUCTS
                    </h2>
                </div>
                <div class="body">
                    {!! Form::open(['route' => ['admin.catalogs.products.importImg'], 'method' => 'POST', 'files'=> true]) !!}
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {!! Form::label('file', 'File:') !!}
                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <div class="form-line">
                                    {!! Form::file('file', ['class' => 'form-control', 'id'=>'file']) !!}
                                </div>
                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-primary waves-effect" name="submit" value="save">
                                SAVE
                            </button>
                            <a href="{!! route('admin.catalogs.products.index') !!}"
                               class="btn btn-primary waves-effect">
                                CANCEL
                            </a>
                            <a href="{!! route('admin.catalogs.products.get.upload-img') !!}"
                               class="btn btn-primary waves-effect">
                                GET SAMPLE
                            </a>
                        </div>
                    </div>

                    {!! Form::close() !!}
                    <img src="{!! asset('img/product-upload-img-sample.png') !!}" alt="Product upload sampel"
                         class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
@stop


@section('plugins')
    <!-- Select Plugin Js -->

    <script>

    </script>
@stop