<?php 
	session_start();
	if(isset($_SESSION['user'])){
		header("Location:index.php");
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TicketMonstr - Membership Login</title>
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="login">
	<?php if(isset($_GET['status']) && $_GET['status'] == 'terdaftar'){ ?>
	<div id="pendaftaran">
		<p>Pendaftaran Berhasil</p>
	</div>
	<?php } ?>
	<div class="container">
		<header>
			<h1>
				<i class="icon ion-ionic"></i>
				TicketMonstr
			</h1>
		</header>
		<div class="row">
			<section id="signup">
				<h2>Belum Punya Akun?</h2>
				<p>Daftar sekarang agar dapat memesan tiket menggunakan layanan kami</p>

				<i class="icon ion-card"></i>

				<div class="sub-row">
					<div class="col-50">
						<a href="daftar.php" id="daftar">
							MENDAFTAR
						</a>
					</div>
				</div>
			</section>
			<section id="signin">
				<h2>Masuk sebagai member!</h2>
				<p>TicketMonstr Membership Login</p>
				<form action="proses/authenticate.php" method="POST">
					<input type="text" name="username" placeholder="Masukan username disini!" required="required">
					<input type="password" name="password" placeholder="Masukan password disini!" required="required">
					<button>MASUK SEBAGAI MEMBER</button>
					<?php if(isset($_GET['status']) && $_GET['status']=="salah"){ ?>
					<p style="color: red;">Username dan Password yang anda masukan salah !</p>
					<?php } ?>
				</form>
			</section>
		</div>
		<footer>
			<p>© 2016, All Rights Reserved</p>
		</footer>
	</div>
</body>
</html>