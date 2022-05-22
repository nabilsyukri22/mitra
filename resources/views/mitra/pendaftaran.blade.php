<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .container {
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>
</head>
@include('sb-admin/head')

<body>
    <div class="py-5 px-4 shadow shadow-lg bg-light container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('storage/icon_pendaftaran.png') }}" class="w-100">
            </div>
            <div class="col py-5">
                <h3 class="text-primary text-xl mb-4"><b>Halo calon mitra !</b></h3>
                <div class="">
                    <div class="mb-auto p-2 bd-highlight">
                        <h5 class="text-lg">Jangan lupa sediakan Foto KTP, Pasfoto, dan Ijazah dulu ya sebelum
                            mendaftar
                            , supaya proses pendaftaran bisa berjalan lebih cepat</h5>
                    </div>
                    <div class="mt-auto p-2 bd-highlight m-auto">
                        <a href="/mitra" class="btn btn-primary px-3 py-1 rounded-pill w-100 m-auto">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sb-admin/javascript')
</body>

</html>
