<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Submenu extends Model
{
    use HasFactory;

    use SoftDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable= ['name','menus_id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menus_id', 'id');
    }


    public function categories()
    {
        return $this->hasMany(Category::class, 'submenu_id', 'id');
    }


    public function products()
    {
        return $this->hasMany(Product::class, 'submenus_id', 'id');
    }
}
