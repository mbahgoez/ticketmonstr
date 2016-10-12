<?php
include "../includes/koneksi.php";

$username = $_POST['username'];
$nama_lengkap = $_POST['nama-lengkap'];
$password = $_POST['password'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$re_password = $_POST['re-password'];
$umur = $_POST['umur'];
$pekerjaan = $_POST['pekerjaan'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];
$no_telephone = $_POST['no-telephone'];
$no_hp = $_POST['no-hp'];
$level = "member";

$sql = "INSERT INTO tbuser ";
$sql .= "VALUES('','$username', '$password', '$nama_lengkap', '$jk', '$umur', '$pekerjaan', '$alamat', '$kota', '$provinsi', '$no_telephone', '$no_hp', '$email', '$level')";

$query = mysql_query($sql) or die(mysql_error());

if ($query) {
    header("Location:http://" . $_SERVER['SERVER_NAME'] . "/ticketmonstr/login.php?status=terdaftar");
}
