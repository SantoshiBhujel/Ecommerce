@extends('adminlte::page')
@section('title', 'Edit Coupon')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Coupon</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('addCoupon.update',$coupon->id) }}" method="POST">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="title">Code <span class="text-danger">*</span></label>
                            <input type="text" name="code" class="form-control" value="{{ $coupon->code }}" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">{{ __('Menu') }}</label>
                            <div class="form-group" >
                                <select id="menu" name="type" class="form-control" required>
                                    <option value="">Select Code Type</option>
                                    <option value="fixed" @if($coupon->type == 'fixed') selected @endif>Fixed</option>
                                    <option value="percent" @if($coupon->type == 'percent') selected @endif>Percent</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">{{ __('Value') }}</label>
                            <input type="text" name="value" class="form-control" value="{{ $coupon->value }}" >
                        </div>

                        <div class="form-group">
                            <label for="">{{ __('Percent') }}</label>
                            <input type="text" name="percent_off" class="form-control" value="{{ $coupon->percent_off }}">
                        </div>

                        <div class="form-group">
                            <label for="">{{ __('Starts From') }}</label>
                            <input type="date" name="start" class="form-control" value="{{ $coupon->starts_from }}">
                        </div>

                        <div class="form-group">
                            <label for="">{{ __('Expires On') }}</label>
                            <input type="date" name="expire" class="form-control" value="{{ $coupon->expires_on }}">
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
 
<script src="{{ asset('js/main.js') }}" defer></script>

@stop