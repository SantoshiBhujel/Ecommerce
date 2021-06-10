@extends('main')

@section('bodyClass', 'index-opt-1 catalog-product-view catalog-view_op1')

@section('content')
<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->
                
        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('categoryByMenu',['name'=>$product->menu->name,'id'=>$product->menu->id]) }}">{{ $product->menu->name }}</a></li>
            <li><a href="{{ route('categoryBySubmenu',['submenu' => $product->submenu->name, 'id' => $product->submenu->id]) }}">{{ $product->submenu->name }}</a></li>
            <li class="active">{{ $product->name }}</li>
        </ol>
        <!-- Block  Breadcrumb-->

        <div class="row">
            @include('includes.alert')
            <!-- Main Contents-->
            <div class="col-md-9  col-main">

                <div class="row">
            
                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <div class="product-media media-horizontal">

                            <div class="image_preview_container images-large">

                                <img id="img_zoom" data-zoom-image="{{ asset('/storage/product_images/'.$product->display_image.'') }}" src="{{ asset('/storage/product_images/'.$product->display_image.'') }}" alt="">

                                <button class="btn-zoom open_qv"><span>zoom</span></button>

                            </div>
                            
                            <div class="product_preview images-small">

                                <div class="owl-carousel thumbnails_carousel" id="thumbnails"  data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                    
                                    <a href="#" width="250px" height="250px" data-image="{{ asset('/storage/product_images/'.$product->display_image.'') }}" data-zoom-image="{{ asset('/storage/product_images/'.$product->display_image.'') }}">
                                        
                                        <img src="{{ asset('/storage/product_images/'.$product->display_image.'') }}" alt="" >
                                    </a>
                                    
                                    @foreach ($product->photos as $photo)
                                        <a href="#" data-image="{{ asset('/storage/product_images/'.$photo->product_image.'') }}" data-zoom-image="{{ asset('/storage/product_images/'.$photo->product_image.'') }}">
                                        
                                            <img src="{{ asset('/storage/product_images/'.$photo->product_image.'') }}" data-large-image="{{ asset('/storage/product_images/'.$photo->product_image.'') }}" alt="" >
                                        </a>
                                    @endforeach

                                </div><!--/ .owl-carousel-->

                            </div><!--/ .product_preview-->

                        </div><!-- image product -->
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6"> 

                        <div class="product-info-main">

                            <h1 class="page-title">
                                {{ $product->name }}
                            </h1>
                            <div class="product-reviews-summary">
                                <div class="rating-summary">
                                    <div class="rating-result" title="70%">
                                        <span style="width:70%">
                                            <span><span>70</span>% of <span>100</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="reviews-actions">
                                    <a href="#" class="action view">Based  on 3 ratings</a>
                                    <a href="#reviews" class="action add" ><img alt="img" src="{{ asset('images/icon/write.png') }}">&#160;&#160;Write a review</a>
                                </div>
                            </div>
                           
                            <div class="product-info-price">
                                <div class="price-box">
                                    @if ($product->sale==1)
                                        @if ($product->sale_type=="fixed")
                                            <span class="price">Rs. {{ $product->selling_price - $product->sale_value }}</span>
                                            <span class="old-price">Rs. {{ $product->selling_price }}</span>
                                            <span class="label-sale">- Rs. {{ $product->sale_value }}</span>
                                        @endif

                                        @if ($product->sale_type=="percent")
                                            <span class="price">Rs. {{ $product->selling_price - ( $product->sale_value*$product->selling_price/100) }}</span>
                                            <span class="old-price">Rs. {{ $product->selling_price }}</span>
                                            <span class="label-sale">-{{ $product->sale_value }}%</span>
                                        @endif
                                    @else
                                        <span class="price">Rs. {{ $product->selling_price }}</span>
                                    @endif
                                </div>
                            </div>  
                           
                            <div class="product-info-stock">
                                <div class="stock available">
                                    <span class="label">Availability: </span>@if ($product->quantity>0)
                                        In stock
                                        @else
                                        Out of Stock
                                    @endif
                                </div>
                            </div>
                            
                            <div class="product-info-stock">
                                <div class="stock available">
                                    <span class="label">Tax: </span>@if ($product->tax_included==0)
                                        Exclusive
                                        @else
                                        Inclusive
                                    @endif
                                </div>
                            </div>

                            <div class="product-overview">
                                <div class="overview-content">
                                    {!! Illuminate\Support\Str::limit($product->description, 100) !!}
                                </div>
                            </div>

                            <div class="product-add-form">
                                <p>Available Options:</p>                            
                                <div class="product-options-wrapper">

                                    <div class="swatch-opt">
                                        <div class="swatch-attribute color" >
                                            <span class="swatch-attribute-label">Color:</span>
                                            <div class="swatch-attribute-options clearfix">
                                                <div class="swatch-option color selected" style="background-color: #0c3b90 ;"></div>
                                                <div class="swatch-option color" style="background-color: #036c5d ;"></div>
                                                <div class="swatch-option color" style="background-color: #5f2363 ;"></div>
                                                <div class="swatch-option color " style="background-color: #ffc000 ;"></div>
                                                <div class="swatch-option color" style="background-color: #36a93c ;"></div>
                                                <div class="swatch-option color" style="background-color: #ff0000 ;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-qty">
                                        <label class="label">Qty: </label>
                                        <div class="control">
                                            <input type="text" class="form-control input-qty" value='1' id="qty1" name="qty1"  maxlength="12"  minlength="1">
                                            <button class="btn-number  qtyminus" data-type="minus" data-field="qty1"><span>-</span></button>
                                            <button class="btn-number  qtyplus" data-type="plus" data-field="qty1"><span>+</span></button>
                                        </div>
                                    </div>
                                    <div class="form-configurable">
                                        <label for="forSize" class="label">Size: </label>
                                        <div class="control">
                                            <select  id="forSize" class="form-control attribute-select">
                                                <option value="1">XXXL</option>
                                                <option value="4">X</option>
                                                <option value="5">L</option>
                                            </select>
                                        </div>
                                        <a href="#" class="size-chart">Size chart</a>
                                    </div>
                                </div>

                                <div class="product-options-bottom clearfix"> 
                                    <div class="actions">
                                        <form action="{{ route('cart.store') }}" method="post">
                                            @csrf
                                            <input name="id" type="hidden" class="form-control" value="{{$product->id}}" >
                                            <button type="submit" class="action btn-cart" name="">{{ __('Add To cart') }}</button>
                                        </form>
                                        <div class="product-addto-links">

                                            <a href="#" class="action btn-wishlist" title="Wish List">
                                                <span>Wishlist</span>
                                            </a>
                                            {{-- <a href="#" class="action btn-compare" title="Compare">
                                                <span>Compare</span>
                                            </a> --}}
                                        </div>
                                    </div>                                   
                                </div> 
                            </div>
                            <div class="product-addto-links-second">
                                <a href="#" class="action action-print">Print</a>
                                <a href="#" class="action action-friend">Send to a friend</a>
                            </div>
                            <div class="share">
                                <img src="{{ asset('images/media/index1/share.png') }}" alt="share">
                            </div>
                        </div><!-- detail- product -->

                    </div><!-- Main detail -->

                </div>

                <!-- product tab info -->
            
                <div class="product-info-detailed ">

                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#description"  role="tab" data-toggle="tab">Product Details   </a></li>
                        <li role="presentation"><a href="#tags"  role="tab" data-toggle="tab">information </a></li>
                        <li role="presentation"><a href="#reviews"  role="tab" data-toggle="tab">reviews</a></li>
                        <li role="presentation"><a href="#tab-cust"  role="tab" data-toggle="tab">Guarantees</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <div class="block-title">Product Details</div>
                            <div class="block-content">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tags">
                            <div class="block-title">information</div>
                            <div class="block-content">
                                {!! $product->features !!}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            <div class="block-title">reviews</div>
                            <div class="block-content">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-cust">
                            <div class="block-title">Guarantees</div>
                            <div class="block-content">
                                <p> {{ $product->duration }} {{ $product->duration_type }} {{ $product->warranty_type }}</p>
                           
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- product tab info -->
                <!-- Comment -->
                <div class="single-box">
                    <h2><img alt="img" src="{{ asset('images/icon/write.png') }}"> Leave a Comment </h2>
                    <div class="coment-form">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" name="name" @auth value="{{ auth()->user()->name }}" @endauth class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name="email" @auth value="{{ auth()->user()->email }}" @endauth class="form-control">
                                </div>
                            
                                <div class="col-sm-12">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message"rows="8" class="form-control"></textarea>
                                </div>
                            </div>
                            <button class="btn-comment">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- RELATED product -->
                <div class="block-related ">
                    <div class="block-title">
                        <strong class="title">RELATED products</strong>
                    </div>
                    <div class="block-content ">
                        <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                            @foreach ($relatedProducts as $product)
                                <li class="product-item product-item-opt-2">
                                    @include('publicView.welcomeProducts')
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <!-- END RELATED product -->

                <!-- YOU MIGHT ALSO LIKE Products -->
                <div class="block-upsell ">
                    <div class="block-title">
                        <strong class="title">You might also like</strong>
                    </div>
                    <div class="block-content ">
                        <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                            
                            @foreach ($mightLike as $product)
                                <li>
                                    @include('publicView.welcomeProducts')
                                </li>
                            @endforeach
                        
                        </ol>
                    </div>
                </div>
                <!-- END YOU MIGHT ALSO LIKE Products -->

            </div><!-- Main Content -->
            
            <!-- Sidebar -->
            <div class=" col-md-3 col-sidebar">

                <!-- Block  bestseller products-->
                {{-- @include('bestseller-products') --}}
                <!-- Block  bestseller products-->

                <!-- Block  bestseller products-->
                <div class="block-sidebar block-sidebar-products">
                    <div class="block-title">
                        <strong>BEST SALES</strong>
                    </div>
                    <div class="block-content">
                        <div class="owl-carousel" 
                        data-nav="false" 
                        data-dots="true" 
                        data-margin="0" 
                        data-autoplayTimeout="700" 
                        data-autoplay="true" 
                        data-loop="true"
                        data-responsive='{
                        "0":{"items":1},
                        "420":{"items":1},
                        "480":{"items":2},
                        "600":{"items":2},
                        "992":{"items":1}
                        }'>
                           
                            @foreach ($bestSeller->chunk(3) as $chunk)
                                <div class="item">
                                    @foreach($chunk as $product)
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="{{ route('singleProduct',$product->id) }}"><img alt="product name" src="{{ asset('/storage/product_images/'.$product->display_image.'') }}"></a>
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
                                                            <div title="70%" class="rating-result">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- Block  bestseller products-->

                <!-- block slide top -->
                <div class="block-sidebar block-banner-sidebar">
                    <div class="owl-carousel" 
                        data-nav="false" 
                        data-dots="true" 
                        data-margin="0" 
                        data-items='1' 
                        data-autoplayTimeout="700" 
                        data-autoplay="true" 
                        data-loop="true">
                        <div class="item item1" >
                           <img src="{{ asset('images/media/detail/banner-slide2.jpg') }}" alt="images">
                        </div>
                        <div class="item item2" >
                           <img src="{{ asset('images/media/detail/banner-slide2.jpg') }}" alt="images">
                        </div>
                        <div class="item item3" >
                           <img src="{{ asset('images/media/detail/banner-slide2.jpg') }}" alt="images">
                        </div>
                    </div>
                </div><!-- block slide top -->

                <!-- Block  SALE products-->
                <div class="block-sidebar block-sidebar-products-opt2">
                    <div class="block-title">
                        <strong>SALE PRODUCTS</strong>
                    </div>
                    <div class="block-content">
                        <div class="owl-carousel" 
                        data-nav="false" 
                        data-dots="true" 
                        data-margin="0" 
                        data-autoplayTimeout="700" 
                        data-autoplay="true" 
                        data-loop="true"
                        data-responsive='{
                        "0":{"items":1},
                        "420":{"items":2},
                        "480":{"items":2},
                        "600":{"items":2},
                        "992":{"items":1}
                        }'>
                            @foreach ($sales as $index=> $product)
                                @if ($index>2)
                                    @break
                                @endif
                                @include('publicView.welcomeProducts')
                            @endforeach
                        </div>
                    </div>
                </div><!-- Block  SALE products-->

                <!-- block slide top -->
                <div class="block-sidebar block-sidebar-testimonials2">
                   
                    <div class="block-content">
                        <div class="owl-carousel" 
                            data-nav="false" 
                            data-dots="true" 
                            data-margin="0" 
                            data-items='1' 
                            data-autoplayTimeout="700" 
                            data-autoplay="true" 
                            data-loop="true">
                            <div class="item " >
                                <div class="img">
                                    <img src="{{ asset('images/icon/icon1.png') }}" alt="icon1">
                               </div>
                               <strong class="title">100% Money Back Guaranteed</strong>
                               <div class="des">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .
                               </div>
                               <a href="#" class="btn">Read more <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div><!-- block slide top -->


            </div><!-- Sidebar -->

        </div>
    </div>
</main><!-- end MAIN -->

{{-- <script>

    (function($) {

        "use strict";

        $(document).ready(function() {

            /*  [ Filter by price ]

            - - - - - - - - - - - - - - - - - - - - */

            $('#slider-range').slider({

                range: true,

                min: 0,

                max: 500,

                values: [0, 300],

                slide: function (event, ui) {

                    $('#amount-left').text(ui.values[0] );
                    $('#amount-right').text(ui.values[1] );

                }

            });

            $('#amount-left').text($('#slider-range').slider('values', 0));

            $('#amount-right').text($('#slider-range').slider('values', 1));
        }); 

    })(jQuery);

</script> --}}
@endsection