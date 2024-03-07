<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Galeri / Tambah Galeri</small>
    </h1>
</section>

<?php echo form_open_multipart('Back_o/galeri_tambah_do');?>>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h6 class="box-title" style="font-size: 16px;">Tanggal <?php echo date('d F Y');?> | Oleh : <?php echo $this->session->userdata('nama');?></h6>
                </div>
        
                <div class="box-body">
                    <div class="col-md-12">
                        <p>Deskripsi</p>
                        <p><input class="form-control" name="deskripsi" placeholder="* Deksripsi Gambar"  autocomplete="off" required></p>
                    </div>
                    <div class="col-md-4">
                        <p>Gambar (Ratio 4:3 | Ukuran Maksimal 2 MB)</p>
                        <p><input class="form-control" type="file" name="picture"></p>
                    </div>
                    <div class="col-md-12" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo form_close();?>