<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Pengguna</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/pengguna')?>">Pengguna</a></li>
						<li class="breadcrumb-item active">Tambah Pengguna</li>
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
						<form action="<?= base_url('admin/pengguna/simpan_data_pengguna'); ?>" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-4">
									<!-- <div class="form-group mb-3">
										<label for="foto_pengguna">Foto Pengguna</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="foto_pengguna"
													id="foto_pengguna">
												<label class="custom-file-label" for="pilih_foto_pengguna">Pilih
													File</label>
											</div>
										</div>
									</div> -->

									<div class="form-group mb-3">
										<label for="nama">Nama:</label>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
											value="" required>
									</div>

									<div class="form-group mb-3">
										<label for="username">Username:</label>
										<input type="text" class="form-control" id="username" name="username"
											placeholder="Username" value="" required>
									</div>

									<div class="form-group mb-3">
										<label for="password">Password:</label>
										<input type="password" class="form-control" id="password" name="password"
											placeholder="Password" value="" required>
									</div>
									<!-- <div class="form-group mb-3">
										<label for="nip">NIP:</label>
										<input type="number" class="form-control" id="nip" name="nip" placeholder="NIP"
											value="" required>
									</div> -->
								</div>

								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email"
											placeholder="Email" value="" required>
									</div>

									<div class="form-group mb-3">
										<label for="telepon">Telepon:</label>
										<input type="text" class="form-control" id="telepon" name="telepon"
											placeholder="Telepon" value="" required>
									</div>

									<div class="form-group">
										<label>Role</label>
										<select id="role" name="role" class="custom-select" required>
										<?php foreach ($role as $r) { ?>
												<option value="<?php echo $r->id_role; ?>"><?php echo $r->role; ?></option>
											<?php   } ?>
										</select>
									</div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
