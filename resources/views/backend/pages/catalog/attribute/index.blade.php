@extends('layouts.backend.app')
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
                        ATTRIBUTE LIST
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
                                <li><a href="{!! route('admin.catalogs.attributes.create') !!}">Add</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @include('backend.pages.catalog.attribute.table')
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@stop