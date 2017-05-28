@extends('layouts.backend.app')
@section('style-plugins')
    <!-- Bootstrap Select Css -->
    <link href="{!! asset('backend/plugins/bootstrap-select/css/bootstrap-select.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('plugins/summernote/summernote.css') !!}" rel="stylesheet"/>
@stop
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


@section('plugins')
    <!-- Select Plugin Js -->
    <script src="{!! asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') !!}"></script>
    <script src="{!! asset('plugins/summernote/summernote.min.js') !!}"></script>

    <script>
        $(document).ready(function () {
            $('#description').summernote({
                height: 250,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                  // set focus to editable area after initializing summernote
            });
            $('#short_description').summernote({
                height: 150,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                  // set focus to editable area after initializing summernote
            });
        });
    </script>
@stop