@extends('layouts.backend.app')
@section('content')
    <!-- Basic Card -->
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {!! $customer->first_name.' '.$customer->last_name !!}
                        #{!! $customer->id !!}
                    </h2>
                </div>
                <div class="body">
                    <div class="clearfix row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-horizontal">
                                <div class="row">
                                    <label class="control-label col-lg-3">Social Title</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">Mr.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Age</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            Unknown
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Registration Date</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">05/03/2017 14:48:32</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Last Visit</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">05/04/2017 14:01:08</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Best Customer Rank</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Language</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            English (English)
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Registrations</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            <span class="label label-danger">
                                                <i class="icon-remove"></i>
                                                Newsletter
                                            </span>
                                            &nbsp;
                                            <span class="label label-danger">
                                                <i class="icon-remove"></i>
                                                Partner offers
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Latest Update</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">06/29/2017 06:43:31</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-lg-3">Status</label>
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            <span class="label label-success">
                                                <i class="icon-check"></i>
                                                Active
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2>
                        ORDERS <span class="badge bg-lime">{!! count($customer->purchases) !!}</span>
                    </h2>
                </div>
                <div class="body table-responsive">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="material-icons">check</i> Valid orders: <span
                                            class="badge bg-green">9</span>
                                    for a total amount of $1100.90
                                </div>
                                <div class="col-md-6">
                                    <i class="material-icons">info</i> Invalid orders: <span
                                            class="badge bg-red">2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Product</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($customer->purchases))
                            @foreach($customer->purchases as $purchase)
                                <tr>
                                    <th>{!! $purchase->id !!}</th>
                                    <th>{!! $purchase->created_at !!}</th>
                                    <th>{!! Helper::payment($purchase->payment_method) !!}</th>
                                    <th>{!! Helper::payment_status($purchase->status) !!}</th>
                                    <th>{!! count($purchase->purchase_item) !!}</th>
                                    <th>{!! $purchase->total !!}</th>
                                    <th>
                                        <a href="#"><i class="material-icons">visibility</i></a>
                                    </th>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <h2>
                        PURCHASED PRODUCTS <span class="badge bg-lime">{!! count($customer->purchases) !!}</span>
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($customer->purchases))
                            @foreach($customer->purchases as $purchase)
                                <tr>
                                    <th>{!! $purchase->created_at !!}</th>
                                    <th>New Product</th>
                                    <th>12</th>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CUSTOMER {!! $customer->order_reference !!}
                        <small>#{!! $customer->id !!}</small>
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
                                            <p>chantouchsek.cs83@gmail.com</p>
                                        </div>
                                        <div>
                                            <span>Account registered</span>
                                            <p>05/02/2017 11:58:24</p>
                                        </div>
                                        <div>
                                            <span>Valid orders placed</span>
                                            <br>
                                            <p class="badge bg-pink">12</p>
                                        </div>
                                        <div>
                                            <span>Total spent since registration</span>
                                            <p class="badge bg-amber">$2353.23</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="m-b-10">
                                <button class="btn btn-block btn-default waves-effect waves-yellow">
                                    View full details
                                </button>
                            </div>
                            <div class="card">
                                <div class="header" style="padding: 2px 10px;">
                                    <h6>Add Private Note </h6>
                                </div>
                                <div class="body">
                                    <div class="clearfix row">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="private_note" id="private_note" rows="2"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-default" type="submit" name="save">Save</button>
                                        </div>
                                    </div>
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
                                    <b>Home Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                        mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                        aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <b>Profile Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                        mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                        aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
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
                        ADDRESSES <span class="badge bg-lime">{!! count($customer->addresses) !!}</span>
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>Phone Number(s)</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>--</th>
                            <td>Chantouch Sek</td>
                            <td>Phnom Penh</td>
                            <td>Cambodia</td>
                            <td>070375783</td>
                            <td>
                                <a href="#"><i class="material-icons">mode_edit</i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@stop