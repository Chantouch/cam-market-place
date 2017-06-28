<div class="body table-responsive">
    @if(count($histories))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Order reference</th>
                <th>Date</th>
                <th>Total price</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Invoice</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($histories as $history)
                <tr>
                    <th>{!! $history->order_reference !!}</th>
                    <td>{!! $history->created_at !!}</td>
                    <td>{!! $history->total !!}</td>
                    <td>{!! Helper::payment($history->payment_method) !!}</td>
                    <td>{!! $history->status !!}</td>
                    <th>
                        <a href="#"
                           class='btn btn-default btn-xs'>
                            <i class="fa fa-file-pdf-o"></i>
                        </a>
                    </th>
                    <td>
                        <a href="#"
                           class='btn btn-default btn-xs'>
                            <i class="fa fa-info"></i> Details
                        </a>
                        <a href="{!! route('home') !!}"
                           class='btn btn-default btn-xs'>
                            <i class="fa fa-hand-peace-o"></i> Reorder
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>There is no data here.</p>
    @endif
</div>