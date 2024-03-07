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
    <style>
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }
        .tab button:hover {
            background-color: #ddd;
        }
        .tab button.active {
            background-color: #ccc;
        }
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
        
        
        /*Clearing Floats*/
        .cf:before, .cf:after{
            content:"";
            display:table;
        }

        .cf:after{
            clear:both;
        }

        .cf{
            zoom:1;
        }    
        /* Form wrapper styling */

        .search-wrapper {
            width: 450px;
            margin: 10px auto 50px auto;
            border-radius: 40px;
            background: transparent;
            box-shadow: 0 4px 20px -2px #e9e9e9;
        }

        /* Form text input */

        .search-wrapper input {
            padding-left: 0px;
            width: 330px;
            height: 30px;
            padding: 20px 20px;
            float: left;   
            font: 14px 'lucida sans', 'trebuchet MS', 'Tahoma';
            border: 0;
            background: #fff;
            border-radius: 40px;
            border-top-style: none;
        }

        .search-wrapper input:focus {
            outline: 0;
            background: #fff;
            box-shadow: 0 0 2px rgba(0,0,0,0.8) inset;
        }

        .search-wrapper input::-webkit-input-placeholder {
           color: #999;
           font-weight: normal;
           font-style: normal;
            padding-left: 0px;
        }

        .search-wrapper input:-moz-placeholder {

            color: #999;
            font-weight: normal;
            font-style: italic;
        }

        .search-wrapper input:-ms-input-placeholder {
            color: #999;
            font-weight: normal;
            font-style: italic;
            border-style: none;
        }   

        /* Form submit button */
        .search-wrapper button {
            overflow: visible;
            position: relative;
            float: right;
            border: 0;
            padding: 0;
            cursor: pointer;
            height: 40px;
            width: 110px;
            font: 13px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
            color: #fff;
            text-transform: uppercase;
            background: crimson;
            border-radius: 40px;
            text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
        }  

        .search-wrapper button:hover{    
        /*     background: #e54040; */
        }  

        .search-wrapper button:active,
        .search-wrapper button:focus{  
            background: #198cff;
            outline: 0;  
        }

        .search-wrapper button:focus:before,
        .search-wrapper button:active:before{
                border-right-color: #c42f2f;
        }     

        .search-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
            border: 0;
            padding: 0;
        }   
        
    </style>
    
    <script>
    function showInfo() {
        var v = document.getElementById("izin").value;
        url='http://192.168.0.20/dpmptsptomohon/Frontp/getinfo?q='+v;
        if (v == "") {
            document.getElementById("infodetil").innerHTML = "";
        } 
        else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("infodetil").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET",url,true);
            xmlhttp.send();
        }
      }
    </script>
</head>

<body>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
              <a href="#intro" class="scrollto"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Beranda</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#beritainfo">Berita & Informasi</a></li>
                    <li><a href="#publikasi">Publikasi & Layanan</a></li>
                    <li><a href="#docs">Produk Dinas</a></li>
                    <li class="publikasi"><a href="#" data-toggle="modal" data-target="#saran">Saran & Pengaduan</a></li>
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

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
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
