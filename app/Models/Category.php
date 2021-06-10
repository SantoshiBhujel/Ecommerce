<?php

namespace App\Models;

use App\Models\Submenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable= ['name','menus_id','submenu_id'];

    public function submenu()
    {
        return $this->belongsTo(Submenu::class, 'submenu_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}
