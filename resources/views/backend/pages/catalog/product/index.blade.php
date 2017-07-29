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
                                <li><a href="{!! route('admin.catalogs.products.codeOutProduct') !!}">Code out of product</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-sm-12 m-t-10">
                        {!! Form::open(['route' => ['admin.catalogs.products.search'], 'method' => 'GET', 'files'=> true]) !!}
                        <div class="col-sm-6">
                            {!! Form::label('show', 'Show:') !!}
                            <div class="form-group" style="margin-bottom: 0;">
                                <div class="form-line">
                                    {!! Form::select('show',[10=>10,25=>25,30=>30,40=>40,50=>50] , null, ['class' => 'form-control', 'data-live-search' => 'true']) !!}
                                </div>
                                @if ($errors->has('show'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('show') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('search', 'Search:') !!}
                            <div class="form-group{{ $errors->has('search') ? ' has-error' : '' }}" style="margin-bottom: 0;">
                                <div class="form-line">
                                    {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Enter your product name']) !!}
                                </div>
                                @if ($errors->has('search'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('search') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
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
                <p><img src="{!! asset('images/xloading.gif') !!}">Loading More post</p>
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
                title: "Window Delete Product",
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
                    swal("Windows Deleted Product!", data, "success");
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