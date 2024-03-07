<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>

<section class="content-header">
    <h1>
        FEEDBACK
        <small>Saran</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Saran</h3>
                </div>
        
                <div class="box-body">
                    <table id="tabel" class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th style="width: 150px;">Tanggal</th>
                                <th style="width: 150px;">Kategori</th>
                                <th>Saran</th>
                                <th style="width: 70px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach($t->result() as $row){ ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $row->tgl;?></td>
                                    <td><?php echo $row->kategori;?></td>
                                    <td><?php echo $row->isi;?></td>
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