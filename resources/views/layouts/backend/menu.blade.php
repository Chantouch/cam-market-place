<ul class="list">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{!! Request::is('admin/dashboard*') ? 'active' : '' !!}">
        <a href="{!! route('admin.dashboard') !!}">
            <i class="material-icons">home</i>
            <span>Home</span>
        </a>
    </li>
    <li class="header">Data Management</li>
    <li class="{!! Request::is('admin/db-management*') ? 'active' : '' !!}">
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">shopping_cart</i>
            <span>Ref.Data Management</span>
        </a>
        <ul class="ml-menu">
            <li class="{!! Request::is('admin/countries*') ? 'active' : '' !!}">
                <a href="{!! route('admin.countries.index') !!}">
                    <i class="material-icons">location_city</i>
                    <span>Countries</span>
                </a>
            </li>
            <li class="{!! Request::is('admin/cities*') ? 'active' : '' !!}">
                <a href="{!! route('admin.cities.index') !!}">
                    <i class="material-icons">location_city</i>
                    <span>Cities</span>
                </a>
            </li>
            <li class="{!! Request::is('admin/communes*') ? 'active' : '' !!}">
                <a href="{!! route('admin.communes.index') !!}">
                    <i class="material-icons">location_city</i>
                    <span>Communes</span>
                </a>
            </li>
            <li class="{!! Request::is('admin/catalogs/attributes*') ? 'active' : '' !!}">
                <a href="{!! route('admin.catalogs.attributes.index') !!}">
                    <i class="material-icons">location_city</i>
                    <span>Attributes</span>
                </a>
            </li>
            <li class="{!! Request::is('admin/catalogs/categories*') ? 'active' : '' !!}">
                <a href="{!! route('admin.catalogs.categories.index') !!}">
                    <i class="material-icons">location_city</i>
                    <span>Categories</span>
                </a>
            </li>
            <li class="{!! Request::is('admin/settings/languages*') ? 'active' : '' !!}">
                <a href="{!! route('admin.settings.languages.index') !!}">
                    <i class="material-icons">font_download</i>
                    <span>Languages</span>
                </a>
            </li>
            <li class="{!! Request::is('admin/currencies*') ? 'active' : '' !!}">
                <a href="{!! route('admin.currencies.index') !!}">
                    <i class="material-icons pl-size-xs">layers</i>
                    <span>Currencies</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="{!! Request::is('admin/promotions/ads*') ? 'active' : '' !!}">
        <a href="{!! route('admin.promotions.ads.index') !!}">
            <i class="material-icons">home</i>
            <span>Advertising</span>
        </a>
    </li>

    <li class="header">Settings</li>
    <li class="{!! Request::is('admin/home-sliders*') ? 'active' : '' !!}">
        <a href="{!! route('admin.home-sliders.index') !!}">
            <i class="material-icons">next_week</i>
            <span>Home Slider</span>
        </a>
    </li>
    <li class="header">Sells</li>
    <li class="{!! Request::is('admin/sells/orders*') ? 'active' : '' !!}">
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">shopping_cart</i>
            <span>ORDERS</span>
        </a>
        <ul class="ml-menu">
            <li class="{!! Request::is('admin/sells/orders*') ? 'active' : '' !!}">
                <a href="{!! route('admin.sells.orders.index') !!}">
                    Orders
                </a>
            </li>
        </ul>
    </li>

    <li class="{!! Request::is('admin/partners*') ? 'active' : '' !!}">
        <a href="{!! route('admin.partners.index') !!}">
            <i class="material-icons">people_outline</i>
            <span>Partners</span>
        </a>
    </li>

    <li class="{!! Request::is('admin/sells/customers*') ? 'active' : '' !!}">
        <a href="{!! route('admin.sells.customers.index') !!}">
            <i class="material-icons">people_outline</i>
            <span>Customers</span>
        </a>
    </li>

    <li class="{!! Request::is('admin/catalogs/*') ? 'active' : '' !!}">
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">business_center</i>
            <span>CATALOGS</span>
        </a>
        <ul class="ml-menu">
            <li class="{!! Request::is('admin/catalogs/products*') ? 'active' : '' !!}">
                <a href="{!! route('admin.catalogs.products.index') !!}">
                    Products
                </a>
            </li>
        </ul>
    </li>
</ul>