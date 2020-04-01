<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{-- {{ Auth::user()->petugas->nama_petugas }} --}}
                Admin
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="javascript:void(0)" class="dropdown-item" id="logout">
                    <i class="fa fa-sign-out mr-2"></i> Logout
                </a>

                <form method="POST" action="{{ route('logout') }}" id="form-logout" class="dropdown-item">
                    @csrf
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
