@extends('layouts.backend.app')
@section('style')
    <!-- Sweetalert Css -->
    <link href="{!! asset('plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet"/>
@stop
@section('content')
    {{--<div class="block-header">--}}
    {{--<h2>COUNTRIES</h2>--}}
    {{--</div>--}}
    <!-- Hover Rows -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        PRODUCTS LIST
                        {{--<small>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.--}}
                        {{--</small>--}}
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{!! route('admin.catalogs.products.create') !!}">Add</a></li>
                                <li><a href="{!! route('admin.catalogs.products.formImport') !!}">Import</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @include('backend.pages.catalog.product.table')
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@stop

@section('plugins')
    <!-- SweetAlert Plugin Js -->
    <script src="{!! asset('plugins/sweetalert/sweetalert.min.js') !!}"></script>
@stop

@section('script')
    <script>
        $(document).on('click', '.button', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                    title: "Are you sure to delete this product?",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                },
                function () {
                    $.ajax({
                        type: "DELETE",
                        url: "/admin/catalogs/products/" + id,
                        data: {id: id},
                        dataType: JSON,
                        headers: {'X-CSRF-TOKEN': $("[name='_token']:first").val()},
                        success: function (data) {
                            console.log(data);
                        }
                    }).done(function (data) {
                        swal("Window Product Deleted!", "Window Product was successfully delete.", "success");
                    }).error(function (data) {
                        swal("Product deleted success!", "Window Product was successfully delete.", "success");
                        setTimeout(function () {
                            window.location.reload();
                        }, 1500);
                    });
                });
        });
    </script>
@stop