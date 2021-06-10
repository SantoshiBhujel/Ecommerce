<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        $navmenus= Menu::where('show_on_navbar',1)->with('products')->get();

        return view('cart.cart')->with([
            'menus' => $menus,
            'navmenus' => $navmenus,
            'discount' => $this->getNumbers()->get('discount') ,
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTotal' => $this->getNumbers()->get('total'),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd();
        $this->validate($request,[
            'id' =>'required | integer',
        ]);

        $duplicates= Cart::search( function ($cartItem, $rowId) use($request)
        {
            return $cartItem->id === $request->id;
        });

        if($duplicates->isNotEmpty())
        {
            return redirect()->route('cart.index')->with('success','Item is already in your cart');
        }

        $product= Product::findOrFail($request->id);

        if($product->sale==0)
        {
            $tax = $product->selling_price * $product->tax/100;
            $selling_price = $product->selling_price + $tax;

            Cart::add(['id'=>$request->id,'name'=> $product->name,'qty'=> 1, 'price' =>$selling_price,'weight' => 1,'options'=>['image' =>$product->display_image, 'original_price' => $product->selling_price,'discount'=> 0 ,'discounted_price' => $product->selling_price, 'tax'=> $tax] ])->associate('App\Models\Product');
        }

        if($product->sale==1)
        {   
            $discount= $product->sale_type=="fixed" ? $product->sale_value : ($product->selling_price*$product->sale_value/100);
            
            $taxable_amount= $product->selling_price-$discount;

            $tax = $taxable_amount*$product->tax/100;
            $selling_price = $taxable_amount + $tax;

            Cart::add(['id'=>$request->id,'name'=> $product->name,'qty'=> 1, 'price' =>$selling_price ,'weight' => 1,'options'=>['image' =>$product->display_image,'original_price' => $product->selling_price, 'discount'=> $discount,'discounted_price' => $taxable_amount, 'tax'=> $tax] ])->associate('App\Models\Product');
        }
       
        //Cart::add(['id'=>$request->id,'name'=> $product->name,'qty'=> 1, 'price' =>$product->selling_price,'weight' => 1,'options'=>['image' =>$product->display_image] ])->associate('App\Models\Product');
        //Cart::store(auth()->user()->id);
        return redirect()->route('cart.index')->with('success','Cart added successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'qty' => 'required | numeric',
        ]);
        Cart::update($id, $request->qty);
        return redirect()->route('cart.index')->with('success','Cart edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->route('cart.index')->with('success','Item removed from Cart');
    }
    
}
