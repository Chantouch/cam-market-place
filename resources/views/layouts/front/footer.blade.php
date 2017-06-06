<!-- Start footer top -->
<div class="footer-top">
    <div class="container">
        <div class="row">
            <!-- Start footer top box -->
            <div class="col-sm-3">
                <div class="footer-top-box">
                    <i class="fa fa-phone-square"></i>
                    <a href="tel:+-070-375-783">+ 0(70) 375 783</a>
                    <p>Order by phone</p>
                </div>
            </div>
            <!-- End footer top box -->
            <!-- Start footer top box -->
            <div class="col-sm-3">
                <div class="footer-top-box">
                    <i class="fa fa-clock-o"></i>
                    <span>Working time</span>
                    <p>Mon - sun: 8.00 - 18.00</p>
                </div>
            </div>
            <!-- End footer top box -->
            <!-- Start footer top box -->
            <div class="col-sm-3">
                <div class="footer-top-box">
                    <i class="fa fa-paper-plane"></i>
                    <span>Free shipping</span>
                    <p>on order over $199</p>
                </div>
            </div>
            <!-- End footer top box -->
            <!-- Start footer top box -->
            <div class="col-sm-3">
                <div class="footer-top-box last">
                    <i class="fa fa-history"></i>
                    <span>Money back 100%</span>
                    <p>Within 30 days affter delivery</p>
                </div>
            </div>
            <!-- End footer top box -->
        </div>
    </div>
</div>
<!-- End footer top -->
<!-- Start footer medil -->
<div class="footer-medil">
    <div class="container">
        <div class="row">
            <!-- Start footer categori -->
            <div class="col-sm-8">
                <div class="footer-categori">
                    <h4>Categories</h4>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="#"><i class="fa fa-star"></i> {!! $category->name !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End footer categori -->
            <!-- Start footer search area -->
            <div class="col-sm-4">
                <div class="footer-search-area">
                    <h4>Newsletter</h4>
                    <form method="post" action="#">
                        <div class="form-group">
                            <button class="submitNew" name="submitNewsletter" type="submit">
                                <i class="fa fa-envelope"></i>
                            </button>
                            <input type="text" value="Enter your e-mail" size="18" name="email"
                                   id="newsletter-input" class="inputNew form-control grey newsletter-input">
                        </div>
                    </form>
                    <div class="hiring">
                        <div class="img_in"><img alt="icon" src="{!! asset('img/hire_logo.jpg') !!}"></div>
                        <div class="info">
                            <h4>we're hiring!</h4>
                            <p>Click <a href="#">here</a> for more information</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer search area -->
        </div>
        <!-- Start footer medil information -->
        <div class="footer-medil-information">
            <div class="row">
                <div class="col-sm-3">
                    <div class="info-box">
                        <h4>Store Information</h4>
                        <ul>
                            <li>My Company</li>
                            <li>Paris - France</li>
                            <li>0123-456-789</li>
                            <li><a href="mailto:admin@bootexperts.com">admin@bootexperts.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="info-box">
                        <h4>Information</h4>
                        <ul>
                            <li class="item"><a title="Specials" href="">Specials</a></li>
                            <li class="item"><a title="New products" href=""> New products</a></li>
                            <li class="item"><a title="Best sellers" href=""> Best sellers</a></li>
                            <li class="item"><a title="Contact us" href="contact-us.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="info-box">
                        <h4><a href="#">My account</a></h4>
                        <ul>
                            <li class="item"><a title="Specials" href="">My orders</a></li>
                            <li class="item"><a title="New products" href=""> My credit slips</a></li>
                            <li class="item"><a title="Best sellers" href=""> My addresses</a></li>
                            <li class="item"><a title="Contact us" href="">My personal info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="info-box">
                        <h4>extra link</h4>
                        <ul>
                            <li class="item"><a title="Specials" href="">Partner</a></li>
                            <li class="item"><a title="New products" href="">e- gift cards</a></li>
                            <li class="item"><a title="Best sellers" href="">corporate gift cards</a></li>
                            <li class="item"><a title="Contact us" href="">check balance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer medil information -->
    </div>
</div>
<!-- End footer medil -->
<!-- Start footer copyright -->
<div class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="copyright-text">
                    <p>Copyright &copy; 2015 <a href="http://bootexperts.com">BootExperts</a>. All rights
                        reserved.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="footer-card pull-right">
                    <img src="{!! asset('img/payment.png') !!}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End footer copyright -->