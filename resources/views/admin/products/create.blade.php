@extends('adminlte::page')
@section('title', 'Add Product')
{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
    
@section('extra-css')
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script> --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/js/farbtastic.js') }}"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#demo').hide();
      var f = $.farbtastic('#picker');
      var p = $('#picker').css('opacity', 0.25);
      var selected;
      $('.colorwell')
        .each(function () { f.linkTo(this); $(this).css('opacity', 0.75); })
        .focus(function() {
          if (selected) {
            $(selected).css('opacity', 0.75).removeClass('colorwell-selected');
          }
          f.linkTo(this);
          p.css('opacity', 1);
          $(selected = this).css('opacity', 1).addClass('colorwell-selected');
        });
    });
   </script>
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!------ NAME, BRAND  ------>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        <label for="title"> Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="title"> Brand <span class="text-danger">*</span></label>
                                        <select name="brand_id" class="form-control" >
                                            <option value="">Select Brand</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">
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
                                                    <option value="{{$menu->id}}">
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
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="category_id">{{ __('Category') }}</label>
                                        <div class="form-group" >
                                            <select id="category" name="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!------END CATEGORY, SUB CATEGORY, CHILD CATEGORY  ------>


                                <!------  DESCRIPTION  ------>
                                <div class="form-group  col-md-">
                                    <label> Description <span class="text-danger">*</span></label>
                                    {{-- <textarea class="form-control" rows="4" name="description"></textarea> --}}
                                    <div class="form-group" >
                                    <textarea name="description" id="editor1" rows="10" cols="120" required></textarea>
                                    </div>
                                </div>
                                <!------END  DESCRIPTION  ------>


                                <!------  COLOR, SIZE, QUANTITY  ------>
                                {{-- <table class="table table-bordered" id="dynamicTable">  
                                    <tr>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Qty</th>
                                    </tr>
                                    <tr>    
                                        <td>
                                            <div id="cp2" class="input-group colorpicker colorpicker-component">
                                                <input type="text" name="add[0][color]" value="#00AABB" class="form-control" />
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </td>  
                                        <td>
                                            <input type="text" name="add[0][size]" placeholder="Enter Size" class="form-control" />
                                        </td> 
                                        <td>
                                            <input type="text" name="add[0][qty]" placeholder="Quantity" class="form-control" />
                                        </td>   
                                        <td>
                                            <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                        </td>  
                                    </tr>  
                                </table> --}}
                                <!------ END COLOR, SIZE, QUANTITY  ------>
                                <div id="picker" style="float: right;">
                                    <div class="farbtastic">
                                        <div class="color" style="background-color: rgb(0, 127, 255);"></div>
                                        <div class="wheel"></div>
                                        <div class="overlay"></div>
                                        <div class="h-marker marker" style="left: 55px; top: 170px;"></div>
                                        <div class="sl-marker marker" style="left: 82px; top: 127px;"></div>
                                    </div>
                                </div>
                                
                                <div class="form-item">
                                    <label for="color1">Color 1:</label>
                                    <input type="text" id="color1" name="color1" class="colorwell" value="#123456" />
                                </div>
                                <div class="form-item">
                                    <label for="color2">Color 2:</label><input type="text" id="color2" name="color2" class="colorwell" value="#123456" />
                                </div>
                                <div class="form-item">
                                    <label for="color3">Color 3:</label>
                                    <input type="text" id="color3" name="color3" class="colorwell" value="#123456" />
                                </div>
                                
                                <!------ KEY FEATURES  ------>
                                <div class="form-group  col-md-12">
                                    <label> Key Features<span class="text-danger">*</span></label>
                                    {{-- <textarea class="form-control" rows="4" name="description"></textarea> --}}
                                    <div class="form-group" >
                                    <textarea name="features" id="editor2" rows="10" cols="120"></textarea>
                                    </div>
                                </div>
                                <!------END KEY FEATURES  ------>

                                <!------  QUANTITY, BUYING AND SELLING PRICE ------>
                                <div class="row"> 
                                    <div class="form-group col-md-4">
                                        <label for=""> Quantity <span class="text-danger">*</span></label>
                                        <input type="text" name="quantity" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for=""> Buying Price <span class="text-danger">*</span></label>
                                        <input type="text" name="buying_price" class="form-control" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for=""> Selling Price <span class="text-danger">*</span></label>
                                        <input type="text" name="selling_price" class="form-control" required>
                                    </div>
                                </div>
                                <!------ END QUANTITY, BUYING AND SELLING PRICE ------>

                                <!------  TAX  ------>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        <label for="">Price Including Tax? <span class="text-danger">*</span></label>
                                        <select name="tax_included" class="form-control" required>
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="">Tax(%)<span class="text-danger">*</span></label>
                                        <input type="text" name="tax" class="form-control" placeholder="Enter only numeric value not %">
                                    </div>
                                </div>
                                <!------ END TAX ------>

                                <!------  WARRANTY  ------>
                                <div class="row"> 
                                    <div class="form-group col-md-4">
                                        <label for=""> Warranty Duration <span class="text-danger">*</span></label>
                                        <input type="text" name="duration" class="form-control">
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for=""> Days/Months/Year <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <select name="duration_type" class="form-control">
                                                <option value="">None</option>
                                                <option value="day">Day</option>
                                                <option value="month">Month</option>
                                                <option value="year">Year</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for=""> Type <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <select name="warranty_type" class="form-control">
                                                <option value="">None</option>
                                                <option value="warranty">Warranty</option>
                                                <option value="guarantee">Guarantee</option>
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
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for=""> Sale Type<span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <select name="sale_type" class="form-control" >
                                                <option value="">Sale Type</option>
                                                <option value="fixed">Fixed</option>
                                                <option value="percent">Percent</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for=""> Value <span class="text-danger">*</span></label>
                                        <input type="text" name="sale_value" class="form-control">
                                    </div>
                                </div>
                                <!------END OFFER  ------>

                                <!------  FREE SHIPPING, FEATURED  ------>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        <label for=""> Free Shipping <span class="text-danger">*</span></label>
                                        <select name="free_shipping" class="form-control" required>
                                            <option value="">Free Shipping</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for=""> Featured<span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <select name="featured" class="form-control" required>
                                                <option value="">Featured</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!------ END FREE SHIPPING, FEATURED  ------>

                                <!------  MODEL NO, TAGS  ------>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        <label for="title">Model No. <span class="text-danger">*</span></label>
                                        <input type="text" name="model_no" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="title"> Tags <span class="text-danger">*</span></label>
                                        <input type="text" name="tags" class="form-control" placeholder="Please enter tags separates by comma(,)">
                                    </div>
                                </div>
                                <!------END  MODEL NO, TAGS  ------>

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
                                <!------END PRODUCT IMAGES  ------>
                                 
                                <input type="submit" value="Add" class="btn btn-success float-right">
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

<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;

        $("#dynamicTable").append('<tr><td><div id="cp2" class="input-group colorpicker colorpicker-component colorpicker-element"><input type="text" name="add['+i+'][color]" value="#00AABB" class="form-control"><span class="input-group-addon"><i style="background-color: rgb(0, 170, 187);"></i></span></div></td><td><input type="text" name="add['+i+'][size]" placeholder="Enter Size" class="form-control" /></td><td><input type="text" name="add['+i+'][qty]" placeholder="Quantity" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>

<script type="text/javascript">
    $('.colorpicker').colorpicker();
</script>

@stop
