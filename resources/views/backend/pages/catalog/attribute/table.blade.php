<div class="body table-responsive">
    @if(count($attributes))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($attributes as $attribute)
                <tr>
                    <th scope="row">{!! $attribute->id !!}</th>
                    <td>{!! $attribute->name !!}</td>
                    <td>{!! str_limit($attribute->public_name, 70) !!}</td>
                    <td>{!! Helper::status($attribute->status) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.catalogs.attributes.destroy', $attribute->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.catalogs.attributes.show', [$attribute->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.catalogs.attributes.edit', [$attribute->hashid]) !!}"
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