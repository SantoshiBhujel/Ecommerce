<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\CouponRequest;

class CouponAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons= Coupon::all();
        return view('admin.coupon.list',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
        $coupon = new Coupon();

        $this->addToCoupon($coupon, $request);

        return redirect()->route('addCoupon.index')->with('success',"Coupon added");
    }

       /**
     * Store a newly created resource in CATEGORY table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function addToCoupon($coupon, $request)
    {
        $coupon->code = $request->code;
        $coupon->type =  $request->type;
        if($request->type=="fixed")
        {
            $coupon->value =  $request->value;
        }
        if($request->type=="percent")
        {
            $coupon->percent_off =  $request->percent_off;
        }
        $coupon->starts_from =  $request->start;
        $coupon->expires_on =  $request->expire;
        $coupon->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon= Coupon::findOrFail($id);
        return view('admin.coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponRequest $request, $id)
    {
        $coupon = Coupon::findOrFail($id);

        $this->addToCoupon($coupon, $request);

        return redirect()->route('addCoupon.index')->with('success',"Coupon Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon= Coupon::findOrFail($id);
        $coupon->delete();
        return \redirect()->route('addCoupon.index')->with('success','Coupon Deleted');
    }
}
