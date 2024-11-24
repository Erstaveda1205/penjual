<div class="kiri">
    <h1>Laporan</h1>
    <form action="<?php echo base_url() . 'C_laporan/post_laporan'; ?>" method="post">
        <p>Masukan Tanggal Awal Buat Laporan:</p>
        <input type="date" name="awal" required>
        <p>Masukan Tanggal Akhir Buat Laporan:</p>
        <input type="date" name="akhir" required>
        <input type="submit" name="kirim" value="Buat Laporan">
    </form>
</div>


<div class="kanan">
    <?php if ($_POST) { ?>
        <h1>Hasil Laporan Penjualan</h1>
        <p>Awal tanggal : <?php echo $this->input->post('awal'); ?></p>
        <p>Akhir tanggal : <?php echo $this->input->post('akhir'); ?></p>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Tanggal Penjualan</td>
                <td>Pendapatan</td>
            </tr>
            <?php $no = 1;
            foreach ($laporan as $value): ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $value->tanggal_jual; ?></td>
                    <td>Rp.<?php echo number_format($value->sub_total); ?></td>
                </tr>
                <?php $no++; endforeach; ?>

            <tr>
                <td colspan="2">Total Pendapatan :</td>
                <td>Rp.<?php echo number_format( $total->total); ?></td>
            </tr>
        </table>
    <?php } else { ?>
        <h2>Laporan belum dibuat!</h2>
    <?php } ?>
</div>