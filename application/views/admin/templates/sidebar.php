<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?= $_SESSION['nama_user'] ?></a>
        </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?= base_url('admin/dashboard')?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Beranda
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-images"></i>
                    <p>
                        Konten
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/konten/aktifitas')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Konten Galeri Aktifitas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/konten/rumah')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Konten Galeri Rumah</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Data Master
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/kategori')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/tim')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tim</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/unit')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Unit</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/konten/fasilitas')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Konten Fasilitas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/konten/keterangan')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Konten Keterangan </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/konten/aksebilitas')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Konten Aksebilitas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/konten/spesifikasi')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Konten Spesifikasi</p>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>