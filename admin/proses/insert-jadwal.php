<?php
    include "../../includes/koneksi.php";
    
    $harga_eksekutif = $_POST['harga_eksekutif'];
    $harga_bisnis = $_POST['harga_bisnis'];
    $harga_ekonomi = $_POST['harga_ekonomi'];
    $kapasitas=$_POST['kapasitas'];  
    $potongan=$_POST['potongan'];
    $jumlah_tiket=$_POST['jumlah_tiket'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $jam_berangkat = $_POST['jam_berangkat'];
    $jam_tiba = $_POST['jam_tiba'];
    $keterangan=$_POST['keterangan'];
    $maskapai=$_POST['maskapai'];

    $asal=$_POST['asal'];
    $tujuan=$_POST['tujuan'];
    $qasal = mysql_query("SELECT * FROM tbbandara WHERE KodeBandara='$asal'");
    $qtujuan = mysql_query("SELECT * FROM tbbandara WHERE KodeBandara='$tujuan'"); 
    $dasal = mysql_fetch_array($qasal);
    $dtujuan = mysql_fetch_array($qtujuan); 
    $rute= $dasal['Kota']." Ke ".$dtujuan['Kota'];
  
    $sql = "insert into tbpesawat values('','$maskapai','$harga_eksekutif','$harga_bisnis','$harga_ekonomi','$kapasitas','$rute','$potongan','$jumlah_tiket','$jumlah_tiket','$keterangan')";
    $simpanpesawat=mysql_query($sql);



// KodeTiket, NomorTiket, KodePesawat, Asal, Tujuan, 
// TglBerangkat, JamBerangkat, JamTiba, HargaTiket, StatusTiket

$getid = mysql_query("SELECT * FROM tbpesawat ORDER BY KodePesawat DESC LIMIT 1") or die(mysql_error());
$kodepesawat = mysql_fetch_array($getid);
$KodePesawat = $kodepesawat['KodePesawat'];


for($i = 1; $i <= $jumlah_tiket; $i++){
    $NomorTiket = $maskapai."-".$i."-";
    if($i >=1 && $i <=20){
    $NomorTiket .= "EX";
    $harga=$harga_eksekutif;
    }
    else if($i >=21 && $i <=50)
    {
        $NomorTiket .= "BI";
        $harga=$harga_bisnis;
    }
    else{
        $NomorTiket .= "EK";
        $harga=$harga_ekonomi;
    }
    $simpantiket = mysql_query("INSERT INTO tbtiket VALUES('', '$NomorTiket', '$KodePesawat', '$asal', '$tujuan', '$tgl_berangkat', '$jam_berangkat', '$jam_tiba', '$harga','ready')") or die(mysql_error());

}
 if($simpanpesawat && $simpantiket)
    {
       ?>
         <script type="text/javascript">
             alert("Penerbangan Tersimpan");
             location.href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/ticketmonstr/admin/?page=jadwal-penerbangan";
         </script>
        <?php
    }
 ?>
