<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png'?>" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
        <title>Hotelu - Hotel Management System</title>
        <link href="<?php echo base_url().'/assets/css/transaksi.css'?>" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <ul class="nav nav-details mb-5">
            <div class="container">
                <div class="row">
                    <li class="nav-item col-md-4 my-2 active" id="navR">
                        <a href="#rincian" class="text-center nav-link nav-details-link active  ">1. Rincian Anda</a>
                    </li>
                    <li class="nav-item col-md-4 my-2" id="navP">
                        <a href="#pembayaran" class="text-center nav-link nav-details-link">2. Pembayaran</a>
                    </li>
                    <li class="nav-item col-md-4 my-2" id="navS">
                        <a href="#selesai" class="text-center nav-link nav-details-link">3. Selesai</a>
                    </li>
                </div>
            </div>
        </ul>
        
        <div class="col-md-7 mx-auto p-0 content">
            <div class="container p-0 pb-3" id="rincian" style="border:#0BD3D5 3px solid">
                <p style="color:#FFFFFF; background-color:#0BD3D5;font-weight:700;font-size:23px" class="p-2">Ringkasan Pesanan</p>
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="rounded-circle mx-auto my-auto" style="background-color:#FFFFFF" src="<?php echo base_url().'/assets/plugins/images/logo-transaksi.png'?>" width=220px height=220px alt="image transaksi">
                    </div>
                    <div class="col-md-7 rincian">
                        <div class="row float-right">
                            <div class="col-md-6">
                                <a class="rincian-label">ID Pesanan</a><br>
                                <a class="rincian-label"><?php echo $data[0]->tipe?></a><br>
                                <a class="rincian-label">1 Malam 1 Dewasa</a><br>
                                <a class="rincian-label">Check-in</a><br>
                                <a class="rincian-value">Fri, 20 April 2018</a><br>
                                <a class="rincian-label">Harga</a><br>
                                <a class="rincian-label">Biaya Pelayanan</a><br>
                            </div>
                            <div class="col-md-6">
                                <a class="rincian-label"><?php $id = uniqid(); echo $id?></a><br>
                                <br><br>
                                <a class="rincian-label">Check-out</a><br>
                                <a class="rincian-value">Sat, 21 April 2018</a><br>
                                <a class="rincian-value">IDR <?php echo $data[0]->harga?></a><br>
                                <a class="rincian-value">Gratis</a><br>
                            </div>
                            <div class="col-md-11">
                                <a id="nextR" role="button" class="btn btn-success mx-auto mt-3" style="color:white;font-weight:600;width:100%">NEXT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-0 pb-3" id="pembayaran" style="border:#0BD3D5 3px solid">
                <p style="color:#FFFFFF; background-color:#0BD3D5;font-weight:700;font-size:23px" class="p-2">Metode Pembayaran</p>
                <div class="row">
                    <div class="container mb-3">
                        <div class="row mx-auto text-center">
                            <div class="col-md-4 px-3"><button class="btn btn-info btn-pembayaran">TRANSFER</button></div>
                            <div class="col-md-4 px-3"><button class="btn btn-info btn-pembayaran">VIRTUAL ACCOUNT</button></div>
                            <div class="col-md-4 px-3"><button class="btn btn-info btn-pembayaran">ATM</button></div>
                        </div>
                    </div>
                    <div class="col-md-11 mx-auto mb-3" style="border:1px #BDBDBD solid"></div>
                    <div class="col-md-10 mx-auto">
                    <div class="container mb-3">
                        <div class="row text-center">
                            <a class="col-md-3 btn"><img style="width:70%; height:50px" src="<?php echo base_url().'/assets/plugins/images/bca.png'?>"></a>
                            <a class="col-md-3 btn"><img style="width:70%; height:50px" src="<?php echo base_url().'/assets/plugins/images/bri.png'?>"></a>
                            <a class="col-md-3 btn"><img style="width:70%; height:50px" src="<?php echo base_url().'/assets/plugins/images/bni.png'?>"></a>
                            <a class="col-md-3 btn"><img style="width:70%; height:50px" src="<?php echo base_url().'/assets/plugins/images/mandiri.png'?>"></a>
                        </div>
                        </div>
                        <div class="container">
                            <div class="row py-3" style="border: 3px solid #BDBDBD; border-radius:8px">
                                <div class="col-md-4"><img style="width:65%" src="<?php echo base_url().'/assets/plugins/images/bca.png'?>"></div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="rincian-label">Kode Pembayaran</p>
                                            <p class="rincian-label">Jumlah</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="rincian-value">7000844328712</p>
                                            <p class="rincian-value"><?php echo $data[0]->harga?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <?php
                                $transaksi = array(
                                    'id' => $id,
                                    'username' => $this->session->userdata('username'),
                                    'id_kamar' => $data[0]->id_kamar,
                                    'durasi' => 1,
                                    'totalbayar' => $data[0]->harga,
                                    'jenis' => 'Virtual BCA',
                                    'status' => 'dipesan',
                                    'tanggal' => date('Y-m-d')
                                );
                                $this->session->set_flashdata('transaksi', $transaksi);
                            ?>
                            <a id="nextP" href="<?php echo site_url('Transaksi_C/input/')?>" role="button" class="btn btn-success mx-auto mt-3" style="color:white;font-weight:600;width:100%">NEXT</a>
                        </div>
                    </div>                
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url().'/assets/plugins/bower_components/jquery/dist/jquery.min.js'?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo base_url().'assets/js/transaksi.js'?>"></script>
        
    </body>
</html>