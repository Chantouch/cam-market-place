<div class="body table-responsive">
    @if(count($languages))
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
            @foreach($languages as $language)
                <tr>
                    <th scope="row">{!! $language->id !!}</th>
                    <td>{!! $language->name !!}</td>
                    <td>{!! str_limit($language->description, 70) !!}</td>
                    <td>{!! Helper::status($language->status) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.settings.languages.destroy', $language->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.settings.languages.show', [$language->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.settings.languages.edit', [$language->hashid]) !!}"
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