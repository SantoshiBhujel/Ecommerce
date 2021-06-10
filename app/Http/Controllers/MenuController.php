<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\MenuBannerImage;
use App\Models\MenuSliderImage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus= Menu::all();
        return view('admin.menu.menuList',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.createMenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu= new Menu();
        $result=$this->addToMenu($menu, $request);
        $this-> addToBannerImage($result,$request);
        $this-> addToSliderImage($result,$request);
        return \redirect()->route('menu.index')->with('success','Menu Added');
    }

    /**
     * Store/ Update in MENU Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    private function addToMenu($menu, $request)
    {
        $this->validate($request,[
            'name' =>'required | string',
            'icon' => 'nullable | image | max:2047 | mimes:jpeg,png,jpg ',
            'show_on_nav' => 'required | boolean ' ,
            'featured_image' => 'nullable | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);
        $menu->name= $request->name;
        if($request->file('icon'))
        {
            $extension= $request->icon->getClientOriginalExtension();
            $fileName='icon.'.time().'.'.$extension;
            // $path=$image->storeAs('public/property_images',$fileNameToStore);
            $path = public_path().'/storage/menu_icons';
            $upload = $request->file('icon')->move($path,$fileName);
            $menu->icon = $fileName;
        }
        if($request->file('featured_image'))
        {
            $extension= $request->featured_image->getClientOriginalExtension();
            $fileName='featured.'.time().'.'.$extension;
            // $path=$image->storeAs('public/property_images',$fileNameToStore);
            $path = public_path().'/storage/menuFeaturedImage';
            $upload = $request->file('featured_image')->move($path,$fileName);
            $menu->featured_image = $fileName;
        }
        $menu->show_on_navbar= $request->show_on_nav;

        $menu->save();
        return $menu;
    }

     /**
     * Store/ Update in MENUBANNER Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    private function addToBannerImage($menu, $request)
    {
        $this->validate($request,[
            'banner_image.*' => 'required | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);

        foreach($request->file('banner_image') as $index=>$image)
        {
            $extension= $image->getClientOriginalExtension();
            $fileName=$menu->id.'.'.$index.'-'.time().'.'.$extension;
            // $path=$image->storeAs('public/property_images',$fileNameToStore);
            $path = public_path().'/storage/menuBannerImages';
            $upload = $image->move($path,$fileName);
            $photo= new MenuBannerImage();
            $photo->menus_id= $menu->id;
            $photo->banner_image= $fileName;
            $photo->save();
        }
    }


     /**
     * Store/ Update in MENUBANNER Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    private function addToSliderImage($menu, $request)
    {
        $this->validate($request,[
            'slider_image.*' => 'required | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);

        foreach($request->file('slider_image') as $index=>$image)
        {
            $extension= $image->getClientOriginalExtension();
            $fileName=$menu->id.'slider.'.$index.'-'.time().'.'.$extension;
            // $path=$image->storeAs('public/property_images',$fileNameToStore);
            $path = public_path().'/storage/menuBannerImages';
            $upload = $image->move($path,$fileName);
            $photo= new MenuSliderImage();
            $photo->menus_id= $menu->id;
            $photo->slider_image= $fileName;
            $photo->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $menu= Menu::findOrFail($menu->id);
        return view('admin.menu.editMenu',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $menu= Menu::findOrFail($menu->id);
        $this->addToMenu($menu, $request);
        if($request->has('banner_image'))
        {
            foreach($menu->banner_image as $photo)
            {
                $photo->delete();
            }
            $this-> addToBannerImage($menu,$request); 
        }

        if($request->has('slider_image'))
        {
            foreach($menu->sliderImages as $photo)
            {
                $photo->delete();
            }
            $this-> addToSliderImage($menu,$request); 
        }
        return \redirect()->route('menu.index')->with('success','Menu Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu= Menu::findOrFail($menu->id);
        $menu->delete();
        return \redirect()->route('menu.index')->with('success','Menu Deleted');
    }
}
