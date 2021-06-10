@extends('main')

@section('content')

    <!-- MAIN -->
    @include('includes.alert')
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->
                    
            <ol class="breadcrumb no-hide">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('login') }}">Login/Register</a></li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2">Authentication</span>
            </h2>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box-authentication">
                            <h3>Create an account</h3>
                            <p>Please enter your email address to create an account.</p>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" >

                                <label for="emmail_register">Email address</label>
                                <input type="email" name="email" class="form-control" >

                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">

                                <label for="password">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                                <button class="button"><i class="fa fa-user"></i> Create an account</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box-authentication">
                            <h3>Already registered?</h3>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <label for="emmail_login">Email address</label>
                                <input type="text" class="form-control" name="email" id="emmail_login">
                                <label for="password_login">Password</label>
                                <input type="password" class="form-control" id="password_login" name="password">
                                @if (Route::has('password.request'))
                                    <a class="forgot-pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                <button class="button"><i class="fa fa-lock"></i> Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->
@endsection