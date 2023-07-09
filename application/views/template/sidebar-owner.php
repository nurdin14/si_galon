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
                <a href="<?= site_url('Owner/index') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-contract"></i><span>Data Laporan</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="<?= site_url('Owner/laporan_stok') ?>">Laporan Stok</a></li>
                    <li class=""><a class="nav-link" href="<?= site_url('Owner/laporan_jual') ?>">Laporan Penjualan</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>