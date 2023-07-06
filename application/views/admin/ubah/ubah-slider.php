<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Slider</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/slider')?>">Slider</a></li>
						<li class="breadcrumb-item active">Ubah Slider</li>
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
						<?php foreach($slider as $slider): ?>

						
							<form action="<?= base_url('admin/slider/simpan_ubah/'); echo encrypt_url($slider->id_gambar);?>" enctype="multipart/form-data" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="file_foto">File Foto</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="foto" id="foto">
												<input type="hidden" name="file_lama" value="<?php echo $slider->nama_file; ?>">
												<label class="custom-file-label" for="pilih_file_foto"><?php echo $slider->nama_file; ?></label>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="deskripsi">Deskripsi:</label>
										<textarea class="form-control" id="deskripsi" rows="4" name="deskripsi"
											placeholder="Deskripsi..."><?php echo $slider->deskripsi; ?></textarea>
									</div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Ubah Data</button>
						</form>
<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
