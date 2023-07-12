<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Data Pelanggan</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <?php foreach ($tampil as $b): ?>
                                <tr>
                                    <td>Nama Anda:</td>
                                    <td>:</td>
                                    <td>
                                        <?= $b['nama'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No.Hp</td>
                                    <td>:</td>
                                    <td>
                                        <?= $b['no_hp'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>
                                        <?= $b['alamat'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pesanan Anda</td>
                                    <td>:</td>
                                    <td>
                                        <?= $b['judul'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>
                                        <?= $b['deskripsi'] ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php foreach($Edit as $t): ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Order</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" readonly="" class="form-control" name="id_order" value="<?= $t['id_order'] ?>"> 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Product</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" readonly="" class="form-control" name="id_product" value="<?= $t['id_product'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Pelanggan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" readonly="" class="form-control" name="id_pelanggan" value="<?= $t['id_pelanggan'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="jumlah" value="<?= $t['jumlah'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="harga" value="<?= $t['harga'] ?>">
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    <a href="<?= site_url('pesanan/index') ?>" class="btn btn-warning">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>