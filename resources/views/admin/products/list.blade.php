@extends('adminlte::page')
@section('title', 'Product List')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Products</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Menu</th>
                            <th>Display Image</th>
                            <th>Product Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                       
                            <tr>
                                
                                <td>
                                   {{ $product->id }}
                                </td>
                                <td>
                                    <a href="{{ route('product.show',$product->id) }}">{{ $product->name }}</a>
                                </td>
                                <td>
                                    @if ($product->category)
                                        {{ $product->category->name }}
                                    @endif
                                </td>
                                <td>
                                    <img src="{{ asset('/storage/product_images/'.$product->display_image.'') }}" alt="" width="150px">
                                </td>                       
                                <td>
                                    @foreach ( $product->photos as $photo)
                                    <img src="{{ asset('/storage/product_images/'.$photo->product_image.'') }}" alt="" width="150px">
                                    @endforeach
                                    
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('product.edit',$product->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>

@stop