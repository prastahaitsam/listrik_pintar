<!-- Form Tambah -->
<div id="TambahPelanggan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Pelanggan</h5>
            </div>
            <div class="modal-body">
                <form action="controller/pelanggan/tambah_pelanggan.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Meteran</label>
                        <select name="no-meter" class="form-control" id="daya">
                            <option value="">Pilih Nomor Yang Sesuai</option>
                            <?php
                            include "controller/connection.php";
                            $query = mysqli_query($conn, "SELECT * FROM t_meteran");
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $row['id_meteran'] ?>"><?= $row['no_meteran'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Daya</label>
                        <select name="daya" class="form-control" id="daya">
                            <option value="">Pilih daya</option>
                            <?php
                            include "controller/connection.php";
                            $query = mysqli_query($conn, "SELECT * FROM t_tarif");
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $row['kode_tarif'] ?>"><?= $row['daya'] ?> Watt</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan email">
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
<div id="UbahPelanggan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Pelanggan</h5>
            </div>
            <div class="modal-body">
                <form action="controller/pelanggan/ubah_pelanggan.php" method="POST">
                    <input type="hidden" name="id" class="form-control" id="id-pelanggan">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Meteran</label>
                        <select name="no-meter" class="form-control" id="no-meter">
                            <option value="">Pilih Nomor Yang Sesuai</option>
                            <?php
                            include "controller/connection.php";
                            $query = mysqli_query($conn, "SELECT * FROM t_meteran");
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $row['id_meteran'] ?>"><?= $row['no_meteran'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Daya</label>
                        <select name="daya" class="form-control" id="daya">
                            <option value="">Pilih daya</option>
                            <?php
                            include "controller/connection.php";
                            $query = mysqli_query($conn, "SELECT * FROM t_tarif");
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $row['kode_tarif'] ?>"><?= $row['daya'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email">
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
<div id="HapusPelanggan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Peringatan !</h5>
            </div>
            <div class="modal-body">
                <form action="controller/pelanggan/hapus_pelanggan.php" method="POST">
                    <input type="hidden" name="id-hapus" id="id-hapus">
                    Apakah anda ingin menghapus data <b id="data-hapus"></b> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-success" data-dismiss="modal">Batal</button>
                <button class="btn  btn-danger">Ya</button>
            </div>
            </form>
        </div>
    </div>
</div>