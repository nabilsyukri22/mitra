<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('sb-admin/head')

<body id="page-top">

    <div id="wrapper">

        {{-- Sidebar --}}
        @include('sb-admin/sidebar')

        {{-- Content Wrapper --}}
        <div id="content-wrapper" class="d-flex flex-column">

            {{-- Main Content --}}
            <div id="content">

                {{-- Topbar --}}
                @include('sb-admin/topbar')

                {{-- Begin Page Content --}}
                <div class="container-fluid">

                    {{--  <form action="/register" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name" class="mb-4 form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}" placeholder="Nama">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="mb-4 form-control @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}" placeholder="Username">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="mb-4 form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="mb-4 form-control @error('password') is-invalid @enderror" id="password" required placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Tambahkan    </button>
                    </form>  --}}

                    <div class="p-4 bg-white">
                        {{--  <h4 class="mb-5">Tambah User</h4>  --}}
                        <form onsubmit="return confirm('Yakin?')"action="/register" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="name" class="col-form-label">Nama</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="username" class="col-form-label">Username</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" id="username" name="username" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="email" class="col-form-label">Email</label>
                                </div>
                                <div class="col-4">
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="password" class="col-form-label">Password</label>
                                </div>
                                <div class="col-4">
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-5">Tambahkan</button>
                        </form>
                    </div>

                </div>

            </div>

            {{-- Footer --}}
            @include('sb-admin/footer')

        </div>

    </div>

    {{-- Scroll to Top Button --}}
    @include('sb-admin/button-topbar')

    <!-- Logout Modal-->
    @include('sb-admin/logout-modal')

    {{-- JS --}}
    @include('sb-admin/javascript')
    <script>
        $(document).ready(function() {
            $('#data_user').DataTable();
        });
    </script>
</body>

</html>
