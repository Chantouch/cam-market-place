<div class="featured-item">
    @foreach($products->random(10) as $product)
        <div class="col-sm-3">
            <div class="featured-inner">
                <div class="featured-image">
                    <a href="{!! route('products.details', [$product->slug]) !!}">
                        @if(count($product->images))
                            @foreach($product->images->take(1) as $image)
                                <img src="{!! asset($product->img_path.'small/'.$image->img_name) !!}"
                                     alt="{!! $product->name !!}" class="img-thumbnail">
                            @endforeach
                        @endif
                    </a>
                    @if(!empty($product->discount_type !=null))
                        <span class="price-percent-reduction">
                                                Save {!! $product->discount.Helper::discount($product->discount_type, $product->currency) !!}
                                            </span>
                    @endif
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
                    @if(!empty($product->discount_type !=null))
                        @if($product->discount_type == 2)
                            <span class="price">
                                                    {!! Helper::currency($product->currency).($product->price-($product->discount/100)*$product->price) !!}
                                                </span>
                            <span class="price" style="text-decoration: line-through;">
                                                    {!! Helper::currency($product->currency).$product->price !!}
                                                </span>
                        @else
                            <span class="price">
                                                    {!! Helper::currency($product->currency).($product->price-$product->discount) !!}
                                                </span>
                            <span class="price" style="text-decoration: line-through;">
                                                    {!! Helper::currency($product->currency).$product->price !!}
                                                </span>
                        @endif
                    @else
                        <span class="price">{!! Helper::currency($product->currency).$product->price !!}</span>
                    @endif
                    {!! Form::open(['route' => ['products.carts.store'], 'method' => 'POST']) !!}
                    <div class="featured-button">
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="qty" value="1">
                        <button class="btn wishlist" name="submit" type="submit" value="wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button class="btn fetu-comment" name="comment" type="button">
                            <i class="fa fa-signal"></i>
                        </button>
                        <button class="btn add-to-card" name="submit" type="submit" value="cart">
                            <i class="fa fa-shopping-cart"></i> <span>Add to cart</span>
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endforeach
</div>