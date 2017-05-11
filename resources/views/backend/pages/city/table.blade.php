<div class="body table-responsive">
    @if(count($cities))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Code</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cities as $city)
                <tr>
                    <th scope="row">{!! $city->id !!}</th>
                    <td>{!! $city->name !!}</td>
                    <td>{!! $city->code !!}</td>
                    <td>{!! str_limit($city->description, 70) !!}</td>
                    <td>{!! $city->status !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.cities.destroy', $city->id], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.cities.show', [$city->id]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.cities.edit', [$city->id]) !!}"
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