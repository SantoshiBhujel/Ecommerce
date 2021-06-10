@extends('main')

@section('bodyClass', 'index-opt-1 catalog-product-view catalog-view_op1 page-blog')

@section('content')

<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->
                
        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home </a></li>
            <li><a href="{{ route('blogList') }}">Blog </a></li>
            <li class="active">{{ $blog->title }}</li>
        </ol><!-- Block  Breadcrumb-->

        <div class="row">           
            <!-- Main Content -->
            <div class="col-md-9 col-md-push-3  col-main ">
                <h1 class="page-heading">
                    <span class="page-heading-title2">{{ $blog->title }}</span>
                </h1>
                <article class="entry-detail">
                    <div class="entry-meta-data">
                        <span class="author">
                        <i class="fa fa-user"></i> 
                        by: <a href="#">Admin</a></span>
                        <span class="comment-count">
                            <i class="fa fa-comment-o"></i> 3
                        </span>
                        <span class="date"><i class="fa fa-calendar"></i> {{ $blog->created_at }}</span>
                    </div>
                    <div class="entry-photo">
                        <img src="{{ asset('/storage/blog_images/'.$blog->image.'') }}" alt="Blog">
                    </div>
                    <div class="content-text clearfix">
                        <p>{!! $blog->body !!}</p>
                    </div>
                    <div class="entry-tags">
                        <span>Tags:</span>
                        <a href="#">{{ $blog->tags }}</a>
                    </div>
                </article>
                 <!-- Related Posts -->
                 <div class="single-box">
                    <h2>Related Posts</h2>
                    <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                        @foreach ($relatedBlogs as $blog)
                        <li class="post-item">
                            <article class="entry">
                                <div class="entry-thumb image-hover2">
                                    <a href="{{ route('singleBlog',$blog->id) }}">
                                        <img src="{{ asset('/storage/blog_images/'.$blog->image.'') }}" alt="Blog">
                                    </a>
                                </div>
                                <div class="entry-ci">
                                    <h3 class="entry-title"><a href="{{ route('singleBlog',$blog->id) }}">{{ $blog->title }}</a></h3>
                                    <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i> {{ $blog->created_at }}
                                        </span>
                                    </div>
                                    <div class="entry-more">
                                        <a href="{{ route('singleBlog',$blog->id) }}">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        @endforeach 
                    </ul>
                </div>
                <!-- ./Related Posts -->
               
                <!-- Comment -->
                <div class="single-box">
                    <h2 class="">Comments</h2>
                    <div class="comment-list">
                        <ul>
                            <li>
                                <div class="avartar">
                                    <img src="{{ asset('images/media/detail/avatar.jpg') }}" alt="Avatar">
                                </div>
                                <div class="comment-body">
                                    <div class="comment-meta">
                                        <span class="author"><a href="#">Admin</a></span>
                                        <span class="date">2015-04-01</span>
                                    </div>
                                    <div class="comment">
                                        Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. 
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="single-box">
                    <h2>Leave a Comment</h2>
                    <div class="coment-form">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" name="name" @auth value="{{ auth()->user()->name }}" @endauth class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name="email" @auth value="{{ auth()->user()->email }}" @endauth class="form-control">
                                </div>
                            
                                <div class="col-sm-12">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message"rows="8" class="form-control"></textarea>
                                </div>
                            </div>
                            <button class="btn-comment">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- ./Comment -->
            </div><!-- Main Content -->
            
            <!-- Sidebar -->
            <div class=" col-md-3 col-md-pull-9   col-sidebar">

                <!-- Block  categorie-->
               @include('bestseller-products')
               <!-- Block  categorie-->

                <!-- block slide top -->
                @include('block-slide')
                <!-- block slide top -->

                <!-- block slide top -->
                <div class="block-sidebar block-sidebar-testimonials2">
                    <div class="block-content">
                        <div class="owl-carousel" 
                            data-nav="false" 
                            data-dots="true" 
                            data-margin="0" 
                            data-items='1' 
                            data-autoplayTimeout="700" 
                            data-autoplay="true" 
                            data-loop="true">
                            <div class="item " >
                                <div class="img">
                                    <img src="{{ asset('images/icon/icon1.png') }}" alt="icon1">
                               </div>
                               <strong class="title">100% Money Back Guaranteed</strong>
                               <div class="des">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .
                               </div>
                               <a href="#" class="btn">Read more <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>               
                        </div>
                    </div>
                </div><!-- block slide top -->
            </div><!-- Sidebar -->
        </div>
    </div>
</main><!-- end MAIN -->

@endsection