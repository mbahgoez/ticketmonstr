<header>
    <div class="title">
    	<?php if(isset($_GET['page'])){
				if($_GET['page'] == 'statistik'){
					echo "<h2>STATISTIK</h2>";
				} else if($_GET['page'] == 'jadwal-penerbangan'){
					echo "<h2>JADWAL PENERBANGAN</h2>";
				} else if($_GET['page'] == 'daftar-pemesanan'){
					echo "<h2>DAFTAR PEMESANAN</h2>";
				} else if($_GET['page'] == 'pemesanan-pending'){
					echo "<h2>PEMESANAN PENDING</h2>";
				} else if($_GET['page'] == 'pemesanan-sukses'){
					echo "<h2>PEMESANAN SUKSES</h2>";
				} else if($_GET['page'] == 'tiket-terjual'){
					echo "<h2>TIKET TERJUAL</h2>";
				} else if($_GET['page'] == 'tiket-dibatalkan'){
					echo "<h2>TIKET DIBATALKAN</h2>";
				} else if($_GET['page'] == 'konfirmasi-pembayaran'){
					echo "<h2>KONFIRMASI PEMBAYARAN</h2>";
				} else {
					echo "<h2>DASHBOARD</h2>";
				}
    	} else {
    		echo "<h2>DASHBOARD</h2>";
    	} ?>
        
    </div>
</header>