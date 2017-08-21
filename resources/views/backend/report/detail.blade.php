@extends('layouts.backend.app')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        SALE DETAIL ON DATE: {!! date('d/m/Y', strtotime($date)) !!}
                    </h2>
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Product Name</th>
                            <th>Product Code</th>
                            <th>Category</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($detail))
                            <?php
                            $qty = 0;
                            $total =0;
                            ?>
                                @foreach($detail as $data)
                                <tr>
                                    <td>{!! date("d/m/Y H:i:s",strtotime($data->updated_at)) !!}</td>
                                    <td>{!! $data->name !!}</td>
                                    <td>{!! $data->code !!}</td>
                                    <td>{!! $data->CateName !!}</td>
                                    <td>{!! number_format($data->TotalQty,0) !!}</td>
                                    <td>{!! number_format($data->TotalPrice,2) !!}</td>
                                </tr>
                                <?php 
                                    $qty += $data->TotalQty;
                                    $total +=$data->TotalPrice;
                                ?>
                                @endforeach
                                <tr>
                                    <td colspan="4" style="text-align: right;">Total:</td>
                                    <td>{!! number_format($qty,0) !!}</td>
                                    <td>{!! number_format($total,2) !!}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="{!! route('admin.report.index') !!}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- #END# Hover Rows -->
@stop