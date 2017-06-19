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
                <th>Price (USD)</th>
                <th>Cost</th>
                <th>Qty</th>
                <th>Status</th>
                <th width="60">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $index => $product)
                <tr class="remove">
                    <th scope="row">{!! $index+1 !!}</th>
                    <td width="60">
                        @if(count($product->images))
                            @foreach($product->images->take(1) as $image)
                                <img src="{!! asset($product->img_path.'thumb/'.$image->img_name) !!}"
                                     alt="{!! $product->name !!}" class="img-thumbnail">
                            @endforeach
                        @endif
                    </td>
                    <td>{!! $product->name !!}</td>
                    <td>
                        @if(count($product->categories))
                            @foreach($product->categories as $category)
                                {{ $loop->first ? '' : ', ' }}
                                <span class="label label-info">{!! Helper::relationship($category) !!}</span>
                            @endforeach
                        @endif
                    </td>
                    <td>{!! $product->price !!} ({!! isset($product->currency)? $product->currency->symbol : "" !!})
                    </td>
                    <td>
                        @if(count($product->price_converter))
                            @foreach($product->price_converter->where('code','USD') as $price)
                                {!! $price->amount !!}
                            @endforeach
                        @endif
                    </td>
                    <td>{!! $product->cost !!} ({!! isset($product->currency)? $product->currency->symbol: "" !!})</td>
                    <td>{!! $product->qty !!}</td>
                    <td>{!! Helper::status($product->status) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.catalogs.products.destroy', $product->hashid], 'method' => 'delete', 'class'=>'form-product-fix']) !!}
                        <a href="{!! route('admin.catalogs.products.edit', [$product->hashid]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="material-icons">mode_edit</i>
                        </a>
                        {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs button', 'data-id' => "$product->hashid"]) !!}
                        <ul class="dropdown-header m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="{!! route('admin.catalogs.products.duplicate', [$product->hashid]) !!}"
                                           class='btn btn-default btn-xs'>
                                            <i class="material-icons">content_copy</i> Duplicate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('admin.catalogs.products.show', [$product->hashid]) !!}"
                                           class='btn btn-default btn-xs'>
                                            <i class="material-icons">remove_red_eye</i> Details
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    @else
        <p>There is no data here.</p>
    @endif
</div>