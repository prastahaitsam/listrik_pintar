<?php
include "assets/css.php";
include "assets/js.php";
include "forms/masterdata/form_Meteran.php";
include "controller/connection.php";

$query = mysqli_query($conn, "SELECT * FROM t_meteran");
$no = 0;

if (isset($_GET['sukses'])) { ?>
    <script>
        swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_meteran';
            });
    </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
    <script>
        swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_meteran';
            });
    </script>
<?php } elseif (isset($_GET['kosong'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['kosong'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_meteran';
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
                            <h5 class="m-b-10">Data Meteran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Meteran</a></li>
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
                            <button type="button" class="text-white btn-icon float-right m-b-10 btn btn-sm btn-success" data-toggle="modal" data-target="#TambahMeteran"><i class="feather icon-plus"></i></button>
                            <table class="table" id="datatable">
                                <thead class="thead-blue">
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Meteran</th>
                                        <th>Jenis Meteran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['no_meteran'] ?></td>
                                            <td><?= $row['jenis_meteran'] ?></td>
                                            <th>
                                                <button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#UbahMeteran" data-id="<?= $row['id_meteran'] ?>" data-no="<?= $row['no_meteran'] ?>" data-jenis="<?= $row['jenis_meteran'] ?>"><i class="feather icon-edit"></i></button>
                                                <button type="button" class="btn  btn-icon btn-danger" data-toggle="modal" data-target="#HapusMeteran" data-id="<?= $row['id_meteran'] ?>" data-no="<?= $row['no_meteran'] ?>"><i class="feather icon-trash"></i></button>
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
        $('#UbahMeteran').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var no = button.data('no');
            var jenis = button.data('jenis');
            var modal = $(this);
            modal.find('.modal-body #id-meteran').val(id);
            modal.find('.modal-body #no-meteran').val(no);
            modal.find('.modal-body #jenis').val(jenis);
        });

        $('#HapusMeteran').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var no = button.data('no');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(id);
            modal.find('.modal-body #data-hapus').text(no);
        });
    });
</script>