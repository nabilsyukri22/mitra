<!doctype html>
<html lang="en">
{{-- @include('sb-admin/head') --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>The Easiest Way to Add Input Masks to Your Forms</title> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ url('vendor/sb-admin/css/form.css') }}" rel="stylesheet">
    {{--  <meta name="csrf-token" content="{{ csrf_token() }}" />  --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
</head>

<body class="text-center">
    {{-- <div class="dropdown">
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-5">

            <main class="registration-form">

                {{-- <span>Domisili :</span>
                <select name="" id="">
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                    <option value="">Kota Padang Panjang</option>
                    <option value="">Luar Kota Padang Panjang</option>
                </select>

                <span>Kecamatan :</span>
                <select name="" id="">
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                    <option value="">Kota Padang Panjang</option>
                    <option value="">Luar Kota Padang Panjang</option>
                </select> --}}

                {{-- {{ $table }} --}}
                <h1 class="mb-3 mt-3 fw-normal">Silahkan Isi Data Diri Anda</h1>
                <form action="/mitra" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-icon">
                        <span><i class="icon icon-user"></i></span>
                    </div>

                    {{-- ---------------------------- --}}

                    {{-- <div class="form-group">
                        <label for="provinsi"> Provinsi </label>
                        <select class="form-control" id="provinsi">
                            <option>Pilih Provinsi...</option>
                            @foreach ($provinces as $provinsi)
                                <option value="{{ $provinsi->id }}"> {{ $provinsi->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kabupaten"> Kabupaten / Kota </label>
                        <select class="form-control" id="kabupaten">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan"> Kecamatan </label>
                        <select class="form-control" id="kecamatan">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desa"> Desa </label>
                        <select class="form-control" id="desa">
                        </select>
                    </div> --}}

                    {{-- ----------------------------- --}}

                    <div class="form-group">
                        <input type="text" name="nama" class="form-control item @error('nama') is-invalid @enderror"
                            id="nama" required value="{{ old('nama') }}" placeholder="Nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="nik" class="form-control item @error('nik') is-invalid @enderror"
                            id="nik" required value="{{ old('nik') }}" placeholder="NIK">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

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

                    {{-- <div class="form-group">

                        <input type="text" name="umur" class="form-control item @error('umur') is-invalid @enderror"
                            id="umur" required value="{{ old('umur') }}" placeholder="Umur">
                        @error('umur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}


                    <div class="form-group">

                        <input type="text" name="domisili"
                            class="form-control item @error('domisili') is-invalid @enderror" id="domisili" required
                            value="{{ old('domisili') }}" placeholder="Domisili">
                        @error('domisili')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">

                        <input type="text" name="kelurahan"
                            class="form-control item @error('kelurahan') is-invalid @enderror" id="kelurahan" required
                            value="{{ old('kelurahan') }}" placeholder="Kelurahan">
                        @error('kelurahan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">

                        <input type="text" name="pendidikan"
                            class="form-control item @error('pendidikan') is-invalid @enderror" id="pendidikan" required
                            value="{{ old('pendidikan') }}" placeholder="Pendidikan">
                        @error('pendidikan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select name="pendidikan" id="pendidikan" class="form-control">
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </div> --}}

                    <div class="form-group">

                        <input type="text" name="nowa" class="form-control item @error('nowa') is-invalid @enderror"
                            id="nowa" required value="{{ old('nowa') }}" placeholder="Nomor WA">
                        @error('nowa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">

                        <input type="text" name="email" class="form-control item @error('email') is-invalid @enderror"
                            id="email" required value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


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


                    <div class="row mb-3">
                        {{-- <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman</label> --}}

                        <input type="text" name="pengalaman"
                            class="form-control item @error('pengalaman') is-invalid @enderror" id="pengalaman" required
                            value="{{ old('pengalaman') }}" placeholder="Pengalaman">
                        @error('pengalaman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    {{-- <div class="form-floating mb-3">
                        <input type="text" name="spek" class="form-control @error('spek') is-invalid @enderror" id="spek" required value="{{ old('spek') }}" placeholder="Spek HP">
                        <label for="spek">Spek</label>
                        @error('spek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}

                    <div class="row mb-3">
                        {{-- <label for="ram" class="col-sm-2 col-form-label">RAM HP</label> --}}

                        <input type="text" name="ram" class="form-control @error('ram') is-invalid @enderror" id="ram"
                            required value="{{ old('ram') }}" placeholder="RAM HP">
                        @error('ram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="row mb-3">
                        {{-- <label for="android" class="col-sm-2 col-form-label">Android</label> --}}

                        <input type="text" name="android" class="form-control @error('android') is-invalid @enderror"
                            id="android" required value="{{ old('android') }}" placeholder="Android">
                        @error('android')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <br>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                    <br><br>

                    <div class="form-check">
                        <p>Status Perkawinan</p>
                        <input class="form-check-input" name="perkawinan" type="radio" value="Menikah" id="menikah"
                            checked>
                        <label for="menikah">Menikah</label><br>
                        <input class="form-check-input" name="perkawinan" type="radio" value="Tidak Menikah"
                            id="tidak_menikah">
                        <label for="tidak_menikah">Tidak Menikah</label>
                    </div>

                    <br>

                    <div class="form-check">
                        <p>Jenis Kelamin</p>
                        <input class="form-check-input" name="jk" type="radio" value="Pria" id="pria" checked>
                        <label for="pria">Pria</label><br>
                        <input class="form-check-input" name="jk" type="radio" value="Wanita" id="wanita">
                        <label for="wanita">Wanita</label>
                    </div>

                    <br>

                    <div class="form-check">
                        <p>Apakah Bisa Menggunakan Zoom?</p>
                        <input class="form-check-input" name="zoom" type="radio" value="Bisa" id="bisa_zoom"
                            checked><label for="zoom">Bisa</label><br>
                        <input class="form-check-input" name="zoom" type="radio" value="Tidak Bisa"
                            id="tidak_bisa_zoom"><label for="tidak_bisa_zoom">Tidak Bisa</label>
                    </div>

                    <br>

                    <div class="form-check">
                        <p>Bisa bawa motor</p><br>
                        <input class="form-check-input" name="motor" type="radio" value="Bisa" id="bisa_motor"
                            checked><label for="menikah">Bisa</label><br>
                        <input class="form-check-input" name="motor" type="radio" value="Tidak Bisa"
                            id="tidak_bisa_motor"><label for="tidak_bisa">Tidak Bisa</label>
                    </div>

                    <br>

                    <div class="form-check">
                        <p>Punya HP</p>
                        <input class="form-check-input" name="hp" type="radio" value="Punya" id="punya_hp"
                            checked><label for="punya_hp">Punya</label><br>
                        <input class="form-check-input" name="hp" type="radio" value="Tidak Punya"
                            id="tidak_punya_hp"><label for="tidak_punya_hp">Tidak Punya</label>
                    </div>

                    <div class="row mb-3">
                        <label for="pasfoto" class="col-sm-2 col-form-label">Pas Foto</label>

                        <input class="form-control @error('pasfoto') is-invalid @enderror" type="file" id="pasfoto"
                            name="pasfoto">
                        @error('pasfoto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="ktp" class="col-sm-2 col-form-label">KTP</label>

                        <input class="form-control @error('ktp') is-invalid @enderror" type="file" id="ktp" name="ktp">
                        @error('ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="row mb-3">
                        <label for="ijazah" class="col-sm-2 col-form-label">Ijazah</label>

                        <input class="form-control @error('ijazah') is-invalid @enderror" type="file" id="ijazah"
                            name="ijazah">
                        @error('ijazah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


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
