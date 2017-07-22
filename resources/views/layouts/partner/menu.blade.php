<ul class="list">
    <li class="header">MAIN NAVIGATION</li>

    <li class="{!! Request::is('partners/dashboard*') ? 'active' : '' !!}">
        <a href="{!! route('partners.dashboard') !!}">
            <i class="material-icons">home</i>
            <span>Home</span>
        </a>
    </li>

    <li class="{!! Request::is('partners/catalogs/products*') ? 'active' : '' !!}">
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">content_copy</i>
            <span>CATALOGS</span>
        </a>
        <ul class="ml-menu">
            <li class="{!! Request::is('partners/catalogs/products*') ? 'active' : '' !!}">
                <a href="{!! route('partners.catalogs.products.index') !!}">Products</a>
            </li>
        </ul>
    </li>
</ul>