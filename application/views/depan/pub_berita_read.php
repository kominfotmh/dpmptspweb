<main id="main" class="main-page">
    <section id="docs-details" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-10 mx-auto">
                        <img src="<?php echo base_url();?>assets/img/berita/<?php echo $read_b->gambar;?>" alt="<?php echo $read_b->gambar;?>" class="img-fluid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:30px;">
                    <div class="col-md-10 mx-auto">
                        <div class="details">
                            <h2><?php echo $read_b->judul;?></h2>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                            <br>
                            <?php echo $read_b->isi;?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12" style="margin-top: 30px;">
                    <div class="col-md-10 mx-auto">
                        <div><a type="button" class="btn btn-danger" href="<?php echo site_url('Frontp/berita_all');?>"><i class="fa fa-reply"></i> LIHAT BERITA LAINNYA</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>