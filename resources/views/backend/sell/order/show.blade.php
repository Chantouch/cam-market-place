@extends('layouts.backend.app')
@section('content')
    <div class="block-header">
        <h2>COUNTRIES</h2>
    </div>
    <!-- Basic Card -->
    <div class="row clearfix">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
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
                                    <button class="btn btn-default">Print order</button>
                                    <button class="btn btn-default">Print order</button>
                                    <button class="btn btn-default">Print order</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#order_status" data-toggle="tab">
                                            <i class="material-icons">home</i> STATUS <span
                                                    class="badge bg-green">1</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#order_documents" data-toggle="tab">
                                            <i class="material-icons">face</i> DOCUMENTS <span
                                                    class="badge bg-info">1</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#shipping" data-toggle="tab">
                                            <i class="material-icons">face</i> SHIPPING <span
                                                    class="badge bg-blue">1</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="order_status">
                                        <b>Select status and update</b>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="status"></label>
                                                        <select name="status" id="status" class="form-control">
                                                            <option value="1">Shipping</option>
                                                            <option value="2">Delivered</option>
                                                            <option value="3">Payment accepted</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-default waves-effect m-t-20">Update status</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="order_documents">
                                        <b>Profile Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="shipping">
                                        <b>Shipping Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                            mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
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
                        PRODUCTS <span class="badge bg-lime">11</span>
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
                        <tr>
                            <th><img src="" alt="Product image"></th>
                            <td>Test product</td>
                            <td>$100.00</td>
                            <td>10</td>
                            <td>90</td>
                            <td>$1000.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@stop