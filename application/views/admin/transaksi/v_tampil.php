<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        
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
                                        <th>Status</th>
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
                                                <?php
                                                    if($t['id_petugas'] == 0) {
                                                        echo "Belum Dikirim";
                                                    } else {
                                                        echo "Sudah Dikirim";
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('transaksi/edit/' . $t['id_transaksi']); ?>" class="btn btn-info">Edit</a>
                                                <a href="<?= site_url('transaksi/cetak/' . $t['id_order']); ?>" target="_blank" class="btn btn-danger">Cetak</a>
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