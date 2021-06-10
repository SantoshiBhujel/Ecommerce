@extends('main')

@section('content')
{{-- <div class="container">
    
    @if(Cart::count()>0)
        <div>
            <p>{{Cart::count()}} Item(s) in your cart </p>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Action</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tbody>
        
                    @foreach(Cart::content() as $item)
        
                        <tr>
                            <td>
                                <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <button type='submit'>X</button>                                       
                                </form>
                            </td>

                            <td>
                                <img src="{{ asset('/storage/product_images/'.$item->options->image.'') }}" width="200px" height="200px" ></td>
                            <td>
                            </td>

                            <td>
                                <p><strong>{{ $item->name  }}</strong></p>
                            </td>

                            <td>{{$item->price }}</td>

                            <td width="100px">
                                <form action="{{route('cart.update',$item->rowId)}}" method="POST">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <input type="text" name="qty" id="" value="{{$item->qty}}">
                                    <input type="submit" value="OK">
                                </form>
                            </td>

                            <td><sup> NPR </sup>{{$item->price}}</td>
                            
                            <td><sup> NPR </sup>{{ $item->total }} </td>
                        </tr>
                    @endforeach
        
                </tbody>        
                <hr>
                <tfoot>
                    <tr>
                        <td colspan="5">&nbsp;</td>
                        <td>Subtotal:</td>
                        <td>{{ Cart::subtotal() }}</td>
                    </tr>
                    
                    
                    @if (session()->has('coupon'))
                    <tr>
                        <td colspan="5">&nbsp;</td>
                        <td>Discount ({{ session()->get('coupon')['name'] }}):
                            <form action="{{ route('coupon.delete') }}" method="POST" style="display:inline">
                                @csrf
                                <button style="font-size:12px">Remove</button>
                              </form> 
                        </td>
                        
                        <td>-{{ $discount }}</td>
                    </tr>
                    
                    <tr>
                        <td colspan="5">&nbsp;</td>
                        <td>SubTotal after discount:</td>
                        <td>{{ $newSubtotal }}</td>
                    </tr>
                    @endif

                    <tr>
                        <td colspan="5">&nbsp;</td>
                        <td>Tax({{config('cart.tax')}}%):</td>
                        <td>{{ $newTax }}</td>
                    </tr>
                    <tr>
                        <td colspan="5">&nbsp;</td>
                        <td>Total:</td>
                        <td>{{ $newTotal }}</td>
                    </tr>
                </tfoot>
            </table>
            
            @if(auth()->user())
            <div class="cart-buttons">
                <a href=""> <button>Proceed to Checkout</button></a>
            </div>
            @endif
        </div>
    @else
        <h2>Your Cart is currently Empty</h2>
        <a href="{{ route('welcome') }}"> <button>Shop Now</button></a>
    @endif

    
    @if(! session()->has('coupon'))
        <div style="border: 1px solid gray; width:200px">
            <a href="">Have a code?</a>
            
            <form action="{{ route('coupon.store') }}" method="POST">
            @csrf
                <div class="form-group row">
                    <div class="form-group col-sm-6 col-md-6">
                    <input type="text" name="coupon_code" id="coupon_code">
                    </div>
                </div>
                <button type="submit" value="">Apply</button>
            </form>
        </div>
    @endif
</div> --}}

