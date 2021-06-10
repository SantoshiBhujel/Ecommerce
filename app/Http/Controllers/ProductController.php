<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use App\Models\ProductAttributeUpdate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all();
        return view('admin.products.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus= Menu::all();
        $brands= Brand::all()->sortBy('name');
        return view('admin.products.create',compact('menus','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product= new Product();

        $product= $this->addToProduct($product, $request);

        //dd($product->id);
        if($request->file('product_image'))
        {
            $this->addToProductPhoto($request, $product->id);
        }

        $this->addToProductAttribute($request, $product->id);
        // DB::beginTransaction();

        // try
        // {
        //     $product= $this->addToProduct($product, $request);

        //     //dd($product->id);
        //     if($request->file('product_image'))
        //     {
        //         $this->addToProductPhoto($request, $product->id);
        //     }

        //     $this->addToProductAttribute($request, $product->id);
        //     DB::commit();
        // }

        // catch (\Exception $e) 
        // {
        //     DB::rollback();
        //     return redirect()->back()->with('error','Unable to save the product');
        //     // something went wrong
        // }
        
        return \redirect()->route('product.index')->with('success','Product Added');
    }

      /**
     * Store/ Update in PRODUCTS Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToProduct($product, $request)
    {
        //dd('hey');
        $product->name = $request->name;
        $product->brand_id =$request->brand_id;
        $product->users_id = Auth::id();
        $product->menus_id = $request->menus_id;
        $product->submenus_id = $request->submenu_id;
        $product->category_id =  $request->category_id;
        $product->description = $request->description ;
        $product->features = $request->features ;
        $product->quantity = $request->quantity;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        $product->duration = $request->duration ;
        $product->duration_type =   $request->duration ? $request->duration_type : NULL ;
        $product->warranty_type =  $request->duration ?  $request->warranty_type :NULL;
        $product->sale =  $request->sale;
        $product->sale_type =  $request->sale==1 ?  $request->sale_type : NULL;
        $product->sale_value =  $request->sale==1 ? $request->sale_value : NULL;
        $product->free_shipping = $request->free_shipping ;
        $product->featured = $request->featured ;
        $product->model_no= $request->model_no;
        $product->tags =  $request->tags;
        $product->tax_included = $request->tax_included;

        if($request->tax_included==0)
        {
            $product->tax = $request->tax;
        }


        if($request->file('display_image'))
        {
            $this->validate($request,[
                'display_image' => 'required | image | max:2047 | mimes:jpeg,png,jpg ',
            ]);
            $extension= $request->display_image->getClientOriginalExtension();
            $fileName='product'.'-'.time().'.'.$extension;
            // $path=$image->storeAs('public/property_images',$fileNameToStore);
            $path = public_path().'/storage/product_images';
            $upload = $request->file('display_image')->move($path,$fileName);
            $product->display_image = $fileName;
        }

        $product->save();
        return $product;
    }
    /**
     * Store/ Update in PropertyPhotos Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToProductPhoto($request, $id)
    {
        $this->validate($request,[
            'product_image.*' => 'required | image | max:2047 | mimes:jpeg,png,jpg ',
        ]);

        foreach($request->file('product_image') as $index=>$image)
        {
            $extension= $image->getClientOriginalExtension();
            $fileName=$id.'.'.$index.'-'.time().'.'.$extension;
            // $path=$image->storeAs('public/property_images',$fileNameToStore);
            $path = public_path().'/storage/product_images';
            $upload = $image->move($path,$fileName);
            $photo= new ProductPhoto();
            $photo->product_id= $id;
            $photo->product_image= $fileName;
            
            $photo->save();
        }

    }

    /**
     * Store/ Update in PropertyPhotos Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    private function addToProductAttribute($request, $id)
    {
        //dd($request->all());
        $request->validate([
            'add.*.color' => 'nullable | string | max:7',
            'add.*.size' => 'nullable | string',
            'add.*.qty' => 'nullable | string',
        ]);
    
        foreach ($request->add as $key => $value) {
            //print_r($value);
            ProductAttribute::create([
                'product_id' => $id,
                'color' => $value['color'] ? $value['color'] : NULL ,
                'size' =>$value['size'] ? $value['size'] : NULL ,
                'quantity' => $value['qty'] ? $value['qty'] : NULL ,
            ]);
        }
    }

    /**
     * Store/ Update in PropertyPhotos Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    public function quantityUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required | integer',
            'updatedQty' => 'required | integer',
        ]);
        $attribute= ProductAttribute::findOrFail($request->id);
        $attribute->quantity= $request->updatedQty + $attribute->quantity;
        $attribute->save();

        $update=new ProductAttributeUpdate();
        $update->product_attribute_id= $attribute->id;
        $update->added_quantity= $request->updatedQty;
        $update->save();
        return \redirect()->back()->with('success',"Quantity Updated");
    }

    /**
     * Display Product History
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    public function quantityUpdateHistory(Request $request)
    {
        $product= Product::findOrFail($request->id);
        return view('admin.products.updateHistory',compact('product'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product= Product::findOrFail($product->id);
        return view('admin.products.showProduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $menus= Menu::all();
        $product= Product::findOrFail($product->id);
        $brands= Brand::all()->sortBy('name');
        return view('admin.products.edit',compact('menus','product','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product= Product::findOrFail($product->id);
        $this->addToProduct($product, $request);

        if($request->hasFile('product_image'))
        {
            foreach($product->photos as $photo)
            {
                $photo->delete();
            }
            $this->addToProductPhoto($request, $product->id);
        }
        return \redirect()->route('product.index')->with('success','Product Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product= Product::findOrFail($product->id);
        $product->delete();
        return \redirect()->route('product.index')->with('success','Product Deleted');
    }
}
