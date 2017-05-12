@extends('layouts.backend.app')
@section('style')
    <!-- Bootstrap Select Css -->
    <link href="{!! asset('backend/plugins/bootstrap-select/css/bootstrap-select.css') !!}" rel="stylesheet"/>
@stop
@section('content')
    {{--<div class="block-header">--}}
    {{--<h2>ATTRIBUTE</h2>--}}
    {{--</div>--}}
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD ATTRIBUTE
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
                    {!! Form::open(['route' => ['admin.attributes.store'], 'method' => 'POST']) !!}
                    @include('backend.pages.catalog.attribute.fields')
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
@stop

@section('script')
    <script>
        $(function () {
            $('#p_name').show();
            $('#color_value').hide();
            $('#attribute_group').change(function () {
                if ($('#attribute_group').val() === '') {
                    $('#p_name').show();
                    $('#color_value').hide();
                } else if ($('#attribute_group').val() === 'color' || $('#attribute_group').val() === 'colour') {
                    {
                        $('#p_name').hide();
                        $('#color_value').show();
                    }
                } else {
                    $('#p_name').hide();
                    $('#color_value').hide();
                }
            });
        });
    </script>
@stop