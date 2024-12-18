<div class="row mt-4">
	<!-- Kolom Kiri -->
	<div class="col-md-4 kiri">
		<form method="post">
			<div class="card">
				<h5 class="card-header">Tambah User</h5>
				<div class="card-body">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="First Name" name="fname">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Last Name" name="lname">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Email" name="email">
						<span class="input-group-text">@gmail.com</span>
					</div>
					<div class="form-password-toggle mb-3">
						<label class="form-label" for="password">Password</label>
						<div class="input-group">
							<input type="password" class="form-control" id="password" placeholder="••••••••"
								name="password">
							<span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Kolom Kanan -->
	<div class="col-md-8 kanan">
		<div class="card">
			<h5 class="card-header">Data User</h5>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Level</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<!-- PHP Loop -->
							<?php $no = 1;
							foreach ($users as $dusers): ?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $dusers->first_name; ?></td>
									<td><?= $dusers->email; ?></td>
									<td><?= $dusers->level; ?></td>
									<td><span class="badge bg-label-success rounded-pill">Active</span></td>
									<td>
										<a href="<?= base_url() . 'C_users/edit/' . $dusers->id_user; ?>">Edit</a> |
										<a href="<?= base_url() . 'C_users/hapus/' . $dusers->id_user; ?>"
											onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
