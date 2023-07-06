<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Berita</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a
								href="<?= base_url('/admin/manajemen-berita/berita')?>">Berita</a></li>
						<li class="breadcrumb-item active">Ubah Berita</li>
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
					<?php $i = 0;
                			foreach ($berita as $b) { ?>
						<form action="<?= base_url('/admin/manajemen-berita/berita/simpan_ubah_berita/'); echo encrypt_url($b->id_berita); ?>" enctype="multipart/form-data"  method="post">

							<!-- <input type="hidden" name="id" id="id"> -->
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="judul">Judul:</label>
										<input type="text" class="form-control" id="judul" name="judul"
											placeholder="Judul" value="<?php echo ($b->judul); ?>" required>
									</div>
								</div>

								<div class="form-group col-md-8">
								</div>

								<div class="form-group col-md-12">
									<div class="form-group">
										<label for="isi">Isi Berita</label>
										<textarea id="isi" name="isi" class="textarea" placeholder="Isi Berita"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
											required><?php echo ($b->isi_berita); ?>
										</textarea>
									</div>
								</div>

								<div class="form-group col-md-3">
									<div class="form-group mb-3">
										<label>Kategori</label>
										<div class="select2-green">
											<select class="select2" multiple="multiple" data-placeholder="Select a State" name="kategori[]" data-dropdown-css-class="select2-green" style="width: 100%;" required>
												<?php foreach ($merge_berita_kategori as $mbk) { ?>
												<option value="<?php echo ($mbk->id_kategori); ?>" selected><?php echo ($mbk->kategori); ?></option>
												<?php } ?>
												<option disabled>--------------------------------------------------------------</option>
												<?php foreach ($kategori as $ktg) { ?>
												<option value="<?php echo ($ktg->id_kategori); ?>"><?php echo ($ktg->kategori); ?></option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group mb-3">
										<label for="foto_thumbnail">Foto Thumbnail</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="gambar_berita" id="gambar_berita">
												<input type="hidden" name="file_lama" id="gambar_berita" value="<?php echo ($b->judul_gambar); ?>">
												<label class="custom-file-label" for="pilih_foto_thumbnail"><?php echo ($b->judul_gambar); ?></label>
											</div>
										</div>
									</div>

									<!-- <div class="form-group">
										<label>Status</label>
										<select id="status" name="status" class="custom-select" required>
											<option>Publikasi</option>
											<option>Konsep</option>
										</select>
									</div> -->
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Ubah Data</button>
						<?php $i++; } ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
