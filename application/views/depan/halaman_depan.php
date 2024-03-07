<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">Dinas Penanaman Modal<br><span>dan</span> PTSP Daerah</h1>
        <p class="mb-4 pb-0">Kota Tomohon</p>
        <a href="<?php echo $lain->video;?>" class="venobox play-btn mb-4" data-vbtype="video"
          data-autoplay="true"></a>
        <a class="about-btn scrollto" data-toggle="modal" data-target="#info_syarat">Informasi Perizinan</a>
    </div>
</section>

<main id="main">
    <section id="beritainfo" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
              <h2>Berita & Informasi</h2>
              <p>Berita dan Informasi terkait Penanaman Modal serta Pelayanan Perizinan dan Non Perizinan</p>
            </div>

            <div class="row">
                <?php $i=0; foreach($b as $berita){?>
                <div class="col-lg-3 col-md-6">
                    <div class="berita">
                        <div class="berita-img">
                            <img src="<?php echo base_url();?>assets/img/berita/<?php echo $berita->gambar;?>" alt="<?php echo $berita->gambar;?>" class="img-fluid" style="height:150px;">
                        </div>
                        <h3><a style="font-size: 16px;"><?php echo substr_replace($berita->judul, "...", 40);?></a></h3>
                        <p style="font-size: 12px;"><a href="<?php echo site_url('Frontp/berita_read/'.$berita->id);?>" style="color: #999999;">Selengkapnya >></a></p>
                    </div>
                </div>
                <?php 
                if (++$i == 8){
                        break;
                    }
                }?>
            </div>
            <div align="center"><a type="button" class="btn btn-danger" href="<?php echo site_url('Frontp/berita_all');?>" style="color: white;">Lihat Semua</a></div>
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

    <section id="publikasi" class="wow fadeInUp">
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
                            <h6 class="card-price text-center" style="font-size: 33px;">Rp. <?php echo number_format($p->realisasi);?></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header" style="background-color: crimson;">
                            <h5 class="card-title text-uppercase text-center" style="color: white;">INDEKS KEPUASAN MASYARAKAT</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-price text-center" style="font-size: 33px;"><?php echo $p->ikm;?></h6>
                        </div>
                    </div>
                </div>

            <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-header" style="background-color: crimson;">
                        <h5 class="card-title text-uppercase text-center" style="color: white;">RASIO DAYA SERAP TENAGA KERJA</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-price text-center" style="font-size: 33px;"><?php echo $p->rasio_tk;?></h6>
                    </div>
                </div>
            </div>
            </div>
            
            <br><br><br>
            <div class="row" align="center">
                <div class="col-lg-12 left">
                    <a href="https://oss.go.id/" target="_blank" type="button" class="btn btn-danger" style="color: white;">KE OSS-RBA</a>
                    <a href="http://doclicense.tomohon-kota.com/" target="_blank" type="button" class="btn btn-danger" style="color: white;">KE SIMANTAP</a>
                </div>
            </div>
        </div>
    </section>

    <section id="docs" class="section-with-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Dokumen Kedinasan</h2>
                <p>Produk Hukum dan Peraturan Terkait Penanaman Modal</p>
            </div>

            <div class="row">
                <?php foreach($d as $dokumen){ ?>
                <div class="col-lg-3 col-md-6">
                    <div class="doc">
                        <img src="<?php echo base_url();?>assets/img/<?php echo $dokumen->tipe_file?>.jpg" alt="pdf" class="img-fluid">
                        <div class="details">
                            <h3 style="font-size: 18px;"><?php echo substr_replace($dokumen->nama, "...", 24);?></h3>
                            <p><?php echo $dokumen->jenis_dok; ?></p>
                            <div class="social">
                                <a href="<?php echo $dokumen->link_dok;?>" target="_blank"><i class="fa fa-search"> Lihat</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
</main>

<div class="modal fade" id="info_syarat" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form class="search-wrapper cf">
                    <input id="izin" type="text" placeholder="Masukan Izin yang akan dilihat..." required style="box-shadow: none" autocomplete="off">
                    <button type="button" onclick="showInfo()">Lihat</button>
                </form>
                <br>
                <div id="infodetil"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?php echo form_open('Frontp/feedback');?>
<div class="modal fade" id="saran" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form-horizontal" style="font-size:14px;">
                    <br>
                    <div class="form-group">
                      <label class="control-label">Jenis Informasi:</label>
                      <div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="pilih1" name="pilih" value="Saran" checked>
                                <label class="form-check-label" for="pilih" style="width: 100px;">Saran</label>
                                <input type="radio" class="form-check-input" id="pilih2" name="pilih" value="Pengaduan">
                                <label class="form-check-label" for="pilih2">Pengaduan</label>
                            </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label">Kategori:</label>
                      <div>
                            <select class="form-control" name="kategori" style="font-size:14px;">
                                <option value="Pelayanan">Pelayanan</option>
                                <option value="SDM">SDM</option>
                                <option value="Sarana dan Prasarana">Sarana dan Prasarana</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                      </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="isi">Saran / Pengaduan:</label>
                        <div>          
                            <textarea class="form-control" name="isi" rows="5" cols="50" style="font-size:14px;"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Kirim</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>