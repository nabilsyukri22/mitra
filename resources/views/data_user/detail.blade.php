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
                <div class="container-fluid rounded-3 ">

                    {{--  Page Heading  --}}

                    <h4 class="ml-3">Detail</h4>
                    <div class="p-4 m-3 border bg-white">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <td scope="col">{{ $user->name }}</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Email</th>
                                <td>{{ $user->email }}</td>
                              </tr>
                            </tbody>
                          </table>
                    
                    </div>
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

</body>

</html>