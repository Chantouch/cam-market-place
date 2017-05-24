<div class="body table-responsive">
    @if(count($products))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Img</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{!! $product->id !!}</th>
                    <td>{!! $product->name !!}</td>
                    <td>{!! $product->name !!}</td>
                    <td>{!! Helper::relationship($product->category) !!}</td>
                    <td>{!! $product->price !!}</td>
                    <td>{!! $product->qty !!}</td>
                    <td>{!! $product->status !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.catalogs.products.destroy', $product->hashid], 'method' => 'delete']) !!}
                        <a href="{!! route('admin.catalogs.products.show', [$product->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="{!! route('admin.catalogs.products.edit', [$product->hashid]) !!}"
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