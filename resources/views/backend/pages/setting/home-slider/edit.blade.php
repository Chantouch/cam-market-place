@extends('layouts.backend.app')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <i class="material-icons m-r-5">settings</i> <span>SLIDE INFORMATION</span>
                    </h2>
                </div>
                <div class="body">
                    {!! Form::model($slider, ['route' => ['admin.home-sliders.update', $slider->hashid], 'method' => 'patch','files'=>'true']) !!}
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