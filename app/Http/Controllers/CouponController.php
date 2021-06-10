<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Jobs\UpdateCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'coupon_code' => 'required | string',
        ]);
        $coupon= Coupon::where('code', $request->coupon_code)->first();  

        if(!$coupon)
        {
            return redirect()->back()->with('error','Invalid Coupon! Please try with valid one');
        }

        $start=Carbon::parse($coupon->starts_from)->format('m/d/Y');
        $today = Carbon::parse(Carbon::now())->format('m/d/Y');
        $expires=Carbon::parse($coupon->expires_on)->format('m/d/Y');
        //dd($today);
        if($start > $today || $today > $expires)
        {
            return redirect()->back()->with('error',"Coupon expired !");
        }

        if($coupon->discount(Cart::subtotal()) > $this->getNumbers()->get('subtotal'))
        {
            return redirect()->back()->with('error',"Coupon cannot be applied !");
        }
        //Updating the coupon using job
        dispatch_now(new UpdateCoupon($coupon));

        return redirect()->back()->with('success','Coupon applied');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        session()->forget('coupon');
        return redirect()->back()->with('success','Coupon destroyed');
    }
}
