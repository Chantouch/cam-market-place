@extends('layouts.backend.app')
@section('style-plugins')
    <!-- Bootstrap Select Css -->
    <link href="{!! asset('backend/plugins/bootstrap-select/css/bootstrap-select.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('plugins/summernote/summernote.css') !!}" rel="stylesheet"/>
    <!-- Dropzone Css -->
    <link href="{!! asset('plugins/dropzone/dropzone.css') !!}" rel="stylesheet">
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
                        EDIT {!! $product->name !!}
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    {!! Form::model($product, ['route' => ['admin.catalogs.products.update', $product->hashid], 'method' => 'patch', 'files'=> true]) !!}
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
    <!-- Dropzone Plugin Js -->
    <script src="{!! asset('plugins/dropzone/dropzone.js') !!}"></script>
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

        $("#language_id").selectpicker({
            allowClear: true
        }).val({!! $product->languages()->pluck('languages.id') !!}).trigger('change');

        $("#category_id").selectpicker({
            allowClear: true
        }).val({!! $product->categories()->pluck('categories.id') !!}).trigger('change');
        $(function () {
            //Dropzone
            Dropzone.options.frmFileUpload = {
                paramName: "file",
                maxFilesize: 10,
                maxFiles: 2000,
                addRemoveLinks: true,
                url: "{!! route('admin.catalogs.products.update', $product->hashid) !!}",
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                headers: {
                    'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                },
                dictRemoveFile: 'Remove',
                success: function (file, response) {
                    console.log(response);
                }
            };
        });
    </script>
@stop