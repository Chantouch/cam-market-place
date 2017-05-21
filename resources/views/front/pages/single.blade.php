@extends('layouts.front.app')
@section('banner-nav-right')
<!-- //js -->
<link href="{{ asset('css/etalage.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
 <script src="{{asset('js/jquery.etalage.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.js')}}"></script>
  <script>
    $(function(){
        $('#etalage').etalage({
          thumb_image_width: 300,
          thumb_image_height: 400,
          source_image_width: 900,
          source_image_height: 1200,
          show_hint: true,
          click_callback: function(image_anchor, instance_id){
            alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
          }
        });

        var owl = $('#food-carousel');
            owl.owlCarousel({
                items:4,
			    loop:true,
			    margin:10,
			    autoPlay:true,
			    autoplayTimeout:1000,
			    autoplayHoverPause:true
		});
        var owl = $('#drink-carousel');
	        owl.owlCarousel({
	            items:4,
			    loop:true,
			    margin:10,
			    autoPlay:true,
			    autoplayTimeout:1000,
			    autoplayHoverPause:true
			});
    });
  </script>
<div class="w3l_banner_nav_right">
			<div class="agileinfo_single" style="margin-top: -9%;height: 0px;">
				<h5>charminar pulao basmati rice 5 kg</h5>
				<div class="col-md-4 agileinfo_sinzgle_left">
					<ul id="etalage">
              <li>
                <a href="optionallink.html">
                  <img class="etalage_thumb_image img-responsive" src="{{asset('images/1.png')}}" alt="" >
                  <img class="etalage_source_image img-responsive" src="{{asset('images/1.png')}}" alt="" >
                </a>
              </li>
              <li>
                <img class="etalage_thumb_image img-responsive" src="{{asset('images/2.png')}}" alt="" >
                <img class="etalage_source_image img-responsive" src="{{asset('images/2.png')}}" alt="" >
              </li>
              <li>
                <img class="etalage_thumb_image img-responsive" src="{{asset('images/3.png')}}" alt=""  >
                <img class="etalage_source_image img-responsive" src="{{asset('images/3.png')}}" alt="" >
              </li>
                <li>
                <img class="etalage_thumb_image img-responsive" src="{{asset('images/4.png')}}"  alt="" >
                <img class="etalage_source_image img-responsive" src="{{asset('images/4.png')}}" alt="" >
              </li>
            </ul>
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>$21.00 <span>$25.00</span></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="pulao basmati rice" />
									<input type="hidden" name="amount" value="21.00" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
@stop
@section('top-brands')
    <!-- top-brands -->
   <!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container" style="margin-top: -3%;">
			<h3>Popular Brands</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>food</h6>
					<div class="owl-carousel owl-theme" id="food-carousel">
						<?php for($i=1;$i<=12;$i++){?>
						<div class="col-md-12 w3ls_w3l_banner_left item">
							<div class="hover14 column">
								<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
									<div class="agile_top_brand_left_grid_pos">
										<img src="{{asset('images/offer.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="agile_top_brand_left_grid1">
										<figure>
											<div class="snipcart-item block">
												<div class="snipcart-thumb">
													<a href="{{url('single')}}"><img src="{{asset('images/'.$i.'.png')}}" alt=" " class="img-responsive" /></a>
													<p>knorr instant soup (100 gm)</p>
													<h4>$3.00 <span>$5.00</span></h4>
												</div>
												<div class="snipcart-details">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart" />
															<input type="hidden" name="add" value="1" />
															<input type="hidden" name="business" value=" " />
															<input type="hidden" name="item_name" value="knorr instant soup" />
															<input type="hidden" name="amount" value="3.00" />
															<input type="hidden" name="discount_amount" value="1.00" />
															<input type="hidden" name="currency_code" value="USD" />
															<input type="hidden" name="return" value=" " />
															<input type="hidden" name="cancel_return" value=" " />
															<input type="submit" name="submit" value="Add to cart" class="button" />
														</fieldset>
													</form>
												</div>
											</div>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>Drinks</h6>
					<div class="owl-carousel owl-theme" id="drink-carousel">
						<?php for($i=13;$i<=24;$i++){?>
						<div class="col-md-12 w3ls_w3l_banner_left item">
							<div class="hover14 column">
								<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
									<div class="agile_top_brand_left_grid_pos">
										<img src="{{asset('images/offer.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="agile_top_brand_left_grid1">
										<figure>
											<div class="snipcart-item block">
												<div class="snipcart-thumb">
													<a href="{{url('single')}}"><img src="{{asset('images/'.$i.'.png')}}" alt=" " class="img-responsive" /></a>
													<p>knorr instant soup (100 gm)</p>
													<h4>$3.00 <span>$5.00</span></h4>
												</div>
												<div class="snipcart-details">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart" />
															<input type="hidden" name="add" value="1" />
															<input type="hidden" name="business" value=" " />
															<input type="hidden" name="item_name" value="knorr instant soup" />
															<input type="hidden" name="amount" value="3.00" />
															<input type="hidden" name="discount_amount" value="1.00" />
															<input type="hidden" name="currency_code" value="USD" />
															<input type="hidden" name="return" value=" " />
															<input type="hidden" name="cancel_return" value=" " />
															<input type="submit" name="submit" value="Add to cart" class="button" />
														</fieldset>
													</form>
												</div>
											</div>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
						<div class="clearfix"> </div>
					</div>
				</div>
		</div>
	</div>
<!-- //brands -->
<!-- //top-brands -->
@stop
@section('top-products')
    <!-- fresh-vegetables -->
    <!-- //fresh-vegetables -->
@stop