<div class="dialog-form" draggable="true">
    <div class="dialog-panel">
        <div class="title-panel">
            <h3>Pencarian Tiket</h3>
        </div>
        <div class="action">
            <button id="close-form" class="btn-close">
                <i class="ion-android-close"></i>
            </button>
        </div>
    </div>
    <div class="dialog-content">
        <form action="pencarian.php" method="get">
            <div class="row">
                <div class="label">
                    <label>Masukan maskapai</label>
                </div>
                <div class="input">
                     <select name="maskapai" required>
                        <option value="">Pilih Maskapai</option>
                        <?php 
                            $query = mysql_query("SELECT * FROM tbmaskapai ORDER BY NamaMaskapai");
                            while($data = mysql_fetch_array($query)){ 
                        ?>
                        <option value="<?php echo $data['KodeMaskapai']; ?>"><?php echo $data['NamaMaskapai']; ?> (<?php echo $data['KodeMaskapai']; ?>)</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Periode Jadwal</label>
                </div>
                <div class="input">
                    <div class="col-50">
                        <input type="date" name="tglmulai" required>
                    </div>
                    <div class="col-50">
                        <input type="date" name="tglakhir" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Asal dan Tujuan</label>
                </div>
                <div class="input">
                    <div class="col-50">
                       <select name="asal" required>
                        <option value="">Pilih Bandara</option>
                        <?php 
                            $query = mysql_query("SELECT * FROM tbbandara ORDER BY Kota");
                            while($data = mysql_fetch_array($query)){ 
                        ?>
                        <option value="<?php echo $data['KodeBandara']; ?>"><?php echo $data['Kota']; ?> (<?php echo $data['NamaBandara']; ?>)</option>
                        <?php } ?>
                    </select>
                    </div>
                    <div class="col-50">
                       <select name="tujuan" required>
                        <option value="">Pilih Bandara</option>
                        <?php 
                            $query = mysql_query("SELECT * FROM tbbandara ORDER BY Kota");
                            while($data = mysql_fetch_array($query)){ 
                        ?>
                        <option value="<?php echo $data['KodeBandara']; ?>"><?php echo $data['Kota']; ?> (<?php echo $data['NamaBandara']; ?>)</option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="label"></div>
                <div class="input">
                    <button class="pull-right submit">
                        <i class="ion-android-search"></i> Cari Tiket Penerbangan
                    </button>
                    <button class="pull-right reset">
                        <i class="ion-close"></i> Reset
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
