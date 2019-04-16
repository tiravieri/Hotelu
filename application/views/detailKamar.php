<html>
	<head>	
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>assets/css/kamar.css">
		<title>Hotelu - Hotel Management System</title>
		<link rel="icon" type="image/png'?>" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>assets/css/detailkamar.css">
	</head>
	
	<body>
		
		<div class="container">
		<br>
			<div class="row kotak1">
				<div class="col-md-12">
					<?php foreach($kamar as $value) {?>
					<div>
						<h4><?php echo $value['tipe']?></h4>
						<h5>IDR <?php echo $value['harga']?><a class="btn btn-lg btn-primary kanan" href="<?php echo site_url('Transaksi_C/index/'.$value['id_kamar']) ?>"> Pesan Sekarang</a></h5>
					</div>
					<?php } ?>
				</div>
			</div>
			
			<div class="col-md-12 rincian">
			<br>
				<h4><img class="" src="<?php echo base_url();?>assets/image/rincian.jpg"> Rincian Ruang Kamar</h4><br>
				<div class="col-md-11 mb-4" style="border:2px solid #BDBDBD"></div>
				<div class="col-md-10 text-justify mx-auto">
					<?php foreach($kamar as $value) {?>
						<p style="font-weigh:500; font-size:17px"><?php echo $value['penjelasan']?></p>
					<?php } ?>
					<div class="row mt-5">
						<?php foreach($kamarfoto as $value2) {?>
						<div class="col-md-6 mx-auto">
							<center><img class="foto" src="<?php echo base_url();?>assets/image/<?php echo $value2['fotokamar']?>"></center>
						</div>
						<?php } ?>
				</div>	
				</div>
				<br><br>
			</div>
			
			<div class="col-md-12 fasilitas">
				<h3>Fasilitas Kamar</h3><br>
				<div class="row">
					<?php foreach($fasilitas as $value2) {?>
					<div class="col-md-3 mx-auto">
						<center><img class="foto" src="<?php echo base_url();?>assets/image/<?php echo $value2['fotofasilitas']?>"></center>
						<p><?php echo $value2['fasilitas']?></p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</body>
</html>
