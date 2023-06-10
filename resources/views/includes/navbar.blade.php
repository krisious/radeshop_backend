<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('dashboard')}}"><img src={{ url('images/logo-rade/ritem.png') }} alt="Logo"  /></a>
            <a class="navbar-brand hidden" href="{{route('dashboard')}}"><img src={{ url('images/logo-rade/rade-icon.png') }} alt="Logo" /></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src={{ url("images/admin.jpg") }} alt="User Avatar" />
                </a>

                <div class="user-menu dropdown-menu">
                    {{-- <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a> --}}
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-warning" type="submit">Logout</button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /#header -->