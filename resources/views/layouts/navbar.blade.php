<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="white">
        <a href="/" class="logo">
            <i class="fas fa-cogs" style="font-size: 1.8rem; color: #2a9d8f; margin-left: 15px; vertical-align: middle;"></i>
            <span class="navbar-brand" style="font-weight: bold; color: #264653; margin-left: 8px; font-size: 1.2rem; vertical-align: middle;">AMP System</span>
            {{-- <img src="../assets/img/logo-AMP.jpg" alt="navbar brand" class="navbar-brand"> --}}
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more">
            <i class="icon-options-vertical"></i>
        </button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-primary">PT ARDINA MULYA PERKASA</a>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <span class="profile-username">
                            @auth
                                @if (Auth::user()->role == 'Admin')
                                    <span class="mr-3">Admin</span>
                                @elseif(Auth::user()->role == 'Pimpinan')
                                    <span class="mr-3">Pimpinan</span>
                                @else
                                    <span class="mr-3">{{ Auth::user()->name }}</span>
                                @endif
                            @endauth
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit"
                                        style="width: 100%; text-align: left;">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
