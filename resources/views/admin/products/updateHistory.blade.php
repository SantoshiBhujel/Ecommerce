@extends('adminlte::page')
@section('title', $product->name)

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title"> <b>{{ $product->name }}'s</b> Quantity Update History</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Quantity Added</th>
                            <th>Added On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product->attributes as $attribute)                     
                            <tr>
                                <td>
                                   {{ $attribute->id }}
                                </td>
                                <td>
                                    {{ $attribute->color }}
                                </td>
                                <td>
                                    {{ $attribute->size }}
                                </td>
                                @if (count($attribute->productAttributeUpdate)==0)
                                <td>No Updates</td>
                                <td>No Updates</td>
                                @else
                                    @foreach ($attribute->productAttributeUpdate as $update)
                                        <td>
                                            {{ $update->added_quantity }}
                                        </td>
                                        <td>
                                            {{ $update->created_at }}
                                        </td>
                                    @endforeach 
                                @endif                                                                                      
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