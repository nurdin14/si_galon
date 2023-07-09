<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Data Product</div>
                    <div class="card-body">
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
                                    foreach ($dataOrder as $t): ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $no++; ?>
                                            </td>
                                            <td>
                                                <?= $t['kode']; ?>
                                            </td>
                                            <td>
                                                <?= $t['judul']; ?>
                                            </td>
                                            <td>
                                                <?= $t['deskripsi']; ?>
                                            </td>
                                            <td>
                                                <?= $t['harga']; ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('user/beli/' . $t['id_product']); ?>" class="btn btn-danger">Beli</a>
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