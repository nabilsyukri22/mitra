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

                    <table id="data_mitra">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Rating</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($mitra as $item)
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item->penilaians->avg('nilai') }}</td>
                                    <td>
                                        <a href="/detail_mitra/{{ $item['id'] }}" class="btn btn-sm btn-primary"><i
                                                class="fa fa-info"></i></a>
                                        @if (auth()->user()->isadmin == true)
                                            <form action="/data_mitra/delete/{{ $item->id }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Yakin?')">
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
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
            $('#data_mitra').DataTable();
        });
    </script>
</body>

</html>
