<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>

<section class="content-header">
    <h1>
        FEEDBACK
        <small>Detil SKM</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Jenis Kelamin</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th>Jenis Kelamin</th>
                                <th style="width: 20px;">Jumlah</th>
                                <th style="width: 10px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pria</td>
                                    <td><?php echo $jk->row()->pria;?>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Wanita</td>
                                    <td><?php echo $jk->row()->wanita;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tingkat Pendidikan</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th>Tingkat Pendidikan</th>
                                <th style="width: 20px;">Jumlah</th>
                                <th style="width: 10px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SD</td>
                                    <td><?php echo $pend->row()->sd;?>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SMP</td>
                                    <td><?php echo $pend->row()->smp;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SMA</td>
                                    <td><?php echo $pend->row()->sma;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>D3</td>
                                    <td><?php echo $pend->row()->d3;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>S1</td>
                                    <td><?php echo $pend->row()->s1;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>S2</td>
                                    <td><?php echo $pend->row()->s2;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Pekerjaan</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th>Pekerjaan</th>
                                <th style="width: 20px;">Jumlah</th>
                                <th style="width: 10px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PNS</td>
                                    <td><?php echo $kerja->row()->pns;?>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>TNI</td>
                                    <td><?php echo $kerja->row()->tni;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>POLRI</td>
                                    <td><?php echo $kerja->row()->polri;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Swasta</td>
                                    <td><?php echo $kerja->row()->swasta;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Wirausaha</td>
                                    <td><?php echo $kerja->row()->wirausaha;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                        
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Lainnya</td>
                                    <td><?php echo $kerja->row()->lainnya;?></td>
                                    <td><a href="#" class="button">
                                        <i class="fa fa-search"></i></a></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</section>