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

                    <h4 class="ml-3">Detail</h4>
                    <button onclick="
                        use Twilio\Rest\Client;
                        
                        $sid = 'AC9e392a7b4a308ada52e7c81861c35c15';
                        $token = '8e1d81e5e76e558f0f5bf87e75f1f9bb';
                        $twilio = new Client($sid, $token);
                        
                        $message = $twilio->messages->create(
                            'whatsapp:+6281266075794', // to
                            [
                                'from' => 'whatsapp:+14155238886',
                                'body' => 'Bismillah',
                            ],
                        );
                        
                        print $message->sid;
                    ">halo</button>
                    <a href="/data_survei/twilio">kirim wa</a>
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
                        {{-- <div class="mr-5"><a href="/data_survei/tambah" class="btn btn-primary">Tambah Mitra</a> --}}
                    </div>
                </div>
                <div class="p-4 m-3 border bg-white">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th scope="col">Nama Mitra</th>
                            <th scope="col">Beri Penilaian</th>
                            @if ($date > $survei->tgl_akhir)
                            @endif
                            <th scope="col">Nilai Kinerja</th>
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
                                <td scope="col">
                                    <a href="/data_survei/penilaian/{{ $mitraSurvei->id }}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-info"></i></a>
                                </td>
                                @if ($date > $survei->tgl_akhir)
                                @endif
                                <td scope="col">
                                    {{ $avg }}
                                </td>
                            </tr>
                        @endforeach
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
    @livewireScripts

</body>

</html>
