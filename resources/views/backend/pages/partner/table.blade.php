<div class="body table-responsive">
    @if(count($partners))
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
            @foreach($partners as $partner)
                <tr>
                    <th scope="row">{!! $partner->id !!}</th>
                    <td>{!! $partner->first_name !!}</td>
                    <td>{!! $partner->last_name !!}</td>
                    <td>{!! $partner->email !!}</td>
                    <td>
                        <span class="badge bg-green">
                            @if(count($partner->purchases))
                                {!! $partner->purchases->sum('total') !!}
                            @else
                                ---
                            @endif
                        </span>
                    </td>
                    <td>{!! Helper::status($partner->status) !!}</td>
                    <td>{!! $partner->newsletter !!}</td>
                    <td>{!! $partner->created_at !!}</td>
                    <td>{!! $partner->last_visit !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.partners.destroy', $partner->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.partners.show', [$partner->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.partners.edit', [$partner->hashid]) !!}"
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
        {!! $partners->render() !!}
    @else
        <p>There is no data here.</p>
    @endif
</div>