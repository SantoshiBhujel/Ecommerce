<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Banner;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNumbers()
    {
        $discount=session()->get('coupon')['discount'] ?? 0;
        $code=session()->get('coupon')['name']?? null;
        $subtotal=Cart::subtotal();
        $newSubtotal= $subtotal - $discount;
        // $newTax = $newSubtotal * $tax ;
        // $newTotal= $newSubtotal + $newTax;   // OR  $newTotal = $newSubtotal*(1+$tax);
        
        return collect([
            'discount' => $discount ,
            'code' => $code,
            'subtotal' => $newSubtotal,
            'total' => $newSubtotal,
       ]);
    }

    /**
     * Helper Function / Common Function
     *
     * @return \Illuminate\Http\Response
     */
    public function helper()
    {
        $menus = Menu::all();
        $navmenus= Menu::where('show_on_navbar',1)->get();
        
        $sales=Cache::remember('sales', 60*60, function(){
                return Product::where('sale',true)->inRandomOrder()->limit(7)->get(); 
            }
        );

        $bestSeller= Cache::remember('bestSeller', 60*60, function(){
                return Product::orderBy('sold','Desc')->limit(6)->get();
            }
        );

        $topBanners= Cache::remember('topBanner', 60*60*24, function(){
                return Banner::where('type','top')->get();
            }
        );

        $sideBanners= Cache::remember('sideBanner', 60*60*24, function(){
                return Banner::where('type','side')->get();
            }
        );

        $bottomBanners= Cache::remember('bottomBanner', 60*60*24, function(){
                return Banner::where('type','bottom')->get();
            }
        );

        return collect([
            'menus' => $menus,
            'navmenus' =>$navmenus,
            'bestSeller' => $bestSeller,
            'sales' => $sales,
            'topBanners' => $topBanners,
            'sideBanners' => $sideBanners,
            'bottomBanners' => $bottomBanners,
        ]);
    }
}
