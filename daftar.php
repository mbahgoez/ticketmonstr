<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TicketMonstr - Daftar</title>
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="daftar">
	<header>
			<h1>Pendaftaran Akun TicketMonstr</h1>		
	</header>


	<div class="container">
		<form action="proses/daftar-member.php" method="POST">
			<div class="row">
				<div class="col-50">
					<div class="label">
						<label>USERNAME</label>	
					</div>
					<div class="input">
						<input type="text" name="username" placeholder="Contoh : sukijan48, john.doe48, markonah96">
					</div>
				</div>
				<div class="col-50">
					<div class="label">
						<label>NAMA LENGKAP</label>	
					</div>
					<div class="input">
						<input type="text" name="nama-lengkap" placeholder="Contoh : Sujarwo Tejo, Adit, Sopo, Jarwo.">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-50">
					<div class="label">
						<label>E-mail</label>	
					</div>
					<div class="input">
						<input type="text" name="email" placeholder="Contoh : emailanda@email.com">
					</div>
				</div>
				<div class="col-50">
					<div class="label">
						<label>Jenis Kelamin</label>	
					</div>
					<div class="input">
						<label>
							<input type="radio" name="jk" value="Laki-laki">
							Laki-laki
						</label>
						<label>
							<input type="radio" name="jk" value="Perempuan">
							Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-50">
					<div class="label">
						<label>Password</label>	
					</div>
					<div class="input">
						<input type="password" name="password" placeholder="Kombinasikan huruf besar kecil dan angka">
					</div>
				</div>
				<div class="col-50">
					<div class="label">
						<label>Re-Password</label>	
					</div>
					<div class="input">
						<input type="password" name="re-password" placeholder="Kombinasikan huruf besar kecil dan angka">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-50">
					<div class="label">
						<label>umur</label>	
					</div>
					<div class="input">
						<input type="number" name="umur" placeholder="Masukan Umur saat ini">
					</div>
				</div>
				<div class="col-50">
					<div class="label">
						<label>pekerjaan</label>	
					</div>
					<div class="input">
						<input type="text" name="pekerjaan" placeholder="Contoh : Wirawasta, Pegawai, PNS, Petani, Nelayan, Pelajar Dsb.">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-50">
					<div class="label">
						<label>Provinsi</label>	
					</div>
					<div class="input">
						<input type="text" name="provinsi" placeholder="Kombinasikan huruf besar kecil dan angka">
					</div>
				</div>
				<div class="col-50">
					<div class="label">
						<label>kota</label>	
					</div>
					<div class="input">
						<input type="text" name="kota" placeholder="Kombinasikan huruf besar kecil dan angka">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-50">
					<div class="label">
						<label>alamat</label>	
					</div>
					<div class="input">
						<input type="text" name="alamat" placeholder="Kombinasikan huruf besar kecil dan angka">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-50">
					<div class="label">
						<label>No Telephone</label>	
					</div>
					<div class="input">
						<input type="number" name="no-telephone" placeholder="Kombinasikan huruf besar kecil dan angka">
					</div>
				</div>
				<div class="col-50">
					<div class="label">
						<label>No HP</label>	
					</div>
					<div class="input">
						<input type="number" name="no-hp" placeholder="Kombinasikan huruf besar kecil dan angka">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-100">
					<button type="submit">
						PENDAFTARAN
					</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>