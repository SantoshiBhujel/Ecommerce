@extends('main')

@section('bodyClass', 'cms-index-index index-opt-1')

@section('offer-banner')
  
    @if(count($coupons)>0)

        <div role="alert" class="qc-top-site qc-top-site1 alert  fade in" style="background-image: url(images/media/index1/bg-qc-top.jpg);"> 
            <div class="container">
                <button class="close" type="button"><span aria-hidden="true">×</span></button> 
                <div class="description">
                    @foreach ($coupons as $index=>$coupon)
                        @if($index==0)
                            <span class="title">Special Offer!</span>
                            <span class="subtitle">Rewarding all customers with 
                                @if($coupon->type=="fixed")
                                    Rs. {{ $coupon->value }}
                                @endif
                                @if($coupon->type=="percent")
                                a {{ $coupon->percent_off }}% off
                                @endif
                            </span>
                            <span class="des">This offer is available from {{  \Carbon\Carbon::parse($coupon->starts_from)->format('j F, Y') }} to {{  \Carbon\Carbon::parse($coupon->expires_on)->format('j F, Y') }}.</span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection

@section('content')
      <!-- MAIN -->
      <main class="site-main">

        <!--  Popup Newsletter-->
        {{-- <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-image: url(images/media/index1/Popup.jpg);">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="block-newletter">
                        <div class="block-title">signup for our newsletter & promotions</div>
                        <div class="block-content">
                            <p class="text-title">GET <span>50% <span>off</span></span></p>
                            <form>
                                <label>on your next purchase</label>
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email..." class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="checkbox btn-checkbox">
                            <label>
                                <input type="checkbox"><span>Dont’s show this popup again!</span>
                            </label>
                        </div>
                    </div>

                    
                    
                </div>
            </div>
        </div> --}}
        <!--  Popup Newsletter-->

        <!--CATEGORIES BANNER-->
        <div class="block-section-top block-section-top1">
            <div class="container">
                <div class="box-section-top">
                    <!--SIDE BAR categori -->
                    <div class="block-nav-categori">

                        <div class="block-title">
                            <span>Categories</span>
                        </div>
                        <div class="block-content">
                            <ul class="ui-categori">
                                @foreach($menus as $index=>$menu)
                                <li class="parent @if($index > 12) cat-link-orther @endif">
                                    <a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}">
                                        <span class="icon"><img src="{{ asset('/storage/menu_icons/'.$menu->icon.'') }}" alt="nav-cat"></span>
                                        {{ $menu->name }}
                                    </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu" style="background-image: url(images/media/index1/bgmenu.jpg);">
                                        <ul class="categori-list clearfix">
                                        @foreach($menu->submenus as $submenu)
                                        
                                            <li class="col-sm-4">
                                                <strong class="title"><a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}">{{ $submenu->name }}</a></strong>
                                               
                                                    @foreach ($submenu->categories as $category)
                                                    <ul>
                                                        <li><a href="{{ route('categoryByCategory',['category'=>$category->name,'id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                                    </ul>
                                                    @endforeach 
                                            </li>
                                       @endforeach
                                    </ul>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                            <div class="view-all-categori">
                                <a  class="open-cate btn-view-all">All Categories</a>
                            </div>
                        </div>  
                    </div>
                    <!--END categori -->

                    <!--TOP BANNER block slide top -->
                    <div class="block-slide-main slide-opt-1">
                        <div class="owl-carousel dotsData" 
                            data-nav="true" 
                            data-dots="true" 
                            data-margin="0" 
                            data-items='1' 
                            data-autoplayTimeout="700" 
                            data-autoplay="true" 
                            data-loop="true">

                            @foreach ($topBanners as $index=>$banner)
                            <div class="item item{{ $index+1 }}" style="background-image: url('{{ asset('/storage/banner_images/'.$banner->image.'') }}');" data-dot="{{ $index+1 }}">

                                <div class="description">
                                @if ($index==0)
                                    <span class="title">We’ve Take A Further </span>
                                    <span class="subtitle">20% Off <br> Accessories</span>
                                    <a href="#" class="btn">shop now</a>
                                @endif

                                @if ($index==1)
                                    <span class="title">NEW COLLECTION </span>
                                    <span class="subtitle">BIG SALE</span>
                                    <span class="des"> ENJOY UP TO 35% OFF</span>
                                    <a href="#" class="btn">SHOP NOW</a>
                                @endif

                                @if ($index==2)
                                        <span class="title">Spring Fashion  </span>
                                        <span class="subtitle">Fashion Colection Style 2016 </span>
                                        <a href="#" class="btn">Now In Stock</a>
                                @endif 
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--END TOP BANNER block slide top -->

                    <!--SIDE banner -->
                    <div class="banner-slide">
                        @foreach ($sideBanners as $sideBanner)
                            <a href="#" class="box-img"><img src="{{ asset('/storage/banner_images/'.$sideBanner->image.'') }}" alt="banner-slide"></a>
                        @endforeach
                    </div>
                    <!--END SIDE banner -->

                </div>
            </div>
        </div>
         <!--END CATEGORIES BANNER-->

        <!-- block  service-->
        <div class="container">
            <div class="block-service-opt1">
                <div class="clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('images/media/index1/service1.png') }}" alt="service">
                            </span>
                            <strong class="title">Free Shipping </strong>
                            <span>On order over $200</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('images/media/index1/service2.png') }}" alt="service">
                            </span>
                            <strong class="title">30-day return</strong>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="images/media/index1/service3.png" alt="service">
                            </span>
                            <strong class="title">24/7 support</strong>
                            <span>Online consultations</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('images/media/index1/service4.png') }}" alt="service">
                            </span>
                            <strong class="title">SAFE SHOPPING </strong>
                            <span>Safe Shopping Guarantee</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- block  service-->

        <div class="container">
            <div class="row">
                <!-- BEST SELLER- ON SALE -NEW PRODUCTS-->
                <div class="col-md-9">
                    <!-- block tab products -->
                    <div class="block-tab-products-opt1">

                        <div class="block-title">
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tabproduct1"  role="tab" data-toggle="tab">best SELLERS </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabproduct2" role="tab" data-toggle="tab">ON SALE</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabproduct3"  role="tab" data-toggle="tab">NEW PRODUCTS</a>
                                </li>
                            </ul>
                        </div>

                        <div class="block-content tab-content">
                            <!-- tab 1 -->
                            <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                                <div class="owl-carousel" 
                                    data-nav="true" 
                                    data-dots="false" 
                                    data-margin="30" 
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":3}
                                }'>

                                @foreach ($bestSeller as $product)
                                    @include('publicView.welcomeProducts')
                                @endforeach

                                </div>
                            </div><!-- tab 1 -->

                            <!-- tab 2 -->
                            <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                                <div class="owl-carousel" 
                                    data-nav="true" 
                                    data-dots="false" 
                                    data-margin="30" 
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":3}
                                }'>

                                @foreach ($sales as $product)
                                    @include('publicView.welcomeProducts')
                                @endforeach

                                </div>
                            </div><!-- tab 2 -->

                            <!-- tab 3-->
                            <div role="tabpanel" class="tab-pane fade" id="tabproduct3">
                                <div class="owl-carousel" 
                                    data-nav="true" 
                                    data-dots="false" 
                                    data-margin="30" 
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":3}
                                }'>

                                @foreach ($newproducts as $product)
                                    @include('publicView.welcomeProducts')
                                @endforeach

                                </div>
                            </div><!-- tab 3-->
                        </div>
                    </div><!-- block tab products -->
                </div>
                 <!--END BEST SELLER- ON SALE -NEW PRODUCTS-->

                <!---------------- LATEST DEALS---------------->
                <div class="col-md-3">

                    <!-- block deals  of -->
                    <div class="block-deals-of block-deals-of-opt1">
                        <div class="block-title ">
                            <span class="icon"></span>
                            <div class="heading-title">latest deals</div>
                        </div>
                        <div class="block-content">
                            
                            <div class="owl-carousel" 
                                data-nav="true"
                                data-dots="false" 
                                data-margin="30" 
                                data-responsive='{
                                "0":{"items":1},
                                "480":{"items":2},
                                "768":{"items":3},
                                "992":{"items":1},
                                "1200":{"items":1}
                                }'>
                                
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="deals-of-countdown">
                                        
                                        <div class="count-down-time" data-countdown="2016/12/25"></div>
                                    </div>
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of1.jpg" ></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$108.00</span>
                                                    <span class="old-price">(-20%)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="deals-of-countdown">
                                        
                                        <div class="count-down-time" data-countdown="2016/11/25"></div>
                                    </div>
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of2.jpg" ></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Sale Couple of Smartphones</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">(-20%)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="deals-of-countdown">
                                        
                                        <div class="count-down-time" data-countdown="2016/12/30"></div>
                                    </div>
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of3.jpg" ></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Sale Couple of Smartphones</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">(-20%)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                                        
                        </div>
                    </div><!-- block deals  of -->

                </div>
                <!---------------- LATEST DEALS---------------->        
            </div>
        </div>

        <!-- NAVBAR MENUS ITEMS-->
        <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
            @foreach ($navmenus as $index=>$menu)
                 <!-- block -floor -products / floor -->
                <div class="block-floor-products block-floor-products-opt1 floor-products{{ $index+1 }}" id="floor0-{{ $index+1 }}">
                    <div class="container">
                        <div class="block-title">
                            <span class="title"><img alt="img"  src="{{ asset('/storage/menu_icons/'.$menu->icon.'') }}">{{ $menu->name }}</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul>
                                        <li role="presentation" class="active"><a href="#floor{{ $index+1 }}-1"  role="tab" data-toggle="tab">Best Seller </a></li>

                                        <li role="presentation"><a href="#floor{{ $index+1 }}-2"  role="tab" data-toggle="tab">Most Viewed </a></li>

                                        <li role="presentation"><a href="#floor{{ $index+1 }}-3"  role="tab" data-toggle="tab">New Arrivals 
                                            
                                                @foreach ($recentAdd as $recent)
                                                @if ($recent->id == $menu->id)
                                                <span class="label-cat">{{ count($recent->products) }}</span>
                                                @endif
                                                @endforeach
                                            </a>
                                        </li>

                                        @foreach ($menu->submenus as $index1=>$submenu )
                                        <li role="presentation"><a href="#floor{{ $index+1 }}-{{ $index1+4 }}"  role="tab" data-toggle="tab">{{ $submenu->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="@if($index==0)# @else #floor0-{{ $index }} @endif" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-{{ $index+2 }}" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">
                            @foreach ($menu->bannerImages as $image)
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="{{ asset('/storage/menuBannerImages/'.$image->banner_image.'') }}" alt="banner"></a>
                            </div>
                            @endforeach
                            
                        </div>
                        <!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>
                                <a href="#" class="box-img"><img src="{{ asset('/storage/menuFeaturedImage/'.$menu->featured_image.'') }}" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor{{ $index+1 }}-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        @foreach ($menu->products as $product)
                                            @include('publicView.welcomeProducts')
                                        @endforeach
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane fade " id="floor{{ $index+1 }}-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        @foreach ($mostviews as $mostview)
                                            @if ($mostview->id == $menu->id)
                                                @foreach ($mostview->products as $product)
                                                    @include('publicView.welcomeProducts')
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane fade " id="floor{{ $index+1 }}-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    @foreach ($recentAdd as $recent)
                                        @if ($recent->id == $menu->id)
                                            @foreach ($recent->products as $product)
                                                @include('publicView.welcomeProducts')
                                            @endforeach
                                        @endif
                                    @endforeach
                                    </div>
                                </div>

                                @foreach ($menu->submenus as $index1=>$submenu )
                                    <div class="tab-pane fade " id="floor{{ $index+1 }}-{{ $index1+4 }}" role="tabpanel">
                                        <div class="owl-carousel" 
                                            data-nav="true" 
                                            data-dots="false" 
                                            data-margin="0" 
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                            @foreach ($submenu->products as $product)
                                                @include('publicView.welcomeProducts')
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- block -floor -products / floor :Sports-->
            @endforeach

            <!----------BOTTOM Banner -------->
            <div class="block-banner-opt1 effect-banner3">
                <div class="container">
                    <div class="row">
                        @foreach ($bottomBanners as $banner)
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="{{ asset('/storage/banner_images/'.$banner->image.'') }}" alt="banner"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
             <!----------END BOTTOM Banner -------->

        </div>
        <!-- END NAVBAR MENUS ITEMS-->

        <!-- BRAND  showcase-->
        <div class="block-showcase block-showcase-opt1 block-brand-tabs">
            <div class="container">

                <div class="block-title">
                    <span class="title">brand showcase</span>
                </div>

                <div class="block-content" >
                    
                    <ul class="nav-brand owl-carousel"  
                        data-nav="true" 
                        data-loop="true"
                        data-dots="false" 
                        data-margin="1" 
                        data-responsive='{
                        "0":{"items":3},
                        "380":{"items":4},
                        "480":{"items":5},
                        "640":{"items":7},
                        "992":{"items":8}
                    }'>
                        @foreach ($brands as $index=>$brand)
                            <li  @if($index==0) class="active" @endif data-tab="brand1-{{ $index+1 }}">
                                <img src="{{ asset('/storage/brand_logo/'.$brand->logo.'') }}" alt="img" height="50px">
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">

                        @foreach ($brands as $index=>$brand)
                            <div class="tab-pane @if($index==0) active @endif" role="tabpanel" id="brand1-{{ $index+1 }}">                        
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="col-title">
                                            <img src="{{ asset('/storage/brand_logo/'.$brand->logo.'') }}" alt="logo" class="logo-showcase" height="150px">
                                            <div class="des">
                                               {!! $brand->description !!}
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-8">  
                                        <div class="col-product">
                                            <div class="row"> 
                                                @foreach ($brand->products as $product)
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="item">
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info d-flex">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('singleProduct',$product->id) }}">
                                                                        <img alt="{{ $product->name }}" src="{{ asset('/storage/product_images/'.$product->display_image.'') }}" width="200px" height="200px">
                                                                    </a>
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
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <!-- END BRAND  showcase-->

        <!-- block  hot categories-->
        <div class="block-hot-categories-opt1">
            <div class="container">

                <div class="block-title ">
                    <span class="title">Hot categories</span>
                </div>

                <div class="block-content">
                    <div class="row">
                        @foreach ($menus->chunk(2) as $index=>$chunk)
                           @if ($index>3)
                               @break
                           @endif
                                
                            <div class="col-md-3 col-sm-6">
                                @foreach ($chunk as $menu)
                                    <div class="item" style="height: 250px; overflow: scroll;">
                                        <div class="description" style="background-image: url('{{ asset('/storage/menu_icons/'.$menu->icon.'') }}') ">
                                            <div class="title"><span>{{ $menu->name }}</span></div>
                                            <a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}" class="btn">shop now</a>
                                        </div>
                                        <ul style="overflow: scroll;">
                                            @foreach ($menu->submenus as $submenu)
                                                <li><a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}">{{ $submenu->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <!--END  hot categories-->

    </main><!-- end MAIN -->
@endsection
