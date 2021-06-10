<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('admin.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus= Menu::all();
        $submenus= Submenu::all();
        return view('admin.category.create',compact('menus','submenus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category= new Category();
        $this->addToCategory($category, $request);

        return \redirect()->route('category.index')->with('success','Category Added');
    }

      /**
     * Store a newly created resource in CATEGORY table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function addToCategory($category, $request)
    {
        $this->validate($request,[
            'name' =>'required | string', 
            'submenu_id' => 'required | integer',
        ]);
        $category->name= $request->name;
        $category->menus_id=  $request->menus_id;
        $category->submenu_id=  $request->submenu_id;
        $category->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category= Category::findOrFail($category->id);
        $menus= Menu::all();
        $submenus= Submenu::all();
        return view('admin.category.edit',compact('menus','submenus','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category= Category::findOrFail($category->id);
        $this->addToCategory($category, $request);
        return \redirect()->route('category.index')->with('success','Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category= Category::findOrFail($category->id);
        $category->delete();
        return \redirect()->route('category.index')->with('success','Category Deleted');
    }
}
