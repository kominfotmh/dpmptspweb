<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>

<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Informasi Web</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Kontak Penanaman Modal</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th>Nama</th>
                                <th>Kontak</th>
                                <th>Jenis Informasi</th>
                                <th style="width: 70px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach($info->result() as $row_info){ ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $row_info->nama;?></td>
                                    <td><?php echo $row_info->kontak;?></td>
                                    <td><?php echo $row_info->jenis;?></td>
                                    <td>
                                        <a href="<?php echo site_url('Back_o/beranda_update/').$row_info->id;?>" class="button">
                                        <i class="fa fa-edit"></i></a> 
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Info Lainnya</h3>
                    <h3 class="box-title" style="float: right;"><a type="button" href="#" data-toggle="modal" data-target="#update_info">
                    <i class="menu-icon fa fa-edit fa-sm" style="color: grey;"></i></a></h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th>Video</th>
                                <th>Email</th>
                                <th>Telp</th>
                                <th>Kode Pos</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><?php echo $lain->video;?></td>
                                    <td><?php echo $lain->email;?></td>
                                    <td><?php echo $lain->telp;?></td>
                                    <td><?php echo $lain->pos;?></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</section>


<?php echo form_open('Back_o/beranda_updatelainnya_do/'.$lain->id);?>
<div id="update_info" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Informasi Lainnya</h4>
      </div>
      <div class="modal-body">
            <p>Link Video</p>
            <p><input class="form-control" name="video" value="<?php echo $lain->video;?>"> </p>
            <p>Email</p>
            <p><input class="form-control" name="email" value="<?php echo $lain->email;?>"> </p>
            <p>No. Telp</p>
            <p><input class="form-control" name="telp" value="<?php echo $lain->telp;?>"> </p>
            <p>Kode Pos</p>
            <p><input class="form-control" name="pos" value="<?php echo $lain->pos;?>"> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>

  </div>
</div>
<?php echo form_close();