@extends('main')

@section('bodyClass', 'index-opt-1 catalog-category-view catalog-view_op1')

@section('content')

<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->
                
        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('categoryByMenu',['name'=>$category->submenu->menu->name,'id'=>$category->submenu->menu->id]) }}">{{ $category->submenu->menu->name }}</a></li>
            <li><a href="{{ route('categoryBySubmenu',['submenu' => $category->submenu->name, 'id' => $category->submenu->id]) }}">{{ $category->submenu->name }}</a></li>
            <li><a class="active" href="{{ route('categoryByCategory',['category'=>$category->name,'id'=>$category->id]) }}">{{ $category->name }}</a></li>
        </ol><!-- Block  Breadcrumb-->

        @include('publicView.category',['products'=>$products, 'menu'=>$category->submenu->menu])
    </div> 

</main><!-- end MAIN -->

@endsection