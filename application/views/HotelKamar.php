<html>
	<head>
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>assets/css/kamar.css">
		<title>Hotelu - Hotel Management System</title>
		<link rel="icon" type="image/png'?>" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
		<!-- SweetAlert-->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.min.css"></script>
		<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	</head>
	<body>
		<?php 
			if($this->session->userdata('query') != ""){
				echo '<script> swal("Transaksi Berhasil","Sukses","success") </script>';
				unset($_SESSION['query']);
			}
		?>
		
		<div class="container">
				
				<div class="col-md-12">
					<h1 class="mx-auto text-center my-4" style="font-weight:600;color:#616161">Daftar Kamar</h1>
					<div class="row kotakartikel">
						<?php foreach($kamar as $value) {?>
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 mx-auto kotak">
							<a href="<?php echo site_url('C_Kamar/halKamar/'.$value['id_kamar'])?>">
								<img src="<?php echo base_url();?>assets/image/<?php echo $value['foto']?>">
								<br>
								<div class="label">
									<center><div class="label_txt"><?php echo $value['tipe']?></div></center>
									<p class="label_txt">RP. <?php echo $value['harga']?></p>
									
								</div>
								
							</a>
							<br>
						</div>
						<?php } ?>
					</div>
				</div>
			
		</div>
		
	</body>
</html>