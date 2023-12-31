<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <?php echo $this->session->flashdata('pesan'); ?>
                                <form action="<?php echo base_url('login/authLogin'); ?>" method="post" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input id="email" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Masukan Username
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="<?= base_url('login/lupaPassword') ?>" class="text-small">
                                                    Lupa Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            Masukan Password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Belum Mempunyai Akun? <a href="<?= base_url('login/register') ?>">Buat Akun</a>
                        </div>
                    </div>