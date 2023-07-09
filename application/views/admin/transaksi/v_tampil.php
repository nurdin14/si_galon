<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4><?= $icon; ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label>ID Product</label>
                                <input type="hidden" name="id_transaksi">
                                <select class="form-control select2" name="id_product">
                                    <?php foreach ($product as $pr) : ?>
                                        <option value="<?= $pr['id_product'] ?>"><?= $pr['id_product'] ?> - <?= $pr['judul'] ?> - <?= $pr['merk'] ?> - <?= $pr['harga'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ID Pelanggan</label>
                                <input type="hidden" name="id_transaksi">
                                <select class="form-control select2" name="id_pelanggan">
                                    <?php foreach ($pelanggan as $pr) : ?>
                                        <option value="<?= $pr['id_pelanggan'] ?>"><?= $pr['id_pelanggan'] ?> - <?= $pr['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ID Petugas</label>
                                <input type="hidden" name="id_transaksi">
                                <select class="form-control select2" name="id_petugas">
                                    <?php foreach ($petugas as $pr) : ?>
                                        <option value="<?= $pr['id_petugas'] ?>"><?= $pr['id_petugas'] ?> - <?= $pr['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="harga">
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" class="form-control" name="jumlah">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="<?= site_url('transaksi/truncate/'); ?>" class="btn btn-icon icon-left btn-success"><i class="fas fa-sync-alt"></i>Truncate</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>ID Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Jumlah Tagihan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $t['id_transaksi'] ?></td>
                                            <td><?= $t['tanggal'] ?></td>
                                            <td><?= $t['jumlah'] ?></td>
                                            <td>Rp.<?= number_format($t['harga'], 0, ',', ','); ?></td>
                                            <td>Rp.<?= number_format($t['harga'] * $t['jumlah'], 0, ',', ','); ?></td>
                                            <td>
                                                <a href="<?= site_url('transaksi/cetak/' . $t['id_transaksi']); ?>" target="_blank"><i class="fas fa-print text-danger"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>