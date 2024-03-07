<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>

<section class="content-header">
    <h1>
        WEB CONTENT
        <small>Galeri</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Galeri Foto</h3>
                    <h3 class="box-title" style="float: right;"><a type="button" href="<?php echo site_url('Back_o/galeri_tambah/');?>">
                    <i class="menu-icon fa fa-plus-square fa-lg" style="color: grey;"></i></a></h3>
                </div>
        
                <div class="box-body">
                    <table id="tabel" class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th style="width: 150px;">Gambar</th>
                                <th>Deskripsi</th>
                                <th style="width: 70px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach($t->result() as $row){ ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $row->gambar;?></td>
                                    <td><?php echo $row->deskripsi;?></td>
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