<div class="categori-menu">
    <div class="sidebar-menu-title">
        <h2><i class="fa fa-th-list"></i>MY MARKETS</h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="{!! route('products.category.slug', [$category->slug]) !!}" class="{!! count($category->children) ? "" : "single-menu" !!}">
                        {!! $category->name !!}
                    </a>
                    @if(count($category->children))
                        <div class="megamenudown-sub">
                            <div class="mega-top">
                                @foreach($category->children as $category)
                                    <div class="mega-item-menu">
                                        <a href="{!! route('products.category.slug', [$category->slug]) !!}"
                                           class="{!! count($category->children) ? "title" : "title" !!}">
                                            <span>{!! $category->name !!}</span>
                                        </a>
                                        @if(count($category->children))
                                            @foreach($category->children as $child)
                                                <a href="{!! route('products.category.slug', [$child->slug]) !!}">
                                                    <span>{!! $child->name !!}</span>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>