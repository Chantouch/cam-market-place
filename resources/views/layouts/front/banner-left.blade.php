<div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                    data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <div class="header-menu"><i class="fa fa-list"></i> <span><b>MY MARKETS</b></span></div>
            <ul class="nav navbar-nav nav_1">
                <li><a href="{{url('products')}}"><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;Branded Foods</a></li>
                <li><a href="{{url('household')}}"><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;Households</a></li>
                <li class="dropdown mega-dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;Veggies & Fruits<span
                                class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                        <div class="w3ls_vegetables">
                            <ul>
                                <li><a href="{{url('vegetables')}}"><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;Vegetables</a></li>
                                <li><a href="{{url('vegetables')}}"><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;Fruits</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>