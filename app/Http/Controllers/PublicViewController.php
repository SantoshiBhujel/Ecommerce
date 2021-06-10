<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\Page;
use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Banner;
use App\Models\Coupon;
use App\Mail\ContactUs;
use App\Models\Product;
use App\Models\Submenu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Gloudemans\Shoppingcart\Facades\Cart;

class PublicViewController extends Controller
{

    /**
     * Display WELCOME PAGE
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $coupons = Coupon::where('starts_from','<=',Carbon::today())->where('expires_on','>=',Carbon::today())->get();

        $navmenus= Cache::remember('navmenu', 60*60, function(){
                return Menu::with(['products' => function($q) {
                        $q->orderBy('sold','Desc');
                    }])
                ->where('show_on_navbar',1)
                ->get();
            }
        );

        $mostviews=Cache::remember('mostviews', 60*60, function(){
                return Menu::with(['products' => function($q) {
                        $q->orderBy('views','Desc');
                    }])
                ->where('show_on_navbar',1)
                ->get();
            }
        );       

        $recentAdd=Cache::remember('recentAdded', 60*60, function(){
                return Menu::with(['products' => function($q) {
                        $q->where('created_at','>=',Carbon::today()->subDays(30));
                    }])
                ->where('show_on_navbar',1)
                ->get();
            }
        );

        $new= Cache::remember('new', 60*60, function(){
                return Product::where('created_at','>=',Carbon::today()->subDays(20))->orderByRaw('RAND()')->take(7)->get();
            }
        );

        $brands= Cache::remember('brand',60*60*24,function(){
                return Brand::all();
            }
        );

        return view('welcome',with([
            'coupons' => $coupons,
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$navmenus,
            'mostviews'=> $mostviews,
            'recentAdd' => $recentAdd,
            'newproducts' => $new,
            'bestSeller' => $this->helper()->get('bestSeller'),
            'sales' =>$this->helper()->get('sales'),
            'brands' => $brands,
            'topBanners' => $this->helper()->get('topBanners'),
            'sideBanners' => $this->helper()->get('sideBanners'),
            'bottomBanners' => $this->helper()->get('bottomBanners'),
            ])
        );
    }


    /**
     * Display ABOUT US
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        $page= Page::where('page','about')->first();
        return view('aboutUs',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'page' => $page
            ])
        );
    }

     /**
     * Display ABOUT US
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $page= Page::where('page','terms')->first();
        return view('aboutUs',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'page' => $page
            ])
        );
    }

     /**
     * Display ABOUT US
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $page= Page::where('page','privacy')->first();
        return view('aboutUs',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'page' => $page
            ])
        );
    }

    /**
     * Display CATEGORY BY MENU
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryByMenu($menu,$id)
    {
        $menu= Menu::findOrFail($id);
        $products=  $menu->products()->paginate(15);
        $brands =$this->productBrand($menu);
        return view('publicView.categoryByMenu',with([
                'menus' =>$this->helper()->get('menus'),
                'navmenus' =>$this->helper()->get('navmenus'),
                'menu' => $menu,
                'products' => $products,
                'brands' => $brands
            ])
        );
    }

    /**
     * Display CATEGORY BY SUBMENU 
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryBySubmenu($submenu,$id)
    {
        $submenu= Submenu::findOrFail($id);
        $products=  $submenu->products()->paginate(15);
        //$menu= $submenu->menu;
        $brands =$this->productBrand($submenu->menu);
        return view('publicView.categoryBySubmenu',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            //'menu' => $menu,
            'submenu' => $submenu,
            'products' => $products,
            'brands' => $brands
            ])
        );
    }


     /**
     * Display CATEGORY BY CATEGORY
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryByCategory($id)
    {
        $category= Category::findOrFail($id);
        // dd('here');
        $products=  $category->products()->paginate(15);
        //dd($products);
        
        $brands =$this->productBrand($category->submenu->menu);
        return view('publicView.categoryByCategory',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'category' => $category,
            'products' => $products,
            'brands' => $brands
            ])
        );
    }


    /**
     * Helper Function
     *
     * @return \Illuminate\Http\Response
     */
    private function productBrand($menu)
    {
        $brands =$menu->products()->select('brand_id' ,DB::raw(' COUNT(*) AS countNumber'))                  
                    ->groupBy('brand_id')
                    ->orderBy('countNumber','Desc')
                    ->get();
        return $brands;
    }

    /**
     * Find product by brand and menu
     *
     * @return \Illuminate\Http\Response
     */
    public function productByMenuBrand($brand_id,$menu_id,$menu)
    {
        $products = Brand::findOrFail($brand_id)->with(['products' => function($q) {
            $q->where('menus_id',$menu_id);
        }]);
        $menu=Menu::findOrFail($menu_id);
        $brands =$this->productBrand($menu);
        return view('publicView.categoryByMenu',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'menu' => $menu,
            'products' => $products,
            'brands' => $brands
            ])
        );
    }
     /**
     * Display CHECKOUT
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        if(count(Cart::content())==0)
        {
            return redirect()->route('cart.index');
        }
        return view('checkout',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            ])
        );
    }

    /**
     * Display SINGLE PRODUCT
     *
     * @return \Illuminate\Http\Response
     */
    public function getSingleProduct($id)
    {
        $product= Product::findOrFail($id);
        Product::findOrFail($id)->increment('views');
        if($product->category)
        {
            $category= $product->category;
            $relatedProducts= $category->products;
        }
        else
        {
            $submenu= $product->submenu;
            $relatedProducts= $submenu->products;
        }
        
        $mightLike= $product->menu->products;

        return view('publicView.singleProduct',
        with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'mightLike' => $mightLike,
            'sales' =>$this->helper()->get('sales'),
            'bestSeller' => $this->helper()->get('bestSeller'),
        ]));
    }



    /**
     * Display SINGLE PRODUCT
     *
     * @return \Illuminate\Http\Response
     */
    public function blogList()
    {
        $blogs= Blog::paginate(5);
        return view('publicView.blogs',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'blogs' => $blogs
        ]));
    }


    /**
     * Display SINGLE PRODUCT
     *
     * @return \Illuminate\Http\Response
     */
    public function singleBlog($id)
    {
        $blog= Blog::findOrFail($id);
        $related_blog= Blog::where('id','!=',$id)->inRandomOrder()->limit(5)->get();
        return view('publicView.singleBlog',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'blog' => $blog,
            'relatedBlogs'=> $related_blog
        ]));
    }


    /**
     * Display CONTACT US
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        return view('publicView.contactUs',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
        ]));
    }

     /**
     * Display CONTACT US
     *
     * @return \Illuminate\Http\Response
     */
    public function contactMail(Request $request)
    {
        $this->validate($request,[
            'name' =>'required | string', 
            'email' =>'required | email',
            'subject' => 'required | string',
            'message' => 'required | string | max:1000 ',
        ]);

        $user= User::findOrFail(1);
        //dd($request);
        Mail::to($user)->queue(new ContactUs($request->all()));
        return \redirect()->back()->with('success',"Mail sent successfully");
        return view('publicView.contactUs',with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
        ]));
    }

      /**
     * Display ORDER DETAIL PAGE AFTER SUCCESSFUL ORDER
     *
     * @return \Illuminate\Http\Response
     */
    public function orderDetail($order_id)
    {
        //dd($order_id);
        $order = Order::findOrFail($order_id);

        return view('orders.orderDetails', with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'order' => $order
        ]));
    }

}
