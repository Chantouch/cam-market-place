@extends('layouts.backend.app')
@section('style')
    <style>

    </style>
@stop
@section('content')

    <!-- Basic Card -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="clearfix row text-center">
                        <div class="col-md-4">
                            <i class="material-icons">access_time</i>
                            <p class="icon-name">Date: <span>{!! $order->created_at !!}</span></p>
                        </div>
                        <div class="col-md-4">
                            <i class="material-icons">attach_money</i>
                            <p>Total: <span>{!! $order->total !!}</span></p>
                        </div>
                        <div class="col-md-4">
                            <i class="material-icons">book</i>
                            <p>Products: {!! count($order->purchase_items) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ORDER {!! $order->order_reference !!}
                        <small>#{!! $order->id !!}</small>
                    </h2>
                </div>
                <div class="body">
                    <div class="clearfix row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <button class="btn btn-default">Print order</button>
                                        <button class="btn btn-default">

                                        </button>
                                    <button class="btn btn-default">View delivery slip</button>
                                </div>
                            </div>
                            <div class="clearfix row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#order_status" data-toggle="tab">
                                                <i class="material-icons">home</i> STATUS
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#order_documents" data-toggle="tab">
                                                <i class="material-icons">face</i> DOCUMENTS
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#shipping" data-toggle="tab">
                                                <i class="material-icons">face</i> SHIPPING
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="order_status">
                                            <b>Select status and update</b>
                                            {!! Form::model($order, ['route' => ['admin.sells.orders.status', $order->hashid], 'method' => 'patch']) !!}
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="status"></label>
                                                            {!! Form::select('status', $order_status, null, ['class'=>'form-control']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-default waves-effect m-t-20">
                                                        Update status
                                                    </button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="order_documents">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Document</th>
                                                    <th>Number</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <th>05/04/2017</th>
                                                    <th>Invoice</th>
                                                    <th><a href="#">#IN000011</a></th>
                                                    <th>$14.00</th>
                                                    <th>
                                                        <button class="btn btn-default">Add more</button>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="shipping">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Carrier</th>
                                                    <th>Weight</th>
                                                    <th>Shipping cost</th>
                                                    <th>Tracking number</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <th>05/04/2017</th>
                                                    <th>My Carrier</th>
                                                    <th>0.00Kg</th>
                                                    <th>$0.00</th>
                                                    <th>282889SD</th>
                                                    <th>
                                                        <button class="btn btn-default">Add more</button>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CUSTOMER {!! $order->order_reference !!}
                        <small>#{!! $order->id !!}</small>
                    </h2>
                </div>
                <div class="body">
                    <div class="clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div class="clearfix row">
                                        <div>
                                            <span>Email</span><br>
                                            <p>{!! $order->customer->email !!}</p>
                                        </div>
                                        <div>
                                            <span>Account registered</span>
                                            <p>{!! $order->customer->created_at !!}</p>
                                        </div>
                                        <div>
                                            <span>Total Spent for this order:</span>
                                            <br/>
                                            <p class="badge bg-amber">${!! $order->total !!}</p>
                                        </div>
                                        <div>
                                            <span>Valid orders placed</span>
                                            <br>
                                            <p class="badge bg-green">
                                                {!! $count_order !!}
                                            </p>
                                        </div>
                                        <div>
                                            <span>Total spent since registration</span>
                                            <p class="badge bg-amber">${!! $total_pay !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="m-b-10">
                                <a href="{!! route('admin.sells.customers.show', [$order->customer->hashid]) !!}" class="btn btn-block btn-default waves-effect waves-yellow">
                                    View full details
                                </a>
                            </div>
                            <div class="card">
                                <div class="header" style="padding: 2px 10px;">
                                    <h6>Add Private Note </h6>
                                </div>
                                <div class="body">
                                    {!! Form::model($order->customer, ['route' => ['admin.sells.orders.add-update-note', $order->hashid], 'method' => 'patch']) !!}
                                    <div class="clearfix row">
                                        <div class="form-group">
                                            <div class="form-line">
                                                {!! Form::textarea('private_note', null, ['class'=>'form-control','rows'=>'4']) !!}
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-default" type="submit" name="save">Save</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> SHIPPING ADDRESS
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> INVOICE ADDRESS
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    {!! Form::model($order, ['route' => ['admin.sells.orders.status', $order->hashid], 'method' => 'patch']) !!}
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="status"></label>
                                                    {!! Form::select('status', $order_status, null, ['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-default waves-effect m-t-20">Update status
                                            </button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    {!! Form::model($order, ['route' => ['admin.sells.orders.status', $order->hashid], 'method' => 'patch']) !!}
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="status"></label>
                                                    {!! Form::select('status', $order_status, null, ['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-default waves-effect m-t-20">Update status
                                            </button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        PRODUCTS <span class="badge bg-lime">{!! count($order->purchase_items) !!}</span>
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Unit Price</th>
                            <th>Qty</th>
                            <th>Available qty</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($order->purchase_items))
                            @foreach($order->purchase_items as $purchase_item)
                                <tr>
                                    <th>
                                        @if(count($purchase_item->product->images))
                                            @foreach($purchase_item->product->images->take(1) as $image)
                                                <img src="{!! asset($purchase_item->product->img_path.'thumb/'.$image->img_name) !!}"
                                                     alt="{!! $purchase_item->product->name !!}" class="img-thumbnail"
                                                     width="60">
                                            @endforeach
                                        @endif
                                    </th>
                                    <td>{!! $purchase_item->product->name !!}</td>
                                    <td>{!! $purchase_item->product->price !!}</td>
                                    <td>{!! $purchase_item->qty !!}</td>
                                    <td>{!! $purchase_item->product->qty !!}</td>
                                    <td>${!! ($purchase_item->qty*$purchase_item->product->price) !!}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <a href="{!! route('admin.sells.orders.index') !!}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@stop