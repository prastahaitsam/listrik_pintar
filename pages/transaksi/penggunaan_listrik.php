<?php
include "assets/css.php";
include "assets/js.php";
include "forms/transaksi/form_penggunaan_listrik.php";
include "details/detail_pelanggan.php";
include "controller/connection.php";

$query = mysqli_query($conn, "SELECT * FROM t_penggunaan join t_pelanggan on t_penggunaan.id_pelanggan = t_pelanggan.id_pelanggan");
$no = 0;

if (isset($_GET['sukses'])) { ?>
    <script>
        swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
                location.href = 'index.php?page_transaksi=penggunaan_listrik';
            });
    </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
    <script>
        swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
                location.href = 'index.php?page_transaksi=penggunaan_listrik';
            });
    </script>
<?php } elseif (isset($_GET['kosong'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['kosong'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_transaksi=penggunaan_listrik';
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
                            <h5 class="m-b-10">Penggunaan Listrik</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item"><a href="#!">Penggunaan Listrik</a></li>
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
                            <button type="button" class="text-white btn-icon float-right m-b-10 btn btn-sm btn-success" data-toggle="modal" data-target="#TambahPenggunaan"><i class="feather icon-plus"></i></button>
                            <table class="table" id="datatable">
                                <thead class="thead-blue">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Meter Awal</th>
                                        <th>Meter Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama_pelanggan'] ?></td>
                                            <td><?= $row['bulan'] ?></td>
                                            <td><?= $row['tahun'] ?></td>
                                            <td><?= $row['meter_awal'] ?></td>
                                            <td><?= $row['meter_akhir'] ?></td>
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