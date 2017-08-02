@extends('layouts.backend.app')
@section('style')
    <!-- Sweetalert Css -->
    <link href="{!! asset('plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet"/>
@stop
@section('content')
    <!-- Hover Rows -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CITIES LIST
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{!! route('admin.promotions.ads.create') !!}">Add</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @include('backend.promotion.ads.table')
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
            let id = $(this).val();
            let route = "/admin/promotions/ads/" + id;
            let token = {'X-CSRF-TOKEN': $("[name='_token']:first").val()};
            swal({
                title: "Window Ads Deletion",
                text: "Are you sure to delete this ads? You can not restore it back after deleted.",
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
                    swal("Windows Ads Deleted!", data, "success");
                    setTimeout(function () {
                        $('table#ads-data').find('tr#' + id).fadeOut('slow');
                    }, 1500);
                }).error(function (data) {
                    swal("Oops", data, "error");
                });
            });
        });
    </script>
@stop