@extends('adminlte::page')
@section('title', 'Banner List')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Banner</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>
                                    {{ $banner->id }}
                                </td>
                                <td>
                                   <img src="{{ asset('/storage/banner_images/'.$banner->image.'') }}" alt="img">
                                </td>
                                <td>
                                    {{ $banner->type }}
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('banner.edit',$banner->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
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