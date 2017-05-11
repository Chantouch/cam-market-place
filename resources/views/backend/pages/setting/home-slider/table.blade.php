<div class="body table-responsive">
    @if(count($sliders->image_slider))
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
            @foreach($sliders->image_slider as $slider)
                <tr>
                    <th scope="row">{!! $slider->id !!}</th>
                    <td>{!! $slider->name !!}</td>
                    <td>{!! $slider->code !!}</td>
                    <td>{!! str_limit($slider->description, 70) !!}</td>
                    <td>{!! $slider->status !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.home-sliders.destroy', $slider->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.home-sliders.show', [$slider->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.home-sliders.edit', [$slider->hashid]) !!}"
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