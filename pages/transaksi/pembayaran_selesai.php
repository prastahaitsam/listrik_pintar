<?php
include "assets/css.php";
include "assets/js.php";
include "controller/connection.php";

$no = 0;

if (isset($_GET['sukses'])) { ?>
    <script>
        swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
            });
    </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
    <script>
        swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
            });
    </script>
<?php } elseif (isset($_GET['besar'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['besar'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
            });
    </script>
<?php } elseif (isset($_GET['kecil'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['kecil'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
            });
    </script>
<?php }
?>

<div class="main-body">
    <div class="page-wrapper">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">History pembayaran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item"><a href="#!">History Pembayaran</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ static-layout ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead class="thead-blue">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Total Bayar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($_SESSION['level'] == "pengguna") {
                                        $id = $_SESSION['user_id'];
                                        $query = mysqli_query($conn, "SELECT * FROM t_pembayaran join t_pelanggan on t_pembayaran.id_pelanggan = t_pelanggan.id_pelanggan where  t_pelanggan.id_pelanggan = '$id'");
                                    } else {
                                        $query = mysqli_query($conn, "SELECT * FROM t_pembayaran join t_pelanggan on t_pembayaran.id_pelanggan = t_pelanggan.id_pelanggan");
                                    }
                                    while ($row = mysqli_fetch_array($query)) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama_pelanggan'] ?></td>
                                            <td><?= $row['bulanbayar'] ?></td>
                                            <td><?= $row['tahunBayar'] ?></td>
                                            <td><?= $row['total_bayar'] ?></td>
                                            <td><a href="pages/report/cetak_struk_pembayaran.php?id=<?= $row['id_bayar']; ?>">Cetak Struk</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ static-layout ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>