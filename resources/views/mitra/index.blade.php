<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>The Easiest Way to Add Input Masks to Your Forms</title> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ url('vendor/sb-admin/css/form.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    <style>
        input[type="date"]{
            background-color: #5891ff;
            font-family: "Roboto Mono", monospace;
            color: #ffffff;
            border: none;
            outline: none;
            padding: 5px;
            border-radius: 5px;
        }

        ::-webkit-calendar-picker-indicator{
            background-color: #ffffff;
            cursor: pointer;

        }
    </style>
</head>

<body class="text-center">
    <div class="" style="display: flex; justify-content: center;">
        <div class="col-md-5">
            <main class="registration-form">
                <h1 class="mb-3 mt-3 fw-normal">Silahkan Isi Data Diri Anda</h1>
                <form action="/mitra" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-icon">
                        <span><i class="icon icon-user"></i></span>
                    </div>

                    {{-- 1 --}}

                    <div class="form-group">
                        <input type="text" name="nama" class="form-control item @error('nama') is-invalid @enderror"
                            id="nama" required value="{{ old('nama') }}" placeholder="Nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- 2 --}}

                    <div class="form-group">
                        <input type="text" name="nik" class="form-control item @error('nik') is-invalid @enderror"
                            id="nik" required value="{{ old('nik') }}" placeholder="NIK">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- 3 --}}

                    <div class="form-group">

                        <input type="text" name="pekerjaan"
                            class="form-control item @error('pekerjaan') is-invalid @enderror" id="pekerjaan" required
                            value="{{ old('pekerjaan') }}" placeholder="Pekerjaan">
                        @error('pekerjaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- 4 --}}

                    <div class="form-group">

                        <input type="text" name="nowa" class="form-control item @error('nowa') is-invalid @enderror"
                            id="nowa" required value="{{ old('nowa') }}" placeholder="Nomor WA">
                        @error('nowa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- 5 --}}

                    <div class="form-group">

                        <input type="text" name="email" class="form-control item @error('email') is-invalid @enderror"
                            id="email" required value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- 6 --}}

                    <div class="form-group">

                        <input type="text" name="tempat_lahir"
                            class="form-control item @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                            required value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
                        @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- 7 --}}

                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <br>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
                    <br><br>

                    <script type="text/javascript">
                        $(function() {
                            $('#datetimepicker1').datetimepicker();
                        });
                    </script>

                    {{-- ---------------------------- --}}
                    <hr>

                    {{-- 8 --}}

                    <div class="form-group">
                        <label for="provinsi"> Provinsi </label>
                        <select class="form-control" id="provinsi" name="province_id" required>
                            <option>Pilih Provinsi...</option>
                            @foreach ($provinces as $provinsi)
                                <option value="{{ $provinsi->id }}"> {{ $provinsi->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- 9 --}}

                    <div class="form-group">
                        <label for="kabupaten"> Kabupaten / Kota </label>
                        <select class="form-control" id="kabupaten" name="regency_id">
                        </select>
                    </div>

                    {{-- 10 --}}

                    <div class="form-group">
                        <label for="kecamatan"> Kecamatan </label>
                        <select class="form-control" id="kecamatan" name="district_id">
                        </select>
                    </div>

                    {{-- 11 --}}

                    <div class="form-group">
                        <label for="desa"> Nagari </label>
                        <select class="form-control" id="desa" name="village_id">
                        </select>
                    </div>

                    {{-- 12 --}}

                    <div class="form-group">
                        <input type="text" name="domisili"
                            class="form-control item @error('domisili') is-invalid @enderror" id="domisili" required
                            value="{{ old('domisili') }}" placeholder="Alamat Lengkap">
                        @error('domisili')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- ----------------------------- --}}

                    <br><hr><br>

                    {{-- 13 --}}

                    <div class="form-group">
                        <select name="hp" id="hp" class="form-control" required>
                            <option>Apakah Anda Memiliki HP?</option>
                            <option value="Punya">Punya</option>
                            <option value="Tidak Punya">Tidak Punya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="android" id="android" class="form-control" required>
                            <option>Versi Android</option>
                            <option value="5.0 Kebawah">5.0 Kebawah</option>
                            <option value="Android 5.0 (Lollipop)">Android 5.0 (Lollipop)</option>
                            <option value="Android 6.0 (Marshmallow)">Android 6.0 (Marshmallow)</option>
                            <option value="Android 7.0 – 7.1 (Nougat)">Android 7.0 – 7.1 (Nougat)</option>
                            <option value="Android 8.0 – 8.1 (Oreo)">Android 8.0 – 8.1 (Oreo)</option>
                            <option value="Android 9 (Pie)">Android 9 (Pie)</option>
                            <option value="Android 10 (Android Q)">Android 10 (Android Q)</option>
                            <option value="Android 11">Android 11</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="ram" id="ram" class="form-control" required>
                            <option>RAM HP</option>
                            <option value="2 GB">2 GB</option>
                            <option value="4 GB">4 GB</option>
                            <option value="6 GB">6 GB</option>
                            <option value="8 GB">8 GB</option>
                            <option value="10 GB">10 GB</option>
                            <option value="Lebih dari 10 GB">Lebih dari 10 GB</option>
                        </select>
                    </div>

                    <br>
                    <hr><br>

                    <div class="form-group">
                        <select name="jk" id="jk" class="form-control" required>
                            <option>Jenis Kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="perkawinan" id="perkawinan" class="form-control" required>
                            <option>Status Perkawinan</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="pendidikan" id="pendidikan" class="form-control" required>
                            <option>Pendidikan Terakhir</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="pengalaman" id="pengalaman" class="form-control" required>
                            <option>Pengalaman Menjadi Petugas Survei</option>
                            <option value="Tidak Pernah Ikut Survei Apapun">Tidak Pernah Ikut Survei Apapun</option>
                            <option value="Pernah Ikut Survei BPS">Pernah Ikut Survei BPS</option>
                            <option value="Pernah Ikut Survei Selain BPS">Pernah Ikut Survei Selain BPS</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="zoom" id="zoom" class="form-control" required>
                            <option>Apakah Bisa Menggunakan Zoom?</option>
                            <option value="Bisa">Bisa</option>
                            <option value="Tidak Bisa">Tidak Bisa</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="motor" id="motor" class="form-control" required>
                            <option>Apakah Bisa Mengendarakan Sepeda Motor?</option>
                            <option value="Bisa">Bisa</option>
                            <option value="Tidak Bisa">Tidak Bisa</option>
                        </select>
                    </div>

                    <div class="row mb-3">
                        <label for="pasfoto" class="col-sm-2 col-form-label">Pas Foto</label>

                        <input class="form-control @error('pasfoto') is-invalid @enderror" type="file" id="pasfoto"
                            name="pasfoto" required>
                        @error('pasfoto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="ktp" class="col-sm-2 col-form-label">KTP</label>

                        <input class="form-control @error('ktp') is-invalid @enderror" type="file" id="ktp" name="ktp"
                            required>
                        @error('ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="row mb-3">
                        <label for="ijazah" class="col-sm-2 col-form-label">Ijazah</label>

                        <input class="form-control @error('ijazah') is-invalid @enderror" type="file" id="ijazah"
                            name="ijazah" required>
                        @error('ijazah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {!! htmlFormSnippet() !!}
                    @error('g-recaptcha-response')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-group">
                        <button class="btn btn-block create-account" type="submit">Register</button>
                    </div>
                </form>
            </main>
        </div>
    </div>

    @include('sb-admin/javascript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {
                $('#provinsi').on('change', function() {
                    let id_provinsi = $('#provinsi').val();

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('getkabupaten') }}',
                        data: {
                            id_provinsi: id_provinsi
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },
                        error: function(data) {
                            console.log('error:', data)
                        }
                    })
                })
                $('#kabupaten').on('change', function() {
                    let id_kabupaten = $('#kabupaten').val();

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('getkecamatan') }}',
                        data: {
                            id_kabupaten: id_kabupaten
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kecamatan').html(msg);
                            $('#desa').html('');
                        },
                        error: function(data) {
                            console.log('error:', data)
                        }
                    })
                })
                $('#kecamatan').on('change', function() {
                    let id_kecamatan = $('#kecamatan').val();

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('getdesa') }}',
                        data: {
                            id_kecamatan: id_kecamatan
                        },
                        cache: false,

                        success: function(msg) {
                            $('#desa').html(msg);
                        },
                        error: function(data) {
                            console.log('error:', data)
                        }
                    })
                })
            })
        });
    </script>
</body>

</html>
