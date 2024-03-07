<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Update Contact person</small>
    </h1>
</section>

<?php echo form_open('Back_o/beranda_update_do/'.$kontak->row()->id);?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <br>
                        <div class="col-md-6 col-md-offset-3">
                            <p>Nama</p>
                            <p><input class="form-control" name="nama" value="<?php echo $kontak->row()->nama;?>"> </p>
                            <p>Kontak</p>
                            <p><input class="form-control" name="kontak" value="<?php echo $kontak->row()->kontak;?>"> </p>
                            <br>
                            <p><button type="submit" class="btn btn-primary">Update</button></p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php form_close();?>