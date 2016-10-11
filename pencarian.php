 <?php include "partials/head.php"; ?>
 <?php include "partials/header.php"; ?>
 <section id="tersedia">
        <h2>Ketersediaan Tiket bedasarkan pencarian!</h2>
    
        <div class="content-list">
            <div class="list-filter">
                <div class="row-card button">
                    <button type="submit">
                        Filter
                    </button>
                </div>
                <div class="row-card">
                    <h3>Harga Tiket</h3>
                    <ul>
                       <li><label><input type="radio" name="harga"> < Rp 300.000</label></li>
                       <li><label><input type="radio" name="harga">Rp 300.000 - Rp 1.000.000</label></li>
                       <li><label><input type="radio" name="harga">Rp 1.000.000 - Rp 2.000.000</label></li>
                       <li><label><input type="radio" name="harga"> > Rp 2.000.000</label></li>
                    </ul>
                </div>
                <div class="row-card">
                    <h3>Waktu</h3>
                    <ul>
                       <li><label><input type="radio" name="waktu">00:00 - 12.00</label></li>
                       <li><label><input type="radio" name="waktu">12.00 - 24.00</label></li>
                    </ul>
                </div>
                <div class="row-card">
                    <h3>Maskapai</h3>
                    <ul>
                       <li><label><input type="radio" name="maskapai">AirAsia</label></li>
                       <li><label><input type="radio" name="maskapai">Lion Air</label></li>
                    </ul>
                </div>
            </div>
            <div class="list-card">
                <ul>
                    <?php
                        $maskapai = $_GET['maskapai'];
                        $tglmulai = $_GET['tglmulai'];
                        $tglakhir = $_GET['tglakhir'];
                        $asal = $_GET['asal'];
                        $tujuan = $_GET['tujuan'];

                        $sql = "SELECT * FROM tbtiket INNER JOIN tbpesawat ON tbtiket.KodePesawat = tbpesawat.KodePesawat ";
                        $sql .= "WHERE tbpesawat.TipePesawat='$maskapai' && ";
                        $sql .= "tbtiket.TglBerangkat BETWEEN '$tglmulai' AND '$tglakhir' && ";
                        $sql .= "tbtiket.Asal = '$asal' AND tbtiket.Tujuan = '$tujuan' ORDER BY tbtiket.HargaTiket DESC";

                $query = mysql_query($sql) or die(mysql_error());

                if(mysql_num_rows($query) > 0){
                while($data = mysql_fetch_array($query)){ ?>
                    <li>
                        <a href="">
                            <div class="info">
                                <h5 class="float-left">Berangkat <?php 

                                    $dtime = strtotime($data['TglBerangkat']);
                                    $tglstring = date("d M Y", $dtime);
                                    echo strtoupper($tglstring); 
                                    ?>
                                
                                </h5>
                                <h5 class="float-right"><?php echo $data['TipePesawat']; ?></h5>
                            </div>
                            <div class="info-location">
                                <div class="asal">
                                    <h4><?php echo $data['Asal']; ?></h4>
                                    <p>Sokarno-Hatta</p>
                                </div>
                                <div class="plane">
                                    <i class="ion-plane"></i>
                                    <p>Durasi 3 jam</p>
                                </div>
                                <div class="tujuan">
                                    <h4><?php echo $data['Tujuan']; ?></h4>
                                    <p>Juanda</p>
                                </div>
                            </div>
                            <div class="info-basic">
                                <h3>Rp. <?php echo number_format($data['HargaTiket'], 0, ".", "."); ?></h3>
                            </div>
                        </a>
                    </li>
                <?php }
                     } else {?>
                        <li>
                            <p>Tidak ada penerbangan satupun!</p>
                        </li>
                        <?php } ?>
                </ul>
            </div>
        </div>
    </section>



    <?php
        include "partials/footer.php"; 
    ?>