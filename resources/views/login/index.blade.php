<!DOCTYPE html>
<html lang="en">

<head>
    <title>SB Admin 2 - Login</title>
    <link href="{{ url('vendor/sb-admin/css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div class="loginBox">
        <img class="user" src="{{ url('/img/bps.png') }}"
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