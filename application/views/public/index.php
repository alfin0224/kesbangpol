      <section class="slider_section">
      	<div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
      		<div class="carousel-inner">
	  			<?php foreach($slider as $i => $sl) : ?>
      			<div class="carousel-item <?php if ($i == 0) echo 'active'; ?>" id="slider">
      				<img class="first-slide slider-res" src="<?= base_url('assets/img/slider/'); echo $sl->nama_file?>" alt="Slider Image">
      			</div>
				<?php endforeach ?>
      		</div>
      		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      			<i class='fa fa-angle-left'></i>
      		</a>
      		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      			<i class='fa fa-angle-right'></i>
      		</a>
      	</div>
      </section>

      <div id="profil"></div>

      <!-- profil -->
      <div class="about top_layer">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="titlepage">
      					<h2 style="border-bottom: #ed0202 solid 1px; width:150px;">Profil</h2>
      				</div>
      			</div>
      		</div>

      		<div class="row">
      			<div class="col-md-8">
      				<div class="row">

      					<div class="col-md-6 mb-3">
      						<div class="card mb-3 shadow" style="max-width: 540px">
      							<div class="row">
      								<div class="col-md-6 del-xs">
      									<img src="<?= base_url('assets/wise/')?>images/profil.jpg" alt="..."
      										class="img-fluid" />
      								</div>
      								<div class="col-md-6 pl-0">
      									<div class="card-body text-center">
      										<h3 style="color:#ff4444;" class="card-title"><i class="fas fa-users pr-2"></i>Visi
      											Misi</h3>
      										<p class="card-text mb-2">
      											Visi Misi OPD
      										</p>
      										<a href="<?= base_url('visi-misi')?>" class="btn btn-danger"><i
      												class="fab fa-readme left"></i> Lebih Detail</a>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>

      					<div class="col-md-6 mb-3">
      						<div class="card mb-3 shadow" style="max-width: 540px">
      							<div class="row">
      								<div class="col-md-6 del-xs">
      									<img src="<?= base_url('assets/wise/')?>images/profil.jpg" alt="..."
      										class="img-fluid" />
      								</div>
      								<div class="col-md-6 pl-0">
      									<div class="card-body text-center">
      										<h3 style="color:#ffbb33;" class="card-title"><i class="fas fa-book pr-2"></i>Tugas
      											dan Fungsi</h3>
      										<p class="card-text mb-2">
      											Tugas dan Fungsi OPD
      										</p>
      										<a href="<?= base_url('tugas-dan-fungsi')?>" class="btn btn-warning"><i
      												class="fab fa-readme left"></i> Lebih Detail</a>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>

      					<div class="col-md-6 mb-3">
      						<div class="card mb-3 shadow" style="max-width: 540px">
      							<div class="row">
      								<div class="col-md-6 del-xs">
      									<img src="<?= base_url('assets/wise/')?>images/profil.jpg" alt="..."
      										class="img-fluid" />
      								</div>
      								<div class="col-md-6 pl-0">
      									<div class="card-body text-center">
      										<h3 style="color:#00C851;" class="card-title"><i
      												class="fas fa-chart-pie pr-2"></i>Struktur Organisasi</h3>
      										<p class="card-text mb-2">
      											Struktur Organisasi OPD
      										</p>
      										<a href="<?= base_url('struktur-organisasi')?>" class="btn btn-success"><i
      												class="fab fa-readme left"></i> Lebih Detail</a>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div class="col-md-6 mb-3">
      						<div class="card mb-3 shadow" style="max-width: 540px">
      							<div class="row">
      								<div class="col-md-6 del-xs">
      									<img src="<?= base_url('assets/wise/')?>images/profil.jpg" alt="..."
      										class="img-fluid" />
      								</div>
      								<div class="col-md-6 pl-0">
      									<div class="card-body text-center">
      										<h3 style="color:#33b5e5;" class="card-title"><i
      												class="fas fa-bookmark pr-2"></i>Sejarah</h3>
      										<p class="card-text mb-2">
      											Sejarah OPD
      										</p>
      										<a href="<?= base_url('sejarah')?>" class="btn btn-primary"><i
      												class="fab fa-readme left"></i> Lebih Detail</a>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      			<div class="col-md-4">
      				<div id="testimonial_slider" class="carousel slide banner-bg shadow" data-ride="carousel">
      					<div class="carousel-inner">
						  	<?php foreach($strukorgan as $i => $so) : ?>
      						<div class="carousel-item <?php if($i == 0) echo 'active'; ?>">
								<?php if(!empty($so->foto)) { ?>
      							<img class="first-slide" src="<?= base_url('assets/img/struktur/'); echo $so->foto?>" style="width: 330px; height: 370px;">
								<?php } else { ?>
								<img class="first-slide" src="<?= base_url('assets/img/struktur/profil_default.jpg') ?>" style="width: 330px; height: 370px;">
								<?php } ?>
      							<div class="container">
      								<div class="carousel-caption relat">
      									<h3><?php echo $so->nama_pejabat ?></h3>
      									<span><i class="fa fa-quote-left"></i><?php echo ($so->jabatan) . " " . ($so->ket_jabatan); ?><i
      											class="fa fa-quote-right"></i></span>
      								</div>
      							</div>
      						</div>
							<?php endforeach ?>
      					</div>
      					<a class="carousel-control-prev" href="#testimonial_slider" role="button" data-slide="prev"> <i
      							class='fa fa-angle-right'></i></a> <a class="carousel-control-next"
      						href="#testimonial_slider" role="button" data-slide="next"> <i class='fa fa-angle-left'></i></a>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <!-- end profil -->

      <div id="unit-kerja"></div>

      <!-- unit kerja -->
      <div class="service">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="titlepage">
      					<h2>Unit Kerja</h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="container margin-r-l">
      		<div class="row">
	  			<?php foreach($unitkerja as $uk) : ?>
      			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
      				<div class="service-box shadow">
      					<figure>
      						<img src="<?= base_url('assets/wise/')?>images/unit-kerja.jpg" alt="">
      						<span class="hoverle">
      							<a href="<?= base_url('unit-kerja/'); echo encrypt_url($uk->id_unit_kerja); ?>"><strong><?php echo $uk->unit_kerja ?></strong></a>
      						</span>
      					</figure>
      				</div>
      			</div>
				<?php endforeach ?>
      		</div>
      	</div>
      </div>
      <!-- end unit kerja -->

      <div id="program-kegiatan"></div>

      <!-- program kegiatan -->
      <div class="about" style="padding-top: 80px;">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="titlepage">
      					<h2>Program Kegiatan</h2>
      				</div>
      			</div>
      		</div>

      		<div class="row">
				<?php foreach($progkeg as $i => $pk) : 
					if ($i < 3) { ?>
						<div class="col-md-4 mb-4">
							<div class="img-box">
								<figure class="shadow"><img src="<?= base_url('assets/wise/')?>images/program-kegiatan.jpg"
										alt="img" /></figure>
								<a href="<?= base_url('program-kegiatan/'); echo encrypt_url($pk->id_progkeg); ?>"><?php echo $pk->tahun ?></a>
							</div>
						</div>
					<?php }
				endforeach ?>
      		</div>
      	</div>
      </div>
      <!-- end program kegiatan -->

      <div id="berita"></div>

      <!-- berita -->
      <div class="service">
      	<div class="container-fluid">
		  <div class="row">
      			<div class="col-md-12">
      				<div class="titlepage">
      					<h2 style="width:320px">Berita Terbaru</h2>
      				</div>
      			</div>
      		</div>

      		<div class="row">
			  <?php foreach($berita as $b) : ?>
      			<div class="col-md-3 col-sm-6">
      				<div class="card">
      					<div class="text-center">
      						<img src="<?= base_url('assets/img/berita/'); echo $b->judul_gambar; ?>" class="card-img-top image"
      							alt="thumbnail">
      					</div>
      					<div class="card-body">
      						<h3 class="card-title text-center"><a href="<?= base_url('berita/detail/'); echo encrypt_url($b->id_berita); ?>"><?php echo $b->judul; ?></a></h3>
      						<p class="card-text text-justify mb-2" style="font-size:15px;"><?php echo substr($b->isi_berita,147, 170); echo ' . . . '; ?></p>
      						<a href="<?= base_url('berita/detail/'); echo encrypt_url($b->id_berita); ?>" class="btn btn-warning">Lanjut baca ...</a>
      					</div>
      				</div>
      			</div>
				<?php endforeach ?>

      		</div>

      		<div class="text-center">
      			<a href="<?= base_url('berita/semua')?>" class="btn btn-primary"><i
      					class="fab fa-readme left pr-2"></i>Lihat Semua Berita</a>
      		</div>
      	</div>
      	<div id="layanan-regulasi" style="height:90px;"></div>
      </div>
      <!-- end berita -->

      <!-- layanan & regulasi -->
      <div class="testimonial service">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="titlepage">
      					<h3 style="border-bottom: #fff solid 1px; width:350px;">Layanan & Regulasi</h3>
      				</div>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      				<!-- layanan -->
      				<div id="main_slider_layanan" class="carousel slide banner-main mb-2" data-ride="carousel">
      					<div class="carousel-inner">
						  	<?php foreach($layanan as $i => $ly) : ?>
      						<div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
      							<!-- <a href="#"><img class="first-slide" src="images/layanan.jpg" alt="First slide"></a> -->
      							<div class="service-box">
      								<figure>
      									<img class="first-slide" style="width:540px; height:230px" src="<?= base_url('assets/img/layanan/'); echo $ly->foto ?>"
      										alt="First slide">
      									<span class="hoverle">
      										<a href="<?php echo $ly->link ?>" target="_blank" ><strong><?php echo $ly->nama_layanan ?></strong></a>
      									</span>
      								</figure>
      							</div>
      						</div>
							<?php endforeach ?>
      					</div>
      					<a class="carousel-control-prev" href="#main_slider_layanan" role="button" data-slide="prev"> <i
      							class='fa fa-angle-left'></i></a> <a class="carousel-control-next"
      						href="#main_slider_layanan" role="button" data-slide="next"> <i
      							class='fa fa-angle-right'></i></a>
      				</div>
      				<!-- end layanan -->

      				<!-- regulasi -->
      				<div id="main_slider_regulasi" class="carousel slide banner-main" data-ride="carousel">
      					<div class="carousel-inner">
							<?php foreach($regulasi as $i => $reg) : ?>
      						<div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
      							<!-- <a href="#"><img class="first-slide" src="images/regulasi.jpg" alt="First slide"></a>  -->
      							<div class="service-box">
      								<figure>
      									<img class="first-slide" src="<?= base_url('assets/wise/')?>images/regulasi.jpg"
      										alt="First slide">
      									<span class="hoverle">
      										<a href="<?= base_url('regulasi/'); echo encrypt_url($reg->id_regulasi); ?>"><strong><?php echo $reg->judul_regulasi ?></strong></a>
      									</span>
      								</figure>
      							</div>
      						</div>
      						<?php endforeach ?>
      					</div>
      					<a class="carousel-control-prev" href="#main_slider_regulasi" role="button" data-slide="prev"> <i
      							class='fa fa-angle-left'></i></a> <a class="carousel-control-next"
      						href="#main_slider_regulasi" role="button" data-slide="next"> <i
      							class='fa fa-angle-right'></i></a>
      				</div>
      			</div>
      			<!-- end regulasi -->

      			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      				<div class="contact">
      					<h3>Hubungi Kami</h3>
      					<form action="<?= base_url('kirim-pesan')?>" method="post">
      						<div class="row">
      							<div class="col-sm-12">
      								<input class="contactus" placeholder="Nama" type="text" name="nama" required>
      							</div>
      							<div class="col-sm-12">
      								<input class="contactus" placeholder="Telepon/Hp" type="number" name="telepon" required>
      							</div>
      							<div class="col-sm-12">
      								<input class="contactus" placeholder="Email" type="email" name="email">
      							</div>
      							<div class="col-sm-12">
      								<textarea class="textarea" placeholder="Isi Pesan" type="text" name="pesan" required></textarea>
      							</div>
      							<div class="col-sm-12">
								  <button type="submit" class="btn send">Kirim</button>
      							</div>
      						</div>
      					</form>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <!-- end layanan & regulasi -->
