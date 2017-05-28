<div class="body table-responsive">
    @if(count($categories))
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
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{!! $category->id !!}</th>
                    <td>{!! $category->name !!}</td>
                    <td>{!! str_limit($category->description, 70) !!}</td>
                    <td>{!! Helper::status($category->status) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.catalogs.categories.destroy', $category->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.catalogs.categories.show', [$category->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.catalogs.categories.edit', [$category->hashid]) !!}"
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