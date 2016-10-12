<div id="tbjadwal" class="data-table">
    <div class="card">
        <form action="proses/hapus-jadwal.php" method="POST">
         <div class="row info">
            <div class="pull-left">
                <p>2 Item is Selected</p>
            </div>

            <div class="pull-right">
                <button class="btn-hapus" type="submit">
                    <i class="ion-trash-b"></i>
                    HAPUS
                </button>
            </div>
        </div>
        <div class="row bar">
            <div class="title">
                <h3>Jadwal Penerbangan</h3></div>
            <div class="action"><a id="open-form"><i class="ion-android-add"></i>Tambah Jadwal</a></div>
        </div>
        <div class="row header">
            <div class="check data">
                <input type="checkbox">
            </div>
            <div class="maskapai data">Maskapai</div>
            <div class="tujuan-keberangkatan data">Tujuan Keberangkatan</div>
            <div class="harga-tiket data">Harga Tiket</div>
            <div class="kapasitas data">Kapasitas</div>
            <div class="edit data"></div>
        </div>

        <?php 
            $query = mysql_query("SELECT * FROM tbpesawat ORDER BY KodePesawat DESC");
            if(mysql_num_rows($query) > 0){
            while($data = mysql_fetch_array($query)){ 
        ?>
        <div class="row item">
            <div class="check data">
                <input type="checkbox" name="itemCheck[]" value="<?php echo $data['KodePesawat']; ?>">   
            </div>
            <div class="maskapai data"><?php 
                $tipe = $data['TipePesawat'];
                $qtipe = mysql_query("SELECT * FROM tbmaskapai WHERE KodeMaskapai='$tipe'");
                $dtipe = mysql_fetch_array($qtipe);
                echo $dtipe['NamaMaskapai'] 
            ?></div>
            <div class="tujuan-keberangkatan data"><?php echo $data['RutePesawat']; ?></div>
            <div class="harga-tiket data"><b>Eksekutif</b> <br> Rp. <?php echo number_format($data['HargaEksekutif'], 0, ".","."); ?><br><br><b>Bisnis</b> <br> Rp. <?php echo number_format($data['HargaBisnis'], 0, ".","."); ?><br><br>
            <b>Ekonomi</b> <br> Rp. <?php echo number_format($data['HargaEkonomi'], 0, ".","."); ?><br>
            </div>
            <div class="kapasitas data"><?php echo $data['Kapasitas']; ?> Seat</div>
            <div class="edit data">
                <a href="#" title="Perbaiki item ini"><i class="ion-edit"></i></a>
            </div>

            <div class="data divider">
                <?php
                    $id = $data['KodePesawat']; 
                    $sql = mysql_query("SELECT DISTINCT TglBerangkat, JamBerangkat, JamTiba FROM tbtiket WHERE KodePesawat='$id' LIMIT 1");
                    while($infotiket = mysql_fetch_array($sql)){
                        $tgl_berangkat = $infotiket['TglBerangkat'];
                        $jam_tiba = $infotiket['JamTiba'];
                        $jam_berangkat = $infotiket['JamBerangkat'];   
                    } 
                    $strtgl = strtotime($tgl_berangkat);
                    $d = date('d', $strtgl);
                    $m = date('m', $strtgl);
                    $y = date('Y', $strtgl);
                    
                    if($m == 1){
                        $mstr = "Januari";
                    } else if($m == 2){
                        $mstr = "Februari";
                    } else if($m == 3){
                        $mstr = "Maret";
                    } else if($m == 4){
                        $mstr = "April";
                    } else if($m == 5){
                        $mstr = "Mei";
                    } else if($m == 6){
                        $mstr = "Juni";
                    } else if($m == 7){
                        $mstr = "Juli";
                    } else if($m == 8){
                        $mstr = "Agustus";
                    } else if($m == 9){
                        $mstr = "September";
                    } else if($m == 10){
                        $mstr = "Oktober";
                    } else if($m == 11){
                        $mstr = "November";
                    } else if($m == 12){
                        $mstr = "Desember";
                    }
                    
                ?>
                <p>Berangkat <?php echo $d." ".$mstr." ".$y; ?>. Pukul <?php echo $jam_berangkat." - ".$jam_tiba; ?></p>
            </div>
        </div>
        <?php 
        } 
            }  else { ?>
            <div class="row">
                <div class="data full">
                    <h3>Tidak Ada Satupun</h3>
                    <i class="ion-flag"></i>
                </div>
            </div>
            <?php
            }
            ?>
        
     
    </form>  
    </div>
</div>

<?php 
    include "forms/jadwal-penerbangan.php";
?>

