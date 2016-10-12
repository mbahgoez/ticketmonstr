<?php include "partials/head.php";?>
<?php include "partials/nav.php";?>
<div class="content">
	<?php include "partials/header-bar.php";?>
	<div class="view">
		<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] == "statistik") {
        include "views/statistik.php";
    } else if ($_GET['page'] == "jadwal-penerbangan") {
        include "views/jadwal-penerbangan.php";
    } else if ($_GET['page'] == "daftar-pemesanan") {
        include "views/daftar-pemesanan.php";
    } else if ($_GET['page'] == "pemesanan-pending") {
        include "views/pemesanan-pending.php";
    } else if ($_GET['page'] == "pemesanan-sukses") {
        include "views/pemesanan-sukses.php";
    } else if ($_GET['page'] == "tiket-terjual") {
        include "views/tiket-terjual.php";
    } else if ($_GET['page'] == "tiket-dibatalkan") {
        include "views/tiket-dibatalkan.php";
    } else if ($_GET['page'] == "konfirmasi-pembayaran") {
        include "views/konfirmasi-pembayaran.php";
    }
} else {
    header("Location:?page=statistik");
}
?>
	</div>
</div>
<?php include 'partials/footer.php';?>