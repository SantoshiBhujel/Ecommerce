<div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
        <div class="product-item-photo">
            <a class="product-item-img" href="{{ route('singleProduct',$product->id) }}"><img alt="product name" src="{{ asset('/storage/product_images/'.$product->display_image.'') }}"></a>
            <div class="product-item-actions">
                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                {{-- <a class="btn btn-compare" href="#"><span>compare</span></a> --}}
                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
            </div>
            <form action="{{ route('cart.store') }}" method="post">
                @csrf
                <input name="id" type="hidden" class="form-control" value="{{$product->id}}" >
                <button type="submit" class="btn btn-cart" name="">{{ __('Add To cart') }}</button>
            </form>
        </div>
        <div class="product-item-detail">
            <strong class="product-item-name"><a href="{{ route('singleProduct',$product->id) }}">{{ $product->name }}</a></strong>
            <div class="clearfix">
                <div class="product-item-price">
                    @if ($product->sale==1)
                        @if ($product->sale_type=="fixed")
                            <span class="price">Rs. {{ $product->selling_price - $product->sale_value }}</span>
                            <span class="old-price">Rs. {{ $product->selling_price }}</span>
                        @endif

                        @if ($product->sale_type=="percent")
                            <span class="price">Rs. {{ $product->selling_price - ( $product->sale_value*$product->selling_price/100) }}</span>
                            <span class="old-price">Rs. {{ $product->selling_price }}</span>
                        @endif
                    @else
                        <span class="price">Rs. {{ $product->selling_price }}</span>
                    @endif
                </div>
                <div class="product-reviews-summary">
                    <div class="rating-summary">
                        <div title="80%" class="rating-result">
                            <span style="width:80%">
                                <span><span>80</span>% of <span>100</span></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>