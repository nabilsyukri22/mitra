<!doctype html>
<html lang="en">
    @include('sb-admin/head')
  <body class="text-center">
    <div class="dropdown">
      </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration">

                {{--  {{ $table }}  --}}
                <h1 class="h3 mb-3 mt-3 fw-normal">Silahkan Isi Data Diri Anda</h1>
                <form action="/mitra" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" required value="{{ old('nama') }}" placeholder="Nama">
                          @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" required value="{{ old('nik') }}" placeholder="NIK">
                          @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                          <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" required value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
                          @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                          <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" required value="{{ old('umur') }}" placeholder="Umur">
                          @error('umur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="domisili" class="col-sm-2 col-form-label">Domisili</label>
                        <div class="col-sm-10">
                          <input type="text" name="domisili" class="form-control @error('domisili') is-invalid @enderror" id="domisili" required value="{{ old('domisili') }}" placeholder="Domisili">
                          @error('domisili')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                                    
                    {{--  <div class="form-floating mb-3">
                        <textarea style="height:200px" type="text" rows="4" cols="50" name="domisili" class="form-control @error('domisili') is-invalid @enderror" id="domisili" required value="{{ old('domisili') }}" placeholder="Domisili"></textarea>
                        <label for="domisili">Domisili</label>
                        @error('domisili')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>  --}}
                    
                    <div class="row mb-3">
                        <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                        <div class="col-sm-10">
                          <input type="text" name="kelurahan" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" required value="{{ old('kelurahan') }}" placeholder="Kelurahan">
                          @error('kelurahan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-10">
                          <input type="text" name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" required value="{{ old('pendidikan') }}" placeholder="Pendidikan">
                          @error('pendidikan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="nowa" class="col-sm-2 col-form-label">Nomor WA</label>
                        <div class="col-sm-10">
                          <input type="text" name="nowa" class="form-control @error('nowa') is-invalid @enderror" id="nowa" required value="{{ old('nowa') }}" placeholder="Nomor WA">
                          @error('nowa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                        
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}" placeholder="Email">
                          @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" required value="{{ old('pekerjaan') }}" placeholder="Pekerjaan">
                          @error('pekerjaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman</label>
                        <div class="col-sm-10">
                          <input type="text" name="pengalaman" class="form-control @error('pengalaman') is-invalid @enderror" id="pengalaman" required value="{{ old('pengalaman') }}" placeholder="Pengalaman">
                          @error('pengalaman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
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
                    
                    <div class="row mb-3">
                        <label for="ram" class="col-sm-2 col-form-label">RAM HP</label>
                        <div class="col-sm-10">
                          <input type="text" name="ram" class="form-control @error('ram') is-invalid @enderror" id="ram" required value="{{ old('ram') }}" placeholder="RAM HP">
                          @error('ram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="android" class="col-sm-2 col-form-label">Android</label>
                        <div class="col-sm-10">
                          <input type="text" name="android" class="form-control @error('android') is-invalid @enderror" id="android" required value="{{ old('android') }}" placeholder="Android">
                          @error('android')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    
                    <br>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                    <br><br>

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
                        
                    {{--  <div class="mb-3">
                        <label for="pasfoto" class="form-label">Upload Pas Foto</label>
                        <input class="form-control @error('pasfoto') is-invalid @enderror" type="file" id="pasfoto" name="pasfoto">
                        @error('pasfoto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  --}}

                    <div class="row mb-3">
                        <label for="pasfoto" class="col-sm-2 col-form-label">Pas Foto</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('pasfoto') is-invalid @enderror" type="file" id="pasfoto" name="pasfoto">
                            @error('pasfoto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="ktp" class="col-sm-2 col-form-label">KTP</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('ktp') is-invalid @enderror" type="file" id="ktp" name="ktp">
                            @error('ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="ijazah" class="col-sm-2 col-form-label">Ijazah</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('ijazah') is-invalid @enderror" type="file" id="ijazah" name="ijazah">
                            @error('ijazah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
            </main>
        </div>
    </div>

    @include('sb-admin/javascript')
    
    
</body>
</html>
