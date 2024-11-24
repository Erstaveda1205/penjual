<div class="kiri">
    <h2>Tambah user</h2>
    <form method="post">
        <input type="text" name="fname" placeholder="Nama Depan">
        <input type="text" name="lname" placeholder="Nama Belakang">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="simpan" value="Simpan">
    </form>
</div>
<div class="kanan">
    <h2>Data User</h2>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Level</td>
            <Td>Action</Td>
        </tr>
        <?php $no = 1;
        foreach ($users as $dusers): ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $dusers->first_name; ?></td>
                <td><?php echo $dusers->email; ?></td>
                <td><?php echo $dusers->level; ?></td>
                <td>
                    <a href="<?php echo base_url() . 'C_users/edit/' . $dusers->id_user; ?>">edit</a> |
                    <a href="<?php echo base_url() . 'C_users/hapus/' . $dusers->id_user; ?>"
                        onclick="return confirm('Apakah ada ingin menghapus data ini?')">hapus</a>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
    </table>
</div>