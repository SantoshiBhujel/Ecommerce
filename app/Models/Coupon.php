<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;

    public static function findByCode($code)
    {
        return self::where('code', $code)->first();
    }

    

    public function discount($total)
    {

        if($this->type =='fixed')
        {
            return $this->value; //*Cart::count();
        }

        elseif($this->type == 'percent')
        {
            return ($this->percent_off/ 100)* $total;
        }
        
        else
        {
            return 0;
        }
    }
}
