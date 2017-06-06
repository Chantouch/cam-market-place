<div class="slider-area">
    @if(isset($sliders))
        @if(!empty($sliders))
            @if(count($sliders->image_slider))
                <div id="slider-home" class="nivoSlider">
                    <?php $i = 1;?>
                    @foreach($sliders->image_slider as $slider)
                        <img style="display:none" src="{!! asset($slider->img_path.$slider->img_name) !!}"
                             data-thumb="{!! $slider->img_path.$slider->img_name !!}"
                             alt="{!! $slider->name !!}" title="#htmlcaption<?php echo $i;?>"/>
                        <?php
                        $i++;
                        ?>
                    @endforeach
                </div>
                <?php $j = 1;?>
                @foreach($sliders->image_slider as $slider)
                    <div id="htmlcaption<?php echo $j;?>"
                         class="pos-slideshow-caption nivo-html-caption nivo-caption">
                        <div class="pos-slideshow-info pos-slideshow-info7">
                            <div class="container">
                                <div class="pos_description hidden-xs hidden-sm">
                                    {!! $slider->description!!}
                                    <div class="pos-slideshow-readmore">
                                        <a href="{!! $slider->url !!}"
                                           title="{!! $slider->caption !!}">{!! $slider->caption !!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $j++;?>
                @endforeach
            @else
                <div id="slider-home" class="nivoSlider">
                    <img style="display:none" src="img/home-4/slider/7.jpg" data-thumb="img/home-4/slider/7.jpg"
                         alt="" title="#htmlcaption7"/>
                </div>
                <div id="htmlcaption7" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                    <div class="pos-slideshow-info pos-slideshow-info7">
                        <div class="container">
                            <div class="pos_description hidden-xs hidden-sm">
                                <div class="title1"><span class="txt"><strong>Dream</strong> soluton</span>
                                </div>
                                <div class="title2"><span
                                            class="txt">For every type of sleeper</span></div>
                                <div class="pos-slideshow-readmore">
                                    <a href="http://bootexperts.com/" title="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @else
        <div id="slider-home" class="nivoSlider">
            <img style="display:none" src="img/home-4/slider/7.jpg" data-thumb="img/home-4/slider/7.jpg" alt=""
                 title="#htmlcaption7"/>
        </div>
        <div id="htmlcaption7" class="pos-slideshow-caption nivo-html-caption nivo-caption">
            <div class="pos-slideshow-info pos-slideshow-info7">
                <div class="container">
                    <div class="pos_description hidden-xs hidden-sm">
                        <div class="title1">
                            <span class="txt"><strong>Dream</strong> solution</span>
                        </div>
                        <div class="title2"><span class="txt">For every type of sleeper</span></div>
                        <div class="pos-slideshow-readmore">
                            <a href="http://bootexperts.com/" title="Shop now">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>