<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('sb-admin/head')

<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

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

                    <!-- <a href="/data_survei/twilio">kirim wa</a> -->

                    <div class="p-4 m-3 border bg-white">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="col">Nama</th>
                                <td scope="col">{{ $survei->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Kebutuhan</th>
                                <td scope="col">{{ $jumlahmitra }}/{{ $survei->kebutuhan }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Status</th>
                                {{-- <td scope="col">
                                    <select class="form-select" name="status" id="status">
                                      <option value="Belum Dimulai">Belum Dimulai</option>
                                      <option value="Sedang Berlangsung">Sedang Berlangsung</option>
                                      <option value="Selesai">Selesai</option>
                                    </select>
                                </td> --}}
                                <td scope="col">
                                    @php
                                        $date = date('Y-m-d');
                                        if ($date < $survei->tgl_mulai) {
                                            echo 'Belum Dimulai';
                                        } elseif ($date >= $survei->tgl_mulai && $date <= $survei->tgl_akhir) {
                                            echo 'Sedang Berlangsung';
                                        } else {
                                            echo 'Telah Selesai';
                                        }
                                    @endphp
                                </td>
                            </tr>

                        </table>

                    </div>

                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="ml-3">Mitra Terhubung</h4>
                        </div>

                        {{-- ------------------ --}}

                        @php
                            $date = date('Y-m-d');
                            if ($date < $survei->tgl_mulai && $jumlahmitra < $survei->kebutuhan) {
                                echo '<button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">Tambah
                                Mitra</a>
                                </button>';
                            } else {
                                echo '<button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter" disabled>Tambah Mitra</a>
                                </button>';
                            }
                        @endphp

                        {{-- ------------------ --}}

                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter">Tambah
                            Mitra</a>
                        </button> --}}
                    </div>

                    <div class="p-4 m-3 border bg-white">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th scope="col">Nama Mitra</th>
                                @if ($date > $survei->tgl_akhir)
                                    <th scope="col">Beri Penilaian</th>
                                    <th scope="col">Nilai Kinerja</th>
                                @endif
                                <th scope="col">Hapus Mitra Terhubung</th>
                            </tr>
                            @foreach ($mitra as $m)
                                @php
                                    $mitraSurvei = $m
                                        ->mitra_survei()
                                        ->where('id_survei', $survei->id)
                                        ->first();
                                    $penilaians = $mitraSurvei->penilaians;
                                    $avg = $penilaians->avg('nilai');
                                @endphp
                                <tr>
                                    <td scope="col">
                                        {{ $m->nama }}
                                    </td>
                                    @if ($date > $survei->tgl_akhir)
                                        <td scope="col">
                                            <a href="/data_survei/penilaian/{{ $mitraSurvei->id }}"
                                                class="btn btn-sm btn-primary"><i class="fa fa-info"></i></a>
                                        </td>
                                        <td scope="col">
                                            {{ $avg }}
                                        </td>
                                    @endif
                                    <td scope="col">
                                        <form action="/hapus/mitra_terhubung/{{ $mitraSurvei->id }}" method="POST" 
                                            class="d-inline" onsubmit="return confirm('Yakin?')">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                              <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    {{-- <a href="{{ route('') }}"></a> --}}

                    <form action="/data_survei/twilio" method="POST">
                        @csrf
                        <input type="hidden" id="surveiId" name="surveiId" value="{{ $survei->id }}" />
                        <div class="row mb-4 g-3 align-items-center">
                            <div class="col-2">
                                <label for="nama" class="col-form-label">Pesan</label>
                            </div>
                            <div class="col-8">
                                <textarea id="msg" name="msg" class="form-control"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>

                </div>
            </div>

            <!-- Modal -->
            <form action="{{ route('tambah_mitra') }}" id="modal" method="POST">
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    <label for="inlineFormCustomSelect"></label>
                                    <input type="hidden" name="survei_id" value="{{ $survei->id }}">
                                    <select class="form-control" name="tambah_mitra[]" multiple="multiple"
                                        id="tambah_mitra" style="display: flex; width:100%">
                                        @foreach ($mitraa as $mitra)
                                            <option value="{{ $mitra->id }}">{{ $mitra->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tambah_mitra').select2();
        });
    </script>

</body>

</html>
