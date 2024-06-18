<?php
include "../connection.php";

$id = $_POST['id-hapus'];

$delete = mysqli_query($conn, "DELETE FROM t_petugas Where id_petugas = '$id'") or die(mysqli_error($conn));
if ($delete) {
    echo "<script>location.href='../../index.php?page_masterdata=data_petugas&sukses=Data berhasil dihapus !';</script>";
} else {
    echo "<script>location.href='../../index.php?page_masterdata=data_petugas&sukses=Data gagal dihapus !';</script>";
}
