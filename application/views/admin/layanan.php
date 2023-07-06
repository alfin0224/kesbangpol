  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Layanan</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('admin/home')?>">Home</a></li>
  						<li class="breadcrumb-item active">Layanan</li>
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

  					<a class="btn btn-success" href="<?= base_url('admin/layanan/tambah')?>" role="button"
  						title="Tambah Layanan">
  						<i class="fas fa-plus"> Tambah Layanan</i>
  					</a>
  				</div>
  				<!-- /.card-header -->
  				<div class="card-body">
  					<table id="example1" class="table table-bordered table-striped">
  						<thead>
  							<tr>
  								<th>No</th>
  								<th>Nama Web/App</th>
  								<th>Foto Web/App</th>
  								<th>Link</th>
  								<th>Aksi</th>
  							</tr>
  						</thead>
  						<tbody>
						<?php 
							$no=1;
							foreach ($layanan as $ly) : ?>
  							<tr>
  								<td><?php echo $no++ ?></td>
  								<td><?php echo $ly->nama_layanan ?></td>
  								<td class="text-center">
  									<img src="<?= base_url('assets/img/layanan/'); echo $ly->foto?>" class="img-fluid" alt="Foto Slider"
  										style="width: 300px; height: 130px;">
  								</td>
  								<td><?php echo $ly->link ?></td>
  								<td class="text-center">
  									<a class="btn btn-warning mb-1" href="<?= base_url('admin/layanan/ubah/'); echo encrypt_url($ly->id_layanan); ?>" role="button" title="Ubah">
  										<i class="fas fa-edit"></i>
  									</a>
  									<a class="btn btn-danger mb-1 hapus" href="<?= base_url('admin/layanan/hapus/'); echo encrypt_url($ly->id_layanan); ?>" role="button" title="Hapus">
  										<i class="fas fa-trash"></i>
  									</a>
  								</td>
  							</tr>
						<?php endforeach ?>
  						</tbody>
  						<tfoot>
  							<tr>
  								<th>No</th>
  								<th>Nama Web/App</th>
  								<th>Foto Web/App</th>
  								<th>Link</th>
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
  				<h5 class="modal-title text-center" id="myModal">Hapus Data Layanan</h4>
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
