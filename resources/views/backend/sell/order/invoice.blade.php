@extends('layouts.backend.app')
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
@section('content')
   <div class="row clearfix" id="invoice_content">
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
                        <h3 class="pull-right">Order # {!! $order->id !!}</h3>
                        </div>
                        <div class="col-xs-12"><span class="pull-right">Order : {!! $order->created_at !!}</span></div>
                        <div class="col-xs-12"><span class="pull-right">Payment Date: {!! $order->updated_at !!}</span></div>
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
                        Client Name: {!! $order->customer->first_name.' '.strtoupper($order->customer->last_name) !!}<br>
                        <?php
                            $i =1;
                        ?>
                        @foreach($order->customer->addresses as $add)
                            @if(count($order->customer->addresses)==$i)
                                <?php
                                    $br ="";
                                ?>
                            @else
                                <?php $br ="<br/>";?>
                            @endif
                        Address {!! $i !!}: {!! $add->address !!}
                        <?php $i++;?>
                        @endforeach
                    </address>
                </div>
                <div class="col-xs-5">
                    <address>
                        <strong>Invoice Description:</strong><br>
                        {!! $order->customer->phone_number !!}<br>
                        {!! $order->customer->email !!}
                    </address>
                </div>
            </div>
        </div>
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
                                <?php
                                    $total = 0;
                                ?>
                                @foreach ($order->purchase_items as $item)
                                <?php
                                    $sub_total = $item->product->qty * $item->product->price;
                                    $total += $sub_total;
                                ?>
                                <tr>
                                    <td>{!! $item->product->name."-".$item->product->code !!}</td>
                                    <td class="text-center">{!! $item->product->qty !!}</td>
                                    <td class="text-center">$ {!! number_format($item->product->price,2) !!}</td>
                                    <td class="text-right">$ {!! number_format($sub_total,2) !!}</td>
                                </tr>
                                
                                @endforeach
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Total</strong></td>
                                    <td class="thick-line text-right"><strong>$ {!! number_format($total,2) !!}</strong></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="#" id="print_invoice" class="btn btn-primary print_invoice">Print Invoice</a>
            <a href="{!! route('admin.sells.orders.show', [$order->hashid]) !!}" class="btn btn-primary">Back</a>
        </div>
    </div>
   
@stop
@section('script')
<script type="text/javascript">
        $('.print_invoice').click(function(){
            var old_html = $('body').html();
            $('body').html($('#invoice_content').html());
             window.print();
             document.body.innerHTML = old_html;
        });
</script>
@stop
