<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .bgr {
            background: #dee9ff;
        }
    </style>
</head>

@include('sb-admin/head')

<body class="bgr text-gray-800">
    <div class="py-5 container rounded">
        <div class="shadow shadow-md rounded p-2 bg-white">
            <div class="container">
                <div class="row py-3">
                    <div class="col">
                        <div class="text-center">
                            <img src="{{ url('/img/bps.png') }}" class="card-img-top pt-4 mx-auto" style="width: 10rem">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center py-3"><b>Syarat Mitra Statistik</b></h4>
                            <p class="card-text">1. Pria/Wanita Warga Negara Indonesia (WNI)</p>
                            <p class="card-text">2. Sehat jasmani dan rohani</p>
                            <p class="card-text">3. Diutamakan berumur 18 s.d. 45 tahun</p>
                            <p class="card-text">4. Diutamakan minimal lulus SMA atau sederajat</p>
                            <p class="card-text">5. Disiplin dan berkompeten</p>
                            <p class="card-text">6. Mampu berbahasa Indonesia serta membaca dan menulis huruf latin</p>
                            <p class="card-text">7. Bisa bekerja sama dan berkoordinasi dengan Pegawai BPS dengan baik
                            </p>
                            <p class="card-text">8. Mampu berkomunikasi dengan masyarakat di wilayah tugasnya</p>
                            <p class="card-text">9. Diutamakan memiliki dan menguasai gadget/Smartphone</p>
                            <p class="card-text">10. Berdomisili di sekitar Kota Padang Panjang</p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title pb-2"><b>Dokumen Persyaratan</b></h5>
                            <p class="card-text">1. Pas Photo 3x4</p>
                            <p class="card-text">2. Foto KTP</p>
                            <p class="card-text">3. Foto Ijazah Terakhir</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pb-2"><b>10 Poin Penilaian Kinerja Mitra Statistik</b></h5>
                            <p class="card-text">1. Kejujuran</p>
                            <p class="card-text">2. Kuantitas</p>
                            <p class="card-text">3. Ketepatan waktu</p>
                            <p class="card-text">4. Kepatuhan SOP</p>
                            <p class="card-text">5. Penguasaan konsep dan definisi</p>
                            <p class="card-text">6. Kejujuran</p>
                            <p class="card-text">7. Inisiatif bekerja</p>
                            <p class="card-text">8. Loyalitas</p>
                            <p class="card-text">9. Perilaku </p>
                            <p class="card-text">10. Komunikasi </p>
                        </div>
                        <div class="mt-auto pt-4 pb-4 bd-highlight m-auto">
                            <a href="/mitra" class="btn btn-primary py-1 rounded-pill w-100 m-auto">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @include('sb-admin/javascript')
</body>

</html>
