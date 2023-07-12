<center>
    <table border="1" cellspacing="0" cellpadding="2">
        <?php foreach($tampil as $t): ?>
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td><?= $t['nama'] ?></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><?= $t['judul'] ?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><?= $t['jumlah'] ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>Rp.<?= number_format($t['harga'],0,',',','); ?></td>
        </tr>
        <tr>
            <td>Jumlah Tagihan</td>
            <td>:</td>
            <td>Rp.<?= number_format($t['harga']* $t['jumlah'],0,',',','); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</center>
<script>
    window.print();
</script>