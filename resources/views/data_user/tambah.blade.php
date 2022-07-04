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

                    <div class="p-4 bg-white">
                        {{-- <h4 class="mb-5">Tambah User</h4> --}}
                        <form onsubmit="return confirm('Yakin?')"action="/register" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="name" class="col-form-label">Nama</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="username" class="col-form-label">Username</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" id="username" name="username" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="email" class="col-form-label">Email</label>
                                </div>
                                <div class="col-4">
                                    <input type="email" name="email" id="email" class="form-control"
                                        @error('email') is-invalid @enderror required value="{{ old('email') }}">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="password" class="col-form-label">Password</label>
                                </div>
                                <div class="col-4">
                                    <input type="password" name="password" id="password" class="form-control"
                                        @error('password]') is-invalid @enderror required>
                                    @error('password]')
                                        {{ $message }}
                                    @enderror
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
