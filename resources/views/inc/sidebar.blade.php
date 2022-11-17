<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ url('/dashboard') }}"><i class="fa fa-fw fa-building"></i>Dashboard<span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/users') }}"><i class="fas fa-address-card"></i>Pengguna</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/rooms') }}"><i class="fas fa-fw fa-bed"></i>Kamar</a>  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/customers') }}"><i class="fas fa-users"></i>Konsumen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}"><i class="fas fa-hand-holding"></i>Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/transactions') }}"><i class="fas fa-dollar-sign"></i>Transaksi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>