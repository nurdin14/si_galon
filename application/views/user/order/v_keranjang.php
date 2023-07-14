<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Keranjang Belanja</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>ID Order</th>
                                        <th>ID Product</th>
                                        <th>ID Pelanggan</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($keranjang as $t): ?>
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
                                                <a href="<?= site_url('user/checkout/' . $t['id_order']); ?>" class="btn btn-info">Check Out</a>
                                                <a href="<?= site_url('user/sofDelete/' . $t['id_order']); ?>" class="btn btn-danger">Hapus</a>
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