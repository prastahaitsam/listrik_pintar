<?php
include "../connection.php";

$kode_tarif = $_POST['kode-tarif'];
$daya = $_POST['daya'];
$tarif = $_POST['tarif-per-kwh'];

$update = mysqli_query($conn, "UPDATE t_tarif set kode_tarif='$kode_tarif', daya='$daya', tarif_per_kwh='$tarif' where kode_tarif='$kode_tarif'") or die(mysqli_error($conn));
if ($update) {
    echo "<script>location.href='../../index.php?page_masterdata=data_tarif&sukses=Data berhasil diedit !';</script>";
} else {
    echo "<script>location.href='../../index.php?page_masterdata=data_tarif&gagal=Data gagal diedit !';</script>";
}
