<div class="body table-responsive">
    @if(count($currencies))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Symbol</th>
                <th>Name</th>
                <th>Symbol Native</th>
                <th>Decimal Digits</th>
                <th>Rounding</th>
                <th>Code</th>
                <th>Name Plural</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($currencies as $currency)
                <tr>
                    <th scope="row">{!! $currency->id !!}</th>
                    <td>{!! $currency->symbol !!}</td>
                    <td>{!! $currency->name !!}</td>
                    <td>{!! $currency->symbol_native !!}</td>
                    <td>{!! $currency->decimal_digits !!}</td>
                    <td>{!! $currency->rounding !!}</td>
                    <td>{!! $currency->code !!}</td>
                    <td>{!! str_limit($currency->name_plural, 70) !!}</td>
                    <td>{!! $currency->status !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.currencies.destroy', $currency->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.currencies.show', [$currency->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.currencies.edit', [$currency->hashid]) !!}"
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
        {!! $currencies->render() !!}
    @else
        <p>There is no data here.</p>
    @endif
</div>