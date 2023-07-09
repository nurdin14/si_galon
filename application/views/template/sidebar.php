<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Fresh Qua</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">FQ</a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown active">
                <a href="<?= site_url('Admin/index') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Kelola Data User</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="<?= site_url('Petugas/index') ?>">Petugas</a></li>
                    <li class=""><a class="nav-link" href="<?= site_url('Pelanggan/index') ?>">Pelanggan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="<?= site_url('Product/index') ?>" class="nav-link"><i class="fas fa-tag"></i><span>Kelola Data Product</span></a>
            </li>
            <li class="dropdown">
                <a href="<?= site_url('Transaksi/index') ?>" class="nav-link"><i class="fas fa-credit-card"></i><span>Transaksi</span></a>
            </li>
        </ul>
    </aside>
</div>