<?php
    include "../../includes/koneksi.php";
    $maskapai=$_POST['maskapai'];
    $kapasitas=$_POST['kapasitas'];
    $asal=$_POST['asal'];
    $tujuan=$_POST['tujuan'];
    $rute=$_POST['asal']." ke ".$_POST['tujuan'];
    $potongan=$_POST['potongan'];
    $jumlah_tiket=$_POST['jumlah_tiket'];
    $keterangan=$_POST['keterangan'];

    $simpan=mysql_query("insert into tbpesawat values('','$maskapai','$kapasitas','$rute','$potongan','$jumlah_tiket','','$keterangan')");
    if($simpan)
    {
        ?>
        <script type="text/javascript">
            alert("Penerbangan Tersimpan");
            location.href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/ticketmonstr/admin/?page=jadwal-penerbangan";
        </script>
        <?php
    }

 ?>
