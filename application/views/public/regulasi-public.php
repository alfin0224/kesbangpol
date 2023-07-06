        <!-- berita -->
		<div id="visimisi" class="service" style="padding-top: 100px;">
         	<div class="container-fluid" style="width:80%">
         		<div class="row">
         			<div class="col-md-12">
         				<div class="titlepage" style="padding-bottom: 20px;">
         					<h2 style="width: 100%;">Regulasi <?php echo $regu->judul_regulasi ?></h2>
         				</div>
         			</div>
         		</div>
         		<?php echo $regu->deskripsi ?>
				<div class="row mt-4">
         			<div class="col-md-12 text-center">
						 <h3>Berikut File Regulasi <?php echo $regu->judul_regulasi ?></h3>
						 <a class="btn btn-success" href="<?= base_url('upload/regulasi/').$regu->file_regulasi;?>"><?php echo $regu->judul_regulasi ?></a>
					 </div>
					  
         		</div>
         	</div>
         </div>
         <!-- end berita -->
