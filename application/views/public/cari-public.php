        <!-- berita -->
        <div id="visimisi" class="service" style="padding-top: 100px;">
        	<div class="container-fluid" style="width:90%">
        		<div class="row mb-4">
        			<div class="col-md-12">
        				<div class="titlepage" style="padding-bottom: 20px;">
        					<h2 style="width: 100%;"><?php echo $ketcari ?> : <?php if(!empty($keyword)){echo $keyword;} ?></h2>
        					<h3></h3>
        				</div>
        			</div>
        		</div>

        		<div class="row">
				<?php foreach($cari as $cari) : ?>
        			<div class="col-md-3 col-sm-6">
        				<div class="card">
        					<div class="text-center">
								<img src="<?= base_url('assets/img/berita/'); echo $cari->judul_gambar; ?>" class="card-img-top image"
      							alt="thumbnail">
        					</div>
							<div class="card-body">
      								<h3 class="card-title text-center"><a href="<?= base_url('berita/detail/'); echo encrypt_url($cari->id_berita); ?>"><?php echo $cari->judul; ?></a></h3>
									<p class="card-text text-justify mb-2" style="font-size:15px;"><?php echo substr($cari->isi_berita,147, 170); echo ' . . . '; ?></p>
									<a href="<?= base_url('berita/detail/'); echo encrypt_url($cari->id_berita); ?>" class="btn btn-warning">Lanjut baca ...</a>
      						</div>
        				</div>
        			</div>			
        		<?php endforeach; ?>
        		</div>

        	</div>
        </div>
        <!-- end berita -->
