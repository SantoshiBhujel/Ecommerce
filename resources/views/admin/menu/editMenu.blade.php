@extends('adminlte::page')
@section('title', 'Edit Menu')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Menu</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('menu.update',$menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                        <label for="title">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ $menu->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Icon <span class="text-danger">*</span></label>
                            <div class="form-group">
                            <input type="file" name="icon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title">Show on Navbar</label>
                                <select name="show_on_nav" class="form-control" required>
                                    <option value="1" @if($menu->show_on_navbar == true) selected @endif>Yes</option>
                                    <option value="0" @if($menu->show_on_navbar == false) selected @endif>No</option>
                                </select>     
                        </div>

                        <div class="form-group">
                            <label for="title">Featured Image <span class="text-danger">*</span></label>
                            <div class="form-group">
                            <input type="file" name="featured_image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Banner Image') }}</label>
                            <div class="form-group" >
                                <div class="fu-text">
                                    <span><i class="mdi mdi-image-area"></i> Select Multiple Images</span>
                                </div>
                                <input class="upload" type="file" name="banner_image[]" accept="image/*" multiple>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Slider') }}</label>
                            <div class="form-group" >
                                <div class="fu-text">
                                    <span><i class="mdi mdi-image-area"></i> Select Multiple Images</span>
                                </div>
                                <input class="upload" type="file" name="slider_image[]" accept="image/*" multiple>
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