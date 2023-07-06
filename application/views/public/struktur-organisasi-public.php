        <!-- berita -->
        <div id="visimisi" class="service" style="padding-top: 100px;">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="titlepage" style="padding-bottom: 20px;">
        					<h2 style="width: 450px;">Struktur Organisasi</h2>
        				</div>
        			</div>
					<div class="col-md-12 text-center">
						<div id="st_js"></div>
					</div>				
        		</div>
        	</div>
        </div>
        <!-- end berita -->

<!-- <div id="kontak" style="height:100px;"></div> -->
<!--  footer -->
<footer>
	<div id="kontak" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
					<div class="address">
						<h3>Alamat</h3>
						<iframe
							<?php echo (explode(" ", $data->code_iframe)[1]) ?>
							width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
							tabindex="0"></iframe>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
					<div class="address">
						<h3>Sosial Media</h3>
						<div class="text-center">
							<iframe
								src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjokowi&tabs=timeline&width=200&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1248770581895894"
								width="200" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
								allowTransparency="true" allow="encrypted-media"></iframe>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
					<div class="address">
						<h3>Sosial Media</h3>
						<div class="text-center">
							<iframe
								src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKiyai.MarufAmin&tabs=timeline&width=200&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1248770581895894"
								width="200" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
								allowTransparency="true" allow="encrypted-media"></iframe>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-0">
					<div class="address mb-0">
						<h3>Kontak</h3>
					</div>
					<p class="text-justify text-white mb-2">
						<i class="fas fa-home mr-3"></i> <?php echo $data->alamat_lengkap ?></p>
					<p class="text-justify text-white mb-2">
						<i class="fas fa-envelope mr-3"></i> <?php echo $data->email ?></p>
					<p class="text-justify text-white mb-2">
						<i class="fas fa-phone mr-3"></i> <?php echo $data->telepon ?></p>
					<p class="text-justify text-white mb-2">
						<i class="fas fa-door-open mr-3"></i> <?php echo $data->jam_kerja ?>
					</p>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright 2021 All Right Reserved By <a href="http://satpolpp.papuabaratprov.go.id">Satpol PP Provinsi Papua Barat</a> <a href="#" class="btn btn-success ml-3"
					role="button"><i class="fas fa-chevron-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end footer -->

<!-- Javascript files-->
<script src="<?= base_url('assets/wise/')?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/wise/')?>js/popper.min.js"></script>
<script src="<?= base_url('assets/wise/')?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/wise/')?>js/jquery-3.0.0.min.js"></script>
<script src="<?= base_url('assets/wise/')?>js/plugin.js"></script>
<!-- sidebar -->
<script src="<?= base_url('assets/wise/')?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('assets/wise/')?>js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/js/')?>jQuery.jHTree.js"></script>
<!-- <script src="<?= base_url('assets/js/')?>jquery-1.10.2.js"></script>
<script src="<?= base_url('assets/js/')?>jquery-ui-1.10.4.custom.min.js"></script> -->
<script>
	$(document).ready(function () {
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
		});

		$(".zoom").hover(function () {

			$(this).addClass('transition');
		}, function () {

			$(this).removeClass('transition');
		});
	});

var myData = <?php echo $struktur ?>;
$("#st_js").jHTree({
  callType: 'obj',
  structureObj: myData,
  zoomer : false,
  nodeDropComplete: function (event, data) {
    //----- Do Something @ Server side or client side -----------
    //alert("Node ID: " + data.nodeId + " Parent Node ID: " + data.parentNodeId);
    //-----------------------------------------------------------
  }
});

</script>
</body>

</html>

