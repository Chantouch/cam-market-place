<li>
    <span><input type="checkbox" class="checkbox"></span>
    <label>
        <a href="{!! route('products.category.slug', [$cat->slug]) !!}">{!! str_limit($cat->name,22) !!}
            <span> ({!! count($cat->products) !!})</span></a>
    </label>
    @if(!empty($cat->children))
        <ul>
            @foreach($cat->children as $c)
                <li>
                    <span>
                        <input type="checkbox" class="checkbox">
                    </span>
                    <label>
                        <a href="{!! route('products.category.slug', [$c->slug]) !!}">
                            {!! str_limit($c->name,17) !!}
                            <span>
                                ({!! count($c->products) !!})
                            </span>
                        </a>
                    </label>
                    @if(!empty($c->children))
                        <ul>
                            @foreach($c->children as $categ)
                                <li>
                                    <span>
                                        <input type="checkbox" class="checkbox">
                                    </span>
                                    <label>
                                        <a href="{!! route('products.category.slug', [$categ->slug]) !!}">
                                            {!! str_limit($categ->name,10) !!}
                                            <span>
                                                ({!! count($categ->products) !!} )
                                            </span>
                                        </a>
                                    </label>
                                    @if(!empty($categ->children))
                                        <ul>
                                            @foreach($categ->children as $categori)
                                                <li>
                                                    <span>
                                                        <input type="checkbox" class="checkbox">
                                                    </span>
                                                    <label>
                                                        <a href="{!! route('products.category.slug', [$categori->slug]) !!}">
                                                            {!! str_limit($categori->name,7) !!}
                                                            <span>
                                                                ({!! count($categori->products) !!} )
                                                            </span>
                                                        </a>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</li>