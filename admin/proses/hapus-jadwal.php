<?php
include "../../includes/koneksi.php";

$itemdelete = $_POST['itemCheck'];
foreach($itemdelete as $id){
	$sql = "DELETE FROM tbpesawat WHERE KodePesawat='$id'";
	$query = mysql_query($sql) or die(mysql_error());

	$sql = "DELETE FROM tbtiket WHERE KodePesawat='$id'";
	$query = mysql_query($sql) or die(mysql_error());	
}

if($query){
	header("Location:http://".$_SERVER['SERVER_NAME']."/ticketmonstr/admin/?page=jadwal-penerbangan");
}