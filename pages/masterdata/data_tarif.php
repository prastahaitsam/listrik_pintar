<?php
include "assets/css.php";
include "assets/js.php";
include "forms/masterdata/form_tarif.php";
include "controller/connection.php";

$query = mysqli_query($conn, "SELECT * FROM t_tarif");
$no = 0;

if (isset($_GET['sukses'])) { ?>
    <script>
        swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_tarif';
            });
    </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
    <script>
        swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_tarif';
            });
    </script>
<?php } elseif (isset($_GET['kosong'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['kosong'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_masterdata=data_tarif';
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
                            <h5 class="m-b-10">Data Tarif</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Tarif</a></li>
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
                            <button type="button" class="text-white btn-icon float-right m-b-10 btn btn-sm btn-success" data-toggle="modal" data-target="#TambahTarif"><i class="feather icon-plus"></i></button>
                            <table class="table" id="datatable">
                                <thead class="thead-blue">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Daya</th>
                                        <th>Tarif per KWH</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode_tarif'] ?></td>
                                            <td><?= $row['daya'] ?> Watt</td>
                                            <td><?= $row['tarif_per_kwh'] ?></td>
                                            <th>
                                                <button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#UbahTarif" data-kodetarif="<?= $row['kode_tarif'] ?>" data-daya="<?= $row['daya'] ?>" data-tarif="<?= $row['tarif_per_kwh'] ?>"><i class="feather icon-edit"></i></button>
                                                <button type="button" class="btn  btn-icon btn-danger" data-toggle="modal" data-target="#HapusTarif" data-kodetarif="<?= $row['kode_tarif'] ?>" data-daya="<?= $row['daya'] ?>"><i class="feather icon-trash"></i></button>
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
        $('#UbahTarif').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var kodetarif = button.data('kodetarif');
            var daya = button.data('daya');
            var tarif = button.data('tarif');
            var modal = $(this);
            modal.find('.modal-body #kode-tarif').val(kodetarif);
            modal.find('.modal-body #daya').val(daya);
            modal.find('.modal-body #tarif').val(tarif);
        });

        $('#HapusTarif').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var kodetarif = button.data('kodetarif');
            var daya = button.data('daya');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(kodetarif);
            modal.find('.modal-body #data-hapus').text(daya);
        });
    });
</script>