<div class="w3l_banner_nav_right">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                @foreach($slide->image_slider as $slide_show)
                <li>
                    <div class="w3l_banner_nav_right_banner">
                    <img src="{{asset($slide_show->img_path.$slide_show->img_name)}}">
                        <h3>{!! $slide_show->description !!}</h3>
                        <div class="more">
                            <a href="{{url($slide_show->url)}}" class="button--saqui button--round-l button--text-thick"
                               data-text="{{$slide_show->caption}}">{{$slide_show->caption}}</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- flexSlider -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property=""/>
    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                slideshowSpeed:{!! $slide->speed !!},
                pauseOnHover:{!! $slide->pause_on_hover !!},
                animationLoop:{!! $slide->loop_forever !!},
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
</div>