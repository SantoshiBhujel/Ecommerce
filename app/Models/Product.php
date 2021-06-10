<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable= ['name', 'menus_id', 'submenu_id', 'category_id', 'users_id', 'description', 'features',
                            'quantity', 'buying_price', 'selling_price', 'duration', 'duration_type', 'warranty', 'sale',
                            'sale_type', 'sale_value', 'free_shipping', 'featured', 'model_no', 'tags', 'tax_included', 'tax', 'display_image'
                        ];
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function submenu()
    {
        return $this->belongsTo(Submenu::class, 'submenus_id', 'id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menus_id', 'id');
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(ProductPhoto::class, 'product_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand', 'id');
    }
}
