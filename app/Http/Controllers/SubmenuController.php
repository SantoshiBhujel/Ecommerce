<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submenus= Submenu::all();
        return view('admin.submenu.list',compact('submenus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus= Menu::all();
        return view('admin.submenu.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submenu= new Submenu();
        $this->addToSubmenu($submenu, $request);
        return \redirect()->route('submenu.index')->with('success','Menu Added');
    }


      /**
     * Store/ Update in SUBMENU Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToSubmenu($submenu, $request)
    {
        $this->validate($request,[
            'name' =>'required | string', 
            'menus_id' => 'required | integer '
        ]);
        $submenu->name= $request->name;
        $submenu->menus_id = $request->menus_id;
        $submenu->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function show(Submenu $submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Submenu $submenu)
    {
        $menus= Menu::all();
        $submenu= Submenu::findOrfail($submenu->id);
        return view('admin.submenu.edit',compact('menus','submenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submenu $submenu)
    {
        $submenu= Submenu::findOrfail($submenu->id);
        $this->addToSubmenu($submenu, $request);
        return \redirect()->route('submenu.index')->with('success','Menu Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submenu $submenu)
    {
        $submenu= Submenu::findOrfail($submenu->id);
        $submenu->delete();
        return \redirect()->route('submenu.index')->with('success','Submenu Deleted');
    }
}
