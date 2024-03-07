<style>
    .radio-inline{
        width: 90px;
    }
    #card-title{
        margin-top: 30px;
    }
    .card{
        margin-top: 20px;
    }
    .rad{
        margin-top: -20px;
    }
</style>
<?php echo form_open('Frontp/skm_tambah_do');?>>
<main id="main" class="main-page" style="background-color: #cccccc;">
    <section id="docs-details" class="wow fadeInUp">
        <div class="container">
            <div id="pertama" class="row" style="display:block;">
                <div id="card-title" class="card col-md-8 mx-auto" style="background-color: crimson; color: white;">
                    <div class="card-body" style="text-align: center;"><b>IDENTITAS PENGISI SURVEY</b></div>
                </div>
                <div class="card col-md-8 mx-auto">
                    <div class="card-body">
                        <p id="pesan" style="color:red;"></p>
                        <p><b>JENIS KELAMIN</b></p>
                        <div class="rad">
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="Pria">Pria
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="Wanita">Wanita
                            </label>
                        </div>
                        <br>
                        
                        <p><b>PENDIDIKAN</b></p>
                        <div class="rad">
                            <label class="radio-inline">
                                <input type="radio" name="pend" value="SD">SD
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pend" value="SMP">SMP
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pend" value="SMA">SMA
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pend" value="D3">D3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pend" value="S1">S1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pend" value="S2">S2
                            </label>
                        </div>
                        
                        <br>
                        <p><b>USIA</b></p>
                        <div class="rad">
                            <label class="radio-inline">
                                <input id="usia" type="radio" name="usia" value="17-25">17 - 25
                            </label>
                            <label class="radio-inline">
                                <input id="usia" type="radio" name="usia" value="26-40">26 - 40
                            </label>
                            <label class="radio-inline">
                                <input id="usia" type="radio" name="usia" value=">40">>40
                            </label>
                        </div>
                        <br>
                        
                        <p><b>PEKERJAAN</b></p>
                        <div class="rad">
                            <label class="radio-inline">
                                <input id="kerja" type="radio" name="kerja" value="PNS">PNS
                            </label>
                            <label class="radio-inline">
                                <input id="kerja" type="radio" name="kerja" value="TNI">TNI
                            </label>
                            <label class="radio-inline">
                                <input id="kerja" type="radio" name="kerja" value="POLRI">POLRI
                            </label>
                            <label class="radio-inline">
                                <input id="kerja" type="radio" name="kerja" value="Swasta">Swasta
                            </label>
                            <label class="radio-inline" style="width: 100px;">
                                <input id="kerja" type="radio" name="kerja" value="Wirausaha">Wirausaha
                            </label>
                            <label class="radio-inline">
                                <input id="kerja" type="radio" name="kerja" value="Lainnya">Lainnya
                            </label>
                        </div>
                        <br>
                        
                        <p><b>JENIS LAYANAN YANG DITERIMA</b></p>
                        <div class="rad">
                            <label class="radio-inline">
                                <input id="layanan" type="radio" name="layanan" value="NIB">NIB
                            </label>
                            <label class="radio-inline">
                                <input id="layanan" type="radio" name="layanan" value="PBG">PBG
                            </label>
                            <label class="radio-inline">
                                <input id="layanan" type="radio" name="layanan" value="PKKPR">PKKPR
                            </label>
                            <label class="radio-inline" style="width: 100px;">
                                <input id="layanan" type="radio" name="layanan" value="Kesehatan">Kesehatan
                            </label>
                            <label class="radio-inline">
                                <input id="layanan" type="radio" name="layanan" value="Izin Kerja">Izin Kerja
                            </label>
                            <label class="radio-inline">
                                <input id="layanan" type="radio" name="layanan" value="Lainnya">Lainnya
                            </label>
                        </div>
                        <br><br>
                        <div style="float:right;">
                            <button type="button" id="nxt" class="btn btn-danger" onclick="lanjut()"><i class="fa fa-forward"></i> Berikutnya</button>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div id="kedua" class="row" style="display:none;">
                <div id="card-title" class="card col-md-8 mx-auto" style="background-color: crimson; color: white;">
                    <div class="card-body" style="text-align: center;"><b>SURVEY KEPUASAN MASYARAKAT</b></div>
                </div>
                <div class="card col-md-8 mx-auto">
                    <div class="card-body">
                        <p><b>Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q1" value="1" onclick="simpan()">Tidak Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q1" value="2" onclick="simpan()">Kurang Sesuai
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="q1" value="3" onclick="simpan()">Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q1" value="4" onclick="simpan()">Sangat Sesuai
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q2" value="1" onclick="simpan()">Tidak Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q2" value="2" onclick="simpan()">Kurang Sesuai
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="q2" value="3" onclick="simpan()">Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q2" value="4" onclick="simpan()">Sangat Sesuai
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pemahaman saudara tentang kecepatan waktu dalam memberikan pelayanan?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q3" value="1" onclick="simpan()">Tidak Cepat
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q3" value="2" onclick="simpan()">Kurang Cepat
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="q3" value="3" onclick="simpan()">Cepat
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q3" value="4" onclick="simpan()">Sangat Cepat
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q4" value="1" onclick="simpan()">Sangat Mahal
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q4" value="2" onclick="simpan()">Cukup Mahal
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="q4" value="3" onclick="simpan()">Murah
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q4" value="4" onclick="simpan()">Gratis
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q5" value="1" onclick="simpan()">Tidak Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q5" value="2" onclick="simpan()">Kurang Sesuai
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="q5" value="3" onclick="simpan()">Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q5" value="4" onclick="simpan()">Sangat Sesuai
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q6" value="1" onclick="simpan()">Tidak Kompeten
                            </label>
                            <label class="radio-inline" style="width: 170px;">
                                <input type="radio" name="q6" value="2" onclick="simpan()">Kurang Kompeten
                            </label>
                            <label class="radio-inline" style="width: 100px;">
                                <input type="radio" name="q6" value="3" onclick="simpan()">Kompeten
                            </label>
                            <label class="radio-inline" style="width: 170px;">
                                <input type="radio" name="q6" value="4" onclick="simpan()">Sangat Kompeten
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pendapat saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q7" value="1" onclick="simpan()">Tidak Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q7" value="2" onclick="simpan()">Kurang Sesuai
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="q7" value="3" onclick="simpan()">Sesuai
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q7" value="4" onclick="simpan()">Sangat Sesuai
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q8" value="1"onclick="simpan()">Buruk
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q8" value="2" onclick="simpan()">Cukup
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="q8" value="3" onclick="simpan()">Baik
                            </label>
                            <label class="radio-inline" style="width: 150px;">
                                <input type="radio" name="q8" value="4" onclick="simpan()">Sangat Baik
                            </label>
                        </div>
                        <br><br>
                        
                        <p><b>Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan?</b></p>
                        <div class="rad">
                            <label class="radio-inline" style="width: 120px;">
                                <input type="radio" name="q9" value="1" onclick="simpan()">Tidak Ada
                            </label>
                            <label class="radio-inline" style="width: 230px;">
                                <input type="radio" name="q9" value="2" onclick="simpan()">Ada Tapi Tidak Berfungsi
                            </label>
                            <label class="radio-inline" style="width: 220px;">
                                <input type="radio" name="q9" value="3" onclick="simpan()">Berfungsi Kurang Maksimal
                            </label>
                            <label class="radio-inline" style="width: 220px;">
                                <input type="radio" name="q9" value="4" onclick="simpan()">Dikelola Dengan Baik
                            </label>
                        </div>
                        <br><br>
                        <div style="float:right;">
                            <button type="button" class="btn" onclick="kembali()"><i class="fa fa-reply"></i> Kembali</button>
                            <button type="submit" id="simpan" class="btn btn-danger"><i class="fa fa-check"></i> Simpan</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
</main>
<?php echo form_close();?>