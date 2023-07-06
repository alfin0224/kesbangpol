  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Konsep</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('admin/home')?>">Home</a></li>
  						<li class="breadcrumb-item"><a
  								href="<?= base_url('/admin/manajemen-berita/berita')?>">Berita</a></li>
  						<li class="breadcrumb-item active">Konsep</li>
  					</ol>
  				</div><!-- /.col -->
  			</div><!-- /.row -->
  		</div><!-- /.container-fluid -->
  	</div>
  	<!-- /.content-header -->

  	<!-- Main content -->
  	<section class="content">
  		<div class="container-fluid">
  			<!-- Small boxes (Stat box) -->
  			<div class="row">
  			</div>
  			<!-- /.row -->

  			<!-- /.card -->
  			<div class="card">
  				<div class="card-header">
  					<!-- <div class="row">
								<div class="col-md-6">
									<div class="alert alert-primary alert-dismissible fade show" role="alert">
										<strong>Berhasil!</strong> Data Berhasil Ditambah/Diubah/Dihapus.
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
							</div> -->

  					<a class="btn btn-success" href="<?= base_url('/admin/manajemen-berita/berita/tambah')?>"
  						role="button" title="Tambah Berita">
  						<i class="fas fa-plus"> Tambah Berita</i>
  					</a>
  					<a class="btn btn-primary" href="<?= base_url('/admin/manajemen-berita/berita')?>" role="button"
  						title="Berita Publikasi">
  						<i class="fas fa-file-upload"> Berita (Publikasi)</i>
  					</a>
					
					<button class="btn btn-warning tooltip-delete" disabled="" title="Berita Publikasi"><i class="fas fa-clipboard-list"> Konsep</i></button>

  					<a class="btn btn-danger" href="<?= base_url('/admin/manajemen-berita/berita/tong-sampah')?>"
  						role="button" title="Tong Sampah">
  						<i class="fas fa-trash-restore"> Tong Sampah</i>
  					</a>
  				</div>
  				<!-- /.card-header -->
  				<div class="card-body">
  					<table id="example1" class="table table-bordered table-striped">
  						<thead>
  							<tr>
  								<th>No</th>
  								<th>Judul</th>
  								<th>Isi</th>
  								<th>Penulis</th>
  								<th>Tanggal Insert</th>
  								<!-- <th>Status</th> -->
  								<th>Aksi</th>
  							</tr>
  						</thead>
  						<tbody>
						  <?php $i = 0;
                			foreach ($berita as $b) { ?>
  							<tr>
							  <td><?= $i+1; ?></td>
  								<td><?php echo ($b->judul); ?></td>
  								<td><?php echo ($b->isi_berita); ?></td> <!-- batasi jumlah karakter, akhiri dengan ... -->
  								<td><?php echo ($b->nama); ?></td>
  								<!-- <td class="text-center">
  									<img src="<?= base_url('assets/wise/')?>images/berita.jpg" class="img-fluid" alt="Foto Slider"
  										style="width: 300px; height: 200px;">
  								</td> -->
  								<!-- <td>Publish/Non Publish</td> -->
								<td><?php 
								$date = date_create($b->insert_date_berita);
								echo date_format($date, "d-M-Y H:i:s"); ?></td>
  								<!-- <td>Publish/Non Publish</td> -->
  								<td class="text-center">
								  	<a class="btn btn-primary mb-1" href="<?= base_url('/admin/manajemen-berita/berita/konsep/pratinjau-konsep/'); echo encrypt_url($b->id_berita); ?>" role="button" title="Pratinjau">
                      					<i class="fas fa-eye"></i>
									</a>
  									<a class="btn btn-warning mb-1" href="<?= base_url('/admin/manajemen-berita/berita/ubah/'); echo encrypt_url($b->id_berita);?>"
  										role="button" title="Ubah">
  										<i class="fas fa-edit"></i>
  									</a>
									<a class="btn btn-success mb-1 postingberita" href="<?= base_url('admin/manajemen-berita/berita/ubah_status_konsep/'); echo encrypt_url($b->id_berita); ?>" role="button" title="Pindahkan ke Berita (Publish)">
  										<i class="fas fa-file-upload"></i>
  									</a>
  									<a class="btn btn-danger mb-1 sampahberita" href="<?= base_url('admin/manajemen-berita/berita/ubah_status_tong_sampah/'); echo encrypt_url($b->id_berita); ?>" role="button" title="Tong Sampah">
  										<i class="fas fa-trash"></i>
  									</a>
  								</td>
  							</tr>

							  <!-- The Modal -->
								<div class="modal modal-danger fade" id="formModalBerita" role="dialog" aria-labelledby="myModal">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h5 class="modal-title text-center" id="myModal">Masukkan Data Berita ke Berita (Publish)</h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
															data-feather="x"><span>&times;</span></button>
											</div>
											<form action="" method="post">
												<!-- Modal body -->
												<div class="modal-body">
													<p class="text-center">
														Apakah Anda Yakin ?
													</p>
												</div>

												<!-- Modal footer -->
												<div class="modal-footer">
													<button type="button" class="btn btn-success" data-dismiss="modal">No</button>
													<input type="submit" class="btn btn-danger" name="submit" value="Yes">
											</form>
										</div>
									</div>
								</div>
								</div>

								<!-- The Modal -->
								<div class="modal modal-danger fade" id="formModalDelete" role="dialog" aria-labelledby="myModal">
									<div class="modal-dialog">
										<div class="modal-content">

										<!-- Modal Header -->
											<div class="modal-header">
												<h5 class="modal-title text-center" id="myModal">Masukkan Data Berita ke Tong Sampah</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span data-feather="x"><span>&times;</span></button>
											</div>
											<form action="" method="post">
											<!-- Modal body -->
											<div class="modal-body">
												<p class="text-center">
													Apakah Anda Yakin ?
												</p>
											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<button type="button" class="btn btn-success" data-dismiss="modal">No</button>
												<input type="submit" class="btn btn-danger" name="submit" value="Yes">
											</form>
											</div>
										</div>
									</div>
								</div>

							  <?php $i++; } ?>
  						</tbody>
  						<tfoot>
						  		<th>No</th>
  								<th>Judul</th>
  								<th>Isi</th>
  								<th>Penulis</th>
  								<th>Tanggal Insert</th>
  							<!-- <th>Status</th> -->
  							<th>Aksi</th>
  						</tfoot>
  					</table>
  				</div>
  				<!-- /.card-body -->
  			</div>
  			<!-- /.card -->

  		</div><!-- /.container-fluid -->
  	</section>
  	<!-- /.content -->
  </div>

