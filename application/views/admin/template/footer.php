<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; <?= date('Y'); ?> <a href="#">Badan Kesatuan Bangsa Dan Politik Provinsi Papua Barat</a>.</strong>
	All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/adminlte/')?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/adminlte/')?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/adminlte/')?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?= base_url('assets/adminlte/')?>plugins/summernote/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
	$(".textarea").summernote({
		callbacks: {
			onInit : function(){
          		$oldValue = this.value;
			},
			onImageUpload : function(files, editor, welEditable) {
				for(var i = files.length - 1; i >= 0; i--) {
						sendFile(files[i], this);
				}
			},
			onMediaDelete : function(files) {
				//alert(files[0].src);
				if((files[0].src).includes("assets/img/summernote/")){
					deleteFile(files[0].src);		
				}
            },
			onKeyup : function(e){
				$newValue = e.target.innerHTML;
				if(e.keyCode == 8 || e.keyCode == 46){
					oldImages = $oldValue.match(/<img\s(?:.+?)>/g);
					newImages = $newValue.match(/<img\s(?:.+?)>/g);
					$oldValue = $newValue;
            		var arrayImages  = $(oldImages).not(newImages).get().map(el => $(el).prop('src'));
					var deletedImages = arrayImages.toString();
					if(deletedImages.includes("assets/img/summernote/")){
						deleteFile(deletedImages);	
					}
				}
			}
		}
    });
});

function sendFile(file, el) {
	var form_data = new FormData();
	form_data.append('file', file);
	$.ajax({
		data: form_data,
		type: "POST",
		url: '<?php echo base_url('summernote/upload_summernote') ?>',
		cache: false,
		contentType: false,
		processData: false,
		success: function(url) {
			$(el).summernote('editor.insertImage', url);
		}
	});
}

function deleteFile(src) {
	$.ajax({
		data: {src : src},
		type: "POST",
		url: '<?php echo base_url('summernote/delete_summernote') ?>',
		cache: false,
		success: function(resp) {
			console.log(resp);
		}
	});
}
</script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/adminlte/')?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/adminlte/')?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/')?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/adminlte/')?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/adminlte/')?>dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/select2/js/select2.full.min.js"></script>

<script src="<?= base_url('assets/plugins/sweetalert/sweetalert.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/sweetalert/dialogs.js'); ?>"></script>
<!-- page script -->
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});

		//Initialize Select2 Elements
		$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	});
</script>
<script type="text/javascript">
	$(document).ready(function () {
		bsCustomFileInput.init();
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		if ($('[name="jabatan"]').val() == "2") {
			$('#sket_jabatan').show();
			$('[name="jabatan"]').change(function() {
				if ($('[name="jabatan"]').val() == "1" || $('[name="jabatan"]').val() == "3") {
					$('#sket_jabatan').hide();
				} else {
					$('#sket_jabatan').show();
				}
			})
		} else {
			$('#sket_jabatan').hide();
			$('[name="jabatan"]').change(function() {
				if ($('[name="jabatan"]').val() == "2") {
					$('#sket_jabatan').show();
				} else {
					$('#sket_jabatan').hide();
				}
			})
		}

	});
</script>

<script type="text/javascript">
  $(function () {

    <?php
    if (!is_null($this->session->flashdata('message'))) {
      $message = $this->session->flashdata('message');
      echo 'swal({
        title:"Berhasil",
        text: "'.$message['text'].'",
        timer: 10000,
        showConfirmButton: true,
        type: "'.$message['type'].'"
      });';
    }
    ?>

	<?php

	if (!is_null($this->session->flashdata('message1'))) {
	$message1 = $this->session->flashdata('message1');
	echo 'swal({
		title:"Gagal",
		text: "'.$message1['text'].'",
		timer: 10000,
		showConfirmButton: true,
		type: "'.$message1['type'].'"
	});';
	}
	?>

  });
</script>
<!-- <script src="https://cdn.tiny.cloud/1/f63l8014l01vc1iotg5c6239v7c8d1pu5cs3rfd990bbojpt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  	<script>
      tinymce.init({
        selector: '#mytextarea'
      });
			tinymce.init({
        selector: '#mytextarea2'
      });
    </script> -->
</body>

</html>
