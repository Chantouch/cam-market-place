<p>
    <a class="btn btn-default twitter" href="https://twitter.com/intent/tweet?url={!! urlencode($url) !!}"
       target="_blank">
        <i class="fa fa-twitter"></i>Tweet
    </a>
    <a class="btn btn-default facebook" href="https://www.facebook.com/sharer/sharer.php?u={!! urlencode($url) !!}"
       target="_blank">
        <i class="fa fa-facebook"></i>Share
    </a>
    <a class="btn btn-default google-plus" href="https://plus.google.com/share?url={!! urlencode($url) !!}"
       target="_blank">
        <i class="fa fa-google-plus"></i>Google+
    </a>
    <a class="btn btn-default pinterest" href="https://pinterest.com/pin/create/button/?{!!
        http_build_query([
            'url' => $url,
            'media' => 'http://placehold.it/300x300?text=Cool+link',
            'description' => $product->name
        ])
        !!}" target="_blank">
        <i class="fa fa-pinterest"></i>Pinterest
    </a>
</p>