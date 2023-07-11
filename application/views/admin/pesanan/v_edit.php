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
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pelanggan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" name="id_pelanggan" value="<?= $t['id_pelanggan'] ?>">
                                    <input type="text" class="form-control" name="nama" value="<?= $t['nama'] ?>"> 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No.Telpon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="no_hp" value="<?= $t['no_hp'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" name="alamat"><?= $t['alamat'] ?></textarea>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    <a href="<?= site_url('pelanggan/index') ?>" class="btn btn-warning">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>