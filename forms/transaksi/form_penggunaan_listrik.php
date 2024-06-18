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
<div id="TambahPenggunaan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Penggunaan Listrik</h5>
            </div>
            <div class="modal-body">
                <form action="controller/transaksi/penggunaan_listrik.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Penggunaan</label>
                        <select name="nama" class="form-control" id="daya">
                            <option value="">Pilih Nama pengguna</option>
                            <?php
                            include "controller/connection.php";
                            $query = mysqli_query($conn, "SELECT * FROM t_pelanggan");
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $row['id_pelanggan'] ?>"><?= $row['nama_pelanggan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bulan</label>
                        <select name="bulan" class="form-control" id="bulan">
                            <option value="">Pilih Bulan</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun</label>
                        <input readonly name="tahun" class="form-control" value="<?= date('Y'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Meter Awal <small>6 Digit</small></label>
                        <input type="number" name="meter-awal" class="form-control" placeholder="Masukan Meter Akhir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Meter Akhir <small>6 Digit</small></label>
                        <input type="number" name="meter-akhir" class="form-control" placeholder="Masukan Meter Akhir">
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