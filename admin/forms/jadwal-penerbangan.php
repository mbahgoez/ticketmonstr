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
                    <input type="text" list="data-maskapai" placeholder="Maskapai Penerbangan" name="maskapai">
                    <datalist id="data-maskapai">
                        <option value="AirAsia">
                        <option value="Garuda Indonesia">
                        <option value="Lion Air">
                        <option value="Citilink">
                        <option value="Emirates">
                        <option value="Qantas">
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Harga</label>
                </div>
                <div class="input">
                    <input type="number" placeholder="Harga" name="harga">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Kapasitas</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Kapasitas" name="kapasitas">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Asal Penerbangan</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Asal Penerbangan" name="asal">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Tujuan Penerbangan</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Tujuan Berangkat" name="tujuan">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Potongan Batal</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Potongan Batal" name="potongan">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Jumlah Tiket</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Jumlah Tiket" name="jumlah_tiket">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Tanggal Berangkat</label>
                </div>
                <div class="input">
                    <input type="date" name="tgl_berangkat">
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
