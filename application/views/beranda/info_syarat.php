<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>

<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Informasi Persyaratan Perizinan dan Non Perizinan</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Persyaratan</h3>
                    <h3 class="box-title" style="float: right;"><a type="button" href="#" data-toggle="modal" data-target="#tambah">
                    <i class="menu-icon fa fa-plus-square fa-lg" style="color: grey;"></i></a></h3>
                </div>
        
                <div class="box-body">
                    <table id="tabel" class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th style="width: 150px;">Izin / Non Izin</th>
                                <th>Syarat</th>
                                <th style="width: 150px;">Lama Layanan (SOP)</th>
                                <th style="width: 200px;">Dinas Terkait</th>
                                <th style="width: 70px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach($t->result() as $row){ ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $row->izin;?></td>
                                    <td><?php echo $row->syarat;?></td>
                                    <td><?php echo $row->sop;?></td>
                                    <td><?php echo $row->dinas_teknis;?></td>
                                    <td>
                                        <a href="#" class="button">
                                        <i class="fa fa-search"></i></a> | 
                                        <a href="#" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?');"> <i class="fa fa-trash-o" style="color:grey;"></i></a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo form_open('Back_o/info_syarat_tambah_do/');?>
<div id="tambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Informasi Persyaratan</h4>
            </div>
          <div class="modal-body">
                <p>Izin / Non Izin</p>
                <p><input class="form-control" name="izin"> </p>
                <p>Lama Layanan</p>
                <p><input class="form-control" name="sop"> </p>
                <p>Dinas Terkait</p>
                <p><input class="form-control" name="dinas"></p>
                <p>Akses Layanan</p>
                <p>
                    <select class="form-control" name="akses">
                        <option value="1">OSS</option>
                        <option value="2">PBG</option>
                        <option value="3">Simantap</option>
                  </select>
                </p>
                <p>Syarat</p>
                <p><textarea class="form-control" name="syarat" rows="5" cols="50" style="font-size:14px;"></textarea></p>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
    </div>
</div>
<?php echo form_close();