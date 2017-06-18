<div class="body table-responsive">
    @if(count($categories))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th width="120">Thumbnail</th>
                <th>Name</th>
                <th>Description</th>
                <th>Tags</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $index => $category)
                <tr>
                    <th scope="row">{!! $loop->index+1 !!}</th>
                    <td>
                        @if(count($category->images))
                            @foreach($category->images->take(1) as $image)
                                <img src="{!! asset($category->path.$image->img_name) !!}" alt="{!! $category->name !!}"
                                     class="img-thumbnail">
                            @endforeach
                        @else
                            <img src="{!! asset('img/slider-870x323.jpg') !!}" alt="Thumbnail of category"
                                 class="img-thumbnail">
                        @endif
                    </td>
                    <td>{!! $category->name !!}</td>
                    <td>{!! str_limit($category->description, 70) !!}</td>
                    <td>
                        @foreach($category->tags as $tag)
                            <span class="label label-info">{!! $tag->tags !!}</span>
                        @endforeach
                    </td>
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
        {!! $categories->render() !!}
    @else
        <p>There is no data here.</p>
    @endif
</div>