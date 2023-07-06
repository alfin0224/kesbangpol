<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Profil</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/profil')?>">Profil</a></li>
						<li class="breadcrumb-item active">Ubah Profil</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<?php
                		foreach ($profil_user as $pu) { ?>
						<form action="<?= base_url('admin/profil_user/simpan_ubah/'); echo encrypt_url($pu->id_user); ?>" enctype="multipart/form-data" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="username">Username:</label>
										<input type="text" class="form-control" id="username" name="username"
											placeholder="Username" value="<?php echo ($pu->username); ?>" disabled>
									</div>

									<div class="form-group mb-3">
										<label for="file_foto">File Foto</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="foto" id="foto">
												<input type="hidden" name="file_lama" id="file_foto" value="<?php echo ($pu->gambar_profil); ?>">
												<label class="custom-file-label" for="pilih_file_foto"><?php echo ($pu->gambar_profil); ?></label>
											</div>
										</div>
									</div>

									<div class="form-group mb-3">
										<label for="nama">Nama:</label>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
											value="<?php echo ($pu->nama); ?>" required>
									</div>

									<div class="form-group mb-3">
										<label for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email"
											placeholder="Email" value="<?php echo ($pu->email); ?>" required>
									</div>
								</div>
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="telepon">Telepon:</label>
										<input type="text" class="form-control" id="telepon" name="telepon"
											placeholder="Telepon" value="<?php echo ($pu->no_telp); ?>" required>
									</div>


									<div class="form-group mb-3">
										<label for="password">Password:</label>
										<input type="password" class="form-control" id="password" name="password"
											placeholder="Password" value="<?php echo decrypt_pass($pu->password,$pu->username); ?>" required>
									</div>

									<div class="form-group">
										<label>Role</label>
										<select id="role" name="role" class="custom-select" disabled>
											<option><?php echo ($pu->role); ?></option>
											<option>Role 2</option>
											<option>Role 3</option>
											<option>Role 4</option>
											<option>Role 5</option>
										</select>
									</div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Ubah Data</button>
						</form>
						<?php  } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
