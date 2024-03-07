<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>

<section class="content-header">
    <h1>
        FEEDBACK
        <small>SKM</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $t->num_rows();?></h3>
              <p>Total Respons</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo number_format($skm, 2);?></h3>
              <p>Nilai SKM</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo number_format($skm*25, 2);?></h3>
              <p>Nilai IKM</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
      </div>
    
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Survey Kepuasan Masyarakat</h3>
                </div>
        
                <div class="box-body">
                    <table id="tabel" class="table table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th>Q1</th>
                                <th>Q2</th>
                                <th>Q3</th>
                                <th>Q4</th>
                                <th>Q5</th>
                                <th>Q6</th>
                                <th>Q7</th>
                                <th>Q8</th>
                                <th>Q9</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach($t->result() as $row){ ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $row->pertanyaan_1;?></td>
                                    <td><?php echo $row->pertanyaan_2;?></td>
                                    <td><?php echo $row->pertanyaan_3;?></td>
                                    <td><?php echo $row->pertanyaan_4;?></td>
                                    <td><?php echo $row->pertanyaan_5;?></td>
                                    <td><?php echo $row->pertanyaan_6;?></td>
                                    <td><?php echo $row->pertanyaan_7;?></td>
                                    <td><?php echo $row->pertanyaan_8;?></td>
                                    <td><?php echo $row->pertanyaan_9;?></td>
                                </tr>
                            <?php }?>
                                <tr style="background-color: #cccccc;">
                                    <td><b>Total</b></td>
                                    <td><b><?php echo $sum_skm->row()->sq1;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq2;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq3;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq4;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq5;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq6;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq7;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq8;?></b></td>
                                    <td><b><?php echo $sum_skm->row()->sq9;?></b></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>