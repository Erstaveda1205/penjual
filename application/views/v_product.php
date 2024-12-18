<div class="container mt-4">
    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-md-4 kiri">
            <form method="post">
                <div class="card">
                    <h5 class="card-header">Tambah Produk</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="nama produk" name="nama_produk">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="harga produk" name="harga">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="stok barang" name="stok">
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="kirim"
                            values="Simpan">Simpan</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Kolom Kanan -->
        <div class="col-md-8 kanan">
            <div class="card">
                <h5 class="card-header">Data Produk</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>Stok Produk</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php if (!empty($produk)) {
                            $no = 1;
                            foreach ($produk as $dproduk): ?>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $dproduk->nama_produk; ?></td>
                                        <td>Rp.<?php echo number_format($dproduk->harga_satuan); ?></td>
                                        <td><?php echo $dproduk->stok; ?></td>
                                        <td><span class="badge rounded-pill bg-label-success me-1">Ada</span></td>
                                        <td> <a
                                                href="<?php echo base_url() . 'C_product/edit/' . $dproduk->id_produk; ?>">Edit</a>
                                            |
                                            <a href="<?php echo base_url() . 'C_product/hapus/' . $dproduk->id_produk; ?>"
                                                onclick="return confirm('Apakah ada ingin menghapus data ini?')"> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++; endforeach;
                        } else { ?>
                                <tr>
                                    <td colspan="5">Data Tidak ditemukan</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
