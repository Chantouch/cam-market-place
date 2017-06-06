<div class="row">
    <div class="col-sm-6">
        @if(isset($categories))
            @foreach($categories->random(1) as $category)
                <div class="area-title">
                    <h3>{!! $category->name !!}</h3>
                </div>
                <div class="camera-area">
                    <p class="extra-link">
                        <a href="{!! route('products.category.slug', [$category->slug]) !!}"
                           title="{!! $category->name !!}">
                            <i class="fa fa-bar-chart"></i>{!! count($category->products) !!} products here
                        </a>
                        <a href="{!! route('products.category.slug', [$category->slug]) !!}"
                           title="{!! $category->name !!}">
                            <i class="fa fa-star-o"></i>View more in category
                        </a>
                    </p>
                    <div class="row">
                        <div class="camera-slide featured-product-area">
                            @if(count($category->products))
                                @foreach($category->products as $product)
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
                                                <input type="hidden" name="id"
                                                       value="{{ $product->id }}">
                                                <input type="hidden" name="name"
                                                       value="{{ $product->name }}">
                                                <input type="hidden" name="price"
                                                       value="{{ $product->price }}">
                                                <input type="hidden" name="qty" value="1">
                                                <button class="btn wishlist" name="submit"
                                                        type="submit" value="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                                <button class="btn fetu-comment"
                                                        name="comment" type="button">
                                                    <i class="fa fa-signal"></i>
                                                </button>
                                                <button class="btn add-to-card"
                                                        name="submit" type="submit"
                                                        value="cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="col-sm-6">
        @if(isset($categories))
            @foreach($categories->random(1) as $category)
                <div class="area-title">
                    <h3>{!! $category->name !!}</h3>
                </div>
                <div class="cosmatic-area">
                    <p class="extra-link">
                        <a href="{!! route('products.category.slug', [$category->slug]) !!}"
                           title="{!! $category->name !!}">
                            <i class="fa fa-bar-chart"></i>{!! count($category->products) !!} products here
                        </a>
                        <a href="{!! route('products.category.slug', [$category->slug]) !!}"
                           title="{!! $category->name !!}">
                            <i class="fa fa-star-o"></i>View more in category
                        </a>
                    </p>
                    <div class="row">
                        <div class="camera-slide featured-product-area">
                            @if(count($category->products))
                                @foreach($category->products as $product)
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
                                                <input type="hidden" name="id"
                                                       value="{{ $product->id }}">
                                                <input type="hidden" name="name"
                                                       value="{{ $product->name }}">
                                                <input type="hidden" name="price"
                                                       value="{{ $product->price }}">
                                                <input type="hidden" name="qty" value="1">
                                                <button class="btn wishlist" name="submit"
                                                        type="submit" value="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                                <button class="btn fetu-comment"
                                                        name="comment" type="button">
                                                    <i class="fa fa-signal"></i>
                                                </button>
                                                <button class="btn add-to-card"
                                                        name="submit" type="submit"
                                                        value="cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>