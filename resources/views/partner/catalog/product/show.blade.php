@extends('layouts.partner.app')
@section('content')
    <div class="block-header">
        <h2>Product</h2>
    </div>
    <!-- Basic Card -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {!! $product->name !!}
                        <small>{!! $product->code !!}</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{!! route('admin.catalogs.products.create') !!}">Add</a></li>
                                <li><a href="{!! route('admin.catalogs.products.edit', [$product->hashid]) !!}">Edit</a></li>
                                <li>
                                    {!! Form::open(['route' => ['admin.catalogs.products.destroy', $product->hashid], 'method' => 'delete']) !!}
                                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs m-l-15', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <p>
                        {!! $product->description !!}
                    </p>
                    <a href="{!! route('admin.catalogs.products.index') !!}" class="btn btn-primary m-t-15 waves-effect">BACK</a>
                </div>
            </div>
        </div>
    </div>
@stop