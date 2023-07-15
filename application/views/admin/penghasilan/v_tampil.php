<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="<?= site_url('penghasilan/addPenghasilan/'); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Data</a>
                            </div>
                            <div class="col-sm-4">
                                <a href="<?= site_url('penghasilan/cetakPenghasilan/'); ?>" class="btn btn-icon icon-left btn-danger" target="__blank"><i class="fas fa-file"></i>Cetak Petugas</a>
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
                                        <th>Tanggal</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['tanggal']; ?></td>
                                            <td>Rp. <?= number_format($t['pemasukan'],0); ?></td>
                                            <td>Rp. <?= number_format($t['pengeluaran'], 0); ?></td>
                                            <td>
                                                <a href="<?= site_url('penghasilan/ubahPenghasilan/' . $t['id_penghasilan']); ?>"><i class="fas fa-edit text-success"></i></a>
                                                <a href="<?= site_url('penghasilan/hapusPenghasilan/' . $t['id_penghasilan']); ?>"><i class="fas fa-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-center"> <h4> Jumlah Pendapatan</h4></td>
                                        <td align="left">
                                            <?php foreach($pendapatan as $p): ?>
                                                <h4>Rp. <?= number_format($p['jumlah_pendapatan'],0) ?></h4>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>