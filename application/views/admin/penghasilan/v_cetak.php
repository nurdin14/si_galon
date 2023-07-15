<center>
    <table border="1" cellspacing="0" cellpadding="2">
        <thead>
            <tr>
                <th>
                    No
                </th>
                 <th>Tanggal</th>
                 <th>Pemasukan</th>
                 <th>Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($tampil as $t) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                   <td><?= $t['tanggal']; ?>
                    </td>
                    <td>Rp.
                        <?= number_format($t['pemasukan'], 0); ?>
                    </td>
                    <td>Rp.
                        <?= number_format($t['pengeluaran'], 0); ?>
                    </td>
                    </tr>
            <?php endforeach; ?>
        </tbody>
        <tbody>
            <tr>
             <td colspan="3" class="text-center"> <h4> Jumlah Pendapatan</h4></td>
             <td align="left">
               <?php foreach ($pendapatan as $p): ?>
                        <h4>Rp.
                            <?= number_format($p['jumlah_pendapatan'], 0) ?>
                        </h4>
                    <?php endforeach; ?>
                </td>
            </tr>
        </tbody>
    </table>
</center>
<script>
    window.print();
</script>