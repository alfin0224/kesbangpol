<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Kontak</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/kontak')?>">Kontak</a></li>
						<li class="breadcrumb-item active">Ubah Kontak</li>
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
						<?php foreach($kontak as $kontak): ?>
						<form action="<?= base_url('admin/kontak/simpan_ubah/'); echo encrypt_url($kontak->id_kontak);?>" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="alamat_lengkap">Alamat Lengkap:</label>
										<textarea class="form-control" id="alamat_lengkap" rows="4" name="alamat_lengkap"
											placeholder="Alamat Lengkap..."><?php echo $kontak->alamat_lengkap ?></textarea>
									</div>

									<div class="form-group mb-3">
										<label for="code_iframe">Code Iframe Alamat Lengkap:</label>
										<textarea class="form-control" id="code_iframe" rows="4" name="code_iframe"
											placeholder="Code Iframe Alamat Lengkap..."><?php echo $kontak->code_iframe ?></textarea>
									</div>
								</div>

								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email"
											placeholder="Email" value="<?php echo $kontak->email ?>">
									</div>

									<div class="form-group mb-3">
										<label for="telepon">Telepon:</label>
										<input type="text" class="form-control" id="telepon" name="telepon"
											placeholder="Telepon" value="<?php echo $kontak->telepon ?>">
									</div>

									<div class="form-group mb-3">
										<label for="jam_kerja">Jam Kerja:</label>
										<input type="text" class="form-control" id="jam_kerja" name="jam_kerja"
											placeholder="Jam Kerja" value="<?php echo $kontak->jam_kerja ?>">
									</div>
								</div>

								<div class="form-group col-md-4">
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Ubah Data</button>
						</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
