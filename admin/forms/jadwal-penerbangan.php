<div class="dialog-form" draggable="true">
    <div class="dialog-panel">
        <div class="title-panel">
            <h3>Tambah Jadwal Penerbangan</h3>
        </div>
        <div class="action">
            <button id="close-form" class="btn-close">
                <i class="ion-android-close"></i>
            </button>
        </div>
    </div>
    <div class="dialog-content">
        <form action="proses/insert-jadwal.php" method="post">
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
                    <label>Harga Eksekutif</label>
                </div>
                <div class="input">
                    <input type="number" placeholder="Harga" name="harga_eksekutif" required>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Harga Bisnis</label>
                </div>
                <div class="input">
                    <input type="number" placeholder="Harga" name="harga_bisnis" required>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Harga Ekonomi</label>
                </div>
                <div class="input">
                    <input type="number" placeholder="Harga" name="harga_ekonomi" required>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Kapasitas</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Kapasitas" name="kapasitas" required>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Asal Penerbangan</label>
                </div>
                <div class="input">
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
            </div>
            <div class="row">
                <div class="label">
                    <label>Tujuan Penerbangan</label>
                </div>
                <div class="input">
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
            <div class="row">
                <div class="label">
                    <label>Potongan Batal</label>
                </div>
                <div class="input">
                    <input type="number" placeholder="Potongan Batal" name="potongan" required>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Jumlah Tiket</label>
                </div>
                <div class="input">
                    <input type="number" placeholder="Jumlah Tiket" name="jumlah_tiket" required>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Tanggal Berangkat</label>
                </div>
                <div class="input">
                    <input type="date" name="tgl_berangkat" required>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label></label>
                </div>
                <div class="input">

                    <div class="col-50" style="width:50%;float:left">
                        <label>Jam Berangkat</label>
                        <input type="text" placeholder="00:00" name="jam_berangkat">
                    </div>
                    
                    <div class="col-50" style="width:50%;float:left">
                        <p>Jam Tiba</p>
                        <input type="text" placeholder="00:00" name="jam_tiba">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Keterangan</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Keterangan" name="keterangan">
                </div>
            </div>
            <div class="row">
                <div class="label"></div>
                <div class="input">
                    <button class="pull-right submit">
                        <i class="ion-android-add"></i> Tambah
                    </button>
                    <button class="pull-right reset">
                        <i class="ion-close"></i> Reset
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
