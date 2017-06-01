<!-- Start header -->
<header>
    <!-- Start top call-to acction -->
    <div class="top-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="top-call-to-acction">
                        <p>
                            <a href="tel:0123-456-789"><i class="fa fa-phone"></i> Call us now: 0123-456-789</a>
                            <a href="mailto:admin@bootexperts.com"><i class="fa fa-envelope-o"></i> E-mail:
                                admin@bootexperts.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 pull-right">
                    <div class="social-and-menu">
                        <div class="top-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">USD <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">Dollar (USD)</a></li>
                                            <li><a href="#">RIEL (KHR)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="top-social">
                            <p>
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                                <a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                                <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                <a href="www.vimeo.com/?"><i class="fa fa-vimeo-square"></i></a>
                                <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top call-to acction -->
    <!-- Start logo and search area -->
    <div class="logo-and-search-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="/"><img src="{!! asset('img/home-4/logo.png') !!}" alt="">CAMMARKET</a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <!-- Start user info adn search -->
                    <div class="user-info-adn-search">
                        <div class="user-info">
                            <p>
                                <a href="{!! url('register') !!}"><i class="fa fa-user"></i> My Account</a>
                                <a href="{!! url('login') !!}"><i class="fa fa-key"></i> Sign In</a>
                                <a href="{!! url('wishlists') !!}"><i class="fa fa-heart-o"></i> Wishlist</a>
                                <a href="{!! url('compare') !!}"><i class="fa fa-signal"></i> Compare</a>
                            </p>
                        </div>
                        <div class="search-and-cart">
                            <div class="search-categori">
                                <form id="select-categoris" method="post" class="form-horizontal">
                                    <div class="categori">
                                        <select name="language">
                                            <option value="">Categories</option>
                                            @foreach($categories as $category)
                                                <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="search-box">
                                        <input type="text" class="form-control input-sm" maxlength="64"
                                               placeholder="Enter your search key ... "/>
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="shoping-cart">
                                <a href="{!! url('carts') !!}"><span>My Cart ({!! count(Cart::content()) !!})</span></a>
                                @if (sizeof(Cart::content()) > 0)
                                    <div class="add-to-cart-product">
                                        @foreach (Cart::content() as $item)
                                            <div class="cart-product product-item11">
                                                <div class="cart-product-image">
                                                    <a href="{!! route('products.details', [$item->model->slug]) !!}">
                                                        @foreach($item->model->images->take(1) as $image)
                                                            <img src="{!! asset($item->model->img_path.'thumb/'.$image->img_name) !!}"
                                                                 title="{!! $item->name !!}">
                                                        @endforeach
                                                    </a>
                                                </div>
                                                <div class="cart-product-info">
                                                    <p>
                                                        <span>{!! $item->qty !!}</span>x
                                                        <a href="{!! route('products.details', [$item->model->slug]) !!}">
                                                            {!! str_limit($item->name,10) !!}
                                                        </a>
                                                    </p>
                                                    <a href="{!! url('single-product') !!}">S, Orange</a>
                                                    <span class="price">{!! $item->price !!}</span>
                                                </div>
                                                <div class="cart-product-remove">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="cart-price">
                                            <div class="cart-product-line fast-line">
                                                <span>Shipping</span>
                                                <span class="free-shiping">$10.50</span>
                                            </div>
                                            <div class="cart-product-line">
                                                <span>Total</span>
                                                <span class="total">{{ Cart::instance('default')->subtotal() }}</span>
                                            </div>
                                        </div>
                                        <div class="cart-checkout">
                                            <a href="{!! url('checkout') !!}">Check out
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End user info adn search -->
                </div>
            </div>
        </div>
    </div>
    <!-- End logo and search area -->
    <!-- Start mainmenu-area -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li><a class="home" href="/">Home</a></li>
                            <li><a href="{!! url('about-us') !!}">About us</a></li>
                            <li><a href="{!! url('best-seller') !!}">BestSellers</a></li>
                            <li><a href="{!! url('comming-soon') !!}">Comming Soon</a></li>
                            <li><a href="{!! url('highlight') !!}">HighLights</a></li>
                            <li><a href="{!! url('bargain-shop') !!}">Bargain Shop</a></li>
                            <li><a href="{!! url('contact-us') !!}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End mainmenu-area -->
    <!-- Start mobile menu -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 np">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="nav">
                                <li><a class="home" href="/">Home</a></li>
                                <li><a href="{!! url('about-us') !!}">About us</a></li>
                                <li><a href="{!! url('best-seller') !!}">BestSellers</a></li>
                                <li><a href="{!! url('comming-soon') !!}">Comming Soon</a></li>
                                <li><a href="{!! url('highlight') !!}">HighLights</a></li>
                                <li><a href="{!! url('bargain-shop') !!}">Bargain Shop</a></li>
                                <li><a href="{!! url('contact-us') !!}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End mobile menu -->
</header>
<!-- End header