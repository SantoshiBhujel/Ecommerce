@extends('main')

@section('bodyClass', 'index-opt-1 catalog-category-view catalog-view_op1')

@section('content')

<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->
                
        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('categoryByMenu',['name'=>$submenu->menu->name,'id'=>$submenu->menu->id]) }}">{{ $submenu->menu->name }}</a></li>
            <li><a class="active" href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}">{{ $submenu->name }}</a></li>
        </ol><!-- Block  Breadcrumb-->

        @include('publicView.category',['products'=>$products, 'menu'=>$submenu->menu])
    </div> 

</main><!-- end MAIN -->

@endsection