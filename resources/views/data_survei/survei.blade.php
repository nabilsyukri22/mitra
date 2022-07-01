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

                    {{--  <input name="id_user" type="text" hidden value="{{ $id_user }}">  --}}

                    <div class="p-4 bg-white">
                        <form onsubmit="return confirm('Yakin?')" action="/data_survei/store" method="POST"
                            enctype="multipart/form-data">
                            @csrf


                            <div class="row mb-4 g-3 align-items-center">
                                <div class="col-2">
                                    <label for="nama" class="col-form-label">Nama Survei</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" id="nama" name="nama" class="form-control">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label for="kebutuhan" class="col-form-label">Kebutuhan</label>
                                </div>
                                <div class="col-4">
                                    <input type="number" id="kebutuhan" name="kebutuhan" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label for="tgl_mulai" class="col-form-label">Tanggal Mulai</label>
                                </div>
                                <div class="col-4">
                                    <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label for="tgl_akhir" class="col-form-label">Tanggal Berakhir</label>
                                </div>
                                <div class="col-4">
                                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" name="status" id="status" value="status">
                            <button type="submit" class="btn btn-primary mt-5">Tambahkan</button>
                        </form>
                    </div>

                    {{-- <a href="{{ route('') }}"></a> --}}

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
