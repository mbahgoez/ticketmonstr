<?php session_start();include "includes/koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<style>
	* {
		font-family: 'Josefin Sans';
	}
	h1 {
		text-align: center
	}
	p {
		text-align: center;
	}
		table {
			border-collapse: collapse;
			border: 1px solid #eee;
			margin: 10px 0;
			width: 700px;
		}
		tr {
			border-bottom: 1px solid #eee;
		}
		td {
			padding: 10px;
			font-weight: 400;
		}
		a {
			text-decoration: none;
			font-size: 20px;
			display: block;
			text-align: center;
		}
		a:visited {
			color: blue;
		}
		.hide {
			display: none;
		}
	</style>
</head>
<body>
	<h1>Cart Tiket yang telah dipilih</h1>
	<table class="multi-data-action" >
		<tr>
			<td>#</td>
			<td>Nomer Tiket</td>
			<td>Kode Penerbangan</td>
			<td>Jenis Tiket</td>
			<td>Maskapai</td>
			<td>Jumlah</td>
			<td>Harga</td>
			<td>Tindakan</td>
		</tr>

		<?php
$i = 1;
foreach ($_SESSION['cart']['tiket'] as $val) {
    print_r(each($val));
    $no = $val['notiket'];
    $query = mysql_query("SELECT * FROM tbtiket INNER JOIN tbpesawat ON tbtiket.KodePesawat = tbpesawat.KodePesawat WHERE KodeTiket='$no'") or die(mysql_error());
    while ($data = mysql_fetch_array($query)) {

        ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $data['NomorTiket']; ?></td>
			<td><?php echo $data['KodePesawat']; ?></td>
			<td>Ekonomi</td>
			<td><?php echo $data['TipePesawat']; ?></td>
			<td>4 x</td>
			<td>Rp. 2.420.000</td>
			<td>
				<a href="hapuscart.php?id=<?php echo $data['KodeTiket']; ?>">
					Hapus
				</a>
			</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="7">Berangkat dari <?php echo $data['RutePesawat']; ?>.  Tanggal 29 OKT 2016, Pukul 09:00.</td>
		</tr>
		<?php }}?>

	</table>


	<form action="proses/tambah-pemesanan.php" method="POST">
		<table>
			<tr>
				<td>Total</td>
				<td>Rp. 2.000.000</td>
				<td>
					<button type="submit">Buat Pemesanan untuk daftar ini</button>
				</td>
			</tr>
		</table>


<?php

$tiketcart = $_SESSION['cart']['tiket'];
foreach ($tiketcart as $tiket) {?>

		<div class="hide">
			<input type="text" name="notiket[]" value="<?php echo $val['notiket']; ?>">
			<input type="text" name="user[]" value="<?php echo $_SESSION['KodeUser']; ?>">
		</div>
	<?php
}
?>
	</form>
</body>
</html>
