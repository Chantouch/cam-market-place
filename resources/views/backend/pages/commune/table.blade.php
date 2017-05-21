<div class="body table-responsive">
    @if(count($communes))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Code</th>
                <th>City</th>
                <th>Country</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($communes as $commune)
                <tr>
                    <th scope="row">{!! $commune->id !!}</th>
                    <td>{!! $commune->name !!}</td>
                    <td>{!! $commune->code !!}</td>
                    <td>{!! Helper::relationship($commune->city) !!}</td>
                    <td>{!! $commune->city->country->name !!}</td>
                    <td>{!! str_limit($commune->description, 70) !!}</td>
                    <td>{!! Helper::status($commune->status) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.communes.destroy', $commune->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.communes.show', [$commune->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.communes.edit', [$commune->hashid]) !!}"
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
    @else
        <p>There is no data here.</p>
    @endif
</div>