<?php

include "../includes/koneksi.php";
session_start();

$username = $_POST['username'];
$password = mysql_real_escape_string($_POST['password']);
$password = md5($password);

$sql = "SELECT * FROM tbuser WHERE Username='$username' AND Password='$password'";
$query = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($query) > 0) {
    $data = mysql_fetch_array($query);
    $_SESSION['KodeUser'] = $data['KodeUser'];
    $_SESSION['user'] = $data['Username'];
    $_SESSION['level'] = $data['LevelUser'];
    $_SESSION['nama'] = $data['nama'];

    if ($_SESSION['level'] == 'member') {
        header("Location:http://" . $_SERVER['SERVER_NAME'] . "/ticketmonstr/?login=berhasil");
    } else if ($_SESSION['level'] == 'admin') {
        header("Location:http://" . $_SERVER['SERVER_NAME'] . "ticketmonstr/admin");
    }
} else {
    header("Location:http://" . $_SERVER['SERVER_NAME'] . "/ticketmonstr/login.php?status=salah");
}
