<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Publikasi</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <br>
                        <div class="col-md-6 col-md-offset-3">
                            <p>Nilai Realisasi Investasi</p>
                            <p><input class="form-control" name="investasi" value="<?php echo number_format($all->realisasi);?>" disabled> </p>
                            <p>Indeks Kepuasan Masyarakat</p>
                            <p><input class="form-control" name="ikm" value="<?php echo $all->ikm;?>" disabled> </p>
                            <p>Rasio Daya Serap Tenaga Kerja</p>
                            <p><input class="form-control" name="rasio" value="<?php echo $all->rasio_tk;?>" disabled> </p>
                            <a type="submit" class="btn btn-primary" data-toggle="modal" data-target="#update">Update Data</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo form_open('Back_o/publikasi_update_do/'.$all->id);?>
<div id="update" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Publikasi</h4>
      </div>
      <div class="modal-body">
            <p>Nilai Realisasi Investasi</p>
            <p><input class="form-control" name="investasi" value="<?php echo $all->realisasi;?>"> </p>
            <p>Indeks Kepuasan Masyarakat (Gunakan titik (.) untuk koma)</p>
            <p><input class="form-control" name="ikm" value="<?php echo $all->ikm;?>"> </p>
            <p>Rasio Daya Serap Tenaga Kerja (Gunakan titik (.) untuk koma)</p>
            <p><input class="form-control" name="rasio" value="<?php echo $all->rasio_tk;?>"> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>

  </div>
</div>
<?php echo form_close();