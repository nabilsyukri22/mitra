<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link href="{{ url('vendor/sb-admin/css/login.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color:#dee9ff;">
    @if (session()->has('flash_message_error'))
        {{-- {!! session('flash_message_error') !!} --}}
        <div class="alert alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif
    <div class="loginBox">
        <img class="user" src="{{ url('/img/bps.png') }}" height="100px" width="100px">
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
                <input id="uname" type="email" name="email" @error('email') is-invalid @enderror autofocus
                    required value="{{ old('email') }}" placeholder="Enter Email Address...">
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
    </div>
</body>

</html>
