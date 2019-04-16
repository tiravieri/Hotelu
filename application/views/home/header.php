<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		if(empty($title)) {
			echo 'HotelU';
		} else {
			echo $title;
		}
		?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Favicon-->
	<!--link rel="icon" type="image" href="<?php echo base_url(); ?>user/images/favicon.png"-->
	<!--Bootstrap's CSS Embedding-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/vendor/bootstrap/css/bootstrap.min.css">
	<!--Font Embedding-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/css/fonts.css">
	<!--Font Awesome Icons Embedding-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
	<!--Bootstrap Form Helpers-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/vendor/bootstrap-form-helpers/css/bootstrap-formhelpers.min.css">
	<!--dataTables-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/vendor/DataTables/datatables.min.css">
	<!--CSS-->
	<?php
	if(isset($filename)) {
		echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'user/css/' . $filename . '.css">';
	}
	?>
	<!--Navbar CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/css/navbar.css">
</head>