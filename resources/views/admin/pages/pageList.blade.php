@extends('adminlte::page')
@section('title', 'Page List')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Pages</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Display Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                       
                            <tr>
                                <td>
                                    {{ $page->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('/storage/page_images/'.$page->image.'') }}" alt="" width="150px">
                                </td>  
                                <td>
                                    {!! Illuminate\Support\Str::limit($page->description,400) !!}
                                </td>                     
                                <td>
                                    <button>
                                        <a href="{{ route('pages.edit',$page->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
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