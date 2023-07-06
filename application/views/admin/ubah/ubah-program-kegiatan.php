<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Program Kegiatan</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/program-kegiatan')?>">Program
								Kegiatan</a></li>
						<li class="breadcrumb-item active">Ubah Program Kegiatan</li>
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
						<?php foreach($progkeg as $pk) : ?>
						<form action="<?= base_url('admin/program-kegiatan/simpan_ubah/'); echo encrypt_url($pk->id_progkeg);?>" enctype="multipart/form-data" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="tahun">Tahun:</label>
										<input type="number" class="form-control" id="tahun" name="tahun"
											placeholder="Tahun" value="<?php echo $pk->tahun ?>" required>
									</div>
								</div>

								<div class="form-group col-md-8">
								</div>

								<div class="form-group col-md-12">
									<div class="form-group">
										<label for="deskripsi">Deskripsi</label>
										<textarea id="deskripsi" name="deskripsi" class="textarea"
											placeholder="Deskripsi"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $pk->deskripsi ?>
										</textarea>
									</div>
								</div>

								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="file_pk">File Program Kegiatan</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="pk" id="pk">
												<input type="hidden" name="file_lama" value="<?php echo $pk->nama_file ?>">
												<label class="custom-file-label" for="pilih_file_pk"><?php echo $pk->nama_file ?></label>
											</div>
										</div>
									</div>
								</div>
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
