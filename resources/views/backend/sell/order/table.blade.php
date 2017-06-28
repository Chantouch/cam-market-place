<div class="body table-responsive">
    @if(count($purchase_orders))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Reference</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Date</th>
                <th>PDF</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchase_orders as $order)
                <tr>
                    <th scope="row">{!! $order->id !!}</th>
                    <td>{!! $order->order_reference !!}</td>
                    <td>{!! $order->customer->username !!}</td>
                    <td>$ {!! $order->total !!}</td>
                    <td>{!! Helper::payment($order->payment_method) !!}</td>
                    <td>{!! Helper::payment_status($order->status) !!}</td>
                    <td>{!! $order->created_at !!}</td>
                    <td>{!! $order->pdf !!}</td>
                    <td>
                        <a href="{!! route('admin.sells.orders.show', [$order->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i> View
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $purchase_orders->render() !!}
    @else
        <p>There is no data here.</p>
    @endif
</div>