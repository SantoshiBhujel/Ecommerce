@extends('adminlte::page')
@section('title', 'Brands List')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Brands</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>
                                    {{ $brand->id }}
                                </td>
                                <td>
                                    {{ $brand->name }}
                                </td>
                                <td>
                                    {!! $brand->description !!}
                                </td>
                                <td>
                                    <img src="{{ asset('/storage/brand_logo/'.$brand->logo.'') }}" width="200px" >
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('brand.edit',$brand->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('brand.destroy',$brand->id) }}" method="POST">
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