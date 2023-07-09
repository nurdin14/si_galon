<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>
                <?= $title; ?>
            </h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Form Order
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pelanggan</label>
                                    <div class="col-sm-12 col-md-7">
                                      <?php foreach ($ambilPelanggan as $p): ?>
                                        <select name="id_pelanggan" class="form-control" readonly="">
                                            <option value="<?= $p['id_pelanggan'] ?>"> <?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <?php foreach($beliPelanggan as $t): ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Galon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" name="id_order">
                                    <input type="hidden" name="id_product" value="<?= $t['id_product'] ?>">
                                        <input type="text" class="form-control" value="<?= $t['judul'] ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="<?= $t['kode'] ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="<?= $t['deskripsi'] ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="harga" value="<?= $t['harga'] ?>" readonly="">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="jumlah">
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                   <a href="<?= site_url('user/order'); ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>