<?php
if ($_POST) {
    $no = $_POST['no-meteran'];
    $jenis = $_POST['jenis'];

    if (empty($no)) {
        echo "<script>location.href='../../index.php?page=data_meteran&kosong=Nomor Meteran tidak boleh kosong !';</script>";
    } elseif (empty($jenis)) {
        echo "<script>location.href='../../index.php?page=data_meteran&kosong=Jenis Meteran tidak boleh kosong !';</script>";
    } else {
        include "../connection.php";
        $insert = mysqli_query($conn, "iNSERT INTO t_meteran (no_meteran, jenis_meteran)
				value ('" . $no . "','" . $jenis . "')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>location.href='../../index.php?page_masterdata=data_meteran&sukses=Data berhasil ditambahkan !';</script>";
        } else {
            echo "<script>location.href='../../index.php?page_masterdata=data_meteran&gagal=Data gagal ditambahkan !';</script>";
        }
    }
}
