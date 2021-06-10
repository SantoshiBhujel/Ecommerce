<div class="row">
    <!-- Main Content -->
    <div class="col-md-9 col-md-push-3  col-main">

        <!-- images categori -->
        <div class="category-view">
            <div class="owl-carousel " 
                data-nav="true" 
                data-dots="false" 
                data-margin="0" 
                data-items='1' 
                data-autoplayTimeout="700" 
                data-autoplay="true" 
                data-loop="true">
                @foreach ($menu->sliderImages as $image)
                    <div class="item " >
                        <a><img src="{{ asset('storage/menuBannerImages/'.$image->slider_image.'') }}" alt="category-images"></a>
                    </div>
                @endforeach
            </div>
        </div><!-- images categori -->

        <!-- link categori -->
        {{-- <ul class="category-links">
            <li class="current-cate">All Categories</li>
            @foreach ($menu->submenus as $submenu)
                <li><a href="#">{{ $submenu->name }}</a></li>
            @endforeach
        </ul><!-- link categori --> --}}

        <!-- Toolbar -->
        <div class=" toolbar-products toolbar-top">

            <div class="btn-filter-products">
                <span>Filter</span>
            </div>

            <h1 class="cate-title">{{ $menu->name }}</h1>

            <div class="modes">
                <strong  class="label">View as:</strong>
                <strong  class="modes-mode active mode-grid" title="Grid">
                    <span>grid</span>
                </strong>
            </div><!-- View as -->



        </div><!-- Toolbar -->

        <!-- List Products -->
        @if (count($products)>0)
            <div class="products  products-grid">
                <ol class="product-items row">
                    @foreach ($products as $product)
                    <li class="col-sm-4 product-item ">
                        @include('publicView.welcomeProducts')
                    </li>
                    @endforeach
                </ol>
            </div>
            <!-- Toolbar -->
            <div class=" toolbar-products toolbar-bottom">
                
                <div class="toolbar-option">

                    <div class="toolbar-sorter ">
                        <label    class="label">Sort by:</label>
                        <select class="sorter-options form-control" >
                            <option selected="selected" value="position">Product name</option>
                            <option value="name">Name</option>
                            <option value="price">Price</option>
                        </select>
                    </div>
                </div>

                <ul class="pagination">
                   {{ $products->links("pagination::bootstrap-4") }}
                </ul>

            </div>
            <!-- Toolbar -->
        @else
            <h1>No products for this category</h1>
        @endif

        <!-- list product -->
        
        
    </div><!-- Main Content -->
    
    <!-- Sidebar -->
    <div class="col-md-3 col-md-pull-9  col-sidebar">

        <!-- Block  bestseller products-->
        @include('bestseller-products')
        <!-- Block  bestseller products-->

        <!-- block filter products -->
        <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
            <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="block-title">
                <strong>FILTER SELECTION</strong>
            </div>
            <div class="block-content">

                <!-- Filter Item  categori-->
                <div class="filter-options-item filter-options-categori">
                    <div class="filter-options-title">Categories</div>
                    <div class="filter-options-content">
                        <ol class="items">
                            @foreach ($menu->submenus as $submenu)
                                <li class="item ">
                                    <label>
                                        <span> <a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}">{{ $submenu->name }}<span class="count">({{ count($submenu->products) }})</span> </a></span> 
                                    </label>
                                </li>
                            @endforeach    
                        </ol>
                    </div>
                </div><!-- Filter Item  categori-->

                <!-- filter price -->
                <div class="filter-options-item filter-options-price">
                    <div class="filter-options-title">Price</div>
                    <div class="filter-options-content">
                        <div class="slider-range">
                            <div id="slider-range" ></div>
                            
                            <div class="action">
                                <span class="price">
                                    <span>Range:</span>
                                    Rs.<span id="amount-left"></span>
                                    -
                                    Rs.<span id="amount-right"></span>
                                </span>
                            </div>
                        </div>
                        <ol class="items">
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>Rs.20 - Rs.50 <span class="count"></span>  </span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span> Rs.50 -  Rs.100 <span class="count"></span> </span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span> Rs.100 -  Rs.250 <span class="count"></span> </span>
                                </label>
                            </li>
                            
                        </ol>
                    </div>
                </div><!-- filter price -->

                <!-- filter brand-->
                <div class="filter-options-item filter-options-brand">
                    <div class="filter-options-title">BRAND</div>
                    <div class="filter-options-content">
                        <ol class="items">
                            @foreach ($brands as $brand)
                                <li class="item ">
                                    <label>
                                        <a href="{{ route('productByMenuBrand',['brand_id'=>$brand->brand_id,'menu_id'=>$menu->id,'menu'=>$menu->name]) }}"><span>{{ \App\Models\Brand::where(['id' => $brand->brand_id])->pluck('name')->first() }}
                                            <span class="count">({{ $brand->countNumber }})</span> </span></a>
                                    </label>
                                </li> 
                            @endforeach
                        </ol>
                    </div>
                </div><!-- Filter Item -->

                <!-- filter color-->
                <div class="filter-options-item filter-options-color">
                    <div class="filter-options-title">COLOR</div>
                    <div class="filter-options-content">
                        <ol class="items">
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #fca53c;"></span>          
                                        <span class="count">(30)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #6b5a5c;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #000000;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #3063f2;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #f9334a;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #964b00;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #faebd7;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #e84c3d;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            <li class="item">
                                <label>
                                    <input type="checkbox">
                                    <span>
                                        <span class="img" style="background-color: #fccacd;"></span>          
                                        <span class="count">(20)</span>
                                    </span>
                                    
                                </label>
                            </li>
                            
                        </ol>
                    </div>
                </div><!-- Filter Item -->

                <!-- Filter Item  size-->
                <div class="filter-options-item filter-options-size">
                    <div class="filter-options-title">SIZE</div>
                    <div class="filter-options-content">
                        <ol class="items">
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>L <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>32 <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>36 <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>37 <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                </label>
                            </li>
                            <li class="item ">
                                <label>
                                    <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                </label>
                            </li>
                            
                        </ol>
                    </div>
                </div><!-- Filter Item  size-->

            </div>
        </div><!-- Filter -->

        <!-- Block  tags-->
        <div class="block-sidebar block-sidebar-tags">
            <div class="block-title">
                <strong>product tags</strong>
            </div>
            <div class="block-content">
                <ul>              
                    <li><a href="#" class="lv2">actual</a></li>
                    <li><a href="#" class="lv1">adorable</a></li>
                    <li><a href="#" class="lv3">amaze</a></li>
                    <li><a href="#" class="lv5">change</a></li>
                    <li><a href="#" class="lv2">consider</a></li>
                    <li><a href="#" class="lv1">delivery</a></li>
                    <li><a href="#" class="lv1">Top</a></li>
                    <li><a href="#" class="lv4">flexib</a></li>
                    <li><a href="#" class="lv1">phenomenon </a></li>
                </ul>
            </div>
        </div><!-- Block  tags-->

    </div><!-- Sidebar -->
</div>

<script>

    (function($) {

        "use strict";

        $(document).ready(function() {

            /*  [ Filter by price ]

            - - - - - - - - - - - - - - - - - - - - */

            $('#slider-range').slider({

                range: true,

                min: 0,

                max: 500,

                values: [0, 200000],

                slide: function (event, ui) {

                    $('#amount-left').text(ui.values[0] );
                    $('#amount-right').text(ui.values[1] );

                }

            });

            $('#amount-left').text($('#slider-range').slider('values', 0));

            $('#amount-right').text($('#slider-range').slider('values', 1));
        }); 

    })(jQuery);

</script>