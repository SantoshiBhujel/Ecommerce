<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners= Banner::all();
        return view('admin.banner.listBanner',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.createBanner');
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
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg',
            'type' =>'required | string',
        ]);

        $banner= new Banner();
        $this->addToBanner($banner, $request);

        return \redirect()->route('banner.index')->with('success','Banner Added');
    }

     /**
     * Store/ Update in BANNER Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToBanner($banner, $request)
    {
        if($request->file('image'))
        {
            $extension          =   $request->image->getClientOriginalExtension();
            $fileNameToStore    =  'banner-'.time().'.'.$extension;
            // $path               =   $request->image->storeAs('public/banner_images',$fileNameToStore);
            $path               = public_path().'/storage/banner_images';
            $upload             = $request->file('image')->move($path,$fileNameToStore);

            $banner->image      =   $fileNameToStore;
        }
        $banner->type= $request->type;
        $banner->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $banner= Banner::findOrFail($banner->id);
        return view('admin.banner.editBanner',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $this->validate($request,[
            'image' => 'sometimes | image | max:2047 | mimes:jpeg,png,jpg',
            'type' =>'required | string', 
        ]);

        $banner= Banner::findOrFail($banner->id);
        $this->addToBanner($banner, $request);

        return \redirect()->route('banner.index')->with('success','Banner Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner= Banner::findOrFail($banner->id);
        $banner->delete();
        return \redirect()->route('banner.index')->with('success','Banner Removed');
    }
}
