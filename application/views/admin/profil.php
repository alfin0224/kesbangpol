  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Profil Saya</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
  						<li class="breadcrumb-item active">Profil Saya</li>
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

  						<a class="btn btn-warning" href="<?= base_url('/admin/profil_user/ubah/'); echo encrypt_url($this->session->userdata('id_user')); ?>" role="button"
  							title="Ubah Profil Saya">
  							<i class="fas fa-edit"> Ubah Profil Saya</i>
  						</a>
  					</div>

  					<div class="card-body">
					  <?php
                			foreach ($profil_user as $pu) { ?>
  						<div class="row">
  							<div class="col-md-2">
  								<label for="role">Foto:</label><br>
  								<img src="<?= base_url('assets/img/profiluser/'); echo $this->session->userdata('gambar_profil')?>" class="img-circle elevation-2"
  									alt="User Image" width="80%">
  							</div>

  							<div class="col-md-3">
  								<label for="role">Role:</label>
  								<p><?php echo ($pu->role); ?></p>

  								<label for="username">Username:</label>
  								<p><?php echo ($pu->username); ?></p>

  								<label for="nama">Nama:</label>
  								<p><?php echo ($pu->nama); ?></p>
  							</div>

  							<div class="col-md-3">
  								<label for="email">Email:</label>
  								<p><?php echo ($pu->email); ?></p>

  								<label for="telepon">Telepon:</label>
  								<p><?php echo ($pu->no_telp); ?></p>
  							</div>
							<?php  } ?>
  							<div class="col-md-4">
  								<!-- <form method="post">
      <textarea id="" name="" class="textarea" placeholder="Place some text here"
			style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
			</textarea>
    </form> -->
  							</div>

  						</div>
  					</div>
  				</div>
  	</section>
  </div>
