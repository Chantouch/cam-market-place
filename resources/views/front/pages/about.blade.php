@extends('layouts.front.app')
@section('content-area')
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        About Us
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start about us content -->
    <div class="about-us-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">About Us</h4>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="about-us-slide owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3330px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(-555px, 0px, 0px);"><div class="owl-item" style="width: 555px;"><div class="item"><img src="img/about/about-us.jpg" alt="about us baner"></div></div><div class="owl-item" style="width: 555px;"><div class="item"><img src="img/about/about-su2.jpg" alt="about us baner"></div></div><div class="owl-item" style="width: 555px;"><div class="item"><img src="img/about/startup-photos.jpg" alt="about us baner"></div></div></div></div>
                        
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="who-we-are-title">
                        <h3><span>About Dilima</span></h3>
                    </div>
                    <div class="who-we-are-text">
                        <p> <span class="dropcap">L</span> orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="skill-and-accordioun">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="who-we-are-title">
                            <h3><span>Who we are</span></h3>
                        </div>
                        <div class="who-we-are-accordion">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        24/7 support <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        our services <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        10 Million customoers <i class="indicator glyphicon glyphicon-chevron-up pull-right"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="who-we-are-title">
                            <h3><span>our skills</span></h3>
                        </div>
                        <div class="who-we-are-skill">
                            <div class="skill">
                                <!-- PROGRESS START -->
                                <div class="progress">
                                    <div class="lead">PhotoShop Design </div>
                                    <div class="progress-bar wow fadeInLeft animated" data-progress="75%" style="width: 75%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>75%</span></div>
                                </div>
                                <!-- PROGRESS END -->
                                <!-- PROGRESS START -->
                                <div class="progress">
                                    <div class="lead">HTML 5 Design </div>
                                    <div class="progress-bar wow fadeInLeft animated" data-progress="80%" style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>80%</span> </div>
                                </div>
                                <!-- PROGRESS END -->
                                <!-- PROGRESS START -->                         
                                <div class="progress">
                                    <div class="lead">Joomla CMS </div>
                                    <div class="progress-bar wow fadeInLeft animated" data-progress="97%" style="width: 97%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>97%</span> </div>
                                </div>  
                                <!-- PROGRESS END -->
                                <!-- PROGRESS START -->
                                <div class="progress">
                                    <div class="lead">Web Design </div>
                                    <div class="progress-bar wow fadeInLeft animated" data-progress="70%" style="width: 70%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>70%</span> </div>
                                </div>
                                <!-- PROGRESS END -->                           
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="meet-out-team">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="who-we-are-title">
                            <h3><span>Meet Our Team</span></h3>
                        </div>
                    </div>
                    <!-- Start meet team box -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="meet-team-box">
                            <img src="img/about/4.jpg" alt="team photo">
                            <div class="team-title">
                                <h3>John Doe</h3>
                                <h5>Developer</h5>
                            </div>
                            <div class="team-socioul">
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer</p>
                        </div>
                    </div>
                    <!-- End meet team box -->
                    <!-- Start meet team box -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="meet-team-box">
                            <img src="img/about/3.jpg" alt="team photo">
                            <div class="team-title">
                                <h3>John Doe</h3>
                                <h5>Developer</h5>
                            </div>
                            <div class="team-socioul">
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer</p>
                        </div>
                    </div>
                    <!-- End meet team box -->
                    <!-- Start meet team box -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="meet-team-box">
                            <img src="img/about/5.jpg" alt="team photo">
                            <div class="team-title">
                                <h3>John Doe</h3>
                                <h5>Developer</h5>
                            </div>
                            <div class="team-socioul">
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer</p>
                        </div>
                    </div>
                    <!-- End meet team box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End about us content -->
    @stop