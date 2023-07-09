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
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Galon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" name="id_product">
                                    <input type="text" class="form-control" name="judul">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="merk">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" name="deskripsi"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="harga">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Galon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="gl">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Air</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="air">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tutup</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="tutup">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pembersih</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="pembersih">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Air</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="harga_air">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Tutup</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="harga_tutup">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Pembersih</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="harga_tutup">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Galon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="harga_tutup">
                                </div>
                            </div>
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