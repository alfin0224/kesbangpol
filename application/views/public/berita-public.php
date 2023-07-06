        <!-- berita -->
		<div id="visimisi" class="service" style="padding-top: 100px;">
        	<div class="container-fluid" style="width:95%">
				<div class="row">
					<div class="col-md-8 col-sm-12">
					<?php foreach($berita as $b) : ?>
						<div class="row">
							<div class="col-md-12">
								<div class="titlepage" style="padding-bottom: 20px;">
									<h2 style="width:100%;"><?php echo ($b->judul); ?></h2>
									<strong>
										Penulis : <a href="<?php echo base_url('penulis/'). encrypt_url($b->id_user_penulis) ?>"><?php echo ($b->nama); ?></a> || <?php $date = date_create($b->insert_date_berita); echo date_format($date, "d-M-Y"); ?> || Kategori : 
										<?php
											foreach ($katber as $ktg) { ?>
												<a href="<?php echo base_url('kategori/'). encrypt_url($ktg->id_kategori) ?>"><?php echo ($ktg->kategori); ?></a>
										<?php } ?>
									</strong>
								</div>
							</div>
						</div>
						<div class="col-md-12 text-center mb-4">
							<img src="<?= base_url('assets/img/')?>berita/<?php echo ($b->judul_gambar); ?>" class="img-fluid" alt="Gambar Berita">
						</div>
						<div class="col-md-12">
							<?php echo $b->isi_berita; ?>
						</div>
					<?php endforeach ?>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="row">
							<div class="col-md-12">
								<h2>Berita Terbaru</h2>
								<div class="row">
								<?php foreach($top5 as $t):?>
									<div class="col-md-12">
										<h3><a href="<?= base_url('berita/detail/'); echo encrypt_url($t->id_berita); ?>"><?php echo $t->judul; ?><a></h3>
									</div>
								<?php endforeach ?>
								</div>
							</div>
							<div class="col-md-12 mt-4">
								<h2>Kategori</h2>
								<div class="row">
								<?php foreach($kategori as $kat):?>
									<div class="col-md-12">
										<h3><a href="<?php echo base_url('kategori/').encrypt_url($kat->id_kategori) ?>"><?php echo $kat->kategori; ?><a></h3>
									</div>
								<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </div>
        <!-- end berita -->
