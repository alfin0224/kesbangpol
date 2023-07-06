  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pratinjau Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/home')?>">Home</a></li>
							<li class="breadcrumb-item"><a href="<?= base_url('/admin/manajemen-berita/berita')?>">Berita</a></li>
              <li class="breadcrumb-item active">Pratinjau Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
      foreach ($berita as $b) { ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

			<div class="row">
				<div class="col-md-3 mb-4">
					<a class="btn btn-success" href="<?= base_url('/admin/manajemen-berita/berita/')?>" role="button" title="Kembali">
						<i class="fas fa-chevron-circle-left"> Kembali</i>
					</a>
				</div>
				<div class="col-md-9 mb-4">
				</div>
				
				<div class="col-md-12 text-center mb-4">
					<h2><?php echo ($b->judul); ?></h2>
					<p><strong>Penulis : <?php echo ($b->nama); ?> || <?php $date = date_create($b->insert_date_berita); echo date_format($date, "d-M-Y"); ?> || Kategori : 
            <?php
            foreach ($kategori as $ktg) { ?>
              <?php echo ($ktg->kategori); ?>
            <?php } ?>
            </strong></p>
          <img src="<?= base_url('assets/img/')?>berita/<?php echo ($b->judul_gambar); ?>" class="img-fluid" alt="Foto Slider" style="width: 50%; height: 50%px;" >
				</div>
				<div class="col-md-12">
        <?php echo ($b->isi_berita); ?> 
				</div>
			</div>
				

      </div><!-- /.container-fluid -->
    </section>
    <?php } ?>
    <!-- /.content -->
  </div>
