@extends('layouts.front.app')
@section('style')
<style>
.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
@stop
@section('content-area')
 <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Invoice
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-6">
                    <div class="invoice-title">
                        <h2>Your logo here</h2>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="row">
                        <div class="col-xs-12">
                        <h3 class="pull-right">Order # 12345</h3>
                        </div>
                        <div class="col-xs-12"><span class="pull-right">Issued Date:</span></div>
                        <div class="col-xs-12"><span class="pull-right">Payment Date:</span></div>
                    </div>
                </div>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-xs-4">
                    <address>
                    <strong>From:</strong><br>
                        Your Company Name<br>
                        1234 Main Address<br>
                        City,Country
                    </address>
                </div>
                <div class="col-xs-3">
                    <address>
                        <strong>To:</strong><br>
                        Client Name: <br>
                        Address one:<br>
                        Address Two:
                    </address>
                </div>
                <div class="col-xs-5">
                    <address>
                        <strong>Invoice Description:</strong><br>
                        Visa ending **** 4242<br>
                        jsmith@email.com
                    </address>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-right"><strong>Subtotal</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td>BS-200</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">$10.99</td>
                                    <td class="text-right">$10.99</td>
                                </tr>
                                <tr>
                                    <td>BS-400</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">$20.00</td>
                                    <td class="text-right">$60.00</td>
                                </tr>
                                <tr>
                                    <td>BS-1000</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">$600.00</td>
                                    <td class="text-right">$600.00</td>
                                </tr>
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Total</strong></td>
                                    <td class="thick-line text-right"><strong>$670.99</strong></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
