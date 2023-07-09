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
                                <a href="<?= site_url('product/add/'); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Product</a>
                            </div>
                            <div class="col-sm-4">
                                <a href="<?= site_url('product/cetak/'); ?>" class="btn btn-icon icon-left btn-danger" target="__blank"><i class="fas fa-file"></i>Cetak Product</a>
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
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['kode']; ?></td>
                                            <td><?= $t['judul']; ?></td>
                                            <td><?= $t['deskripsi']; ?></td>
                                            <td><?= $t['harga']; ?></td>
                                            <td>
                                                <a href="<?= site_url('product/ubah/' . $t['id_product']); ?>"><i class="fas fa-edit text-success"></i></a>
                                                <a href="<?= site_url('product/hapus/' . $t['id_product']); ?>"><i class="fas fa-trash text-danger"></i></a>
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