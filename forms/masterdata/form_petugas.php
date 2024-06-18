<!-- Form Tambah -->
<div id="TambahPetugas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Petugas</h5>
            </div>
            <div class="modal-body">
                <form action="controller/petugas/tambah_petugas.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <select name="level" class="form-control">
                            <option value="">Pilih level</option>
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
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
<div id="UbahPetugas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Petugas</h5>
            </div>
            <div class="modal-body">
                <form action="controller/petugas/ubah_petugas.php" method="POST">
                    <input type="hidden" name="id" class="form-control" id="id-petugas" placeholder="Masukan nama lengkap">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <select name="level" class="form-control" id="level">
                            <option value="">Pilih level</option>
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
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
<div id="HapusPetugas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Peringatan !</h5>
            </div>
            <div class="modal-body">
                <form action="controller/petugas/hapus_petugas.php" method="POST">
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