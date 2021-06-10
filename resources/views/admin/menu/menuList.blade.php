@extends('adminlte::page')
@section('title', 'List Menu')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Menus</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Icon</th>
                            <th>Show On Navbar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>
                                    {{ $menu->id }}
                                </td>
                                <td>
                                    {{ $menu->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('/storage/menu_icons/'.$menu->icon.'') }}" alt="img"> 
                                </td>
                                <td>
                                    {{ $menu->show_on_navbar }}
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('menu.edit',$menu->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
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