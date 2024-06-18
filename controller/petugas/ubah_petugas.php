<?php
include "../connection.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$level = $_POST['level'];

$update = mysqli_query($conn, "UPDATE t_petugas set nama_petugas='$nama', email='$email', level='$level' where id_petugas='$id'") or die(mysqli_error($conn));
if ($update) {
    echo "<script>location.href='../../index.php?page_masterdata=data_petugas&sukses=Data berhasil diedit !';</script>";
} else {
    echo "<script>location.href='../../index.php?page_masterdata=data_petugas&gagal=Data gagal diedit !';</script>";
}
