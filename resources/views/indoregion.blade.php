<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-md-6 m-auto">
            <div class="card p-4 mt-4">
                <form action="/indoregion" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
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
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

<footer>
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
</footer>

</html>
