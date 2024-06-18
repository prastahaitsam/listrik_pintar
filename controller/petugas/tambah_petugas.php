<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $pw = "inipassword";

    if (empty($nama)) {
        echo "<script>location.href='../../index.php?page_masterdata=data_petugas&kosong=Nama petugas tidak boleh kosong !';</script>";
    } elseif (empty($email)) {
        echo "<script>location.href='../../index.php?page_masterdata=data_petugas&kosong=Email tidak boleh kosong !';</script>";
    } elseif (empty($level)) {
        echo "<script>location.href='../../index.php?page_masterdata=data_petugas&kosong=Level per KWH tidak boleh kosong !';</script>";
    } else {
        include "../connection.php";
        $insert = mysqli_query($conn, "iNSERT INTO t_petugas (nama_petugas, email, password, level)
				value ('" . $nama . "','" . $email . "','" . md5($pw) . "','" . $level . "')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>location.href='../../index.php?page_masterdata=data_petugas&sukses=Data berhasil ditambahkan !';</script>";
        } else {
            echo "<script>location.href='../../index.php?page_masterdata=data_petugas&gagal=Data gagal ditambahkan !';</script>";
        }
    }
}
