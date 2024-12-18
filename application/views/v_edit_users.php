<div class="container mt-4">
    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-md-6 kiri">
            <form method="post">
                <div class="card">
                    <h5 class="card-header">Edit User</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="first name" name="fname"
                                value="<?php echo $edit->first_name; ?>">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="last name"
                                name="lname" value="<?php echo $edit->last_name; ?>">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="email"
                                name="email" value="<?php echo $edit->email; ?>">
                            <span class="input-group-text">@gmail.com</span>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password42">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <input type="hidden" name="password_lama" value="<?php echo $edit->password; ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="kirim"
                            values="Simpan">Simpan</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Kolom Kanan -->
        <div class="col-md-6 kanan">
            <div class="card">
                <h5 class="card-header">Data User</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($users as $dusers): ?>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $dusers->first_name; ?></td>
                                    <td><?php echo $dusers->email; ?></td>
                                    <td><?php echo $dusers->level; ?></td>
                                    <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-line"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item waves-effect"
                                                    href="<?php echo base_url() . 'C_users/edit/' . $dusers->id_user; ?>">
                                                    <i class="ri-pencil-line me-1"></i> Edit
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="<?php echo base_url() . 'C_users/hapus/' . $dusers->id_user; ?>">
                                                    <i class="ri-delete-bin-6-line me-1"
                                                        onclick="return confirm('Apakah ada ingin menghapus data ini?')"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>