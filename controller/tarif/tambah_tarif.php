<?php
if ($_POST) {
    $kode = $_POST['kode-tarif'];
    $daya = $_POST['daya'];
    $tarif = $_POST['tarif-per-kwh'];

    if (empty($kode)) {
        echo "<script>location.href='../../index.php?page_masterdata=data_tarif&kosong=Kode tarif tidak boleh kosong !';</script>";
    } elseif (empty($daya)) {
        echo "<script>location.href='../../index.php?page_masterdata=data_tarif&kosong=Daya tidak boleh kosong !';</script>";
    } elseif (empty($tarif)) {
        echo "<script>location.href='../../index.php?page_masterdata=data_tarif&kosong=Tarif per KWH tidak boleh kosong !';</script>";
    } else {
        include "../connection.php";
        $insert = mysqli_query($conn, "iNSERT INTO t_tarif (kode_tarif, daya, tarif_per_kwh)
				value ('" . $kode . "','" . $daya . "','" . $tarif . "')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>location.href='../../index.php?page_masterdata=data_tarif&sukses=Data berhasil ditambahkan !';</script>";
        } else {
            echo "<script>location.href='../../index.php?page_masterdata=data_tarif&gagal=Data gagal ditambahkan !';</script>";
        }
    }
}
