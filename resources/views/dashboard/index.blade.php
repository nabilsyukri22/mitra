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

                    {{-- Page Heading --}}
                    <div class="row">
                        <p>Hello {{ $nama }}</p>
                        <div class="col-sm-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah User : {{ $user }}</h5>
                                    {{--  <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>  --}}
                                    <a href="/data_user" class="btn btn-primary">Data User</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Survei/Sensus : {{ $survei }}</h5>
                                    {{--  <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>  --}}
                                    <a href="/data_survei" class="btn btn-primary">Data Survei/Sensus</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Mitra : {{ $mitra }}</h5>
                                    {{--  <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>  --}}
                                    <a href="/data_mitra" class="btn btn-primary">Data Mitra</a>
                                </div>
                            </div>
                        </div>
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

</body>

</html>
