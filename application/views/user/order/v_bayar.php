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
                            Form Pembayaran
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('user/prosesCekout') ?>" method="post">
                            <?php foreach($Checkout as $t): ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Order</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" name="id_transaksi">
                                    <input type="hidden" name="id_petugas" value="-">
                                        <input type="text" class="form-control" name="id_order" value="<?= $t['id_order'] ?>" readonly="">
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Total</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="Rp. <?= number_format($t['harga'] * $t['jumlah'],0,',',',') ?>" readonly="">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="tanggal" value="<?= date('d-m-y') ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        ========= Silahkan Lakukan Pembayaran =========
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Metode Pembayaran</label>
                                    <div class="col-sm-12 col-md-7">
                                         <select class="form-control" id="paymentMethod" name="metode_bayar" onchange="showForm()">
                                            <option value="">-- Pilih metode pembayaran --</option>
                                            <option value="Transfer">Transfer</option>
                                            <option value="Cod">COD</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group row mb-4">
                                    <label  id="bankText" style="display:none;" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomer Rekening</label>
                                    <div class="col-sm-12 col-md-7" id="transferForm" style="display:none;">
                                        <input type="text" class="form-control" value="BNI : XXX" readonly="">
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                   <a href="<?= site_url('user/keranjang'); ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>