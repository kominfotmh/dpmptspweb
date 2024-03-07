<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Berita / Tambah Berita</small>
    </h1>
</section>

<?php echo form_open_multipart('Back_o/berita_tambah_do');?>>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Berita <?php echo date('d F Y');?> | Oleh : <?php echo $this->session->userdata('nama');?></h3>
                </div>
        
                <div class="box-body">
                    <div class="col-md-12">
                        <p>Judul</p>
                        <p><input class="form-control" name="judul" placeholder="* Judul Berita" required></p>
                    </div>
                    <div class="col-md-4">
                        <p>Kategori</p>
                        <select class="form-control" id="tag" name="tag">
                            <option value="Umum">Umum</option>
                            <option value="Layanan">Layanan</option>
                            <option value="LKPM">LKPM</option>
                            <option value="Event">Event</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <p>Gambar (Ratio 16:9)</p>
                        <p><input class="form-control" type="file" name="picture"></p>
                    </div>
                    <div class="col-md-12">
                        <p>Isi Berita</p>
                        <textarea id="editor1" name="isi" rows="10" cols="80"></textarea>
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