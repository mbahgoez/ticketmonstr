<?php
    $menus = array(
        "dashboard" => array(
            "statistik"=>array(
                "url"=>"?page=statistik",
                "title"=>"Statistik",
                "icon"=>"ion-stats-bars"
            ),
            "jadwal"=>array(
                "url"=>"?page=jadwal-penerbangan",
                "title"=>"Jadwal Penerbangan",  
                "icon"=>"ion-ios-calendar"
            )
        ),
        "pemesanan" => array(
            "daftar-pemesanan" => array(
                "url"=>"?page=daftar-pemesanan",
                "title"=>"Daftar Pemesanan",
                "icon"=>"ion-ios-list-outline"
            ),
            "pemesanan-pending" => array(
                "url"=>"?page=pemesanan-pending",
                "title"=>"Pemesanan Pending",
                "icon"=>"ion-funnel"
            ),
            "pemesanan-sukses" => array(
                "url"=>"?page=pemesanan-sukses",
                "title"=>"Pemesanan Sukses",
                "icon"=>"ion-ios-checkmark-outline"
            )
        ),
        "tiket" => array(
            "daftar-tiket"=> array(
                'url' => '?page=daftar-tiket',
                'title' => 'Daftar Tiket',
                'icon' => 'ion-pricetags'
            ),
            "tiket-terjual" => array(
                "url"=>"?page=tiket-terjual",
                "title"=>"Tiket Terjual",
                "icon"=>"ion-ios-cart-outline"
            ),
            "tiket-dibatalkan" => array(
                "url"=>"?page=tiket-dibatalkan",
                "title"=>"Tiket Dibatalkan",
                "icon"=>"ion-android-cancel"
            )
        ),
        "konfirmasi" => array(
            "konfirmasi-pembayaran"=>array(
                "url"=>"?page=konfirmasi-pembayaran",
                "title"=>"Konfirmasi Pembayaran",
                "icon"=>"ion-flag"
            )
        )
    );
?>
<nav>
    <div class="header-bar">
        <h1><i class="ion-ionic"></i>TicketMonstr</h1>
    </div>
    <div class="user">
        <h3>Bagus Mantonafi</h3>
        <p>Masuk sebagai admin</p>
    </div>
    <div class="menu">
        <?php
            foreach ($menus as $submenutitle => $submenulink) {
            ?>
                <div class="sub-menu">
                    <h3><?php echo $submenutitle; ?></h3>
                    <ul>
                        <?php foreach ($submenulink as $link) {
                        ?>
                        <li <?php 
                            if(isset($_GET['page'])){ 
                                setActivePage($_GET['page'], substr($link['url'], 6));
                            }
                            ?>
                        >
                            <a href="<?php echo $link['url']; ?>">
                                <i class="<?php echo $link['icon']; ?>"></i>
                                <?php echo $link['title']; ?>
                            </a>
                        </li>
                        <?php    
                        } ?>
                    </ul>
                </div>
            <?php
            }
        ?>
    </div>
</nav>
