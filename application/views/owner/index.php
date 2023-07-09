<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Petugas</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($countPetugas as $tot) : ?>
                                <?= $tot['total_petugas'] ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pelanggan</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($countPelanggan as $tot) : ?>
                                <?= $tot['total_pelanggan'] ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Penjualan</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($sumTransaksi as $tot) : ?>
                                <?= $tot['total'] ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Product</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($countBarang as $tot) : ?>
                                <?= $tot['total_barang'] ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>