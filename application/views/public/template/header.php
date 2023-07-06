<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title><?php if(!empty($judul)){echo $judul.' - ';}?>KESBANGPOL PABAR</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url('assets/wise/')?>css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="<?= base_url('assets/wise/')?>css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="<?= base_url('assets/wise/')?>css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="<?= base_url('assets/wise/')?>images/logopabar.png" type="image/png" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/wise/')?>css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
		media="screen">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
		integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/')?>jHTree.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/')?>jquery-ui-1.10.4.custom.min.css">
</head>
<!-- body -->

<body class="main-layout">
	<!-- loader  -->
	<!-- <div class="loader_bg">
		<div class="loader"><img src="<?= base_url('assets/wise/')?>images/loading-2.gif" alt="#" /></div>
	</div> -->
	<!-- end loader -->
	<!-- header -->
	<header style="margin-bottom: 120px;">

		<!-- header inner -->
		<div class="header fixed-top">
			<div class="container-fluid" style="padding-left: 0px;">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
						<div class="full">
							<div class="center-desk">
								<div class="logo" style="padding-left: 10px;"> <a href="<?= base_url('/')?>"> 
								<img src="<?= base_url('assets/wise/')?>images/logo-new-kesbangpol.png" alt="logo-opd" > </a> </div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
						<div class="menu-area">
							<div class="limit-box">
								<nav class="main-menu">
									<ul class="menu-area-main">
										<li class="<?php if($page == 'beranda') { echo 'active';} ?>"> <a
												href="<?= base_url('/')?>">Beranda</a> </li>
										<li class="<?php if($page == 'profil') { echo 'active';} ?>"> <a
												href="<?= base_url('/')?>#profil">Profil</a> </li>
										<li class="<?php if($page == 'unit-kerja') { echo 'active';} ?>"> <a
												href="<?= base_url('/')?>#unit-kerja">Unit Kerja</a> </li>
										<li class="<?php if($page == 'program-kegiatan') { echo 'active';} ?>"> <a
												href="<?= base_url('/')?>#program-kegiatan">Program Kegiatan</a> </li>
										<li class="<?php if($page == 'berita') { echo 'active';} ?>"> <a
												href="<?= base_url('/')?>berita/semua">Berita</a> </li>
										<li class="<?php if($page == 'layanan') { echo 'active';} ?>"> <a
												href="<?= base_url('/')?>#layanan-regulasi">Layanan</a> </li>
										<li class="<?php if($page == 'regulasi') { echo 'active';} ?>"> <a
												href="<?= base_url('/')?>#layanan-regulasi">Regulasi</a> </li>
										<li class=""> <a href="#kontak">Kontak</a> </li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
						<form class="form-inline" action="<?= base_url('cari')?>" method="get">
							<input class="p-1" type="text" id="keyword" name="keyword" placeholder="Cari..">
							<button class="btn btn-success my-2 my-sm-0 ml-1" type="submit" id="cari_submit"><i
									class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
			<!-- end header inner -->

	</header>
	<!-- end header -->
