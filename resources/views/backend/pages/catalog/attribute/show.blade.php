@extends('layouts.backend.app')
@section('content')
    <div class="block-header">
        <h2>ATTRIBUTE</h2>
    </div>
    <!-- Basic Card -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {!! $attribute->name !!} <span
                                class="badge bg-blue-grey">{!! count($attribute->sub_attribute) !!}</span>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{!! route('admin.attributes.create') !!}">Add</a></li>
                                <li><a href="{!! route('admin.attributes.edit', [$attribute->hashid]) !!}">Edit</a></li>
                                <li>
                                    {!! Form::open(['route' => ['admin.attributes.destroy', $attribute->hashid], 'method' => 'delete']) !!}
                                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs m-l-15', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="body table-responsive">
                        @if(!empty($attribute->sub_attribute))
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Value</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attribute->sub_attribute as $attribute)
                                    <tr>
                                        <th scope="row">{!! $attribute->id !!}</th>
                                        <td>{!! $attribute->name !!}</td>
                                        <td>{!! $attribute->position !!}</td>
                                        <td>
                                            {!! Form::open(['route' => ['admin.attributes.destroy', $attribute->hashid], 'method' => 'delete']) !!}
                                            <a href="{!! route('admin.attributes.show', [$attribute->hashid]) !!}"
                                               class='btn btn-default btn-xs'>
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="{!! route('admin.attributes.edit', [$attribute->hashid]) !!}"
                                               class='btn btn-default btn-xs'>
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>There is no data here.</p>
                        @endif
                    </div>
                    <a href="{!! route('admin.attributes.index') !!}"
                       class="btn btn-primary m-t-15 waves-effect">BACK</a>
                </div>
            </div>
        </div>
    </div>
@stop