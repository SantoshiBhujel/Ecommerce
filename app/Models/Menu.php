<?php

namespace App\Models;

use App\Models\Submenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function submenus()
    {
        return $this->hasMany(Submenu::class, 'menus_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'menus_id', 'id');
    }

    public function bannerImages()
    {
        return $this->hasMany(MenuBannerImage::class, 'menus_id', 'id');
    }

    public function sliderImages()
    {
        return $this->hasMany(MenuSliderImage::class, 'menus_id', 'id');
    }

}
