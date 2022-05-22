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
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

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

</body>

</html>
