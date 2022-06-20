<!DOCTYPE html>
<html lang="en">

<head>
    <title>SB Admin 2 - Login</title>
    <link href="{{ url('vendor/sb-admin/css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div class="loginBox">
        <img class="user" src="https://www.bps.go.id/website/fileMenu/logo.png"
            height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="/login" method="post">
            @csrf
            <div class="inputBox">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <input id="uname" type="email" name="email" @error('email') is-invalid @enderror autofocus required
                    value="{{ old('email') }}" placeholder="Enter Email Address...">
                @error('email')
                    {{ $message }}
                @enderror
                <input id="pass" type="password" @error('password]') is-invalid @enderror placeholder="Password"
                    name="password">
                @error('password]')
                    {{ $message }}
                @enderror
            </div>
            <input type="submit" name="" value="Login">
        </form>
        <a href="/register">Daftar</a>
    </div>
</body>

</html>

{{-- <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-6 d-none p-10 d-lg-block">
                            <div class="p-10"><img src="{{ asset('storage/bps.png') }}"
                                    class="w-75"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="form-signin" action="/login" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            name="email" aria-describedby="emailHelp"
                                            @error('email') is-invalid @enderror autofocus required
                                            value="{{ old('email') }}" placeholder="Enter Email Address...">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            @error('password]') is-invalid @enderror id="password"
                                            placeholder="Password" name="password">
                                        @error('password]')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>

                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div> --}}
