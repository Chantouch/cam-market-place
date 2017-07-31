<div class="body table-responsive">
    @if(count($ads))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
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
                <tr>
                    <th scope="row">{!! $ad->id !!}</th>
                    <td>{!! $ad->title !!}</td>
                    <td>{!! $ad->link !!}</td>
                    <td>{!! isset($ad->owner)? $ad->owner->first_name .' ' .$ad->owner->last_name : '' !!}</td>
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