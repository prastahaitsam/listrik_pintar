<?php
include "assets/css.php";
include "assets/js.php";
include "forms/transaksi/form_pembayaran.php";
include "details/detail_pelanggan.php";
include "controller/connection.php";
?>

<div class="main-body">
    <div class="page-wrapper">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tagihan Listrik</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item"><a href="#!">Tagihan Listrik</a></li>
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
                                        <th>Jumlah Meter</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($_SESSION['level'] == "pengguna") {
                                        $id = $_SESSION['user_id'];
                                        $query = mysqli_query($conn, "SELECT * FROM t_tagihan join t_pelanggan on t_tagihan.id_pelanggan = t_pelanggan.id_pelanggan where t_tagihan.status='BELUM DIBAYAR' and t_pelanggan.id_pelanggan = '$id'");
                                    } else {
                                        $query = mysqli_query($conn, "SELECT * FROM t_tagihan join t_pelanggan on t_tagihan.id_pelanggan = t_pelanggan.id_pelanggan where status='BELUM DIBAYAR'");
                                    }
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama_pelanggan'] ?></td>
                                            <td><?= $row['bulan'] ?></td>
                                            <td><?= $row['tahun'] ?></td>
                                            <td><?= $row['jml_meter'] ?></td>
                                            <td><?= $row['status'] ?></td>
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