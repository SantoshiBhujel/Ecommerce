@extends('adminlte::page')
@section('title', 'Edit Banner')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Banner</h3>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title">Image<span class="text-danger">*</span></label>
                                <div class="form-group" >
                                    <input type="file" name="image">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category_id">{{ __('Banner Type') }} <span class="text-danger">*</span> </label>
                                <div class="form-group" >
                                    <select id="menu" name="type" class="form-control" required>
                                        <option value="">Select Banner Type</option>
                                        <option value="top" @if ($banner->type=="top") selected @endif >Top Banner</option>
                                        <option value="side" @if ($banner->type=="side") selected @endif>Top-Side Banner</option>
                                        <option value="bottom" @if ($banner->type=="bottom") selected @endif>Bottom Banner</option>
                                    </select>
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

@stop