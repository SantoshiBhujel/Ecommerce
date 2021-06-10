@extends('adminlte::page')
@section('title', 'Coupon List')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Coupons</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Percent Off</th>
                            <th>Starts From</th>
                            <th>Expires On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coupons as $coupon)
                            <tr>
                                <td>
                                    {{ $coupon->id }}
                                </td>
                                <td>
                                    {{ $coupon->code }}
                                </td>
                                <td>
                                    {{ $coupon->type }}
                                </td>
                                <td>
                                    {{ $coupon->value }}
                                </td>
                                <td>
                                    {{ $coupon->percent_off }}
                                </td>
                                <td>
                                    {{ $coupon->starts_from }}
                                </td>
                                <td>
                                    {{ $coupon->expires_on }}
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('addCoupon.edit',$coupon->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('addCoupon.destroy',$coupon->id) }}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>

@stop