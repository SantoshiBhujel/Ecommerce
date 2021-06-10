@extends('adminlte::page')
@section('title', 'Create Page')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Page</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="title">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="page_type">{{ __('Page Type') }}</label>
                            <div class="form-group" >
                                <select name="page" class="form-control" required>
                                    <option value="">Select a Page Type</option>
                                    <option value="about">About us</option>
                                    <option value="terms">Terms and Condition</option>
                                    <option value="privacy">Privacy Policy</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Product Image') }}</label>
                            <div class="form-group" >
                                <input class="upload" type="file" name="image" accept="image/*" multiple>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Description') }}</label>
                            <textarea name="description" id="editor1" rows="10" cols="120" required></textarea>
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
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace("editor1");
</script>
@stop