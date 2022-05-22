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
                <div class="container-fluid">

                    {{-- Page Heading --}}

                    <a href="/data_survei/survei" class="btn btn-primary mb-5">Buat Survei / Sensus Baru</a>

                    <table id="data_survei">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kebutuhan</th>
                                <th>Tanggal Dimulai</th>
                                <th>Tanggal Berakhir</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($survei as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kebutuhan }}</td>
                                    <td>{{ $item->tgl_mulai }}</td>
                                    <td>{{ $item->tgl_akhir }}</td>
                                    <td>
                                        <a href="/detail_survei/{{ $item['id'] }}" class="btn btn-sm btn-primary"><i
                                                class="fa fa-info"></i></a>
                                        {{-- <form action="/data_survei/delete/{{ $item->id }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin?')">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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

    <script>
        $(document).ready(function() {
            $('#data_survei').DataTable();
        });
    </script>
</body>

</html>
