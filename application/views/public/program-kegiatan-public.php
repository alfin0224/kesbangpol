         <!-- berita -->
         <div id="visimisi" class="service" style="padding-top: 100px;">
         	<div class="container-fluid" style="width:80%">
         		<div class="row">
         			<div class="col-md-12">
         				<div class="titlepage" style="padding-bottom: 20px;">
         					<h2 style="width: 100%;">Program Kegiatan <?php echo $pk->tahun ?></h2>
         				</div>
         			</div>
         		</div>
				<?php echo $pk->deskripsi ?>
				<div class="row mt-4">
         			<div class="col-md-12 text-center">
						 <h3>Berikut File Program Kegiatan Tahun <?php echo $pk->tahun ?></h3>
						 <a class="btn btn-success" href="<?= base_url('upload/progkeg/').$pk->nama_file;?>"> Program Kegiatan Tahun <?php echo $pk->tahun ?></a>
					 </div>
					  
         		</div>
				

         	</div>
         </div>
         <!-- end berita -->
