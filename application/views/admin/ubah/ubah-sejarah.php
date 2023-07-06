<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Sejarah</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/tugas-dan-fungsi')?>">Slider</a></li>
						<li class="breadcrumb-item active">Ubah Sejarah</li>
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
						<?php foreach($sejarah as $sejarah): ?>
						<form action="<?= base_url('admin/profil/sejarah/simpan_ubah/'); echo encrypt_url($sejarah->id_sejarah);?>" method="post">
							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-12">
									<div class="form-group mb-3">
										<label for="sejarah">Sejarah</label>
										<textarea id="sejarah" name="sejarah" class="textarea" placeholder="Sejarah"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($sejarah->sejarah) ?>
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
