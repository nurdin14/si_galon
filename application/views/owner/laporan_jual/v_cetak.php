<center>
    <table style="width: 75%;" border="1" cellspacing="0" cellpadding="2">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Jumlah Penjualan</th>
            <th>Harga</th>
        </tr>
        <?php $no = 1;
        foreach ($tampil as $t) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $t['tanggal']; ?></td>
                <td><?= $t['judul']; ?></td>
                <td><?= $t['jumlah']; ?></td>
                <td>Rp.<?= number_format($t['harga'], 0, ',', ',') ?></td>
                <td>Rp.<?= number_format($hasil = $t['harga']*$t['jumlah'], 0, ',', ',') ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</center>
<script>
    window.print();
</script>