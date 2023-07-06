<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(!empty($judul)){echo $judul.' - ';}?>Admin KESBANGPOL</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= base_url('assets/img/')?>logopabar.png" type="image/png" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?= base_url('assets/adminlte/')?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet"
		href="<?= base_url('assets/adminlte/')?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet"
		href="<?= base_url('assets/adminlte/')?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet"
		href="<?= base_url('assets/adminlte/')?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/summernote/summernote-bs4.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/select2/css/select2.min.css">
	<link rel="stylesheet"
		href="<?= base_url('assets/adminlte/')?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!-- SweetAlert -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/sweetalert/sweetalert.css'); ?>">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
			</ul>

			<!-- SEARCH FORM -->
			<!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Notifications Dropdown Menu -->
				<!-- <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
				<li>
					<a class="btn btn-default" href="<?= base_url('logout')?>" role="button">
						<i class="fas fa-power-off"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="<?= base_url('assets/img/')?>logopabar.png" alt="Satpol PP"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">KESBANGPOL</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/img/profiluser/'); echo $this->session->userdata('gambar_profil'); ?>" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<a href="<?= base_url('admin/profil_user/'); echo encrypt_url($this->session->userdata('id_user')); ?>" class="d-block"><?php echo explode(" ", $this->session->userdata('nama'))[0] ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="<?= base_url('admin/home')?>" class="nav-link <?php if($page == 'home'){ echo 'active';}?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/slider')?>" class="nav-link <?php if($page == 'slider'){ echo 'active';}?>">
								<i class="nav-icon fas fa-images"></i>
								<p>
									Slider
								</p>
							</a>
						</li>
						<li
							class="nav-item has-treeview <?php if($page == 'visi-misi' || $page == 'tugas-dan-fungsi' || $page == 'struktur-organisasi' || $page == 'sejarah'){ echo 'menu-open';}?>">
							<a href="#"
								class="nav-link <?php if($page == 'visi-misi' || $page == 'tugas-dan-fungsi' || $page == 'struktur-organisasi' || $page == 'sejarah'){ echo 'active';}?>">
								<i class="nav-icon fas fa-home"></i>
								<p>
									Profil
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('admin/profil/visi-misi')?>"
										class="nav-link <?php if($page == 'visi-misi') { echo 'active';}?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Visi Misi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('admin/profil/tugas-dan-fungsi')?>"
										class="nav-link <?php if($page == 'tugas-dan-fungsi') { echo 'active';}?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Tugas dan Fungsi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('admin/profil/struktur-organisasi')?>"
										class="nav-link <?php if($page == 'struktur-organisasi') { echo 'active';}?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Struktur Organisasi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('admin/profil/sejarah')?>"
										class="nav-link <?php if($page == 'sejarah') { echo 'active';}?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Sejarah</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/unit-kerja')?>"
								class="nav-link <?php if($page == 'unit-kerja') { echo 'active';}?>">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Unit Kerja
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/program-kegiatan')?>"
								class="nav-link <?php if($page == 'program-kegiatan') { echo 'active';}?>">
								<i class="nav-icon fas fa-hands-helping"></i>
								<p>
									Program Kegiatan
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview <?php if($page == 'berita' || $page == 'kategori'){ echo 'menu-open';}?>">
							<a href="#" class="nav-link <?php if($page == 'berita' || $page == 'kategori'){ echo 'active';}?>">
								<i class="nav-icon fas fa-newspaper"></i>
								<p>
									Manajemen Berita
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('admin/manajemen-berita/berita')?>"
										class="nav-link <?php if($page == 'berita') { echo 'active';}?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Berita</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('admin/manajemen-berita/kategori')?>"
										class="nav-link <?php if($page == 'kategori') { echo 'active';}?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Kategori</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/layanan')?>"
								class="nav-link <?php if($page == 'layanan') { echo 'active';}?>">
								<i class="nav-icon fas fa-laptop"></i>
								<p>
									Layanan
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/regulasi')?>"
								class="nav-link <?php if($page == 'regulasi') { echo 'active';}?>">
								<i class="nav-icon fas fa-balance-scale"></i>
								<p>
									Regulasi
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/kontak')?>" class="nav-link <?php if($page == 'kontak') { echo 'active';}?>">
								<i class="nav-icon fas fa-address-card"></i>
								<p>
									Kontak
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/pesan-masuk')?>"
								class="nav-link <?php if($page == 'pesan-masuk') { echo 'active';}?>">
								<i class="nav-icon fas fa-envelope"></i>
								<p>
									Pesan Masuk
									<!-- <span class="badge badge-warning navbar-badge">15</span> -->
								</p>
							</a>
						</li>
						<?php if(function_exists('check_if_role_is')){
							 	if (check_if_role_is('1')){ ?>
								<li class="nav-item">
									<a href="<?= base_url('admin/pengguna')?>"
										class="nav-link <?php if($page == 'pengguna') { echo 'active';}?>">
										<i class="nav-icon fa fa-user"></i>
										<p>
											Pengguna
										</p>
									</a>
								</li>
						<?php } 
      						}
     					 ?>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
