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
                                    <li><a href="#">English <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Fran�ais</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">USD <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">Dollar (USD)</a></li>
                                            <li><a href="#">Pound (GBP)</a></li>
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
                        <a href="index.html"><img src="img/home-4/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <!-- Start user info adn search -->
                    <div class="user-info-adn-search">
                        <div class="user-info">
                            <p>
                                <a href="#"><i class="fa fa-user"></i> My Account</a>
                                <a href="wishlists.html"><i class="fa fa-heart-o"></i> Wishlist</a>
                                <a href="#"><i class="fa fa-key"></i> Sign out</a>
                                <a href="#"><i class="fa fa-signal"></i> Compare</a>
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
                                <a href="cart.html"><span>My Cart (3)</span></a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product product-item11">
                                        <div class="cart-product-image">
                                            <a href="single-product.html"><img
                                                    src="img/cart/faded-short-sleeves-tshirt.jpg" alt="Product"></a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p><span>1</span>x<a href="single-product.html">Faded...</a></p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="price">� 19.81</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html"><img src="img/cart/printed-dress.jpg"
                                                                               alt="Product"></a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p><span>1</span>x<a href="single-product.html">blouse</a></p>
                                            <a href="single-product.html">S, Black</a>
                                            <span class="price">� 32.40</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html"><img
                                                    src="img/cart/printed-summer-dress.jpg" alt="Product"></a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p><span>1</span>x<a href="single-product.html">Printed...</a></p>
                                            <a href="single-product.html">S, Yellow</a>
                                            <span class="price">� 36.60</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Shipping</span>
                                            <span class="free-shiping">$10.50</span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">� 88.81</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.html">Check out<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
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
                            <li><a class="home" href="index.html">Home</a>
                                <ul>
                                    <li><a href="index-2.html"><span>Home2</span></a></li>
                                    <li><a href="index-3.html"><span>Home3</span></a></li>
                                    <li><a href="index-4.html"><span>Home4</span></a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="shop-grid.html">shop</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-non-sidebar.html">Blog non sidebar</a></li>
                                    <li><a href="single-blog.html">Single blog</a></li>
                                </ul>
                            </li>
                            <li><a href="">Pages</a>
                                <ul>
                                    <li><a href="about-us.html"><span>About us</span></a></li>
                                    <li><a href="blog.html"><span>Blog</span></a></li>
                                    <li><a href="blog-non-sidebar.html"><span>blog non sidebar</span></a></li>
                                    <li><a href="single-blog.html"><span>single blog</span></a></li>
                                    <li><a href="shop-grid.html"><span>shop grid</span></a></li>
                                    <li><a href="shop-list.html"><span>shop list</span></a></li>
                                    <li><a href="single-product.html"><span>single product</span></a></li>
                                    <li><a href="cart.html"><span>cart</span></a></li>
                                    <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                    <li><a href="checkout.html"><span>checkout</span></a></li>
                                    <li><a href="login.html"><span>Login</span></a></li>
                                    <li><a href="contact-us.html"><span>contact us</span></a></li>
                                    <li><a href="404.html"><span>404</span></a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact</a></li>
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
                                <li><a class="home" href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index-2.html"><span>Home2</span></a></li>
                                        <li><a href="index-3.html"><span>Home3</span></a></li>
                                        <li><a href="index-4.html"><span>Home4</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About us</a></li>
                                <li><a href="shop-grid.html">shop</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-non-sidebar.html">Blog non sidebar</a></li>
                                        <li><a href="single-blog.html">Single blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html"><span>About us</span></a></li>
                                        <li><a href="blog.html"><span>Blog</span></a></li>
                                        <li><a href="blog-non-sidebar.html"><span>blog non sidebar</span></a></li>
                                        <li><a href="single-blog.html"><span>single blog</span></a></li>
                                        <li><a href="shop-grid.html"><span>shop grid</span></a></li>
                                        <li><a href="shop-list.html"><span>shop list</span></a></li>
                                        <li><a href="single-product.html"><span>single product</span></a></li>
                                        <li><a href="cart.html"><span>cart</span></a></li>
                                        <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                        <li><a href="checkout.html"><span>checkout</span></a></li>
                                        <li><a href="contact-us.html"><span>contact us</span></a></li>
                                        <li><a href="404.html"><span>404</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact</a></li>
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