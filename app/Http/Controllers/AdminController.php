<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Submenu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getSubmenu($menu)
    {
        $submenus=Menu::findOrFail($menu)->submenus;

        return response()->json([
            'submenus' => $submenus,
        ]);
    }

    public function getCategory($id)
    {
        $categories=Submenu::findOrFail($id)->categories;

        return response()->json([
            'categories' => $categories,
        ]);
    }

    public function userList()
    {
        $userlist=User::where('id','!=',1)->get();

        return view('admin.userlist',compact('userlist'));
    }

    public function sellerList()
    {
        $userlist=User::where('role','seller')->get();

        return view('admin.userlist',compact('userlist'));
    }

}
