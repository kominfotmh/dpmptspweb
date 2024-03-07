<?php 
if(!$recs->num_rows()){ ?>
    <div class="col-md-12" style="margin: -35px 0px 10px 10px; font-size: 14px;">
        <p style=" margin-top: -30px;">Tidak ada data yang sesuai. Silahkan coba kata kunci lainnya.</p>
    </div>
<?php }
else{
    foreach ($recs->result() as $rec){?>
    <div class="col-md-12" style="margin: -35px 0px 10px 10px; font-size: 14px;">
        <p style="color: red;"><b><u><?php echo strtoupper($rec->izin);?></u></b></p>
        <p style=" margin-top: -20px;"><b>Syarat :</b></p>
        <p style=" margin-top: -30px;"><?php echo $rec->syarat;?></p>
        <p style=" margin-top: -20px;"><b>Lama Layanan :</b></p>
        <p style=" margin-top: -30px;"><?php echo $rec->sop;?></p>
        <p style=" margin-top: -20px;"><b>Dinas Teknis :</b></p>
        <p style=" margin-top: -30px;"><?php echo $rec->dinas_teknis;?></p>
    </div>
    <br><br>

<?php }

}?>