<?php
include "../connection.php";

if ($_POST) {
    $nama = $_POST['nama'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $meter_akhir = $_POST['meter-akhir'];
    $meter_awal = $_POST['meter-awal'];
    $jml_meter = $meter_akhir - $meter_awal;

    if (empty($nama)) {
        echo "<script>location.href='../../index.php?page_transaksi=penggunaan_listrik&kosong=Nama Pelanggan tidak boleh kosong !';</script>";
    } elseif (empty($bulan)) {
        echo "<script>location.href='../../index.php?page_transaksi=penggunaan_listrik&kosong=Bulan tidak boleh kosong !';</script>";
    } elseif (empty($tahun)) {
        echo "<script>location.href='../../index.php?page_transaksi=penggunaan_listrik&kosong=Tahun tidak boleh kosong !';</script>";
    } elseif (empty($meter_akhir)) {
        echo "<script>location.href='../../index.php?page_transaksi=penggunaan_listrik&kosong=Meter Akhir tidak boleh kosong !';</script>";
    } else {
        include "../connection.php";
        $insert1 = mysqli_query($conn, "iNSERT INTO t_penggunaan (id_pelanggan, bulan, tahun, meter_awal, meter_akhir)
				value ('" . $nama . "','" . $bulan . "','" . $tahun . "','" . $meter_awal . "','" . $meter_akhir . "')") or die(mysqli_error($conn));
        $insert2 = mysqli_query($conn, "iNSERT INTO t_tagihan (id_pelanggan, bulan, tahun, jml_meter, status)
        value ('" . $nama . "','" . $bulan . "','" . $tahun . "','" . $jml_meter . "','" . "BELUM DIBAYAR" . "')") or die(mysqli_error($conn));

        if ($insert1 && $insert2) {
            echo "<script>location.href='../../index.php?page_transaksi=penggunaan_listrik&sukses=Data berhasil ditambahkan !';</script>";
        } else {
            echo "<script>location.href='../../index.php?page_transaksi=penggunaan_listrik&gagal=Data gagal ditambahkan !';</script>";
        }
    }
}
