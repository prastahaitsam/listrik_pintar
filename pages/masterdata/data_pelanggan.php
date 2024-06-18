<?php
include "assets/css.php";
include "assets/js.php";
include "forms/masterdata/form_pelanggan.php";
include "details/detail_pelanggan.php";
include "controller/connection.php";

$query = mysqli_query($conn, "SELECT * FROM t_pelanggan join t_meteran on t_pelanggan.id_meteran = t_meteran.id_meteran join t_tarif on t_pelanggan.kode_tarif = t_tarif.kode_tarif");
$no = 0;

if (isset($_GET['sukses'])) { ?>
    <script>
        swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_pelanggan';
            });
    </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
    <script>
        swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_pelanggan';
            });
    </script>
<?php } elseif (isset($_GET['kosong'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['kosong'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_pelanggan';
            });
    </script>
<?php }
?>

<div class="main-body">
    <div class="page-wrapper">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Pelanggan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Pelanggan</a></li>
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
                            <button type="button" class="text-white btn-icon float-right m-b-10 btn btn-sm btn-success" data-toggle="modal" data-target="#TambahPelanggan"><i class="feather icon-plus"></i></button>
                            <table class="table" id="datatable">
                                <thead class="thead-blue">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama_pelanggan'] ?></td>
                                            <td><?= $row['alamat'] ?></td>
                                            <th>
                                                <button type="button" class="btn  btn-icon btn-primary" data-toggle="modal" data-target="#DetailPelanggan" data-nometer="<?= $row['no_meteran'] ?>" data-nama="<?= $row['nama_pelanggan'] ?>" data-alamat="<?= $row['alamat'] ?>" data-daya="<?= $row['daya'] ?>" data-email="<?= $row['email'] ?>"><i class="feather icon-eye"></i></button>
                                                <button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#UbahPelanggan" data-id="<?= $row['id_pelanggan'] ?>" data-nometer="<?= $row['id_meteran'] ?>" data-nama="<?= $row['nama_pelanggan'] ?>" data-alamat="<?= $row['alamat'] ?>" data-daya="<?= $row['kode_tarif'] ?>" data-email="<?= $row['email'] ?>"><i class="feather icon-edit"></i></button>
                                                <button type="button" class="btn  btn-icon btn-danger" data-toggle="modal" data-target="#HapusPelanggan" data-id="<?= $row['id_pelanggan'] ?>" data-nama="<?= $row['nama_pelanggan'] ?>"><i class="feather icon-trash"></i></button>
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
        $('#DetailPelanggan').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var nometer = button.data('nometer');
            var nama = button.data('nama');
            var alamat = button.data('alamat');
            var daya = button.data('daya');
            var email = button.data('email');
            var modal = $(this);
            modal.find('.modal-body #no-meter').text(nometer);
            modal.find('.modal-body #nama').text(nama);
            modal.find('.modal-body #alamat').text(alamat);
            modal.find('.modal-body #daya').text(daya);
            modal.find('.modal-body #email').text(email);
        });

        $('#UbahPelanggan').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var idPelanggan = button.data('id');
            var nometer = button.data('nometer');
            var nama = button.data('nama');
            var alamat = button.data('alamat');
            var daya = button.data('daya');
            var email = button.data('email');
            var modal = $(this);
            modal.find('.modal-body #id-pelanggan').val(idPelanggan);
            modal.find('.modal-body #no-meter').val(nometer);
            modal.find('.modal-body #nama').val(nama);
            modal.find('.modal-body #alamat').val(alamat);
            modal.find('.modal-body #daya').val(daya);
            modal.find('.modal-body #email').val(email);
        });

        $('#HapusPelanggan').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(id);
            modal.find('.modal-body #data-hapus').text(nama);
        });
    });
</script>