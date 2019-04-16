<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/regis.css">
<body>
	<div class="container">
		
		
		<div class="row">
			<div class="col-md-5">
			<form action="<?php echo site_url('C_Regis/register'); ?>" method="POST">
				<div class="form-group">
					<label for="username">Username</label>
				   <input class="form-control" type="text" name="username" placeholder="Username" required/>
			  	</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="text" name="email" placeholder="Email" />
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" placeholder="Password" />
        		</div>
				
				<div class="form-group">
					<label for="nama">Name</label>
					<input class="form-control" type="text" name="nama" placeholder="Name" />
        		</div>
				
				<div class="form-group">
					<label for="jk">Gender</label>
					<input class="form-control" type="text" name="jk" placeholder="Male/Female" />
        		</div>
				
				<div class="form-group">
					<label for="umur">Age</label>
					<input class="form-control" type="text" name="umur" placeholder="Age is just a number" />
        		</div>
			
			</div>		
			
			<div class="col-md-5 my-auto mx-auto">
				<h3 class="text-center">Register To HotelU</h3>
				<center><img src="<?php echo base_url();?>assets/image/cash-register.png"></center>
       			<center><button type="submit" class="btn btn-lg btn-info">Register</button></center>
				<center>
					<p>Sudah Punya Akun? 
           				<a href="<?php echo site_url('C_Akun/index') ?>">Login disini.</a>
          			</p>
				</center>
			</div>
			</form>
			</div>
		</div>
	
</body>
</html>