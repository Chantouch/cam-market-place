<!-- Start category -->
<div class="col-xs-12 col-sm-4 col-md-3">
    <div class="categori-menu">
        <div class="sidebar-menu-title">
            <h2><i class="fa fa-th-list"></i>MY MARKETS</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                @foreach($categories as $category)
                    <li><a href="shop-grid.html">{!! $category->name !!}</a>
                        <div class="megamenudown-sub">
                            <div class="mega-top">
                                @foreach($category->sub_category as $category)
                                    <div class="mega-item-menu">
                                        <a href="shop-grid.html" class="title"><span>{!! $category->name !!}</span></a>
                                        <a href="shop-grid.html"><span>{!! $category->name !!}</span></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @endforeach
                <li><a href="shop-grid.html" class="single-menu">Bags, Shoes & Accessories</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End category -->
           