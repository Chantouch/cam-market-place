@extends('layouts.backend.app')
@section('style')
    <!-- Sweetalert Css -->
    <link href="{!! asset('plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet"/>
    <style type="text/css">
        .ajax-load {
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
    </style>
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        PRODUCTS LIST
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
                                <li><a href="{!! route('admin.catalogs.products.formImg') !!}">Import Image</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body table-responsive">
                    @if(count($products))
                        <table class="table table-hover" id="product-data">
                            <thead>
                            <tr>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Price (USD)</th>
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
                                <th width="60">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('backend.pages.catalog.product.table')
                            </tbody>
                        </table>
                    @else
                        <p>There is no data here.</p>
                    @endif
                </div>
            </div>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@stop

@section('plugins')
    <!-- SweetAlert Plugin Js -->
    <script src="{!! asset('plugins/sweetalert/sweetalert.min.js') !!}"></script>
    <script src="{!! asset('js/product.page.js') !!}"></script>
@stop

@section('script')
    <script>
        $(document).on('click', '.button', function (e) {
            e.preventDefault();
            let id = $(this).val();
            let route = "/admin/catalogs/products/" + id;
            let token = {'X-CSRF-TOKEN': $("[name='_token']:first").val()};
            swal({
                title: "Window Meeting Deletion",
                text: "Are you absolutely sure you want to delete ? This action cannot be undone." +
                "This will permanently delete, and remove all collections and materials associations.",
                type: "warning",
                showCancelButton: true,
                closeOnConfirm: false,
                confirmButtonText: "Delete",
                confirmButtonColor: "#ec6c62"
            }, function () {
                $.ajax({
                    type: "DELETE",
                    url: route,
                    headers: token
                }).done(function (data) {
                    swal("Window Meeting Deleted!", data, "success");
                    setTimeout(function () {
                        $('table#product-data').find('tr#' + id).fadeOut('slow');
                    }, 1500);
                }).error(function (data) {
                    swal("Oops", data, "error");
                });
            });
        });
    </script>
@stop