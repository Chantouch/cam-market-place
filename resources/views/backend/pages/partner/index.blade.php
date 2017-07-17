@extends('layouts.backend.app')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        MANAGE YOUR PARTNERS
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Add</a></li>
                                <li><a href="javascript:void(0);">Import</a></li>
                                <li><a href="javascript:void(0);">Export</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @include('backend.pages.partner.table')
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@stop