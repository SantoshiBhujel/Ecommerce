@extends('adminlte::page')
@section('title', 'Sub Menu List')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Sub Menus</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Menu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submenus as $submenu)
                            <tr>
                                <td>
                                    {{ $submenu->id }}
                                </td>
                                <td>
                                    {{ $submenu->name }}
                                </td>
                                <td>
                                    {{ $submenu->menu->name }}
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('submenu.edit',$submenu->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('submenu.destroy',$submenu->id) }}" method="POST">
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