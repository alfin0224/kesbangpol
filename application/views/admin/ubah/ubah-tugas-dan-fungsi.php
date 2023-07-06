<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Tugas dan Fungsi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/tugas-dan-fungsi')?>">Slider</a></li>
						<li class="breadcrumb-item active">Ubah Tugas dan Fungsi</li>
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
						<?php foreach($tugasfungsi as $tugasfungsi): ?>
						<form action="<?= base_url('admin/profil/tugas-dan-fungsi/simpan_ubah/'); echo encrypt_url($tugasfungsi->id_tugas_fungsi);?>" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-12">
									<div class="form-group mb-3">
										<label for="tugas">Tugas</label>
										<textarea id="tugas" name="tugas" class="textarea" placeholder="Tugas"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $tugasfungsi->tugas ?>
										</textarea>
									</div>

									<div class="form-group">
										<label for="fungsi">Fungsi</label>
										<textarea id="fungsi" name="fungsi" class="textarea" placeholder="Fungsi"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $tugasfungsi->fungsi ?>
										</textarea>
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
