@extends('layouts.backend.app')
@section('content')
    <div class="block-header">
        <h2>CONFIGURE</h2>
        <small>Home Slider</small>
    </div>
    <!-- Hover Rows -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <i class="material-icons m-r-5">settings</i> <span>SETTINGS</span>
                    </h2>
                </div>
                @if(empty($sliders))
                    <div class="body">
                        {!! Form::open(['route' => ['admin.home-sliders.store'], 'method' => 'POST']) !!}
                        @include('backend.pages.setting.home-slider.field-settings')
                        {!! Form::close() !!}
                    </div>
                @else
                    <div class="body">
                        {!! Form::model($sliders, ['route' => ['admin.home-sliders.update', $sliders->hashid], 'method' => 'patch']) !!}
                        @include('backend.pages.setting.home-slider.field-settings')
                        {!! Form::close() !!}
                    </div>
                @endif
            </div>

            <div class="card">
                <div class="header">
                    <h2>
                        <i class="material-icons m-r-5">list</i> <span>SLIDES LIST</span>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{!! route('admin.home-sliders.create') !!}">Add</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    @if(!empty($sliders))
                        @include('backend.pages.setting.home-slider.table')
                    @else
                        There is no data.
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@stop