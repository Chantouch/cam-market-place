@extends('layouts.backend.app')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        MANAGE SALE REPORT
                    </h2>
                    <div class="row">
                        <div class="col-sm-12 m-t-10">
                            {!! Form::open(['route' => ['admin.catalogs.products.search'], 'method' => 'GET', 'files'=> true]) !!}
                            <div class="col-sm-3">
                                {!! Form::label('show', 'Category:') !!}
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
                            <div class="col-sm-2">
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
                </div>
                @include('backend.report.table')
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@stop