<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">

                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Petugas</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="hidden" name="id_petugas">
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No.Telpon</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="no_hp">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" class="form-control" name="umur">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Level</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select name="level" class="select1 form-control">
                                                <option value="Admin">Petugas</option>
                                                <option value="Owner">Pemilik</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote-simple" cols="30" rows="10" name="alamat"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                            <a href="<?= site_url('petugas/index') ?>" class="btn btn-warning">Batal</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="mt-5 text-muted text-center">
                                    Sudah Mempunyai Akun? <a href="<?= base_url('login/index') ?>">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>