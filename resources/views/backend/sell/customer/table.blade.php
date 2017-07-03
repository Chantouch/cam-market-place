<div class="body table-responsive">
    @if(count($customers))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email address</th>
                <th>Sales</th>
                <th>Enabled</th>
                <th>Newsletter</th>
                <th>Registration</th>
                <th>Last visit</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <th scope="row">{!! $customer->id !!}</th>
                    <td>{!! $customer->first_name !!}</td>
                    <td>{!! $customer->last_name !!}</td>
                    <td>{!! $customer->email !!}</td>
                    <td>
                        <span class="badge bg-green">
                            @if(count($customer->purchases))
                                @foreach($customer->purchases as $purchase)
                                    ${!! $purchase->total !!}
                                @endforeach
                            @else
                                -
                            @endif
                        </span>
                    </td>
                    <td>{!! Helper::status($customer->status) !!}</td>
                    <td>{!! $customer->newsletter !!}</td>
                    <td>{!! $customer->created_at !!}</td>
                    <td>{!! $customer->last_visit !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.sells.customers.destroy', $customer->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.sells.customers.show', [$customer->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.sells.customers.edit', [$customer->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">mode_edit</i>
                        </a>
                        {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $customers->render() !!}
    @else
        <p>There is no data here.</p>
    @endif
</div>