<!DOCTYPE html>
<html lang="en">

{{--  head  --}}
@include('sb-admin/head')

<body id="page-top">

    <div id="wrapper">

        {{--  Sidebar  --}}
        @include('sb-admin/sidebar')

        {{--  Content Wrapper  --}}
        <div id="content-wrapper" class="d-flex flex-column">

            {{--  Main Content  --}}
            <div id="content">

                {{--  Topbar  --}}
                @include('sb-admin/topbar')

                {{--  Begin Page Content  --}}
                <div class="container-fluid">

                    {{--  Page Heading  --}}

                    <h4>Tambah Mitra</h4>
                    <table id="data_mitra">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nomor WA</th>
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
                                <td>{{ $item['nowa'] }}</td>
                                <td>
                                  <a href="/detail_mitra/{{ $item['id'] }}" class="btn btn-sm btn-primary"><i class="fa fa-info"></i></a>
                                  <form action="/data_mitra/delete/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin?')">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                      <i class="fa fa-trash"></i>
                                    </button>
                                  </form>
                                </td>
                              </tr>
                              @endforeach
                        </tbody>
                      </table>
                    
                    {{--  <a href="{{ route('') }}"></a>  --}}

                </div>

            </div>

            {{--  Footer  --}}
            @include('sb-admin/footer')

        </div>

    </div>

    {{--  Scroll to Top Button  --}}
    @include('sb-admin/button-topbar')

    <!-- Logout Modal-->
    @include('sb-admin/logout-modal')

    {{--  JS  --}}
    @include('sb-admin/javascript')
    <script>
        $(document).ready( function () {
          $('#data_mitra').DataTable();
        } );
    </script>
</body>

</html>