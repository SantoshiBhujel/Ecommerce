@extends('adminlte::page')
@section('title', 'Edit Sub Menu')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Sub Menu</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('submenu.update',$submenu->id) }}" method="POST">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="title">Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ $submenu->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Menu') }}</label>
                            <div class="form-group" >
                                <select name="menus_id" class="form-control" required>
                                    <option value="">Select a Menu</option>
                                    @foreach($menus as $menu)
                                        <option value="{{$menu->id}}" @if($menu->id == $submenu->menus_id) selected @endif>
                                        {{$menu->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <input type="submit" value="Update" class="btn btn-success float-right">
                    </form>
                </div>
                </div>
            </div>
            
            </div>
        </section>
    </div>
</div>
 
@stop