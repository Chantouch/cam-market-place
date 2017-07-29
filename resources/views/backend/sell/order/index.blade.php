@extends('layouts.backend.app')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ORDERS LIST
                    </h2>
                </div>
                @include('backend.sell.order.table')
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@stop