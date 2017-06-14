<div class="categori-slide-product">
    <div class="slide-product-title">
        <h3>sale off</h3>
    </div>
    <div class="slide-product">
        <?php
            $count = 1;
        ?>
        @foreach( $products->random(12) as $product) 
            @if ($count%3 == 1)
            
                 <div class="slide-product-item">
            @endif
                <div class="item3">
                    <div class="product-image">
                        <a href="{!! route('products.details', [$product->slug]) !!}">
                             @if(count($product->images))
                                @foreach($product->images->take(1) as $image)
                                    <img src="{!! asset($product->img_path.'small/'.$image->img_name) !!}"
                                         alt="{!! $product->name !!}" class="img-thumbnail" title="{!! $product->name !!}">
                                @endforeach
                            @endif
                        </a>
                         @if(!empty($product->discount_type !=null))
                            <span class="price-percent-reduction">
                                 Save {!! $product->discount.Helper::discount($product->discount_type, $product->currency) !!}
                            </span>
                        @endif
                    </div>
                    <div class="product-info">
                        <a href="{!! route('products.details', [$product->slug]) !!}">{!! $product->name !!}</a>
                    </div>
                </div>
            @if ($count%3 == 0)
                </div>
            @endif
            <?php
                $count++;
            ?>
        @endforeach
        @if($count%3 != 1)  
            </div>
        @endif
    </div>
</div>