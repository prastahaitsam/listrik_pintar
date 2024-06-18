<?php
include "../connection.php";
if ($_POST) {
    $id = $_POST['id'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];
    $biaya = $_POST['biaya'];
    $total = $_POST['total'];
    $tanggal = $_POST['tanggal'];
    $bayar = $_POST['bayar'];

    if ($bayar > $total) {
        echo "<script>location.href='../../index.php?page_transaksi=pembayaran&besar=Tidak ada kembalian !';</script>";
    } elseif ($bayar < $total) {
        echo "<script>location.href='../../index.php?page_transaksi=pembayaran&kecil=Silahkan masukan nominal yang sesuai !';</script>";
    } elseif (empty($bayar)) {
        echo "<script>location.href='../../index.php?page_transaksi=pembayaran&kosong=Nominal tidak boleh kosong !';</script>";
    } else {
        include "../connection.php";
        $insert1 = mysqli_query($conn, "iNSERT INTO t_pembayaran (id_pelanggan, tanggal, bulanbayar, tahunBayar, biayaadmin, total_bayar)
				value ('" . $id . "','" . $tanggal . "','" . $bulan . "','" . $tahun . "','" . $biaya . "','" . $bayar . "')") or die(mysqli_error($conn));
        $insert2 = mysqli_query($conn, "UPDATE t_tagihan set status = 'SUDAH DIBAYAR' where id_pelanggan='$id' ") or die(mysqli_error($conn));

        if ($insert1 && $insert2) {
            echo "<script>location.href='../../index.php?page_transaksi=pembayaran&sukses=Pembayaran Berhasil !';</script>";
        } else {
            echo "<script>location.href='../../index.php?page_transaksi=pembayaran&gagal=Pembayaran Gagal !';</script>";
        }
    }
}
