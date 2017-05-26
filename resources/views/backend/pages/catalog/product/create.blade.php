@extends('layouts.backend.app')
@section('content')
    {{--<div class="block-header">--}}
        {{--<h2>COUNTRIES</h2>--}}
    {{--</div>--}}
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD NEW PRODUCT
                    </h2>
                </div>
                <div class="body">
                    {!! Form::open(['route' => ['admin.catalogs.products.store'], 'method' => 'POST']) !!}
                    @include('backend.pages.catalog.product.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
@stop