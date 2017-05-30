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
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{!! asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>
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
        {{--$('#tags').tagsinput({--}}
            {{--source: {!! $product->tags()->pluck('tags.tags') !!}--}}
        {{--});--}}
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
        function deleteArticle(id) {
            let $con = confirm('Are you sure to delete this image');
            if ($con) {
                $.ajax({
                    url: "/admin/catalogs/products/images/" + id,
                    data: {"_token": "{{ csrf_token() }}"},
                    type: 'DELETE',
                    success: function (result) {
                        console.log(result);
                    }
                });
            }
        }
    </script>
@stop