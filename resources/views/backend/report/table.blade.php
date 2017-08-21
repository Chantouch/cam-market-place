<div class="body table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Date</th>
                <th>Day</th>
                <th>Month</th>
                <th>Year</th>
                <th>Qty</th>
                <th>Amount</th>
                <th>Detail</th>
            </tr>
            </thead>
            <tbody>
                @if(count($report))
                    @foreach($report as $data)
                    <tr>
                        <td>{!! date("d/m/Y",strtotime($data->DateSale)) !!}</td>
                        <td>{!! $data->Day !!}</td>
                        <td>{!! $data->MonthName !!}</td>
                        <td>{!! $data->Year !!}</td>
                        <td>{!! number_format($data->TotalQty,0) !!}</td>
                        <td>{!! number_format($data->TotalPrice,2) !!}</td>
                        <td><a href="{!! route('admin.report.show_detail',$data->DateSale) !!}" class="btn btn-default btn-xs"><i class="material-icons">remove_red_eye</i>View</a></td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
</div>