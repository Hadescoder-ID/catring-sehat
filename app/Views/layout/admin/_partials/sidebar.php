<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('page/dashboard'); ?>" class="brand-link">
        <span class="brand-text font-weight-light">Cathting Sehat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <!-- nama admin -->
                <a href="#" class="d-block"> </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="<?= base_url('page/dashboard') ?>" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data Makanan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="makanan/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu Makanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="makanan/jenis" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Makanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="makanan/bahan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bahan Makanan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Pelanggan
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('page/pelanggan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pelanggan/transaksi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('page/pegawai') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pegawai

                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>