@extends('main')

@section('bodyClass', 'index-opt-1 catalog-category-view catalog-view_op1')

@section('content')

<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->

        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home </a></li>
            <li class="active">{{ $page->name }}</li>
        </ol><!-- Block  Breadcrumb-->

        <div class="row">

            <!-- Main Content -->
            <div class="col-md-9 col-md-push-3   col-main">
                <h2 class="page-heading">
                    <span class="page-heading-title2">{{ $page->name }}</span>
                </h2>

                <div class="content-text clearfix">
                    @if($page->image)
                        <img width="310" alt="" class="alignleft" src="{{ asset('/storage/page_images/'.$page->image.'') }}">
                    @endif
                    {!! $page->description !!}
                </div>
            </div>
            <!-- Main Content -->

            <!-- Sidebar -->
            <div class="col-md-3 col-md-pull-9   col-sidebar">

                <!-- Block  bestseller products-->
                @include('bestseller-products')
                <!-- Block  bestseller products-->

                <!-- block slide top -->
                @include('block-slide')
                <!-- block slide top -->
            </div><!-- Sidebar -->
        </div>
    </div>
</main><!-- end MAIN -->
@endsection