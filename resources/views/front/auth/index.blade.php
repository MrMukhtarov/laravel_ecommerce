@extends('front.layouts.master')
@section('title', 'Authentication')
@section('content')
    <div class="site-wrapper" id="top">
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!--=============================================
        =            Login Register page content         =
        =============================================-->
        <main class="page-section inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
                        <!-- Login Form s-->
                        <form action="{{ route('auth.register') }}" method="POST">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">New Customer</h4>
                                <p><span class="font-weight-bold">I am a new customer</span></p>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                        <label for="email">Full Name</label>
                                        <input class="mb-0 form-control" name="name" type="text" id="name"
                                            placeholder="Enter your full name">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label for="email">Email</label>
                                        <input class="mb-0 form-control" type="email" name="email" id="email"
                                            placeholder="Enter Your Email Address Here..">
                                    </div>
                                    <div class="col-lg-12 mb--20">
                                        <label for="password">Password</label>
                                        <input class="mb-0 form-control" name="password" type="password" id="password"
                                            placeholder="Enter your password">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-outlined">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form action="{{route('auth.login')}}" method="POST">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">Returning Customer</h4>
                                <p><span class="font-weight-bold">I am a returning customer</span></p>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                        <label for="email">Enter your email address here...</label>
                                        <input class="mb-0 form-control" name="email" type="email" id="email1"
                                            placeholder="Enter you email address here...">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label for="password">Password</label>
                                        <input class="mb-0 form-control" name="password" type="password" id="login-password"
                                            placeholder="Enter your password">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-outlined">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
