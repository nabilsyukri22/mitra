<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="dropdown">
      </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration">

                {{--  {{ $table }}  --}}

                <h1 class="h3 mb-3 fw-normal">Silahkan Isi Data Diri Anda</h1>
                <form action="/mitra" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" required value="{{ old('nama') }}" placeholder="Nama">
                        <label for="nama">Nama</label>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" required value="{{ old('nik') }}" placeholder="NIK">
                        <label for="nik">NIK</label>
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" required value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">

                    <div class="form-floating mb-3">
                        <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" required value="{{ old('umur') }}" placeholder="Umur">
                        <label for="umur">Umur</label>
                        @error('umur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                                    
                    <div class="form-floating mb-3">
                        <textarea style="height:200px" type="text" rows="4" cols="50" name="domisili" class="form-control @error('domisili') is-invalid @enderror" id="domisili" required value="{{ old('domisili') }}" placeholder="Domisili"></textarea>
                        <label for="domisili">Domisili</label>
                        @error('domisili')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="kelurahan" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" required value="{{ old('kelurahan') }}" placeholder="Kelurahan">
                        <label for="kelurahan">Kelurahan</label>
                        @error('kelurahan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" required value="{{ old('pendidikan') }}" placeholder="Pendidikan">
                        <label for="pendidikan">Pendidikan</label>
                        @error('pendidikan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="nowa" class="form-control @error('nowa') is-invalid @enderror" id="nowa" required value="{{ old('nowa') }}" placeholder="Nomor WA">
                        <label for="nowa">Nomor WA</label>
                        @error('nowa')
                        <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                        
                    <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}" placeholder="Email">
                        <label for="email">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" required value="{{ old('pekerjaan') }}" placeholder="Pekerjaan">
                        <label for="pekerjaan">Pekerjaan</label>
                        @error('pekerjaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="pengalaman" class="form-control @error('pengalaman') is-invalid @enderror" id="pengalaman" required value="{{ old('pengalaman') }}" placeholder="Pengalaman">
                        <label for="pengalaman">Pengalaman</label>
                        @error('pengalaman')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    
                    {{--  <div class="form-floating mb-3">
                        <input type="text" name="spek" class="form-control @error('spek') is-invalid @enderror" id="spek" required value="{{ old('spek') }}" placeholder="Spek HP">
                        <label for="spek">Spek</label>
                        @error('spek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  --}}
                    
                    <p>HP</p>
                    <div class="form-floating mb-3">
                        <input type="text" name="ram" class="form-control @error('ram') is-invalid @enderror" id="ram" required value="{{ old('ram') }}" placeholder="ram HP">
                        <label for="ram">RAM HP</label>
                        @error('ram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="android" class="form-control @error('android') is-invalid @enderror" id="android" required value="{{ old('android') }}" placeholder="android HP">
                        <label for="android">Versi Android</label>
                        @error('android')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-check">
                        <p>Status Perkawinan</p>
                        <input class="form-check-input" name="perkawinan" type="radio" value="Menikah" id="menikah" checked>
                        <label for="menikah">Menikah</label><br>
                        <input class="form-check-input" name="perkawinan" type="radio" value="Tidak Menikah" id="tidak_menikah">
                        <label for="tidak_menikah">Tidak Menikah</label>
                    </div>
                    
                    <br>

                    <div class="form-check">
                        <p>Jenis Kelamin</p>
                        <input class="form-check-input" name="jk" type="radio" value="Pria" id="pria" checked>
                        <label for="pria" >Pria</label><br>
                        <input class="form-check-input" name="jk" type="radio" value="Wanita" id="wanita">
                        <label for="wanita">Wanita</label>
                    </div>

                    <br>

                    <div class="form-check">
                        <p>Apakah Bisa Menggunakan Zoom?</p>
                        <input class="form-check-input" name="zoom" type="radio" value="Bisa" id="bisa_zoom" checked><label for="zoom">Bisa</label><br>
                        <input class="form-check-input" name="zoom" type="radio" value="Tidak Bisa" id="tidak_bisa_zoom"><label for="tidak_bisa_zoom">Tidak Bisa</label>
                    </div>

                    <br>

                    <div class="form-check">
                        <p>Bisa bawa motor</p><br>
                        <input class="form-check-input" name="motor" type="radio" value="Bisa" id="bisa_motor" checked><label for="menikah">Bisa</label><br>
                        <input class="form-check-input" name="motor" type="radio" value="Tidak Bisa" id="tidak_bisa_motor"><label for="tidak_bisa">Tidak Bisa</label> 
                    </div>

                    <br>
                    
                    <div class="form-check">
                        <p>Punya HP</p>
                        <input class="form-check-input" name="hp" type="radio" value="Punya" id="punya_hp" checked><label for="punya_hp">Punya</label><br>
                        <input class="form-check-input" name="hp" type="radio" value="Tidak Punya" id="tidak_punya_hp"><label for="tidak_punya_hp">Tidak Punya</label>
                    </div>
                        
                    <div class="mb-3">
                        <label for="pasfoto" class="form-label">Upload Pas Foto</label>
                        <input class="form-control @error('pasfoto') is-invalid @enderror" type="file" id="pasfoto" name="pasfoto">
                        @error('pasfoto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ktp" class="form-label">Upload KTP</label>
                        <input class="form-control @error('ktp') is-invalid @enderror" type="file" id="ktp" name="ktp">
                        @error('ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="ijazah" class="form-label">Upload Ijazah</label>
                        <input class="form-control @error('ijazah') is-invalid @enderror" type="file" id="ijazah" name="ijazah">
                        @error('ijazah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
            </main>
        </div>
    </div>

    @include('sb-admin/javascript')
    
    
</body>
</html>
