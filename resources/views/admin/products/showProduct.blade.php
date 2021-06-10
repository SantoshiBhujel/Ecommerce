@extends('adminlte::page')
@section('title', $product->name)

@section('content')
 
 <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $product->name }}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="{{ asset('/storage/product_images/'.$product->display_image.'') }}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{ asset('/storage/product_images/'.$product->display_image.'') }}" alt="Product Image"></div>
                @foreach ($product->photos as $photo)
                    <div class="product-image-thumb" ><img src="{{ asset('/storage/product_images/'.$photo->product_image.'') }}" alt="Product Image"></div>
                @endforeach           
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $product->name }}</h3>
              <p>{!! $product->description !!}</p>

              <hr>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rs. {{ $product->selling_price }}
                </h2>
                <h4 class="mt-0">
                  <small> @if ($product->tax_included==1)
                      Tax Inclusive
                      @else
                      Tax Exclusive
                  @endif </small>
                </h4>
                
                @if ($product->attributes)
                  </div class="mt-4">
                    <table class="table table-bordered">  
                      <tr>
                          <th>Color</th>
                          <th>Size</th>
                          <th>Qty</th>
                          <th>Add More Quantity</th>
                      </tr>
                      @foreach ($product->attributes as $attribute)
                        <tr>    
                          <td>
                            <div style='background-color:{{  $attribute->color  }}; height:20px; width:20px'></div>
                          </td>  
                          <td>
                            {{ $attribute->size }}
                          </td> 
                          <td>
                            {{ $attribute->quantity }}
                          </td> 
                          <td>
                            <form action="{{ route('quantityUpdate') }}" method="POST">
                              @csrf
                              <div style="display: flex">
                                <input type="hidden" name="id" value="{{ $attribute->id }}"/>
                                <input type="text" name="updatedQty" placeholder="Add quantity" id="myInput" class="form-control" />
                                <button type="submit" class="form-control" data-id="{{ $attribute->id }}">Update
                                </button>
                              </div>
                            </form>                            
                          </td>   
                        </tr>                        
                      @endforeach                   
                    </table>
                  <div>
                  <a href="{{ route('updateHistory',$product->id) }}"><button class="btn btn-primary mb1 bg-green">View Quantity Update History</button></a>
                @endif                
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
  <script type="text/javascript">
    $('.colorpicker').colorpicker();
  </script>
  {{-- <script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#qtyUpdate').click(function(){
      let id= $(this).data('id');
      let updatedQty= $("#myInput").val();;
      let object = $(this);
      $.ajax({
          type: 'POST',
          url: '/product/quantity/update',
          data: 
            {
              id: id,
              updatedQty: updatedQty,
            },

          success: function(data){
            if(data=="success")
            {
              alert("Quantity Updated");  
            }             
          }
      });
    });

  }); 
  </script> --}}
@endsection