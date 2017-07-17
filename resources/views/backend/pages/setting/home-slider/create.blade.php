@extends('layouts.backend.app')
@section('content')
    <div class="block-header">
        <h2>COUNTRIES</h2>
    </div>
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD COUNTRY
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
                    {!! Form::open(['route' => ['admin.home-sliders.store'], 'method' => 'POST','files'=>'true']) !!}
                    @include('backend.pages.setting.home-slider.field-slide')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
@stop

@section('script')
    <script>
        $('#img_name').change(function () {
            uploadPreview(this, 'img_preview');
        });
        let value = '<div class="title1"><span class="txt"><strong>Dream</strong> soluton</span></div><div class="title2"><span class="txt">For every type of sleeper</span></div>';
        let description = $("#description");
        $("#default").click(function () {
            if (description.val() !== value) {
                description.val(value);
            }
        })
    </script>
@stop