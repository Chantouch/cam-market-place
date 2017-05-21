<!-- header -->
<div class="agileits_header">
    <div class="top-header col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <nav id="primary_nav_wrap" class="pull-left">
                <ul>
                  <li><a href="#">&nbsp;</a></li>
                  <li><a href="#"><i class="fa fa-home"></i></a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i> Contact Us</a></li>
                  <li><a href=""><i class="fa fa-question"></i> Help</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <nav id="primary_nav_wrap" class="pull-right">
                <ul>
                  <li><a href="#"><i class="fa fa-shopping-cart"></i> Order Status</a></li>
                  <li><a href="#"><i class="fa fa-heart"></i> WishList</a></li>
                  <li><a href=""><i class="fa fa-user"></i> Sign In / Join</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div>&nbsp;</div>
    <div class="logo-header col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="w3ls_logo_products_left">
                <h1><a href="{{url('/')}}"><label class="text-logo-left">CAM</label><label class="text-logo-right">MARKETPLACE</label></a></h1>
            </div>
        </div>
        <div class="col-sm-7 col-md-7 col-lg-7">
            <div class="w3l_search search-input">
                <form action="#" method="post">
                    <input type="text" name="Product" value="What are you looking for...." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'What are you looking for....';}" required="">
                    <input type="submit" value="Seach">
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset=$(".agileits_header").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="col-sm-12 col-md-12 col-lg-12 meanu-top">
           <div class="col-sm-8 col-md-8 col-lg-8">
               <div class="menu-wrap">
                    <nav class="menu">
                        <ul class="clearfix">
                            <li>
                                <a href="#">Shop by Category <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">In Cinemas Now</a></li>
                                    <li><a href="#">Coming Soon</a></li>
                                    <li><a href="#">On DVD/Blu-ray</a></li>
                                    <li><a href="#">Showtimes &amp; Tickets</a></li>
                                </ul>
                            </li>
                            <li><a href="#">BestSellers</a></li>
                            <li><a href="#">Coming Soon</a></li>
                            <li><a href="#">Highlights</a></li>
                            <li><a href="#">Bargain Shop</a></li>
                        </ul>
                    </nav>
                </div>
           </div>
           <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="currency">
                   <select class="form-control">
                       <option>$ USD Dollar</option>
                       <option>៛ KHR Riel</option>
                   </select>
               </div>
           </div>
           <div class="col-sm-2 col-md-2 col-lg-2">
               <div class="cart-view">
                   <span>ff</span>
                   <span>fff</span>
                   <span>h</span>
               </div>
           </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->