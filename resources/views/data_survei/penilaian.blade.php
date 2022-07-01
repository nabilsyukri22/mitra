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

                    {{-- <h4 class="ml-3">Penilaian</h4> --}}

                    <div class="p-4 m-3 border bg-white">
                        <form action="/data_survei/penilaian" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kriteria</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    <input name="id_mitra_surveis" type="text" hidden
                                        value="{{ $id_mitra_surveis }}">
                                    @foreach ($kriteria as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td scope="col">{{ $item->nama }}</td>
                                            <td scope="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="kriteria_{{ $item->id }}" id="inlineRadio1"
                                                        value="1">
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="kriteria_{{ $item->id }}" id="inlineRadio2"
                                                        value="2">
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="kriteria_{{ $item->id }}" id="inlineRadio2"
                                                        value="3">
                                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="kriteria_{{ $item->id }}" id="inlineRadio2"
                                                        value="4">
                                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="kriteria_{{ $item->id }}" id="inlineRadio2"
                                                        value="5">
                                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
                {{-- <a href="{{ route('') }}"></a> --}}

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
    {{-- @livewireScripts --}}

    <script>
        $(document).ready(function() {
            $('#data_survei').DataTable();
        });
    </script>

</body>

</html>
