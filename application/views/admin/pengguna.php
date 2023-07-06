  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Pengguna</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('admin/home')?>">Home</a></li>
  						<li class="breadcrumb-item active">Pengguna</li>
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

  					<a class="btn btn-success" href="<?= base_url('admin/pengguna/tambah')?>" role="button"
  						title="Tambah Pengguna">
  						<i class="fas fa-plus"> Tambah Pengguna</i>
  					</a>
  				</div>
  				<!-- /.card-header -->
  				<div class="card-body">
  					<table id="example1" class="table table-bordered table-striped">
  						<thead>
  							<tr>
  								<th>No</th>
  								<th>Foto</th>
  								<th>Nama</th>
								<th>Username</th>
  								<th>Email</th>
  								<th>Telepon</th>
  								<th>Role</th>
  								<th>Aksi</th>
  							</tr>
  						</thead>
  						<tbody>
						  <?php $i = 0;
                			foreach ($user as $u) { ?>
  							<tr>
  								<td><?= $i+1; ?></td>
  								<td class="text-center">
  									<img src="<?= base_url('assets/img/'); ?>/profiluser/<?php echo ($u->gambar_profil); ?>"
  										class="img-circle elevation-2" alt="Foto Slider" style="width: 100px; height: 100px;">
  								</td>
  								<th><?php echo ($u->nama); ?></th>
								<th><?php echo ($u->username); ?></th>
  								<th><?php echo ($u->email); ?></th>
  								<th><?php echo ($u->no_telp); ?></th>
  								<th><?php echo ($u->role); ?></th>
  								<td class="text-center">
  									<a class="btn btn-warning mb-1" href="<?= base_url('admin/pengguna/ubah/'); echo encrypt_url($u->id_user);?>" role="button"
  										title="Ubah">
  										<i class="fas fa-edit"></i>
  									</a>
									  <?php
											if($u->status_user == 0){ 
											?>
											<a class="btn btn-success mb-1" href="<?= base_url('admin/pengguna/activate_user/'); echo encrypt_url($u->id_user); ?>" role="button" title="Aktifkan">
											Aktifkan
											</a>
											<button class="btn btn-danger mb-1" role="button" title="Non-Aktifkan" disabled>
											Non-Aktif
											</button>
										<?php
											} elseif($u->status_user == 1) { 
										?>
											<button class="btn btn-success mb-1" role="button" title="Aktifkan" disabled>
											Aktif
											</button>
											<a class="btn btn-danger mb-1" href="<?= base_url('admin/pengguna/disable_user/'); echo encrypt_url($u->id_user); ?>" role="button" title="Non-Aktifkan">
											Non-Aktifkan
											</a>
										<?php
										}
											?>
										<?php $ada = 0;
											foreach ($cekpenulis as $cek) :
												if($u->id_user == $cek->id_user_penulis) { 
													$ada++;
												} 
											endforeach;
										if($ada > 0) { ?>
											<button class="btn btn-danger tooltip-delete" disabled=""><i class="fas fa-trash" title="Tidak Bisa Menghapus"></i></button>
										<?php } else { ?>
											<a class="btn btn-danger mb-1 hapus" href="<?= base_url('admin/pengguna/hapus/'); echo encrypt_url($u->id_user); ?>" role="button" title="Hapus"><i class="fas fa-trash"></i></a>
										<?php } ?>
  			
  								</td>
  							</tr>
							  <?php $i++; } ?>
  						</tbody>
  						<tfoot>
  							<tr>
  								<th>No</th>
  								<th>Foto</th>
  								<th>Nama</th>
  								<th>NIP</th>
  								<th>Email</th>
  								<th>Telepon</th>
  								<th>Username</th>
  								<th>Role</th>
  								<th>Aksi</th>
  							</tr>
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

  <!-- The Modal -->
  <div class="modal modal-danger fade" id="formModalDelete" role="dialog" aria-labelledby="myModal">
  	<div class="modal-dialog">
  		<div class="modal-content">

  			<!-- Modal Header -->
  			<div class="modal-header">
  				<h5 class="modal-title text-center" id="myModal">Hapus Data Pengguna</h4>
  					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
  							data-feather="x"><span>&times;</span></button>
  			</div>
  			<form action="#" method="post">
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
