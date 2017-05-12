<ul class="list">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{!! Request::is('admin/dashboard*') ? 'active' : '' !!}">
        <a href="{!! route('admin.dashboard') !!}">
            <i class="material-icons">home</i>
            <span>Home</span>
        </a>
    </li>
    <li class="header">Master</li>
    <li class="{!! Request::is('admin/countries*') ? 'active' : '' !!}">
        <a href="{!! route('admin.countries.index') !!}">
            <i class="material-icons">text_fields</i>
            <span>Countries</span>
        </a>
    </li>
    <li class="{!! Request::is('admin/cities*') ? 'active' : '' !!}">
        <a href="{!! route('admin.cities.index') !!}">
            <i class="material-icons">layers</i>
            <span>Cities</span>
        </a>
    </li>
    <li class="{!! Request::is('admin/communes*') ? 'active' : '' !!}">
        <a href="{!! route('admin.communes.index') !!}">
            <i class="material-icons">layers</i>
            <span>Communes</span>
        </a>
    </li>
    <li class="{!! Request::is('admin/categories*') ? 'active' : '' !!}">
        <a href="{!! route('admin.categories.index') !!}">
            <i class="material-icons">layers</i>
            <span>Categories</span>
        </a>
    </li>
    <li class="{!! Request::is('admin/currencies*') ? 'active' : '' !!}">
        <a href="{!! route('admin.currencies.index') !!}">
            <i class="material-icons">layers</i>
            <span>Currencies</span>
        </a>
    </li>
    <li class="header">Settings</li>
    <li class="{!! Request::is('admin/home-sliders*') ? 'active' : '' !!}">
        <a href="{!! route('admin.home-sliders.index') !!}">
            <i class="material-icons">layers</i>
            <span>Home Slider</span>
        </a>
    </li>
    <li class="{!! Request::is('admin/attributes*') ? 'active' : '' !!}">
        <a href="{!! route('admin.attributes.index') !!}">
            <i class="material-icons">layers</i>
            <span>Attributes</span>
        </a>
    </li>
    <li class="header">Products</li>
    <li>
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">widgets</i>
            <span>CATALOG</span>
        </a>
        <ul class="ml-menu">
            <li>
            <li>
                <a href="javascript:void(0);">
                    <span>Product</span>
                </a>
                <a href="javascript:void(0);">
                    <span>Categories</span>
                </a>
                <a href="javascript:void(0);">
                    <span>Attributes</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">trending_down</i>
            <span>Multi Level Menu</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="javascript:void(0);">
                    <span>Menu Item</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span>Menu Item - 2</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <span>Level - 2</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>Menu Item</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Level - 3</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Level - 4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>