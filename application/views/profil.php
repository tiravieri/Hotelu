<html>
    <head>
        <title>Hotelu - Hotel Management System</title>
        <link rel="icon" type="image/png'?>" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/profil.css">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <?php
                foreach ($mmbr as $custom) {?>
                <div class="col-md-5 mx-auto batas ">
                    <div>
                        <h5>Username : <span class="data"><?php echo $custom->username;?></span><h5>
                        <h5>Nama : <span class="data"><?php echo $custom->nama;?></span><h5>
                        <h5>Umur : <span class="data"><?php echo $custom->umur;?></span><h5>
                        <h5>Jenis Kelamin : <span class="data"><?php echo $custom->jeniskelamin;?></span><h5>
                        <h5>Email : <span class="data"><?php echo $custom->email;?></span><h5>
                        <br>
                        <center><button class="btn btn-md  btn-info" data-toggle="modal" data-target="#edit<?php echo $custom->email; ?>">Change Profile</button><br></center>
                    </div>
                
                </div>

                <div id="edit<?php echo $custom->email; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                        <h4 class="modal-title">Edit Data Profile</h4>
                                    </div>
                                    <?php echo form_open("C_Profile/updateCustomer"); ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label" for="email">email</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $custom->email; ?>">
                                            <input type="hidden" name="email" class="form-control" value="<?php echo $custom->email; ?>" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="username">Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $custom->username; ?>" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $custom->nama; ?>" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="umur">Umur</label>
                                            <input type="text" name="umur" class="form-control" value="<?php echo $custom->umur; ?>" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="jk">Jenis Kelamin</label>
                                            <input type="text" name="jk" class="form-control" value="<?php echo $custom->jeniskelamin; ?>" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" value="<?php echo $custom->password; ?>" required>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                        <button type="submit" class="btn btn-primary" name="edit" value="Edit">Edit</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                            
                            <div id="hapus<?php echo $custom->email; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Anda Ingin Menghapus Akun <?php echo $custom->email;?>?</h4>
                                    <?php echo form_open("C_Profile/delete"); ?>
                                    <input type="hidden" name="no_artikel" class="form-control" value="<?php echo $custom->email;?>" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                        <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                </div>
                
                <div class="col-md-1 mx-auto kotak"><hr class="garis"></div>
                
                <div class="col-md-5 mx-auto fotoo ">
                    <center><h4> Hello </h4></center>
                    <center><h3><?php echo $custom->nama;?></h3></center>
                    <center>
                        <p style="font-weight: bold; font-size: 16px;">Your Picture</p>
                        <img class="avatar mx-auto" alt="kosong" src="<?php echo base_url()?>image/<?php echo $custom->foto;?>"><br>		
                        <a class="btn btn-md btn-info" href="<?php echo site_url('C_Profile/ubahfoto')?>">Change Picture</a>
                    </center>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
    <?php 
    //$this->load->view('footer'); 
    if($this->session->flashdata('message') == 'Error Login'){
    echo "<script>alert('Username or Password is Incorrect.');</script>";
    }
    ?>
</html>