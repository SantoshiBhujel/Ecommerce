@extends('adminlte::page')
@section('title', 'Edit Product')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Product</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}

                        <!------ NAME, BRAND  ------>
                        <div class="row"> 
                            <div class="form-group col-md-6">
                                <label for="title"> Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="title"> Brand <span class="text-danger">*</span></label>
                                <select name="brand_id" class="form-control" >
                                    <option value="">Select Brand</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" @if($brand->id ==  $product->brand_id) selected @endif>
                                        {{$brand->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!------END NAME, BRAND  ------>

                        <!------ CATEGORY, SUB CATEGORY, CHILD CATEGORY  ------>
                        <div class="row"> 
                            <div class="form-group col-md-4">
                                <label for="category_id">{{ __('Menu') }}  <span class="text-danger">*</span></label>
                                    <select id="menu" name="menus_id" class="form-control" required>
                                        <option value="">Select a Menu</option>
                                        @foreach($menus as $menu)
                                            <option value="{{$menu->id}}" @if($menu->id ==  $product->menus_id) selected @endif>
                                            {{$menu->name}}
                                            </option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="">{{ __('Submenu') }}</label>
                                <div class="form-group" >
                                    <select id="submenu" name="submenu_id" class="form-control" required>
                                        <option value="">Select Submenu</option>
                                        @foreach($product->menu->submenus as $submenu)
                                            <option value="{{$submenu->id}}" @if($submenu->id ==  $product->submenus_id) selected @endif>
                                            {{$submenu->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="category_id">{{ __('Category') }}</label>
                                <div class="form-group" >
                                    <select id="category" name="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($product->submenu->categories as $category)
                                            <option value="{{$category->id}}" @if($category->id ==  $product->category_id) selected @endif>
                                            {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!------END CATEGORY, SUB CATEGORY, CHILD CATEGORY  ------>


                        <!------  DESCRIPTION  ------>
                        <div class="form-group">
                            <label> Description <span class="text-danger">*</span></label>
                            {{-- <textarea class="form-control" rows="4" name="description"></textarea> --}}
                            <div class="form-group" >
                            <textarea name="description" id="editor1" rows="10" cols="120" required> {!! $product->description !!} </textarea>
                            </div>
                        </div>
                        <!------END  DESCRIPTION  ------>

                        <!------ KEY FEATURES  ------>
                        <div class="form-group">
                            <label> Key Features<span class="text-danger">*</span></label>
                            {{-- <textarea class="form-control" rows="4" name="description"></textarea> --}}
                            <div class="form-group" >
                            <textarea name="features" id="editor2" rows="10" cols="120"> {!! $product->features !!}</textarea>
                            </div>
                        </div>
                        <!------END KEY FEATURES  ------>

                        <!------  QUANTITY, BUYING AND SELLING PRICE ------>
                        <div class="row"> 
                            <div class="form-group col-md-4">
                                <label for=""> Quantity <span class="text-danger">*</span></label>
                                <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for=""> Buying Price <span class="text-danger">*</span></label>
                                <input type="text" name="buying_price" class="form-control" value="{{ $product->buying_price }}" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for=""> Selling Price <span class="text-danger">*</span></label>
                                <input type="text" name="selling_price" class="form-control" value="{{ $product->selling_price }}" required>
                            </div>
                        </div>
                        <!------ END QUANTITY, BUYING AND SELLING PRICE ------>

                        <!------  WARRANTY  ------>
                        <div class="row"> 
                            <div class="form-group col-md-4">
                                <label for=""> Warranty Duration <span class="text-danger">*</span></label>
                                <input type="text" name="duration" value="{{ $product->duration }}" class="form-control">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for=""> Days/Months/Year <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="duration_type" class="form-control">
                                        <option value="">None</option>
                                        <option value="day" @if($product->duration_type=="day") selected @endif>Day</option>
                                        <option value="month" @if($product->duration_type=="month") selected @endif>Month</option>
                                        <option value="year" @if($product->duration_type=="year") selected @endif>Year</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for=""> Type <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="warranty_type" class="form-control">
                                        <option value="">None</option>
                                        <option value="warranty" @if($product->warranty_type=="warranty") selected @endif>Warranty</option>
                                        <option value="guarantee" @if($product->warranty_type=="guarantee") selected @endif>Guarantee</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!------ END  WARRANTY  ------>

                        <!------  SALE  ------>
                        <div class="row"> 
                            <div class="form-group col-md-4">
                                <label for=""> SALE <span class="text-danger">*</span></label>
                                <select name="sale" class="form-control" required >
                                    <option value="">On Sale</option>
                                    <option value="1" @if($product->sale==1) selected @endif >Yes</option>
                                    <option value="0" @if($product->sale==0) selected @endif >No</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for=""> Sale Type<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="sale_type" class="form-control" >
                                        <option value="">Sale Type</option>
                                        <option value="fixed" @if($product->sale_type=="fixed") selected @endif>Fixed</option>
                                        <option value="percent" @if($product->sale_type=="percent") selected @endif>Percent</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for=""> Value <span class="text-danger">*</span></label>
                                <input type="text" name="sale_value" value="{{ $product->sale_value }}" class="form-control">
                            </div>
                        </div>
                        <!------END OFFER  ------>

                        <!------  FREE SHIPPING, FEATURED  ------>
                        <div class="row"> 
                            <div class="form-group col-md-6">
                                <label for=""> Free Shipping <span class="text-danger">*</span></label>
                                <select name="free_shipping" class="form-control" required>
                                    <option value="">Free</option>
                                    <option value="1"  @if($product->free_shipping==1) selected @endif> Yes</option>
                                    <option value="0"  @if($product->free_shipping==0) selected @endif> No</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for=""> Featured<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="featured" class="form-control" required>
                                        <option value="">Featured</option>
                                        <option value="1"  @if($product->featured==1) selected @endif >Yes</option>
                                        <option value="0"  @if($product->featured==0) selected @endif >No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!------ END FREE SHIPPING, FEATURED  ------>

                        <!------  MODEL NO, TAGS  ------>
                        <div class="row"> 
                            <div class="form-group col-md-6">
                                <label for="title">Model No. <span class="text-danger">*</span></label>
                                <input type="text" name="model_no" value="{{ $product->model_no }}" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="title"> Tags <span class="text-danger">*</span></label>
                                <input type="text" name="tags" class="form-control" value="{{ $product->tags }}" placeholder="Please enter tags separates by comma(,)">
                            </div>
                        </div>
                        <!------END  MODEL NO, TAGS  ------>

                        <!------  TAX  ------>
                        <div class="row"> 
                            <div class="form-group col-md-6">
                                <label for=""> Tax Inclusive <span class="text-danger">*</span></label>
                                <select name="tax_included" class="form-control" required>
                                    <option value="1" @if ($product->tax_included==1) selected @endif>Yes</option>
                                    <option value="0"  @if ($product->tax_included==0) selected @endif>No</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="">Tax(%)<span class="text-danger">*</span></label>
                                <input type="text" name="tax" class="form-control" value="{{ $product->tax }}" placeholder="Enter only numeric value not %">
                            </div>
                        </div>
                        <!------ END TAX ------>

                        <!------DISPLAY IMAGES  ------>
                        <div class="form-group">
                            <label for="category_id">{{ __('Display Image') }}</label>
                            <div class="form-group" >
                                <div class="fu-text">
                                    <span><i class="mdi mdi-image-area"></i> Click here or drop files to upload</span>
                                </div>
                                <input class="upload" type="file" name="display_image">
                            </div>
                        </div>
                        <!------END DISPLAY IMAGES  ------>

                        <!------PRODUCT IMAGES  ------>
                        <div class="form-group">
                            <label for="category_id">{{ __('Product Image') }}</label>
                            <div class="form-group" >
                                <div class="fu-text">
                                    <span><i class="mdi mdi-image-area"></i> Select Multiple Images</span>
                                </div>
                                <input class="upload" type="file" name="product_image[]" accept="image/*" multiple>
                            </div>
                        </div>

                        <input type="submit" value="Update" class="btn btn-success float-right">
                    </form>
                </div>
                </div>
            </div>
            
            </div>
        </section>
    </div>
</div>
 
 
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace("editor1");
   CKEDITOR.replace("editor2");
</script>
<script src="{{ asset('js/product.js') }}" defer></script>

@stop