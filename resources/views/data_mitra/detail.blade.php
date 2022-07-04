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
                <div class="container-fluid rounded-3 ">

                    {{-- Page Heading --}}

                    {{-- <h4 class="ml-3">Detail</h4> --}}
                    <div class="p-4 m-3 border bg-white">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="col">Rating</th>
                                <td scope="col">{{ $mitra->penilaians->avg('nilai') }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Nama</th>
                                <td scope="col">{{ $mitra->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{ $mitra->jk }}</td>
                            </tr>
                            <tr>
                                <th scope="col">NIK</th>
                                <td scope="col">{{ $mitra->nik }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tempat Lahir</th>
                                <td>{{ $mitra->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Tanggal Lahir</th>
                                <td scope="col">{{ $mitra->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Umur</th>
                                <td>{{ $umur }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Perkawinan</th>
                                <td scope="col">{{ $mitra->perkawinan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Domisili</th>
                                <td>{{ $mitra->domisili }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Kelurahan</th>
                                <td scope="col">{{ $mitra->kelurahan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Pendidikan</th>
                                <td>{{ $mitra->pendidikan }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Nowa</th>
                                <td scope="col">{{ $mitra->nowa }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $mitra->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Pekerjaan</th>
                                <td>{{ $mitra->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Pengalaman</th>
                                <td scope="col">{{ $mitra->pengalaman }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Motor</th>
                                <td>{{ $mitra->motor }}</td>
                            </tr>
                            <tr>
                                <th scope="row">HP</th>
                                <td>{{ $mitra->hp }}</td>
                            </tr>
                            <tr>
                                <th scope="row">RAM</th>
                                <td>{{ $mitra->ram }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Android</th>
                                <td scope="col">{{ $mitra->android }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Zoom</th>
                                <td>{{ $mitra->zoom }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Pas Foto</th>
                                <td scope="col"><img class="img-fluid" width="450" height="350"
                                        src="{{ asset('storage/' . $mitra->pasfoto) }}" alt=""></td>
                            </tr>
                            <tr>
                                <th scope="col">KTP</th>
                                <td scope="col"><img class="img-fluid" width="450" height="350" src="{{ asset('storage/' . $mitra->ktp) }}" alt="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Ijazah</th>
                                <td scope="col"><img class="img-fluid" width="450" height="350" src="{{ asset('storage/' . $mitra->ijazah) }}"
                                        alt=""></td>
                            </tr>
                        </table>

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
