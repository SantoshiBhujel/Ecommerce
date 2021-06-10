@extends('main')

@section('bodyClass', 'index-opt-1 catalog-product-view catalog-view_op1 page-blog')

@section('content')

<!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li class="active"><a href="{{ route('blogList') }}">Blog</a></li>
                </ol><!-- Block  Breadcrumb-->

                <div class="row">                   
                    <!-- Main Content -->
                    <div class="col-md-9 col-md-push-3  col-main ">
                        <h2 class="page-heading">
                            <span class="page-heading-title2">Blog post</span>
                        </h2>
                        
                        <ul class="blog-posts">
                            @foreach ($blogs as $blog)
                            <li class="post-item">
                                <article class="entry">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="entry-thumb image-hover2">
                                                <a href="{{ route('singleBlog',$blog->id) }}">
                                                    <img src="{{ asset('/storage/blog_images/'.$blog->image.'') }}" alt="Blog">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="entry-ci">
                                                <h3 class="entry-title"><a href="{{ route('singleBlog',$blog->id) }}"">{{ $blog->title }}</a></h3>
                                                <div class="entry-meta-data">
                                                    <span class="author">
                                                    <i class="fa fa-user"></i> 
                                                    By: <a>Admin</a></span>
                                                   
                                                    <span class="comment-count">
                                                        <i class="fa fa-comment-o"></i> 3
                                                    </span>
                                                    <span class="date"><i class="fa fa-calendar"></i> {{ $blog->created_at }}</span>
                                                </div>
                    
                                                <div class="entry-excerpt">
                                                    {!! Illuminate\Support\Str::limit($blog->body,330)!!}
                                                </div>
                                                <div class="entry-more">
                                                    <a href="{{ route('singleBlog',$blog->id) }}"">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                           
                        </ul>
                        <div class="sortPagiBar clearfix">
                            <div class="bottom-pagination">
                                <nav class="pagination active">
                                  {{-- <ul class="pagination">
                                    {{-- <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                      <a href="#" aria-label="Next">
                                        <span aria-hidden="true">Next &raquo;</span>
                                      </a>
                                    </li> 
                                    <li class="active"><a href="#">{{ $blogs->links() }}</a></li>

                                  </ul>
                                  {{ $blogs->links() }}
                                </nav>--}}

                                <nav class="mt-5">
                                    <ul class="pagination justify-content-center">
                                       {{ $blogs->links() }}
                                    </ul>
                                 </nav>
                            </div>
                        </div>
                    </div><!-- Main Content -->
                    
                    <!-- Sidebar -->
                    <div class=" col-md-3 col-md-pull-9   col-sidebar">
                        @include('bestseller-products')
                    </div><!-- Sidebar -->
                </div>
            </div>


		</main><!-- end MAIN -->


@endsection