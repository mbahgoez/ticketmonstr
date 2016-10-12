<?php include "../includes/koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add To Cart</title>
	<style>
		table {
			width: 50%;
			border: 1px solid #eee;
		}
		table td {
			padding: 10px;
		}
		.hide {
			display: none;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
	<table class="multi-data-action" >
		<tr>
			<td>#</td>
			<td>Nomer Tiket</td>
			<td>Jenis Tiket</td>
			<td>Maskapai</td>
			<td>Harga/orang</td>
		</tr>
		<?php
$kodetiket = $_GET['notiket'];
$query = mysql_query("SELECT * FROM tbtiket INNER JOIN tbpesawat ON tbtiket.KodePesawat = tbpesawat.KodePesawat WHERE KodeTiket='$kodetiket'");
while ($data = mysql_fetch_array($query)) {
    ?>
		<tr>
			<td>1</td>
			<td><?php echo $data['NomorTiket']; ?></td>
			<td>Ekekutif</td>
			<td>
			<?php
$kodepesawat = $data['TipePesawat'];
    $qmas = mysql_query("SELECT * FROM tbmaskapai WHERE KodeMaskapai='$kodepesawat'");
    $dmas = mysql_fetch_array($qmas);

    echo $dmas['NamaMaskapai'];
    ?>
			</td>
			<td>Rp. <?php echo $data['HargaTiket']; ?></td>
		</tr>

		<tr>
			<td></td>
			<td colspan="1">
				Jumlah Orang
			</td>
			<td colspan="3">
				<input type="text" name="jumlah">
				<input class="hide" type="text" name="notiket" value="<?php echo $_GET['notiket']; ?>">
				<button class="hide" type="submit">Tambah ke Cart</button>
			</td>
		</tr>
		<?php }?>
	</table>
	</form>
</body>
</html>
<?php
session_start();
if (isset($_POST['jumlah'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array(
            "user" => $_SESSION['KodeUser'],
            "tiket" => array(
                array(
                    "notiket" => $_POST['notiket'],
                    "jumlah" => $_POST['jumlah'],
                ),
            ),
        );
    } else {
        $notiket = $_POST['notiket'];
        if ($_POST['notiket']) {
            array_push(
                $_SESSION['cart']['tiket'],
                array(
                    "notiket" => $_POST['notiket'],
                    "jumlah" => $_POST['jumlah'],
                )
            );
        }
    }

    header("Location:http://localhost/ticketmonstr/");
}