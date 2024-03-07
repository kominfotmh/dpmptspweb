<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DPMPTSPD Kota Tomohon</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/faviconbig.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/lib/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
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

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
  
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#hotels">Berita & Informasi</a></li>
          <li><a href="#buy-tickets">Publikasi & Layanan</a></li>
          <li><a href="#docs">Produk Dinas</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Saran & Pengaduan</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Dinas Penanaman Modal<br><span>dan</span> PTSP Daerah</h1>
      <p class="mb-4 pb-0">Kota Tomohon</p>
      <a href="https://www.youtube.com/watch?v=RpEK-kUONr8" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a class="about-btn scrollto">Informasi Perizinan</a>
    </div>
  </section>

  <main id="main">
    <section id="hotels" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Berita & Informasi</h2>
          <p>Berita dan Informasi terkait Penanaman Modal serta Pelayanan Perizinan dan Non Perizinan</p>
        </div>

        <div class="row">
            <?php $i=0; foreach($b as $berita){?>
                <div class="col-lg-3 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="<?php echo base_url();?>assets/img/berita/<?php echo $berita->gambar;?>" alt="<?php echo $berita->gambar;?>" class="img-fluid" style="height:150px;">
                        </div>
                        <h3><a style="font-size: 16px;"><?php echo substr_replace($berita->judul, "...", 40);?></a></h3>
                        <p style="font-size: 12px;"><a href="#" style="color: #999999;">Selengkapnya >></a></p>
                    </div>
                </div>
            <?php 
            if (++$i == 8){
                    break;
                }
            }?>
        </div>
        <div align="center"><button type="button" class="btn btn-danger">Lihat Semua</button></div>
      </div>
    </section>

      
      
 <section id="gallery" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Galeri Kegiatan</h2>
          <p>Dokumentasi Pelaksanaan Kegiatan DPMPTSPD Kota Tomohon</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
            <?php $j=0; foreach ($g as $galeri){?>
                <a data-gall="gallery-carousel"><img src="<?php echo base_url();?>assets/img/galeri/<?php echo $galeri->gambar;?>" alt="" title="<?php echo $galeri->deskripsi;?>"></a>
            <?php 
            if (++$j == 20){
                    break;
                }
            }?>  
      </div>

    </section>
      
      
    
    <section id="buy-tickets" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Publikasi & Layanan</h2>
          <p>Publikasi Capaian Kerja & Layanan Perizinan dan Non Perizinan yang Tersedia</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
                <div class="card-header" style="background-color: crimson;">
                <h5 class="card-title text-uppercase text-center" style="color: white;">NILAI REALISASI INVESTASI</h5>
              </div>
              <div class="card-body">
                <h6 class="card-price text-center" style="font-size: 35px;">Rp. 2.800.000.000</h6>
              </div>
            </div>
          </div>
            
            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
                <div class="card-header" style="background-color: crimson;">
                <h5 class="card-title text-uppercase text-center" style="color: white;">INDEKS KEPUASAN MASYARAKAT</h5>
              </div>
              <div class="card-body">
                <h6 class="card-price text-center" style="font-size: 35px;">91,5</h6>
              </div>
            </div>
          </div>
            
            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
                <div class="card-header" style="background-color: crimson;">
                <h5 class="card-title text-uppercase text-center" style="color: white;">RASIO DAYA SERAP TENAGA KERJA</h5>
              </div>
              <div class="card-body">
                <h6 class="card-price text-center" style="font-size: 35px;">16,3</h6>
              </div>
            </div>
          </div>
              </div>
          <br><br><br>
          <div class="row" align="center">
              <div class="col-lg-12 left">
                <a href="https://oss.go.id/" target="_blank" type="button" class="btn btn-danger" style="color: white;">KE OSS-RBA</a>
                <a href="http://doclicense.tomohon-kota.com/" target="_blank" type="button" class="btn btn-danger" style="color: white;">KE SIMANTAP</a></div>
              
            </div>
            </div>
          </div>
      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <select id="ticket-type" name="ticket-type" class="form-control" >
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </section>
         
      
    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Dokumen Kedinasan</h2>
          <p>Produk Hukum dan Peraturan Terkait Penanaman Modal</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="speaker">
              <img src="<?php echo base_url();?>assets/img/pdf.jpg" alt="pdf" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Dokumen 1</a></h3>
                <p>Perwako Nomor/Tahun</p>
                <div class="social">
                  <a href=""><i class="fa fa-download"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="speaker">
              <img src="<?php echo base_url();?>assets/img/word.jpg" alt="word" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a>Dokumen 2</h3>
                <p>Laporan Pelaksanaan</p>
                <div class="social">
                  <a href=""><i class="fa fa-download"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="speaker">
              <img src="<?php echo base_url();?>assets/img/excel.jpg" alt="excel" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Dokumen 3</a></h3>
                <p>Tabel Rencana Kerja</p>
                <div class="social">
                  <a href=""><i class="fa fa-download"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="speaker">
              <img src="<?php echo base_url();?>assets/img/pp.jpg" alt="power point" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a>Dokumen 4</h3>
                <p>Materi OSS</p>
                <div class="social">
                  <a href=""><i class="fa fa-download"></i></a>
                </div>
              </div>
            </div>
          </div>
            <div class="col-lg-3 col-md-6">
            <div class="speaker">
              <img src="<?php echo base_url();?>assets/img/excel.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Dokumen 5</a></h3>
                <p>Tabel resiko</p>
                <div class="social">
                  <a href=""><i class="fa fa-download"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="speaker">
              <img src="<?php echo base_url();?>assets/img/pdf.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a>Dokumen 6</h3>
                <p>SOP Pengawasan</p>
                <div class="social">
                  <a href=""><i class="fa fa-download"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        
    </section>
  </main>


  <!--==========================
    Footer
  ============================-->
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
              <li><i class="fa fa-angle-right"></i> <a>Nama 1 - 082232123112</a></li>
              <li><i class="fa fa-angle-right"></i> <a>Nama 2 - 034832929432</a></li>
            </ul>
          </div>
            
            <div class="col-lg-3 col-md-6 footer-links">
            <h4>Informasi Pelaksanaan PM</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a>Nama 1 - 082232123112</a></li>
              <li><i class="fa fa-angle-right"></i> <a>Nama 2 - 034832923432</a></li>
            </ul>
          </div>
         

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              dpmptsp.tomohonkota@gmail.com<br>
              <strong>Telp: (0431) 432-234<br>
                  Kode Pos: 50711</strong>
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
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        @2023
      </div>
    </div>
  </footer><!-- #footer -->

  <div id="tentang" class="modal fade" role="dialog" style="font-size: 14px">
        <div class="modal-dialog modal-lg" style="min-height:2000px;">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Sejarah')">Sejarah</button>
                        <button class="tablinks" onclick="openCity(event, 'Profil')">Profil</button>
                        <button class="tablinks" onclick="openCity(event, 'Struktur')" id="defaultOpen">Struktur</button>
                    </div>
                    <div id="Sejarah" class="tabcontent" style="height:70vh;">
                        <br><p>DPMPTSP Daerah Kota Tomohon terbentuk pada ...</p>
                    </div>
                    <div id="Profil" class="tabcontent" style="height:70vh;">
                        <br>
                        <p>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Daerah Kota Tomohon merupakan Perangkat Daerah yang mendukung
                            pencapaian <b style="color: red;">Visi: Tomohon Maju, Berdaya Saing, dan Sejahtera </b> dengan <b style="color: red;">
                            Misi: Peningkatan Kesejahteraan Masyarakat di Berbagai Sektor.</b></p>
                        <p>Melalui .......... Nomor .........., DPMPTSPD Kota Tomohon diberikan tugas dan kewenangan dalam menjalankan urusan
                        Penanaman Modal dan Pelayanan Perizinan di Kota Tomohon.</p> 
                    </div>
                    <div id="Struktur" class="tabcontent" style="height:70vh;">
                        Struktur Organisasi
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  
  
  
  
  
  
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
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

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
