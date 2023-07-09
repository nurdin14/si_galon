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
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php foreach ($tampil as $t) : ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Galon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" name="id_product" value="<?= $t['id_product'] ?>">
                                        <input type="text" class="form-control" name="judul" value="<?= $t['judul'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="kode" value="<?= $t['kode'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote-simple" name="deskripsi"><?= $t['deskripsi'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="gl" value="<?= $t['harga'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Galon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="gl" value="<?= $t['gl'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Air</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="air" value="<?= $t['air'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tutup</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="tutup" value="<?= $t['tutup'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pembersih</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="pembersih" value="<?= $t['pembersih'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Air</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="harga_air" value="<?= $t['harga_air'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Tutup</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="harga_tutup" value="<?= $t['harga_tutup'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Pembersih</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="harga_pembrsih" value="<?= $t['harga_pembersih'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Galon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="harga_galon" value="<?= $t['harga_galon'] ?>">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    <a href="<?= site_url('product/index') ?>" class="btn btn-warning">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>