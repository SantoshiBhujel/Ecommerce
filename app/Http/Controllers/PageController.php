<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages= Page::all();
        return view('admin.pages.pageList',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.createPage');
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
            'image' => 'nullable | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);
        $page= new Page();
        $this->addToPage($page, $request);
        return \redirect()->route('pages.index')->with('success','Page Added');
    }

      /**
     * Store/ Update in MENU Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    private function addToPage($page, $request)
    {
        $page->name= $request->name;
        $page->page = $request->page;
        $page->description= $request->description;
        if($request->file('image'))
        {
            $extension= $request->image->getClientOriginalExtension();
            $fileName='page-'.time().'.'.$extension;
            $path = public_path().'/storage/page_images';
            $upload = $request->image->move($path,$fileName);
            $page->image = $fileName;
        }
        $page->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $page= Page::findOrFail($page->id);
        return view('admin.pages.editPage',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $this->validate($request,[
            'name' => 'required | string',
            'page' => 'required | string',
            'description' => 'required | string',
            'image' => 'nullable | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);
        $page= Page::findOrFail($page->id);
        $this->addToPage($page, $request);
        return \redirect()->route('pages.index')->with('success','Page Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
