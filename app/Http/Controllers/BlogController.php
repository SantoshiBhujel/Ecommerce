<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= Blog::all();
        return view('admin.blog.blogList',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.blogCreate');
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
            'title' =>'required | string', 
            'body' =>'required | string',
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg',
            'tags' => 'nullable | string',
        ]);

        $blog= new Blog();
        $this->addToBlog($blog, $request);

        return \redirect()->route('blog.index')->with('success','Blog Created');
    }


     /**
     * Store/ Update in Property Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToBlog($blog, $request)
    {

        $blog->title= $request->title;
        $blog->tags = $request->tags;
        $blog->body=  $request->body;

        if($request->file('image'))
        {
            $extension= $request->image->getClientOriginalExtension();
            $fileNameToStore=  'blog-'.time().'.'.$extension;
            //$path=$request->image->storeAs('public/blog_images',$fileNameToStore);
            $path = public_path().'/storage/blog_images';
            $upload = $request->file('image')->move($path,$fileNameToStore);
            $blog->image= $fileNameToStore;
        }
        $blog->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blog= Blog::find($blog->id);
        return view('admin.blog.blogEdit',compact('blog'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request,[
            'title' =>'required | string', 
            'body' =>'required | string',
            'image' => 'sometimes | image | max:2047 | mimes:jpeg,png,jpg',
            'tags' => 'nullable | string',
        ]);

        $blog= Blog::findOrFail($blog->id);
        $this->addToBlog($blog, $request);

        return \redirect()->route('blog.index')->with('success','Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog= Blog::findOrFail($blog->id);
        $blog->delete();
        return \redirect()->route('blog.index')->with('success','Blog Updated');
    }
}
