<div class="content-wrapper">

	<div class="container mt-4">
		<div class="row">
			<!-- Kolom Kiri -->
			<div class="col-md-6 kiri">
				<form action="<?php echo base_url() . 'C_laporan/post_laporan'; ?>" method="post">
					<div class="card">
						<h5 class="card-header">Laporan Penjualan</h5>
						<div class="card-body demo-vertical-spacing demo-only-element">
							<p>Masukkan Tanggal Awal Buat Laporan : </p> <br>
							<input type="date" class="form-control" name="awal" required>
							<p>Masukkan Tanggal Akhir Buat Laporan : </p> <br>
							<input type="date" class="form-control" name="akhir" required>
							<input type="submit" class="btn btn-primary waves-effect waves-light" name="kirim"
								values="Buat Laporan"></input>
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-6 kanan">
				<div class="card-datatable table-responsive pt-0">
					<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
						<div class="card-header flex-column flex-md-row">
							<div class="dt-action-buttons text-end pt-3 pt-md-0">
								<div class="dt-buttons btn-group flex-wrap">
								</div>
							</div>
							<hr class="my-0">
							<div class="row">
								<?php if ($_POST) { ?>
									<h1>Hasil Laporan Penjualan</h1>
									<p>Awal tanggal : <?php echo $this->input->post('awal'); ?></p>
									<p>Akhir tanggal : <?php echo $this->input->post('akhir'); ?></p>
									<table
										class="datatables-basic table table-bordered dataTable no-footer dtr-column collapsed"
										id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
										style="width: 958px;">
										<thead>
											<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
												colspan="1" style="width: 263px;"
												aria-label="Name: activate to sort column ascending">No</th>
											<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
												colspan="1" style="width: 250px;"
												aria-label="Email: activate to sort column ascending">tanggal Penjualan</th>
											<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
												colspan="1" style="width: 83px;"
												aria-label="Date: activate to sort column ascending">Sub Total</th>
											</tr>
										</thead>
										<?php $no = 1;
										foreach ($laporan as $value): ?>
											<tr class="odd">
												<td class="control" tabindex="0" style=""><?php echo $no; ?></td>
												<td><?php echo $value->tanggal_jual; ?></td>
												<td>Rp.<?php echo number_format($value->sub_total); ?></td>
												<?php $no++; endforeach; ?>
										</tr>
										<tr>
											<td colspan="2">Total Pendapatan :</td>
											<td>Rp.<?php echo number_format($total->total); ?></td>
										</tr>
										<div style="width: 1%;"></div>
										<div style="width: 1%;"></div>
										</tbody>
									</table>
								<?php } else { ?>
									<h2>Laporan belum dibuat!</h2>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