<!-- MAIN -->
<main class="site-main">
    {{-- @include('includes.alert') --}}
    <div class="columns container">
        <!-- Block  Breadcrumb-->
        @include('includes.alert')
        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home    </a></li>
            <li class="active">Your shopping cart</li>
        </ol><!-- Block  Breadcrumb-->

        <h2 class="page-heading">
            <span class="page-heading-title2">Cart Summary</span>
        </h2>

        <div class="page-content page-order">
            <ul class="step">
                <li class="current-step"><span>01. Summary</span></li>
                <li><span>02. Sign in</span></li>
                <li><span>03. Address</span></li>
                <li><span>04. Shipping</span></li>
                <li><span>05. Payment</span></li>
            </ul>
            @if (count(Cart::content())==0)
                <div class="heading-counter warning">Your shopping cart is Empty </div>
                <div class="cart_navigation">
                    <a href="{{ route('welcome') }}" class="prev-btn">Continue shopping</a>
                </div>
            @else
                <div class="heading-counter warning">Your shopping cart contains:
                    <span>{{ count(Cart::content()) }} Product(s)</span>
                </div>
                <div class="order-detail-content">
                    <div class="table-responsive">
                        <table class="table table-bordered  cart_summary">
                            <thead>
                                <tr>
                                    <th class="cart_product">Product</th>
                                    <th>Description</th>
                                    <th>Avail.</th>
                                    <th>Unit price</th>
                                    <th>Discount</th>
                                    <th>Discounted Price</th>
                                    <th>Tax</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th class="action"><i class="fa fa-trash-o"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Cart::content() as $key=>$item)
                                <tr>
                                    <td class="cart_product">
                                        <a><img src="{{ asset('/storage/product_images/'.$item->options->image.'') }}" alt="Product"></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="product-name"><a > {{ $item->name }} </a></p>
                                    </td>
                                    <td class="cart_avail"><span class="label label-success">In stock</span></td>
                                    <td class="price">Rs. {{ $item->options->original_price }}</td>
                                    <td class="price">Rs. {{ $item->options->discount }} </td>
                                    <td class="price">Rs. {{ $item->options->discounted_price }} </td>
                                    <td class="price">Rs. {{ $item->options->tax }} </td>
                                    <td class="qty">
                                        {{-- <input minlength="1" maxlength="12" name="qty{{ $index }}" id="qty{{ $index }}" value="1" class="form-control input-sm" type="text">
                                        <span data-field="qty{{ $index }}" data-type="minus" class="btn-number" ><i class="fa fa-caret-down"></i></span>
                                        <span data-field="qty{{ $index }}" data-type="plus" class="btn-number"><i class="fa fa-caret-up"></i></span> --}}
                                        <form action="{{route('cart.update',$item->rowId)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            {{-- <input type="text" name="qty" id="" value="{{$item->qty}}"> --}}
                                            <input name="qty" value="{{ $item->qty }}" class="form-control input-sm" type="text">
                                            <input type="submit" value="OK">
                                        </form>
                                    </td>
                                    <td class="price"> Rs. {{ $item->price * $item->qty }}</td>
                                    <td class="action">
                                        <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                                            {{method_field('DELETE')}}
                                            @csrf
                                            <button type='submit'>X</button>                                       
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" rowspan="2">
                                        @if(! session()->has('coupon'))
                                            <form action="{{ route('coupon.store') }}" method="POST">
                                            @csrf
                                            
                                                {{-- <div class="form-group col-sm-6 col-md-6">
                                                    <label for="">Have a code?</label>
                                                <input type="text" name="coupon_code" id="coupon_code">
                                                </div>
                                                <div class="form-group col-sm-6 col-md-12">
                                                <button type="submit" class="next-btn" value="">Apply</button>
                                                </div> --}}
                                                <div class="form-row">
                                                    <div class="col-6">
                                                        <label>Have a Code?</label>
                                                      <input type="text" class="form-control" name="coupon_code">
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="submit" class="btn btn-primary">Apply</button>

                                                    </div>
                                                  </div>
                                            </form>
                                        @endif
                                    </td>
                                    <td colspan="3" rowspan="2">
                                    <td colspan="3">Sub Total</td>
                                    <td colspan="2">Rs. {{ Cart::subtotal() }}</td>
                                </tr>
                                @if($discount)
                                <tr>
                                    {{-- <td colspan="3">Discount</strong></td> --}}
                                    
                                    <td colspan="3"><strong>Discount ({{ session()->get('coupon')['name'] }}):</strong>
                                        <form action="{{ route('coupon.delete') }}" method="POST" style="display:inline">
                                            @csrf
                                            <button style="font-size:12px">Remove</button>
                                          </form> 
                                    </td>
                                    <td colspan="2"><strong>Rs. {{ $discount }}</strong></td>
                                </tr>
                                @endif
                                <tr>
                                    <td colspan="3"><strong>Total</strong></td>
                                    <td colspan="2"><strong>Rs. {{ $newTotal }}</strong></td>
                                </tr>
                                
                            </tfoot>    
                        </table>
                    </div>
                    <div class="cart_navigation">
                        <a href="{{ route('welcome') }}" class="prev-btn">Continue shopping</a>
                        <a href="{{ route('checkout') }}" class="next-btn">Proceed to checkout</a>
                    </div>
                </div>
              
            @endif
        </div>
        <br>
    </div>


</main><!-- end MAIN -->
@endsection

