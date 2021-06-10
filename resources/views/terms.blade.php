@extends('main')

@section('bodyClass', 'index-opt-1 catalog-category-view catalog-view_op1')

@section('content')

<!-- MAIN -->
<main class="site-main">

    <div class="columns container">
        <!-- Block  Breadcrumb-->

        <ol class="breadcrumb no-hide">
            <li><a href="{{ route('welcome') }}">Home </a></li>
            <li class="active">Terms and Condition</li>
        </ol><!-- Block  Breadcrumb-->

        <div class="row">

            <!-- Main Content -->
            <div class="col-md-9 col-md-push-3   col-main">
                <h2 class="page-heading">
                    <span class="page-heading-title2">About Us</span>
                </h2>

                <div class="content-text clearfix">

                    <img width="310" alt="" class="alignleft" src="{{ asset('images/media/detail/about-us.jpg') }}">

                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et
                        urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit
                        amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                        Ut tellus dolor, dapibus eget, elementum vel.</p>

                    <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu
                        lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus
                        eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                    <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a
                            href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                        facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                        posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue.
                    </p>

                    <p>Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa.
                        Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus
                        non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis
                        lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor
                        sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum
                        nisl. </p>
                    <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu
                        lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus
                        eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                    <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a
                            href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                        facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                        posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue.
                    </p>
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