<ul>
    @foreach($children as $child)
        <li>
            <span>
                <input type="checkbox" class="checkbox">
            </span>
            <label>
                <a href="{!! route('products.category.slug', [$child->slug]) !!}">
                    {!! str_limit($child->name, 15) !!}
                    <span>
                        ({!! count($child->products) !!})
                    </span>
                </a>
            </label>
            @if(count($child->children))
                @include('front.pages.product.catalog-category',['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>