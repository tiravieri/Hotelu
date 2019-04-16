<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
    <title>Hotelu - Hotel Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'/assets/bootstrap/dist/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url().'/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css'?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url().'/assets/css/animate.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'/assets/css/style.css'?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url().'/assets/css/colors/default.css'?>" id="theme" rel="stylesheet">
    <!-- my custom CSS -->
    <link href="<?php echo base_url().'/assets/css/admin-style.css'?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is logo icon--><img src="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>" alt="home" class="admin-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is light logo text--><img src="<?php echo base_url().'/assets/plugins/images/admin-text-dark.png'?>" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" role="button" data-toggle="dropdown"> 
                            <img src="<?php echo base_url().'/assets/plugins/images/users/2919201921.PNG'?>" alt="user-img" width="36" class="img-circle">
                            <b class="hidden-xs">Admin</b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('C_Akun')?> ">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo site_url('MDashboard_C')?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MKamar_C')?>" class="waves-effect"><i class="fa fa-building fa-fw" aria-hidden="true"></i>Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MStaff_C')?>" class="waves-effect"><i class="fa fa-group fa-fw" aria-hidden="true"></i>Staff</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MTamu_C')?>" class="waves-effect"><i class="fa fa-male fa-fw" aria-hidden="true"></i>Tamu</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('MTransaksi_C')?>" class="waves-effect"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>Transaksi</a>
                    </li>
                    <li>
                        <a href="aaa" class="waves-effect"><i class="fa fa-spin fa-cog fa-fw" aria-hidden="true"></i>Pengaturan</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">MANAGE PEGAWAI</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Manage Pegawai</li>
                        </ol>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Input Pegawai</h3>
                            <p style="position:relative;border:solid #54667a 1px;margin-bottom:5%"></p> 
                            <!-- <form class="form-horizontal form-material"> -->
                            <?php echo form_open_multipart('MStaff_C/register', 'class="form-horizontal form-material" runat="server"'); ?>
                                <div class="form-group">
                                    <label class="col-md-12">Nama</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nama" placeholder="Masukkan nama" class="form-control form-control-line"> 
                                        <?php echo form_error('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Email</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="email" placeholder="Masukkan email" class="form-control form-control-line"> 
                                        <?php echo form_error('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="pass" placeholder="Password" class="form-control form-control-line"> 
                                        <?php echo form_error('pass'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Jabatan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="jabatan">
                                            <option value="">Pilih Jabatan</option>
                                            <option value="Human Resource">Human Resource</option>
                                            <option value="Receptionist">Receptionist</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Office Worker">Office Worker</option>
                                        </select>
                                        <?php echo form_error('jabatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Jenis Kelamin</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="jk">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?php echo form_error('jk'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Umur</label>
                                    <div class="col-md-12">
                                        <input type="number" name="umur" placeholder="Masukkan Umur" class="form-control form-control-line"> 
                                        <?php echo form_error('umur'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Input Pegawai Baru</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Daftar Pegawai</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur</th>
                                            <th rowspan="2" class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; foreach($data as $item){ $i++;?>
                                            <tr>
                                                <td><?php echo $i?></td>
                                                <td><?php echo $item->nama?></td>
                                                <td><?php echo $item->email?></td>
                                                <td><?php echo $item->jabatan?></td>
                                                <td><?php echo $item->jeniskelamin?></td>
                                                <td><?php echo $item->umur?></td>
                                                <td><a class="btn btn-danger" title="Hapus Data" onclick="return confirmed('<?php echo site_url('MStaff_C/hapus/'.$item->id)?>')"><i class="fa fa-trash-o"></i></a></td>
                                                <td><button class="btn btn-primary" title="Ubah Data" data-toggle="modal" data-target="#myModal<?php echo $i?>"><i class="fa fa-pencil-square-o"></i></button></td>
												
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                    <!-- modal -->
                    <?php $i=0; foreach($data as $item){ $i++;?>
                        <div class="modal" id="myModal<?php echo $i?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h4 class="modal-title">Ubah Data Pegawai</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <!-- <form method="POST" action="" enctype="multipart/form-data">  -->
                                        <?php echo form_open_multipart('MStaff_C/update/'.$item->id, 'class="form-horizontal form-material" runat="server"'); ?>
                                            <div class="col-md-6" style="margin-top:5%">
                                                <div>
                                                    <h4>Nama Pegawai</h4>
                                                    <input  class="form-control select2" type="text" name="nama" value="<?php echo $item->nama?>" style=" width: 100%;">
                                                </div>
                                                <div>
                                                    <h4>Email Pegawai</h4>
                                                    <input  class="form-control select2" type="text" name="email" value="<?php echo $item->email?>" style=" width: 100%;">
                                                </div>
                                                <div>
                                                    <h4>Password</h4>
                                                    <input  class="form-control select2" type="text" name="pass" value="<?php echo $item->password?>" style=" width: 100%;">
                                                </div>
                                                <div>
                                                    <h4>Jabatan</h4>
                                                    <select class="form-control form-control-line" name="jabatan">
                                                        <option value="">Pilih Jabatan</option>
                                                        <option value="Human Resource">Human Resource</option>
                                                        <option value="Receptionist">Receptionist</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Office Worker">Office Worker</option>
                                                    </select>                                            
                                                </div>
                                                <div>
                                                    <h4>Jenis Kelamin</h4>
                                                    <select class="form-control form-control-line" name="jk">
                                                        <option value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:5%">
                                                <div>
                                                    <h4>Umur</h4>
                                                    <input type="number" name="umur" value="<?php echo $item->umur?>" class="form-control select2"> 
                                                </div>
                                                
                                                <div>
                                                    <input class="btn btn-success" type="submit" value="SUBMIT" style="margin-top:5%; width:100%">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer"></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end modal -->                       
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url().'/assets/plugins/bower_components/jquery/dist/jquery.min.js'?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'/assets/bootstrap/dist/js/bootstrap.min.js'?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js'?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url().'/assets/js/jquery.slimscroll.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'/assets/js/waves.js'?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'/assets/js/custom.min.js'?>"></script>
    <!-- SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.min.css"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script>
        function confirmed(url){
            Swal({
                title: 'Anda yakin ingin menghapus data?',
                text: "data tidak dapat dikembalikan",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    location.href=url;
                    Swal(
                    'Deleted!',
                    'Data telah dihapus',
                    'success'
                    )
                }else{
                    return false;
                }
            })
        }
    </script>
</body>

</html>