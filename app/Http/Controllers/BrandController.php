<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands= Brand::all();
        return view('admin.brand.brandList',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.createBrand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required | string',
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);
        $brand= new Brand();
        $this->addToBrand($brand, $request);
        return \redirect()->route('brand.index')->with('success','Brand Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $brand= Brand::findOrFail($brand->id);
        return view('admin.brand.editBrand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request,[
            'name' =>'required | string',
            'image' => 'nullable | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);
        $brand= Brand::findOrFail($brand->id);
        $this->addToBrand($brand, $request);
        return \redirect()->route('brand.index')->with('success','Brand Edited');
    }


    /**
     * Store/ Update in MENU Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    private function addToBrand($brand, $request)
    {
        $brand->name= $request->name;
        $brand->description = $request->description;
        if($request->file('image'))
        {
            $extension= $request->image->getClientOriginalExtension();
            $fileName='logo-'.time().'.'.$extension;
            $path = public_path().'/storage/brand_logo';
            $upload = $request->file('image')->move($path,$fileName);
            $brand->logo = $fileName;
        }
        $brand->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand= Brand::findOrFail($brand->id);
        $brand->delete();
        return \redirect()->route('brand.index')->with('success','Brand Deleted');
    }
}
