<div class="body table-responsive">
    @if(count($ads))
        <table class="table table-hover" id="ads-data">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Link</th>
                <th>Owner</th>
                <th>Expired at</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ads as $ad)
                <tr id="{!! $ad->hashid !!}">
                    <td scope="row">{!! $ad->id !!}</td>
                    <td>
                        <img src="{!! asset($ad->path.$ad->image->img_name) !!}" alt="{!! $ad->title !!}" class="img-responsive" width="100">
                    </td>
                    <td>{!! $ad->title !!}</td>
                    <td>{!! $ad->link !!}</td>
                    <td>{!! $ad->owner != null ? $ad->owner->username : '' !!}</td>
                    <td>{!! $ad->expired_at !!}</td>
                    <td>{!! Helper::status($ad->active) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.promotions.ads.destroy', $ad->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.promotions.ads.show', [$ad->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.promotions.ads.edit', [$ad->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">mode_edit</i>
                        </a>
                        <button class="btn btn-danger btn-xs button" type="button"
                                value="{{ $ad->hashid }}">
                            <i class="material-icons">delete</i>
                        </button>
                        {{--{!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
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