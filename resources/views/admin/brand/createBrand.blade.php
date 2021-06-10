@extends('adminlte::page')
@section('title', 'Add Brand')
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Brand</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="title">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="title"> Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="editor1" rows="10" cols="120"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Logo') }} <span class="text-danger">*</span> </label>
                            <div class="form-group" >
                                <input type="file" name="image" required>
                            </div>
                        </div>
                        
                        <input type="submit" value="Add" class="btn btn-success float-right">
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