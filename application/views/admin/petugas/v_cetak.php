<center>
    <table border="1" cellspacing="0" cellpadding="2">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>Nama Petugas</th>
                <th>Umur</th>
                <th>No.Telpon</th>
                <th>Alamat</th>
                <th>Level</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($tampil as $t) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $t['nama']; ?></td>
                    <td><?= $t['umur']; ?></td>
                    <td><?= $t['no_hp']; ?></td>
                    <td><?= $t['alamat']; ?></td>
                    <td><?= $t['level']; ?></td>
                    <td><?= $t['username']; ?></td>
                    <td><?= $t['password']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</center>
<script>
    window.print();
</script>