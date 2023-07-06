<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Struktur Organisasi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a
								href="<?= base_url('/admin/profil/struktur-organisasi')?>">Struktur Organisasi</a></li>
						<li class="breadcrumb-item active">Ubah Struktur Organisasi</li>
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
						<?php foreach ($strukorgan as $so): ?>
							<form action="<?= base_url('admin/profil/struktur-organisasi/simpan_ubah/'); echo encrypt_url($so->id_struktur);?>" enctype="multipart/form-data" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="foto">Foto</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="foto" id="foto">
												<input type="hidden" name="file_lama" value="<?php echo $so->foto; ?>">
												<label class="custom-file-label" for="pilih_foto"><?php echo $so->foto; ?></label>
											</div>
										</div>
									</div>

									<div class="form-group mb-3">
										<label for="nama">Nama:</label>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
											value="<?php echo $so->nama_pejabat ?>" required>
									</div>

									<div class="form-group mb-3">
										<label for="nip">NIP:</label>
										<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP"
											value="<?php echo $so->nip ?>" required>
									</div>

									<div class="form-group mb-3">
										<label>Jabatan:</label>
										<select id="jabatan" name="jabatan" class="custom-select" required>
										<?php foreach ($jabatan as $jb) : ?>
												<option value="<?php echo ($jb->id_jabatan) ?>" <?php echo set_select('jabatan', $jb->id_jabatan, ($jb->id_jabatan === $so->id_jabatan)) ?>><?php echo ($jb->jabatan) ?></option>
										<?php endforeach; ?>
										</select>
									</div>

									<div class="form-group mb-3" id="sket_jabatan">
										<label for="ket_jabatan">Bidang:</label>
										<input type="text" class="form-control" id="ket_jabatan" name="ket_jabatan"
											placeholder="Nama Bidang" value="<?php echo $so->ket_jabatan ?>">
									</div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Ubah Data</button>
						</form>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
