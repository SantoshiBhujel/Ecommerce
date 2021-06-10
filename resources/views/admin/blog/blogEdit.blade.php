@extends('adminlte::page')
@section('title', 'Edit Blog')

@section('content')


<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Update Blog</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="inputName">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}"required>
                </div>

                <div class="form-group">
                  <label for="body">Body <span class="text-danger">*</span> </label>
                  <textarea name="body" id="editor1" rows="10" cols="80" class="form-control" required>{!! $blog->body !!}</textarea>
                </div>
                
                
                <div class="form-group">
                  <label for="image">Image <span class="text-danger">*</span> </label>
                  <br>
                  <input class="upload" type="file" name="image">
                </div>

                <div class="form-group col-md-6">
                  <label for="title"> Tags <span class="text-danger">*</span></label>
                  <input type="text" name="tags" class="form-control" value="{{ $blog->tags }}" placeholder="Please enter tags separates by comma(,)">
                </div>

                <input type="submit" value="Update" class="btn btn-success float-right">
            </form>
          </div>
        </div>
      </div>
      
    </div>
</section>
  <!-- /.content -->

   <!-- /.content -->
   <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
   <script>
     CKEDITOR.replace("editor1");
   </script>

@stop