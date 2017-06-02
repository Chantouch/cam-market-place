<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="area-title">
                <h3>The Blog</h3>
            </div>
        </div>
        <div class="blog-box featured-product-area">
            <?php for ($i = 1 ;$i <= 4;$i++){ ?>
            <div class="col-sm-4">
                <a href="single-blog.html"><img src="{!! asset('img/blog/'.$i.'-home-default.jpg') !!}" alt=""></a>
                <span class="blog-date">2015-08-12 04:40:21</span>
                <div class="blog-info">
                    <h3><a href="single-blog.html">Share the Love for PrestaShop 1.6</a></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been...</p>
                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>