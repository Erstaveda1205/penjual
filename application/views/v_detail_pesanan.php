<div class="layout-wrapper layout-content-navbar  ">
	<div class="layout-container">


		<!-- Content wrapper -->
		<div class="content-wrapper">

			<!-- Content -->

			<div class="container-xxl flex-grow-1 container-p-y">


				<div
					class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 gap-3">

					<div class="d-flex flex-column justify-content-center">
						<div class="d-flex align-items-center mb-1">
							<h5 class="mb-0">Kode Penjualan: <?php echo $kode_jual; ?></h5>
							<span class="badge bg-label-success me-2 ms-2 rounded-pill">Paid</span>
							<span class="badge bg-label-info rounded-pill">Ready to Pickup</span>
						</div>
					</div>
					<div class="d-flex align-content-center flex-wrap gap-2">
						<button class="btn btn-outline-danger delete-order">Delete Order</button>
					</div>
				</div>

				<!-- Order Details Table -->

				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="card mb-6">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h5 class="card-title m-0">Order details</h5>
								<h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6>
							</div>
							<div class="card-datatable table-responsive">
								<table class="datatables-order-details table">
									<thead>
										<tr>
											<th>No</th>
											<th>Produk</th>
											<th class="w-50">Harga</th>
											<th>Jumlah</th>
											<th>Total</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1;
										foreach ($detail_beli as $beli): ?>
											<tr>
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
											<strong>Total:
												Rp.<?php echo number_format($sub_total->total ?? 0); ?></strong>
										</h6>
									</div>
								</div>
								<button type="submit" class="btn btn-primary waves-effect waves-light">
									<a href="<?php echo base_url() . 'C_detail_pesanan/cekout/' . $sub_total->total; ?>"
										class="text-white">Check Out</a>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
