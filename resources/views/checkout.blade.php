@extends('main')

@section('bodyClass', 'index-opt-1 catalog-product-view catalog-view_op1 page-order')

@section('content')

<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->
                
        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li class="active">Checkout</li>
        </ol><!-- Block  Breadcrumb-->

        <h2 class="page-heading">
            <span class="page-heading-title2"> Checkout</span>
            <span class="page-heading-title2">@include('includes.alert')</span>
        </h2>

        <form action="{{ route('order.store') }}" method="post">
            @csrf

            <div class="page-content checkout-page">

                {{------------ BILLING INFORMATION ----------------}}
                <h3 class="checkout-sep">Billing Information</h3>
                <div class="box-border">
                    <ul>
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="first_name" class="required">Name</label>
                                <input class="input form-control" name="name" type="text">
                            </div>
                            <div class="col-sm-6">
                                <label for="email_address" class="required">Email Address</label>
                                <input class="input form-control" name="email" id="email" type="text">
                            </div>
                        </li>
                        <li class="row"> 
                            <div class="col-sm-6">
                                <label for="phone" class="required">Phone No.</label>
                                <input class="input form-control" name="phone" type="text">
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="required">Address</label>
                                <input class="input form-control" name="address" type="text">
                            </div>
                        </li>

                        <li class="row">
                            <div class="col-sm-6">
                                <label >State/Province</label>
                                    <select class="input form-control" name="state">
                                        <option value="Alabama">Alabama</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Kansas">Kansas</option>
                                </select>
                            </div>

                            <div class="col-sm-6">  
                                <label for="city" class="required">City</label>
                                <input class="input form-control" name="city" type="text">
                            </div>    
                        </li>

                    </ul>
                </div>

                {{------------ BILLING INFORMATION ----------------}}
                {{------------ SHIPPING INFORMATION ----------------}}
                <h3 class="checkout-sep">Shipping Information</h3>
                <div class="box-border">
                    <ul>               
                        <li class="row">
                            <div class="col-sm-6"> 
                                <label for="first_name_1" class="required">Name</label>
                                <input class="input form-control" name="shipping_name" id="first_name_1" type="text">
                            </div>

                            <div class="col-sm-6">   
                                <label for="email_address_1" class="required">Email</label>
                                <input class="input form-control" name="shipping_email" type="text">
                            </div>     
                        </li>

                        <li class="row">
                            <div class="col-sm-6">
                                <label for="address" class="required">Phone No.</label>
                                <input class="input form-control" name="shipping_phone" type="text">
                            </div>
                            <div class="col-sm-6">
                                <label class="required">Address</label>
                                <input class="input form-control" name="shipping_address"  type="text">
                            </div>                       
                        </li>

                        <li class="row">
                            <div class="col-sm-6">
                                <label class="required">State/Province</label>
                                <div class="custom_select">
                                    <select class="input form-control" name="shipping_state">
                                        <option value="Alabama">Alabama</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Kansas">Kansas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6"> 
                                <label for="city" class="required">City</label>
                                <input class="input form-control" name="shipping_city" id="city" type="text">
                            </div>  
                        </li>
                    </ul>
                </div>
                {{------------END SHIPPING INFORMATION ----------------}}

                {{------------ PAYMENT INFORMATION ----------------}}
                <h3 class="checkout-sep">Payment Information</h3>
                <div class="box-border">
                    <ul>
                        <li>
                            <label><input name="payment_gateway" value="cod" type="radio"> Cash On Delivery</label>
                        </li>

                        <li>
                            <label><input name="payment_gateway" value="esewa" type="radio"> Esewa</label>
                        </li>

                    </ul>
                </div>
                {{------------END PAYMENT INFORMATION ----------------}}
                {{------------ CART INFORMATION ----------------}}
                <h3 class="checkout-sep">Cart Items</h3>
                <div class="box-border">
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Cart::content() as $item)
                                    <tr>
                                        <td class="cart_product">
                                            <a href="#"><img src="{{ asset('/storage/product_images/'.$item->options->image.'') }}" alt="Product"></a>
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
                                            <input minlength="1" maxlength="12" name="qty{{ $loop->index }}" id="qty{{ $loop->index }}" value="1" class="form-control input-sm" type="text">
                                            {{-- <span data-field="qty{{ $index }}" data-type="minus" class="btn-number" ><i class="fa fa-caret-down"></i></span>
                                            <span data-field="qty{{ $index }}" data-type="plus" class="btn-number"><i class="fa fa-caret-up"></i></span> --}}
                                        </td>
                                        <td class="price"> Rs. {{ $item->price * $item->qty }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                
                                <tr>
                                    <td colspan="5" rowspan="2"></td>
                                    <td colspan="3">Sub Total</td>
                                    <td colspan="2">Rs. {{ Cart::subtotal() }}</td>
                                </tr>
                                
                                <tr>
                                    <td colspan="3"><strong>Total</strong></td>
                                    <td colspan="2"><strong>Rs. {{ Cart::total() }}</strong></td>
                                </tr>
                            </tfoot>    
                        </table>
                    </div>
                    <button type="submit" class="button pull-right">Place Order</button>
                </div>
                {{------------END CART INFORMATION ----------------}}

            </div>
        </form>
    </div>
</main><!-- end MAIN -->

@endsection