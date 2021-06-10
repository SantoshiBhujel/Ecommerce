@extends('adminlte::page')
@section('title', 'Add Category')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="title">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Menu') }}</label>
                            <div class="form-group" >
                                <select id="menu" name="menus_id" class="form-control" required>
                                    <option value="">Select a Menu</option>
                                    @foreach($menus as $menu)
                                        <option value="{{$menu->id}}">
                                        {{$menu->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Submenu') }}</label>
                            <div class="form-group" >
                                <select id="submenu" name="submenu_id" class="form-control" required>
                                    <option value="">Select Submenu</option>
                                </select>
                            </div>
                        </div>
                        
                        <input type="submit" value="Create" class="btn btn-success float-right">
                    </form>
                </div>
                </div>
            </div>
            
            </div>
        </section>
    </div>
</div>
 
<script src="{{ asset('js/category.js') }}" defer></script>

@stop