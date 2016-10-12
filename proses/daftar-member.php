<?php
include "../includes/koneksi.php";

// Array ( [username] => bagoes48 [password] => idjedjef [email] => bagus.mantonafi@gmail.com [jk] => Laki-laki [re-password] => frfrf [umur] => 17 [pekerjaan] => pelajar [provinsi] => bali [kota] => denpasar [alamat] => jl pulau saelus [no-telephone] => 089656557453 [no-hp] => 089656557453 );


$username = $_POST['username'];
$nama_lengkap = $_POST['nama-lengkap'];
$password = mysql_real_escape_string($_POST['password']);
$password= md5($password);
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

if($query){
	header("Location:http://".$_SERVER['SERVER_NAME']."/ticketmonstr/login.php?status=terdaftar");
}