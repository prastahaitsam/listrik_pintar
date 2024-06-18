<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light brand-blue">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <?php if ($_SESSION['level'] == "admin") { ?>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="?" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Master Data</label>
                    </li>
                    <li class="nav-item">
                        <a href="?page_masterdata=data_pelanggan" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Data Pelanggan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_masterdata=data_petugas" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Data Petugas</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_masterdata=data_tarif" class="nav-link "><span class="pcoded-micon"><i class="feather icon-zap"></i></span><span class="pcoded-mtext">Data Tarif</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_masterdata=data_meteran" class="nav-link "><span class="pcoded-micon"><i class="feather icon-tablet"></i></span><span class="pcoded-mtext">Data Meteran</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Transaksi</label>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=penggunaan_listrik" class="nav-link "><span class="pcoded-micon"><i class="feather icon-activity"></i></span><span class="pcoded-mtext">Penggunaan Listrik</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=tagihan" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Tagihan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=pembayaran" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Pembayaran</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=pembayaran_selesai" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Pembayaran Selesai</span></a>
                    </li>
                <?php } elseif ($_SESSION['level'] == "petugas") { ?>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="?" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Master Data</label>
                    </li>
                    <li class="nav-item">
                        <a href="?page_masterdata=data_pelanggan" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Data Pelanggan</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Transaksi</label>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=penggunaan_listrik" class="nav-link "><span class="pcoded-micon"><i class="feather icon-activity"></i></span><span class="pcoded-mtext">Penggunaan Listrik</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=tagihan" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Tagihan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=pembayaran" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Pembayaran</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=pembayaran_selesai" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Pembayaran Selesai</span></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="?" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Transaksi</label>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=tagihan" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Tagihan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page_transaksi=pembayaran_selesai" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Pembayaran Selesai</span></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->