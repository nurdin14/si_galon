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
                                <a href="<?= site_url('pelanggan/addPelanggan/'); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Pelanggan</a>
                            </div>
                            <div class="col-sm-4">
                                <a href="<?= site_url('pelanggan/cetakPelanggan/'); ?>" class="btn btn-icon icon-left btn-danger" target="__blank"><i class="fas fa-file"></i>Cetak Pelanggan</a>
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
                                        <th>Nama Pelanggan</th>
                                        <th>No.Telpon</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['nama']; ?></td>
                                            <td><?= $t['no_hp']; ?></td>
                                            <td><?= $t['alamat']; ?></td>
                                            <td>
                                                <a href="<?= site_url('pelanggan/ubahPelanggan/' . $t['id_pelanggan']); ?>"><i class="fas fa-edit text-success"></i></a>
                                                <a href="<?= site_url('pelanggan/hapusPelanggan/' . $t['id_pelanggan']); ?>"><i class="fas fa-trash text-danger"></i></a>
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