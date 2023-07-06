  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Visi Misi</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('admin/home')?>">Home</a></li>
  						<li class="breadcrumb-item active">Visi Misi</li>
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

  					<!-- <a class="btn btn-success" href="<?= base_url('admin/profil/visi-misi/tambah')?>" role="button" title="Tambah Visi Misi">
                <i class="fas fa-plus"> Tambah Visi Misi</i>
              </a> -->
  				</div>
  				<!-- /.card-header -->
  				<div class="card-body">
  					<table id="example1" class="table table-bordered table-striped">
  						<thead>
  							<tr>
  								<!-- <th>No</th> -->
  								<th>Visi</th>
  								<th>Misi</th>
  								<th>Aksi</th>
  							</tr>
  						</thead>
  						<tbody>
						<?php
							foreach($visimisi as $visimisi):
						?>
  							<tr>
  								<!-- <td>1</td> -->
  								<td><?php echo $visimisi->visi ?></td>
  								<td><?php echo $visimisi->misi ?></td>
  								<td class="text-center">
  									<a class="btn btn-warning mb-1" href="<?= base_url('admin/profil/visi-misi/ubah/'); echo encrypt_url($visimisi->id_visi_misi); ?>" role="button"
  										title="Ubah">
  										<i class="fas fa-edit"></i>
  									</a>
  									<!-- <a class="btn btn-danger mb-1" href="#" role="button" title="Hapus" data-toggle="modal" data-target="#formModalDelete">
                      <i class="fas fa-trash"></i>
                    </a> -->
  								</td>
  							</tr>
						<?php endforeach; ?>
  						</tbody>
  						<tfoot>
  							<tr>
  								<!-- <th>No</th> -->
  								<th>Visi</th>
  								<th>Misi</th>
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
  <!-- <div class="modal modal-danger fade" id="formModalDelete" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog">
    <div class="modal-content"> -->

  <!-- Modal Header -->
  <!-- <div class="modal-header">
      <h5 class="modal-title text-center" id="myModal">Hapus Data Visi Misi</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span data-feather="x"><span>&times;</span></button>
    </div>
        <form action="#" method="post"> -->
  <!-- Modal body -->
  <!-- <div class="modal-body">
          <p class="text-center">
            Apakah Anda Yakin ?
          </p>
        </div> -->

  <!-- Modal footer -->
  <!-- <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <input type="submit" class="btn btn-danger" name="submit" value="Yes">
        </form>
        </div>
    </div>
  </div>
</div> -->
