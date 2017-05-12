<div class="body table-responsive">
    @if(count($sliders->image_slider))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Caption</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders->image_slider as $slider)
                <tr>
                    <th scope="row">{!! $slider->id !!}</th>
                    <td width="700">
                        @if(isset($slider))
                            <img src="{!! asset(isset($slider->img_path) ? $slider->img_path. $slider->img_name : 'images/1600x500.png') !!}"
                                 alt="{!! isset($slider->img_name) ? $slider->name : 'Image slide' !!}"
                                 class="img-thumbnail" id="img_preview">
                        @else
                            <img src="{!! asset(isset($slider->img_path) ? $slider->img_path. $slider->img_name : 'images/1600x500.png') !!}"
                                 alt="{!! isset($slider->img_name) ? $slider->name : 'Image slide' !!}"
                                 class="img-thumbnail" id="img_preview">
                        @endif
                    </td>
                    <td>{!! $slider->caption !!}</td>
                    <td>{!! str_limit($slider->description, 70) !!}</td>
                    <td>{!! Helper::status($slider->status) !!}</td>
                    <td>
                        <div class="col-md-2">
                            {!! Form::model($slider, ['route' => ['admin.home-sliders.update', $slider->hashid], 'method' => 'patch','files'=>'true']) !!}
                            @if($slider->status == 1)
                                {!! Form::button('<i class="material-icons">check_box</i>',
                                    ['type' => 'submit', 'class' => 'btn btn-success btn-xs','name' => 'submit_button','value' => 'enable_slide']
                                ) !!}
                            @else
                                {!! Form::button('<i class="material-icons">check_box</i>',
                                    ['type' => 'submit', 'class' => 'btn btn-danger btn-xs','name' => 'submit_button','value' => 'disable_slide']
                                ) !!}
                            @endif
                            {!! Form::close() !!}
                        </div>

                        <div class="col-md-6">
                            {!! Form::open(['route' => ['admin.home-sliders.destroy', $slider->hashid], 'method' => 'delete']) !!}
                            <a href="{!! route('admin.home-sliders.edit', [$slider->hashid]) !!}"
                               class='btn btn-default btn-xs'>
                                <i class="material-icons">mode_edit</i>
                            </a>
                            {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>There is no data here.</p>
    @endif
</div>