<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?= $icon; ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php foreach($tampil as $t): ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Order</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" name="id_transaksi" value="<?= $t['id_transaksi'] ?>">
                                    <input type="number" readonly="" class="form-control" name="id_order" value="<?= $t['id_order'] ?>"> 
                                </div>
                            </div>
                           <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="jumlah" value="<?= $t['jumlah'] ?>" readonly="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="harga" value="<?= $t['harga'] ?>" readonly="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Metode Bayar</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" readonly="" name="metode_bayar" value="<?= $t['metode_bayar'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" readonly="" name="tanggal" value="<?= $t['tanggal'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Petugas</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control select2" name="id_petugas">
                                    <?php foreach ($petugas as $pr): ?>
                                        <option value="<?= $pr['id_petugas'] ?>"><?= $pr['nama'] ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    <a href="<?= site_url('transaksi/index') ?>" class="btn btn-warning">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>