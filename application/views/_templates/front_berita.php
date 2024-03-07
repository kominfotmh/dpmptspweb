<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DPMPTSPD Kota Tomohon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url();?>assets/img/faviconbig.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header-fixed">
        <div class="container">
            <div id="logo" class="pull-left">
              <a href="#intro" class="scrollto"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Beranda</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="<?php echo site_url('Frontp');?>#beritainfo">Berita & Informasi</a></li>
                    <li><a href="<?php echo site_url('Frontp');?>#publikasi">Publikasi & Layanan</a></li>
                    <li><a href="<?php echo site_url('Frontp');?>#docs">Produk Dinas</a></li>
                    <li class="publikasi"><a href="<?php echo site_url('Frontp');?>#publikasi">Saran & Pengaduan</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <?php $this->load->view($isi);?>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="<?php echo base_url();?>assets/img/logo.png" alt="TheEvenet">
                        <div class="social-links">
                            <a href="https://www.youtube.com/@dpmptsptomohon4970" target="_blank" class="twitter"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100046536254557" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/dpmptsptomohon/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Informasi Pelayanan</h4>
                        <ul>
                            <?php foreach ($info_pel->result() as $pel){?>
                            <li><i class="fa fa-angle-right"></i> <a><?php echo $pel->nama;?> - <?php echo $pel->kontak;?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Informasi Pelaksanaan PM</h4>
                        <ul>
                            <?php foreach ($info_pm->result() as $pm){?>
                            <li><i class="fa fa-angle-right"></i> <a><?php echo $pm->nama;?> - <?php echo $pm->kontak;?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Hubungi Kami</h4>
                        <p>
                            <?php echo $lain->email;?><br>
                            <strong>Telp: <?php echo $lain->telp;?><br>
                            Kode Pos: <?php echo $lain->pos;?></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                DPMPTSP KOTA TOMOHON
            </div>
            <div class="credits">
                @2023
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/superfish/hoverIntent.js"></script>
    <script src="<?php echo base_url();?>assets/lib/superfish/superfish.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/venobox/venobox.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
