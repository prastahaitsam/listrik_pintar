<?php
include "../connection.php";

$id_meteran = $_POST['id-meteran'];
$no_meteran = $_POST['no-meteran'];
$jenis = $_POST['jenis'];

$update = mysqli_query($conn, "UPDATE t_meteran set no_meteran='$no_meteran', jenis_meteran='$jenis' where id_meteran='$id_meteran'") or die(mysqli_error($conn));
if ($update) {
    echo "<script>location.href='../../index.php?page_masterdata=data_meteran&sukses=Data berhasil diedit !';</script>";
} else {
    echo "<script>location.href='../../index.php?page_masterdata=data_meteran&gagal=Data gagal diedit !';</script>";
}
