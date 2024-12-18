<div class="row">
	<div class="col-12 col-lg-8">
		<div class="card mb-8">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="card-title m-0">Kerajang Belanjaan</h5>
				<h6>Kode Penjualan: <?php echo $kode_jual; ?></h6>
			</div>
			<div class="card-datatable table-responsive">
				<table class="datatables-order-details table dataTable no-footer">
					<thead>
						<tr>
							<th>No</th>
							<th>Produk</th>
							<th>Harga</th>
							<th>Qty</th>
							<th>Total</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($detail_beli as $beli): ?>
							<tr class="odd">
								<td><?php echo $no; ?></td>
								<td><?php echo $beli->nama_produk; ?></td>
								<td>Rp.<?php echo number_format($beli->harga_satuan); ?></td>
								<td><?php echo $beli->jumlah_beli; ?></td>
								<td>Rp.<?php echo number_format($beli->total_harga); ?></td>
								<td><a
										href="<?php echo base_url() . 'C_penjualan/hapus/' . $kode_jual . '-' . $beli->id_produk; ?>">Hapus</a>
								</td>
							</tr>
							<?php $no++; endforeach; ?>
					</tbody>
				</table>
				<div class="d-flex justify-content-end align-items-center m-4 p-1">
					<div class="order-calculations">
						<h6 class="mb-0">
							<strong>Total: Rp.<?php echo number_format($sub_total->total ?? 0); ?></strong>
						</h6>
					</div>
				</div>
				<button type="submit" class="btn btn-primary waves-effect waves-light">
					<a href="<?php echo base_url() . 'C_penjualan/detail/' . $sub_total->total; ?>"
						class="text-white">Check Out</a>
				</button>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0">Produk</h5>
		<div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
			<div class="col-md-4 product_status"></div>
			<div class="col-md-4 product_category"></div>
			<div class="col-md-4 product_stock"></div>
		</div>
	</div>
	<div class="card-datatable table-responsive">
		<table class="datatables-products table dataTable no-footer dtr-column" id="DataTables_Table_0">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga Satuan</th>
					<th>Stok</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($produk as $dproduk): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $dproduk->nama_produk; ?></td>
						<td>Rp.<?php echo number_format($dproduk->harga_satuan); ?></td>
						<td><?php echo $dproduk->stok; ?></td>
						<td><span class="badge rounded-pill bg-label-success me-1">Ada</span></td>
						<td><a href="<?php echo base_url() . 'C_penjualan/beli/' . $dproduk->id_produk; ?>">Beli</a>
						</td>
					</tr>
					<?php $no++; endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
