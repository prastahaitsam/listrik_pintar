<?php
if ($_POST) {
	$no_meter = $_POST['no-meter'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$daya = $_POST['daya'];
	$email = $_POST['email'];
	$pw = "inipassword";

	if (empty($no_meter)) {
		echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&kosong=Nomor meteran tidak boleh kosong !';</script>";
	} elseif (empty($nama)) {
		echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&kosong=Nama pelanggan tidak boleh kosong !';</script>";
	} elseif (empty($alamat)) {
		echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&kosong=Alamat tidak boleh kosong !';</script>";
	} elseif (empty($daya)) {
		echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&kosong=Daya tidak boleh kosong !';</script>";
	} elseif (empty($email)) {
		echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&kosong=Email tidak boleh kosong !';</script>";
	} else {
		include "../connection.php";
		$insert = mysqli_query($conn, "iNSERT INTO t_pelanggan (id_meteran, nama_pelanggan, alamat, kode_tarif, email, password)
				value ('" . $no_meter . "','" . $nama . "','" . $alamat . "','" . $daya . "','" . $email . "','" . md5($pw) . "')") or die(mysqli_error($conn));

		if ($insert) {
			echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&sukses=Data berhasil ditambahkan !';</script>";
		} else {
			echo "<script>location.href='../../index.php?page_masterdata=data_pelanggan&gagal=Data gagal ditambahkan !';</script>";
		}
	}
}
