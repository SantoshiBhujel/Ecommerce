<!DOCTYPE html>
<html lang="en">

<head>
    <title> Maddus Nepali No.1 retailer and wholesaler Online Shopping Store</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="web design outsource services Nepal, freelance web designer Nepal, web design services Nepal, custom web site design Nepal, web designer company in Nepal, web design Kathmandu, Nepal, affordable web site design Nepal, business design Nepal web" />

    <meta name="description" content="Web design Nepal, web design company in Nepal, web design in Nepal, flash web design Nepal, outsourcing web design to Nepal, web design package Nepal, web site template design Nepal, offshore web site development Nepal, web site designing Nepal" />

    <meta name="author" content="Maddus" />

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('/storage/img/favicon.png') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body class="@yield('bodyClass')">

    <div class="wrapper">

        <!-- alert banner top -->
        @yield('offer-banner')
        <!-- alert banner top -->

        <!-- HEADER -->
        <header class="site-header header-opt-1 cate-show">

            <!-- header-top -->
            <div class="header-top">
                <div class="container">

                    <!-- nav-left -->
                    <ul class="nav-left" >
                        <li ><span><i class="fa fa-phone" aria-hidden="true"></i>+977-9844216449</span></li>

                        <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
                    </ul><!-- nav-left -->

                    <!-- nav-right -->
                    <ul class=" nav-right">
                        <li class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu  ">
                                <ul class="account">
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="{{ route('profile.show') }}">My Account</a></li>
                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('cart.index') }}">Cart</a></li>
                                    @auth
                                        @if (auth()->user()->roles=="admin")
                                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                        @endif
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>
                                            </form>
                                        </li>
                                    @else
                                    <li><a href="{{ route('login') }}">Login/Register</a></li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ route('contactUs') }}" >Contact</a></li>
                        <li><a href="#">Support </a></li>
                        <li><a href="{{ route('aboutUs') }}">About Us </a></li>
                    </ul><!-- nav-right -->
                </div>
            </div><!-- header-top -->

            <!-- header-content -->
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 nav-left">
                            <!-- logo -->
                            <strong class="logo">
                                <a href="{{ route('welcome') }}"><img src="{{ asset('/images/media/index1/logo.png') }}" alt="logo"></a>
                            </strong>
                        </div>

                        <div class="nav-right">  
                            <!-- block mini cart -->  
                            <div class="block-minicart dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <span class="cart-icon"></span>
                                    <span class="counter qty">
                                        <span class="cart-text">Shopping Cart</span>
                                        <span class="counter-number">{{ Cart::count() }}</span>
                                        <span class="counter-label"> {{ Cart::count() }} <span>Items</span></span>
                                        <span class="counter-price">{{ Cart::total() }}</span>
                                    </span>
                                </a>
                                <!--Cart Details Dropdown --> 
                                <div class="dropdown-menu">
                                    <div  class="minicart-content-wrapper" >
                                        <div class="subtitle">
                                            You have {{ Cart::count() }} item(s) in your cart
                                        </div>
                                            
                                        @if(Cart::count()>0)
                                        <div class="minicart-items-wrapper">
                                            <ol class="minicart-items">
                                                @foreach(Cart::content() as $item)
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="Product Name">
                                                            <img class="product-image-photo" src="{{ asset('/storage/product_images/'.$item->options->image.'') }}" alt="img">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a>{{ $item->name  }}</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">Rs. {{$item->price }}</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span><span class="number">{{ $item->qty }}</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a title="Remove item">
                                                                    <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                                                                        {{method_field('DELETE')}}
                                                                        @csrf
                                                                        <button type='submit'>X</button>                                   
                                                                    </form>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li> 
                                                @endforeach
                                                
                                            </ol>
                                        </div>

                                        <div class="subtotal">
                                            <span class="label">Sub Total</span>
                                            <span class="price">{{ Cart::subTotal() }}</span>
                                        </div>
                                        <div class="subtotal">
                                            <span class="label">Total</span>
                                            <span class="price">{{ Cart::total() }}</span>
                                        </div>
                                        <div class="actions">
                                            <a href="{{ route('checkout') }}"> 
                                                <button class="btn btn-checkout" type="button" title="Check Out">
                                                <span>Checkout</span>
                                                </button>
                                            </a>   
                                        </div>

                                        @else
                                        No items in your cart
                                        @endif    
                                    </div>
                                </div>
                                 <!-- End Cart Details Dropdown --> 
                            </div>

                        </div>
                        <!-- ---------- SEARCH  ---------->
                        <div class="nav-mind">   
                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-title">
                                    <span>Search</span>
                                </div>
                                <div class="block-content">
                                    <form>
                                        <div class="categori-search  ">
                                            <select data-placeholder="All Categories" class="categori-search-option">
                                                <option>All Categories</option>
                                                @foreach ($menus as $menu)
                                                    <option value=" {{ $menu->name }}"> {{ $menu->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-search">
                                            <div class="box-group">
                                                <input type="text" class="form-control" placeholder="i'm Searching for...">
                                                <button class="btn btn-search" type="button"></button>
                                            </div>                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!------------ END SEARCH  ---------->

                    </div>

                </div>
            </div>
            <!-- header-content -->

            <!-- header-nav -->
            <div class="header-nav mid-header">
                <div class="container">

                    <div class="box-header-nav">

                        <!-- btn categori mobile -->
                        <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>

                        <!-- btn menu mobile -->
                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span></span>

                        <!--categori  -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                            <div class="block-content">
                                <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                                <ul class="ui-categori">
                                    @foreach ($menus as $menu)
                                    <li class="parent">
                                        <a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}">
                                            <span class="icon"><img src="{{ asset('/storage/menu_icons/'.$menu->icon.'') }}" alt="nav-cat"></span>
                                            {{ $menu->name }}
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <div class="categori-img">
                                                <a><img src="{{ asset('images/media/index1/categori-img1.jpg') }}" alt="categori-img"></a>
                                            </div>
                                            <ul class="categori-list">
                                                @foreach ($menu->submenus as $submenu)
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}">{{ $submenu->name }}</a></strong>
                                                    <ul>
                                                        @foreach ($submenu->categories as $category)
                                                            <li><a href="{{ route('categoryByCategory',['category'=>$category->name,'id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                                        @endforeach   
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                            
                        </div><!--categori  -->

                        <!-- menu -->
                        <div class="block-nav-menu">
                            <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                            
                            <ul class="ui-menu">
                                @foreach ($navmenus as $index1=>$menu)
                                    @if($index1 == 0)
                                    <li><a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}">{{ $menu->name }}</a></li>
                                    @endif
                                    @if($index1==1)
                                        <li class="parent parent-submenu">
                                            <a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}"> {{ $menu->name }} </a>
                                            <span class="toggle-submenu"></span>
                                            <div class="submenu drop-menu">
                                                <ul >
                                                    @foreach ($menu->submenus as $submenu)
                                                        <li><a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}">{{ $submenu->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endif
                                    @if ($index1==2)
                                    <li class="parent parent-megamenu">
                                        <a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}"> {{ $menu->name }} <span class="label-menu">New</span></a>
                                        <span class="toggle-submenu"></span>
                                        <div class="megamenu drop-menu">
                                            <ul>
                                                @foreach ($menu->submenus as $submenu)
                                                <li class="col-md-3">
                                                    <div class="img-categori">
                                                        <a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}"><img alt="img" src="{{ asset('images/media/index1/img-categori1.jpg') }}"></a>
                                                    </div>

                                                    <strong class="title"><a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}"><span>{{ $submenu->name }}</span></a></strong>
                                                    <ul class="list-submenu">
                                                        @foreach($submenu->categories as $category)
                                                            <li><a href="{{ route('categoryByCategory',['category'=>$category->name,'id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li> 
                                                @endforeach
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    @endif 
                                    @if ($index1==3)
                                    <li class="parent parent-megamenu">
                                        <a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}"> {{ $menu->name }}</a>
                                        <span class="toggle-submenu"></span>
                                        <div class="megamenu drop-menu">
                                            <ul>
                                               
                                                <li class="col-md-3">
                                                    @foreach ($menu->submenus as $submenu)
                                                    <a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}"><strong class="title">{{ $submenu->name }}<span> </span></strong> </a>
                                                    <ul class="list-submenu">
                                                        @foreach ($submenu->categories as $category)
                                                        <li><a href="{{ route('categoryByCategory',['category'=>$category->name,'id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                    @endforeach
                                                </li>
                                                <li class="col-md-3">
                                                    <div class="img-categori">
                                                        <a href="#"><img alt="img" src="{{ asset('images/media/index1/img-categori5.jpg') }}"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endif
                                    @if ($index1>3)
                                        <li><a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}"> {{ $menu->name }} </a></li>
                                    @endif
                                @endforeach
                                <li><a href="{{ route('blogList') }}">Blog</a></li>
                            </ul>

                        </div>
                        <!-- menu -->


                        <!--setting  -->
                        {{-- <div class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                            <div class="dropdown-menu  ">
                                <div class="switcher  switcher-language">
                                    <strong class="title">Select language</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_french.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_germany.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_spain.png">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="switcher  switcher-currency">
                                    <strong class="title">SELECT CURRENCIES</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <i class="fa fa-eur" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-gbp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <ul class="account">
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Compare</a></li>
                                    <li><a href="#">Login/Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--setting  --> --}}
                        
                    </div>
                </div>
            </div><!-- header-nav -->

        </header><!-- end HEADER -->        

      {{-- @include('includes.alert') --}}
      @yield('content')


        <!-- FOOTER -->
      <footer class="site-footer footer-opt-1">
        <div class="container">
            <div class="footer-column">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xs-6 col">
                        <strong class="logo-footer">
                            <a><img src="{{ asset('images/media/index1/logo-footer.png') }}" alt="logo"></a>
                        </strong>
                        <table class="address">
                            <tr>
                                <td><b>Address: </b></td>
                                <td>New Baneshwor, Kathmandu</td>
                            </tr>
                            <tr>
                                <td><b>Phone: </b></td>
                                <td> 01-4786033</td>
                            </tr>
                            <tr>
                                <td><b>Email:</b></td>
                                <td>megabytetech@gmail.com</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-6 col">
                        <div class="links">
                            <h3 class="title">Company</h3>
                            <ul>
                                <li><a href="{{ route('welcome') }}">Home</a></li>
                                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                                <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-6 col">
                        <div class="links">
                            <h3 class="title">My Account</h3>
                            <ul>
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-6 col">
                        <div class="links">
                            <h3 class="title">Support</h3>
                            <ul>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-6 col">
                        <div class="block-newletter">
                            <div class="block-title">NEWSLETTER</div>
                            <div class="block-content">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your Email Address">
                                        <span class="input-group-btn">
                                            <button class="btn btn-subcribe" type="button"><span>ok</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="block-social">
                            <div class="block-title">Let’s Socialize</div>
                            <div class="block-content">
                                <a href="#" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="sh-pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="#" class="sh-vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                <a href="#" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-methods">
                <div class="block-title">
                    Accepted Payment Methods
                </div>
                <div class="block-content">
                    <img alt="payment" src="{{ asset('images/media/index1/payment5.png') }}">
                    <img alt="payment" src="{{ asset('images/media/index1/payment6.png') }}">
                    <img alt="payment" src="{{ asset('images/media/index1/payment7.png') }}">
                    <img alt="payment" src="{{ asset('images/media/index1/payment8.png') }}">
                    <img alt="payment" src="{{ asset('images/media/index1/payment9.png') }}">
                </div>
            </div>

            <div class="footer-bottom">
                <div class="links">
                    <ul>
                        <li><a href="#"> Company Info – Partnerships </a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Online Shopping </a></li>
                        <li><a href="#">Promotions </a></li>
                        <li><a href="#">My Orders </a></li>
                        <li><a href="#">Help </a></li>
                        <li><a href="#">Site Map </a></li>
                        <li><a href="#">Customer Service </a></li>
                        <li><a href="#">Support </a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Most Populars </a></li>
                        <li><a href="#">Best Sellers </a></li>
                        <li><a href="#">New Arrivals </a></li>
                        <li><a href="#">Special Products </a></li>
                        <li><a href="#"> Manufacturers </a></li>
                        <li><a href="#">Our Stores </a></li>
                        <li><a href="#">Shipping </a></li>
                        <li><a href="#">Payments </a></li>
                        <li><a href="#">Payments </a></li>
                        <li><a href="#">Refunds </a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Terms & Conditions </a></li>
                        <li><a href="#">Policy </a></li>
                        <li><a href="#">Policy </a></li>
                        <li><a href="#"> Shipping </a></li>
                        <li><a href="#">Payments </a></li>
                        <li><a href="#">Returns </a></li>
                        <li><a href="#">Refunds </a></li>
                        <li><a href="#">Warrantee </a></li>
                        <li><a href="#">FAQ </a></li>
                        <li><a href="#">Contact </a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                Copyright © Maddus. All Rights Reserved. Designed by <a href="https://megabytetech.com/" target="_blank">Megabyte Tech</a>
            </div>
        </div>
        </footer><!-- end FOOTER -->      
        
        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>

    <!-- jQuery -->    
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- sticky -->
    <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>

    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- Boostrap --> 
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Countdown --> 
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>

    <!--jquery Bxslider  -->
    <script type="text/javascript" src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    
    <!-- actual --> 
    <script type="text/javascript" src="{{ asset('js/jquery.actual.min.js') }}"></script>

    <!-- Chosen jquery-->    
    <script type="text/javascript" src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    
    <!-- parallax jquery--> 
    <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>

    <!-- elevatezoom --> 
    <script type="text/javascript" src="{{ asset('js/jquery.elevateZoom.min.js') }}"></script>

    <!-- fancybox -->
    <script src="{{ asset('js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>

    <!-- arcticmodal -->
    <script src="{{ asset('js/arcticmodal/jquery.arcticmodal.js') }}"></script>
    
    <!-- Main -->  
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    
    
</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2020 16:54:57 GMT -->
</html>