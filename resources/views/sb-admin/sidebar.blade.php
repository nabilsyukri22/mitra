<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <img class="user" src="{{ url('/img/bps.png') }}" height="50px"
            width="50px">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link active" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    {{-- <hr class="sidebar-divider">
    <div class="sidebar-heading">
        User
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/data_user">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data User</span></a>
    </li> --}}


    @if (auth()->user()->isadmin)
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Data User
        </div>
        <li class="nav-item">
            <a class="nav-link" href="/data_user">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data User</span></a>
        </li>
    @endif

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Mitra
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/data_mitra">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Mitra</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Sensus / Survei
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/data_survei">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Survei</span></a>
    </li>

    {{-- <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mitra Statistik</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Daftar Mitra Statistik</a>
                <a class="collapse-item" href="cards.html">Mitra Aktif</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Admin</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Daftar Admin</a>
                <a class="collapse-item" href="utilities-border.html">Admin Aktif</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
