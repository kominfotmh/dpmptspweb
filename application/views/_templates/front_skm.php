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
        .search-wrapper {
            width: 450px;
            margin: 10px auto 50px auto;
            border-radius: 40px;
            background: transparent;
            box-shadow: 0 4px 20px -2px #e9e9e9;
        }
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
        function lanjut(){
            var x = document.getElementById("pertama");
            var y = document.getElementById("kedua");
            var jk = document.getElementsByName("jk");
            var check1 = 0;
            for(i=0;i<jk.length;i++){
                if(jk[i].checked){
                    check1++;
                    break;
                }
            }
            
            var pend = document.getElementsByName("pend");
            var check2 = 0;
            for(i=0;i<pend.length;i++){
                if(pend[i].checked){
                    check2++;
                    break;
                }
            }
            
            var usia = document.getElementsByName("usia");
            var check3 = 0;
            for(i=0;i<usia.length;i++){
                if(usia[i].checked){
                    check3++;
                    break;
              }
            }
            
            var kerja = document.getElementsByName("kerja");
            var check4 = 0;
            for(i=0;i<kerja.length;i++){
                if(kerja[i].checked){
                    check4++;
                    break;
                }
            }
            
            var layanan = document.getElementsByName("layanan");
            var check5 = 0;
            for(i=0;i<layanan.length;i++){
                if(layanan[i].checked){
                    check5++;
                    break;
                }
            }           
            
            if(check1 && check2 && check3 && check4 && check5){
                x.style.display = "none";
                y.style.display = "block";
            }
            else{
                document.getElementById("pesan").innerHTML = "Silahkan pastikan semua pertanyaan telah terisi.";
            }   
        }
        
        function kembali(){
            var x = document.getElementById("pertama");
            var y = document.getElementById("kedua");
            x.style.display = "block";
            y.style.display = "none";
        }
        
        function simpan(){
            var q1 = document.getElementsByName("q1");
            var a1 = 0;
            for(i=0;i<q1.length;i++){
                if(q1[i].checked){
                    a1++;
                    break;
                }
            }
            
            var q2 = document.getElementsByName("q2");
            var a2 = 0;
            for(i=0;i<q2.length;i++){
                if(q2[i].checked){
                    a2++;
                    break;
                }
            }
            
            var q3 = document.getElementsByName("q3");
            var a3 = 0;
            for(i=0;i<q3.length;i++){
              if(q3[i].checked){
                a3++;
                break;
              }
            }
            
            var q4 = document.getElementsByName("q4");
            var a4 = 0;
            for(i=0;i<q4.length;i++){
                if(q4[i].checked){
                    a4++;
                    break;
                }
            }
            
            var q5 = document.getElementsByName("q5");
            var a5 = 0;
            for(i=0;i<q5.length;i++){
                if(q5[i].checked){
                    a5++;
                    break;
                }
            } 
            
            var q6 = document.getElementsByName("q6");
            var a6 = 0;
            for(i=0;i<q6.length;i++){
                if(q6[i].checked){
                    a6++;
                    break;
                }
            }
            
            var q7 = document.getElementsByName("q7");
            var a7 = 0;
            for(i=0;i<q7.length;i++){
                if(q7[i].checked){
                    a7++;
                    break;
                }
            }
            
            var q8 = document.getElementsByName("q8");
            var a8 = 0;
            for(i=0;i<q8.length;i++){
                if(q8[i].checked){
                    a8++;
                    break;
                }
            }
            
            var q9 = document.getElementsByName("q9");
            var a9 = 0;
            for(i=0;i<q9.length;i++){
                if(q9[i].checked){
                    a9++;
                    break;
                }
            }
            
            if(a1 && a2 && a3 && a4 && a5 && a6 && a7 && a8 && a9){
                document.getElementById("simpan").disabled = false;
            }
        }
    </script>
    
    
</head>
<body>
    <header id="header" class="header-fixed">
        <div class="container">
            <div id="logo" class="pull-left">
              <a href="<?php echo site_url('Frontp');?>" class="scrollto"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="#">SURVEY KEPUASAN MASYARAKAT</a></li>
                    <li class="publikasi"><a href="<?php echo site_url('Frontp');?>#publikasi">Website DPMPTSP</a></li>
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