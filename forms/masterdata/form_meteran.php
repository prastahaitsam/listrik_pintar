<?php
include "controller/connection.php";
$query = mysqli_query($conn, "SELECT max(no_Meteran) as noTerbesar FROM t_meteran");
$getKode = mysqli_fetch_array($query);

$Meteran = $getKode['noTerbesar'];

$urutan = (int) substr($Meteran, 3, 3);
$urutan++;

$angka = "666";

$noMeteran = $angka . sprintf("%03s", $urutan);
?>

<!-- Form Tambah -->
<div id="TambahMeteran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Meteran</h5>
            </div>
            <div class="modal-body">
                <form action="controller/meteran/tambah_meteran.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Meteran</label>
                        <input readonly class="form-control" name="no-meteran" value="<?= $noMeteran; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Meteran</label>
                        <select name="jenis" class="form-control theSelect">
                            <option value="">Pilih Jenis Meteran</option>
                            <option value="Analog">Analog</option>
                            <option value="Digital">Digital</option>
                            <option value="Smart Digital">Smart Digital</option>
                        </select>
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
<div id="UbahMeteran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Meteran</h5>
            </div>
            <div class="modal-body">
                <form action="controller/meteran/ubah_Meteran.php" method="POST">
                    <input type="hidden" class="form-control" name="id-meteran" id="id-meteran">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Meteran</label>
                        <input readonly class="form-control" name="no-meteran" id="no-meteran">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Meteran</label>
                        <select name="jenis" class="form-control theSelect" id="jenis">
                            <option value="">Pilih Jenis Meteran</option>
                            <option value="Analog">Analog</option>
                            <option value="Digital">Digital</option>
                            <option value="Smart Digital">Smart Digital</option>
                        </select>
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
<div id="HapusMeteran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Peringatan !</h5>
            </div>
            <div class="modal-body">
                <form action="controller/meteran/hapus_Meteran.php" method="POST">
                    <input type="hidden" name="id-hapus" id="id-hapus">
                    Apakah anda ingin menghapus data Meteran dengan no : <b id="data-hapus"></b> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-success" data-dismiss="modal">Batal</button>
                <button class="btn  btn-danger">Ya</button>
            </div>
            </form>
        </div>
    </div>
</div>