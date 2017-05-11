<div class="body table-responsive">
    @if(count($countries))
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
            @foreach($countries as $country)
                <tr>
                    <th scope="row">{!! $country->id !!}</th>
                    <td>{!! $country->name !!}</td>
                    <td>{!! $country->code !!}</td>
                    <td>{!! str_limit($country->description, 70) !!}</td>
                    <td>{!! $country->status !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.countries.destroy', $country->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.countries.show', [$country->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.countries.edit', [$country->hashid]) !!}"
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