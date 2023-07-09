<center>
    <table border="1" cellspacing="0" cellpadding="2">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($tampil as $t) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                   <td><?= $t['kode']; ?>
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
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</center>
<script>
    window.print();
</script>