<center>
    <table border="1" cellspacing="0" cellpadding="2">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>Judul</th>
                <th>Type</th>
                <th>Foto</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($tampil as $t) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $t['judul']; ?></td>
                    <td><?= $t['merk']; ?></td>
                    <td><img src="<?= base_url() ?>assets/img/product/<?= $t['foto']; ?>" width="90"></td>
                    <td><?= $t['deskripsi']; ?></td>
                    <td><?= $t['harga']; ?></td>
                    <td><?= $t['stok']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</center>
<script>
    window.print();
</script>