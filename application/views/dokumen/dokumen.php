<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>

<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Dokumen Dinas</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Dokumen</h3>
                    <h3 class="box-title" style="float: right;"><a type="button" href="#" data-toggle="modal" data-target="#tambah_dok">
                    <i class="menu-icon fa fa-plus-square fa-lg" style="color: grey;"></i></a></h3>
                </div>
        
                <div class="box-body">
                    <table id="tabel" class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th style="width: 150px;">Jenis Dokumen</th>
                                <th>Nama</th>
                                <th style="width: 70px;">Tipe File</th>
                                <th style="width: 150px;">Link Dokumen</th>
                                <th style="width: 70px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach($t->result() as $row){ ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $row->jenis_dok;?></td>
                                    <td><?php echo $row->nama;?></td>
                                    <td><?php echo $row->tipe_file;?></td>
                                    <td><?php echo $row->link_dok;?></td>
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

<?php echo form_open('Back_o/dokumen_tambah_do');?>
<div id="tambah_dok" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Dokumen Kedinasan</h4>
            </div>
          <div class="modal-body">
                <p>Jenis Dokumen</p>
                <p>
                    <select class="form-control" name="jenis">
                        <option value="Peraturan">Peraturan</option>
                        <option value="Laporan">Laporan</option>
                        <option value="SOP">SOP</option>
                        <option value="Materi">Materi</option>
                        <option value="Data">Data</option>
                  </select>
                </p>
                <p>Nama Dokumen</p>
                <p><input class="form-control" name="nama"> </p>
                <p>Tipe File</p>
                <p>
                    <select class="form-control" name="tipe_file">
                        <option value="PDF">PDF</option>
                        <option value="PPT">Presentasi</option>
                        <option value="JPG">Gambar</option>
                        <option value="DOC">Dokumen</option>
                        <option value="XLS">Spreadsheet</option>
                  </select>
                </p>
                <p>Link Dokumen</p>
                <p><input class="form-control" name="link"> </p>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
    </div>
</div>
<?php echo form_close();