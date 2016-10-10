 <?php if(isset($_SESSION['user'])){ ?>
    <div id="pendaftaran">
        <p>Anda Login sebagai pemesan! Selamat memesan tiket dan lihat promo menarik bulan ini.</p>
    </div>
<?php } ?>


<?php
    $filename = $_SERVER['SCRIPT_FILENAME'];
    $fname = substr($filename, 29);
?>
 <header>
        <div class="container">
            <div class="title">
                <h1>
					<i class="ion-ionic"></i>
					TicketMonstr
				</h1>
            </div>
            <div class="menu">
                <ul>     
                    <li 
                        <?php 
                        if($fname == "promo.php" || $fname == "index.php"){ 
                            echo 'class="active"';
                        } 
                        ?> 
                    >
                        <a href="promo.php">Promo</a>
                    </li>
                    <?php if(isset($_SESSION['user'])){ ?>
                        <li
                            <?php 
                            if($fname == "tersedia.php"){ 
                                echo 'class="active"';
                            } 
                            ?>   
                        >
                            <a href="tersedia.php">Tiket Tersedia</a>
                        </li>
                    <?php } ?>
                    <li
                        <?php 
                        if($fname == "maskapai.php"){ 
                            echo 'class="active"';
                        } 
                        ?>
                    >
                        <a href="maskapai.php">Maskapai</a>
                    </li>
                    <?php if(isset($_SESSION['user'])){ ?>
                        <li>
                            <a href="">Pemesanan</a>
                        </li>
                        <li>
                            <a href="">Tiket</a>
                        </li>
                    <?php } ?>
                    <?php if(!isset($_SESSION['user'])){ ?>
                    <li>
                        <a href="">
                        	Cara Memesan
                        </a>
                    </li>
                    <li>
                        <a href="">Syarat</a>
                    </li>
                    <?php } ?>
                    <?php if(isset($_SESSION['user'])){ ?>                
                        <li>
                            <a href="logout.php" title="Keluar">
                                <i class="ion-power"></i>  
                            </a>
                        </li>
                        <?php } ?>
                    
                    <li>
                        <button title="pencarian">
                            <i class="ion-ios-search"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </header>