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
                                    <th class="text-center">
                                            #
                                    </th>
                                    <th>ID Order</th>
                                    <th>ID Product</th>
                                    <th>ID Pelanggan</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                         <tr>
                                            <td class="text-center">
                                                <?= $no++; ?>
                                                </td>
                                                <td>
                                                    <?= $t['id_order']; ?>
                                                </td>
                                                <td>
                                                    <?= $t['id_product']; ?>
                                                </td>
                                                <td>
                                                    <?= $t['id_pelanggan']; ?>
                                                </td>
                                                <td>
                                                    <?= $t['jumlah']; ?>
                                                </td>
                                                <td>
                                                    <?= $t['harga']; ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if($t['status'] == "Dipesan") {
                                                            echo $t['status'];
                                                        } else {
                                                            echo $t['status'];
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?= site_url('pesanan/v_edit/' . $t['id_order']); ?>" class="btn btn-info">Edit</a>
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