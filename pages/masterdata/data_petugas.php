<?php
include "assets/css.php";
include "assets/js.php";
include "forms/masterdata/form_petugas.php";
include "details/detail_petugas.php";
include "controller/connection.php";

$query = mysqli_query($conn, "SELECT * FROM t_petugas");
$no = 0;

if (isset($_GET['sukses'])) { ?>
    <script>
        swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_petugas';
            });
    </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
    <script>
        swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_petugas';
            });
    </script>
<?php } elseif (isset($_GET['kosong'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['kosong'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_petugas';
            });
    </script>
<?php } ?>

<div class="main-body">
    <div class="page-wrapper">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Petugas</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Petugas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ static-layout ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <button type="button" class="text-white btn-icon float-right m-b-10 btn btn-sm btn-success" data-toggle="modal" data-target="#TambahPetugas"><i class="feather icon-plus"></i></button>
                            <table class="table" id="datatable">
                                <thead class="thead-blue">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama_petugas'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <th>
                                                <button type="button" class="btn  btn-icon btn-primary" data-toggle="modal" data-target="#DetailPetugas" data-id="<?= $row['id_petugas'] ?>" data-nama="<?= $row['nama_petugas'] ?>" data-email="<?= $row['email'] ?>" data-level="<?= $row['level'] ?>"><i class="feather icon-eye"></i></button>
                                                <button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#UbahPetugas" data-id="<?= $row['id_petugas'] ?>" data-nama="<?= $row['nama_petugas'] ?>" data-email="<?= $row['email'] ?>" data-level="<?= $row['level'] ?>"><i class="feather icon-edit"></i></button>
                                                <button type="button" class="btn  btn-icon btn-danger" data-toggle="modal" data-target="#HapusPetugas" data-id="<?= $row['id_petugas'] ?>" data-nama="<?= $row['nama_petugas'] ?>"><i class="feather icon-trash"></i></button>
                                            </th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ static-layout ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<script>
    $(function() {
        $('#DetailPetugas').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');
            var email = button.data('email');
            var level = button.data('level');
            var modal = $(this);
            modal.find('.modal-body #no-petugas').text(id);
            modal.find('.modal-body #nama').text(nama);
            modal.find('.modal-body #email').text(email);
            modal.find('.modal-body #level').text(level);
        });

        $('#UbahPetugas').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var idpetugas = button.data('id');
            var nama = button.data('nama');
            var email = button.data('email');
            var level = button.data('level');
            var modal = $(this);
            modal.find('.modal-body #id-petugas').val(idpetugas);
            modal.find('.modal-body #nama').val(nama);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #level').val(level);
        });

        $('#HapusPetugas').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(id);
            modal.find('.modal-body #data-hapus').text(nama);
        });
    });
</script>