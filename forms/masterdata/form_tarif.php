<?php
include "controller/connection.php";
$query = mysqli_query($conn, "SELECT max(kode_tarif) as kodeTerbesar FROM t_tarif");
$getKode = mysqli_fetch_array($query);

$Tarif = $getKode['kodeTerbesar'];

$urutan = (int) substr($Tarif, 3, 3);
$urutan++;

$huruf = "TRF";

$kodeTarif = $huruf . sprintf("%03s", $urutan);
?>

<!-- Form Tambah -->
<div id="TambahTarif" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Tambah Tarif</h5>
			</div>
			<div class="modal-body">
				<form action="controller/tarif/tambah_tarif.php" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Kode Tarif</label>
						<input readonly class="form-control" name="kode-tarif" value="<?= $kodeTarif; ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Daya</label>
						<input type="number" class="form-control" name="daya" placeholder="Masukan daya">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Tarif per KWH</label>
						<input type="number" class="form-control" name="tarif-per-kwh" placeholder="Masukan tarif">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Batal</button>
				<button class="btn  btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Form Ubah -->
<div id="UbahTarif" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Ubah Tarif</h5>
			</div>
			<div class="modal-body">
				<form action="controller/tarif/ubah_tarif.php" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Kode Tarif</label>
						<input readonly class="form-control" name="kode-tarif" id="kode-tarif">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Daya</label>
						<input type="number" class="form-control" name="daya" id="daya">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Tarif per KWH</label>
						<input type="number" class="form-control" name="tarif-per-kwh" id="tarif">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Batal</button>
				<button class="btn  btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Form Hapus -->
<div id="HapusTarif" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Peringatan !</h5>
			</div>
			<div class="modal-body">
				<form action="controller/tarif/hapus_tarif.php" method="POST">
					<input type="hidden" name="id-hapus" id="id-hapus">
					Apakah anda ingin menghapus data <b id="data-hapus"></b> Watt ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-success" data-dismiss="modal">Batal</button>
				<button class="btn  btn-danger">Ya</button>
			</div>
			</form>
		</div>
	</div>
</div>