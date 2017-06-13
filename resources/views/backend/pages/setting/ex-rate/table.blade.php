<div class="body table-responsive">
    @if(count($rates))
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
            @foreach($rates as $rate)
                <tr>
                    <th scope="row">{!! $rate->id !!}</th>
                    <td>{!! $rate->name !!}</td>
                    <td>{!! str_limit($rate->description, 70) !!}</td>
                    <td>{!! Helper::status($rate->status) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.settings.rates.destroy', $rate->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.settings.rates.show', [$rate->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.settings.rates.edit', [$rate->hashid]) !!}"
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