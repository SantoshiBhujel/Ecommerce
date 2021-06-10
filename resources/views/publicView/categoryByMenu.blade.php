@extends('main')

@section('bodyClass', 'index-opt-1 catalog-category-view catalog-view_op1')

@section('content')

<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->
                
        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a class="active" href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}">{{ $menu->name }}</a></li>
        </ol><!-- Block  Breadcrumb-->

        @include('publicView.category',['products'=>$products, 'menu'=>$menu])
    </div> 

</main><!-- end MAIN -->

@endsection