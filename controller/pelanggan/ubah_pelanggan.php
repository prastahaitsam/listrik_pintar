<?php
include "../connection.php";

$id = $_POST['id'];
$nometer = $_POST['no-meter'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$daya = $_POST['daya'];
$email = $_POST['email'];

$update = mysqli_query($conn, "UPDATE t_pelanggan set id_meteran='$nometer', nama_pelanggan='$nama', alamat='$alamat', kode_tarif='$daya', email='$email' where id_pelanggan='$id'") or die(mysqli_error($conn));
if ($update) {
    echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&sukses=Data berhasil diedit !';</script>";
} else {
    echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&gagal=Data gagal diedit !';</script>";
}
