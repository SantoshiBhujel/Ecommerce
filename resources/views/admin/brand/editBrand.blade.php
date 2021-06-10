@extends('adminlte::page')
@section('title', 'Edit Brand')
@section('content_header')
    <h1>Edit Brand</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Brand</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('brand.update',$brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ $brand->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="title"> Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="editor1" rows="10" cols="90">{!! $brand->description !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Logo') }} <span class="text-danger">*</span> </label>
                            <div class="form-group" >
                                <input type="file" name="image">
                            </div>
                        </div>
                        
                        <input type="submit" value="Edit" class="btn btn-success float-right">
                    </form>
                </div>
                </div>
            </div>
            
            </div>
        </section>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace("editor1");
</script>

@stop