<main id="main" class="main-page">
    <section id="beritainfo" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
              <h2>Berita & Informasi</h2>
              <p>Berita dan Informasi terkait Penanaman Modal serta Pelayanan Perizinan dan Non Perizinan</p>
            </div>

            <div class="row">
                <?php $i=0; foreach($list as $berita){?>
                <div class="col-lg-3 col-md-6">
                    <div class="berita">
                        <div class="berita-img">
                            <img src="<?php echo base_url();?>assets/img/berita/<?php echo $berita->gambar;?>" alt="<?php echo $berita->gambar;?>" class="img-fluid" style="height:150px;">
                        </div>
                        <h3><a style="font-size: 16px;"><?php echo substr_replace($berita->judul, "...", 40);?></a></h3>
                        <p style="font-size: 12px;"><a href="<?php echo site_url('Frontp/berita_read/'.$berita->id);?>" style="color: #999999;">Selengkapnya >></a></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
</main>