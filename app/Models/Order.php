<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable= [
        'users_id',
        'email',
        'name',
        'phone',
        'address',
        'state',
        'city',
        'discount',
        'discount_code',
        'subtotal',
        'total',
        'payment_gateway',
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'shipping_address',
        'shipping_state',
        'shipping_city',
        //'error',        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity','original_price','discount','discounted_price','tax_amount');
    }
}
