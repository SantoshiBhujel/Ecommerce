@extends('adminlte::page')
@section('title', 'Edit Page')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Page</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('pages.update',$page->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control"  value="{{ $page->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="page_type">{{ __('Page') }}</label>
                            <div class="form-group" >
                                <select name="page" class="form-control">
                                    <option value="{{ $page->page }}">{{ $page->name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Product Image') }}</label>
                            <div class="form-group" >
                                <input class="upload" type="file" name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Description') }}</label>
                            <textarea name="description" id="editor1" rows="10" cols="120" required> {!! $page->description !!}</textarea>
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
 
<script src="{{ asset('js/category.js') }}" defer></script>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace("editor1");
</script>
@stop