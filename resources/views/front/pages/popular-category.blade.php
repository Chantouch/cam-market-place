<div class="popular-tab-categori">
    <div class="container-tab">
        <div class="row">
            <div class="col-sm-12">
                <div class="area-title">
                    <h3>Popular categories</h3>
                </div>
            </div>
            <div id="content" class="tab-menu-slide">
                <ul id="tabs" class="popular-tab-menu" data-tabs="tabs">
                    @foreach($categories->take(5) as $category)
                        <li class="">
                            <a href="#{!! $category->hashid !!}" data-toggle="tab">
                                <i class="fa fa-laptop"></i>
                                <h3>{!! $category->name !!}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div id="my-tab-content" class="tab-content row">
                    @if(isset($products))
                        @foreach($categories as $index => $category)
                            <div class="tab-pane @if($index == 0) {{ 'active' }} @endif"
                                 id="{!! $category->hashid !!}">
                                <div class="popular-tab-product-4 featured-product-area">
                                @foreach($category->products as $product)
                                    <!-- Start featured item -->
                                        <div class="col-sm-3">
                                            <div class="featured-inner">
                                                <div class="featured-image">
                                                    <a href="{!! route('products.details', [$product->slug]) !!}">
                                                        @if(count($product->images))
                                                            @foreach($product->images->take(1) as $image)
                                                                <img src="{!! asset($product->img_path.'large/'.$image->img_name) !!}"
                                                                     alt="{!! $product->name !!}"
                                                                     class="img-thumbnail">
                                                            @endforeach
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="featured-info">
                                                    <a href="{!! route('products.details', [$product->slug]) !!}">{!! $product->name !!}</a>
                                                    <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </p>
                                                    <span class="price">{!! Helper::currency($product->currency).$product->price !!}</span>
                                                    {!! Form::open(['route' => ['products.carts.store'], 'method' => 'POST']) !!}
                                                    <div class="featured-button">
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                                        <input type="hidden" name="qty" value="1">
                                                        <button class="btn wishlist" name="submit" type="submit"
                                                                value="wishlist">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button class="btn fetu-comment" name="comment" type="button">
                                                            <i class="fa fa-signal"></i>
                                                        </button>
                                                        <button class="btn add-to-card" name="submit" type="submit"
                                                                value="cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End featured item -->
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>