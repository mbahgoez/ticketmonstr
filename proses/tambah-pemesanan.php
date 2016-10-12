<?php
include "../includes/koneksi.php";
session_start();
print_r($_SESSION);

$user = $_SESSION['KodeUser'];
$tanggal = date("Y-m-d");
$jam = date("h:i");
$sql = "INSERT INTO tbpemesanan VALUES('', '$user', '$tanggal', '$jam', '', 'Belum Lunas')";

$insertpemesanan = mysql_query($sql) or die(mysql_error());

$tiket = $_SESSION['cart']['tiket'];

$current = mysql_query("SELECT * FROM tbpemesanan ORDER BY KodePemesanan DESC LIMIT 1") or die(mysql_error());
$dcurrent = mysql_fetch_array($current);
$idcurrent = $dcurrent['KodePemesanan'];

foreach ($tiket as $val) {
    $KodeTiket = $val['notiket'];

    $qtiket = mysql_query("SELECT * FROM tbtiket WHERE KodeTiket='$KodeTiket'") or die(mysql_error());
    $dtiket = mysql_fetch_array($qtiket);

    $HargaTiket = $dtiket['HargaTiket'];

    $sql = "INSERT INTO detailpemesanan VALUES('$idcurrent', '$KodeTiket', '$HargaTiket')";
    $insertdetail = mysql_query($sql) or die(mysql_error());

    $qcurrentdetail = mysql_query("SELECT * FROM detailpemesanan ORDER BY KodeTiket DESC LIMIT 1") or die(mysql_error());
    $dcurrentdetail = mysql_fetch_array($qcurrentdetail);

    $upatestatus = mysql_query("UPDATE tbtiket SET StatusTiket='dipesan' WHERE KodeTiket='$KodeTiket'");
}

$total = mysql_query("SELECT SUM(harga) FROM detailpemesanan WHERE KodePemesanan='$idcurrent'") or die(mysql_error());
$total = mysql_fetch_array($total);
$total = $total[0];

$updatepesan = mysql_query("UPDATE tbpemesanan SET TotalBayar='$total' WHERE KodePemesanan='$idcurrent'") or die(mysql_error());
