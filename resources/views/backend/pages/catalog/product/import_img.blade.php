@extends('layouts.backend.app')
@section('style-plugins')
    <!-- Bootstrap Select Css -->
    <link href="{!! asset('backend/plugins/bootstrap-select/css/bootstrap-select.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('plugins/summernote/summernote.css') !!}" rel="stylesheet"/>
    <!-- Bootstrap Tagsinput Css -->
    <link href="{!! asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}" rel="stylesheet">

    <style>
        input[type="file"] {
            display: block;
        }

        .imageThumb {
            max-height: 75px;
            border: 2px solid;
            padding: 1px;
            cursor: pointer;
        }

        .pip, .img {
            display: inline-block;
            margin: 10px 10px 0 0;
        }

        .remove {
            display: block;
            background: #444;
            border: 1px solid black;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .remove:hover {
            background: white;
            color: black;
        }

        .tagsinput-area .bootstrap-select {
            display: none !important;
        }
    </style>
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD NEW PRODUCT
                    </h2>
                </div>
                <div class="body">
                    {!! Form::open(['route' => ['admin.catalogs.products.postImport'], 'method' => 'POST', 'files'=> true]) !!}

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
                            <a href="{!! route('admin.catalogs.products.get.sample') !!}"
                               class="btn btn-primary waves-effect">
                                GET SAMPLE
                            </a>
                        </div>
                    </div>

                    {!! Form::close() !!}
                    <img src="{!! asset('img/product-upload-sample.png') !!}" alt="Product upload sampel"
                         class="img-responsive">
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
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{!! asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>

    <script src="{!! asset('js/quantity.js') !!}"></script>

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
        $(document).ready(function () {
            $(".remove").click(function () {
                $(this).parent(".img").remove();
            });
            if (window.File && window.FileList && window.FileReader) {
                $("#img_name").on("change", function (e) {
                    let files = e.target.files,
                        filesLength = files.length;
                    for (let i = 0; i < filesLength; i++) {
                        let f = files[i];
                        let fileReader = new FileReader();
                        fileReader.onload = (function (e) {
                            let file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove image</span>" +
                                "</span>").insertAfter("#img_name");
                            $(".remove").click(function () {
                                $(this).parent(".pip").remove();
                            });

                            // Old code here
                            /*$("<img></img>", {
                             class: "imageThumb",
                             src: e.target.result,
                             title: file.name + " | Click to remove"
                             }).insertAfter("#img_name").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
@stop