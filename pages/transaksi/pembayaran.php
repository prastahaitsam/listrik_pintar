<?php
include "assets/css.php";
include "assets/js.php";
include "forms/transaksi/form_pembayaran.php";
include "details/detail_pelanggan.php";
include "controller/connection.php";

$query = mysqli_query($conn, "SELECT * FROM t_pelanggan join t_tagihan on t_pelanggan.id_pelanggan = t_tagihan.id_pelanggan join t_tarif on t_pelanggan.kode_tarif = t_tarif.kode_tarif where status='BELUM DIBAYAR'");
$no = 0;

if (isset($_GET['sukses'])) { ?>
    <script>
        swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
            });
    </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
    <script>
        swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
            });
    </script>
<?php } elseif (isset($_GET['besar'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['besar'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
            });
    </script>
<?php } elseif (isset($_GET['kecil'])) { ?>
    <script>
        swal("Error !", "<?= $_GET['kecil'] ?>", "warning")
            .then((value) => {
                location.href = 'index.php?page_transaksi=pembayaran';
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
                            <h5 class="m-b-10">Pembayaran Listrik</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item"><a href="#!">Pembayaran Listrik</a></li>
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
                            <table class="table" id="datatable">
                                <thead class="thead-blue">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {
                                        $no++;
                                        $harga = $row['jml_meter'] * $row['tarif_per_kwh'];
                                        $biaya = 10000;
                                        $total = $harga + $biaya;
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama_pelanggan'] ?></td>
                                            <td><?= $row['bulan'] ?></td>
                                            <td><?= $row['tahun'] ?></td>
                                            <td><button type="button" class="text-white btn btn-sm btn-primary" data-toggle="modal" data-target="#Bayar" data-id="<?= $row['id_pelanggan'] ?>" data-bulan="<?= $row['bulan'] ?>" data-tahun="<?= $row['tahun'] ?>" data-harga="<?= $harga ?>" data-biaya="<?= $biaya ?>" data-total="<?= $total ?>">BAYAR</button></td>
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
        $('#Bayar').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var bulan = button.data('bulan');
            var tahun = button.data('tahun');
            var harga = button.data('harga');
            var biaya = button.data('biaya');
            var total = button.data('total');
            var modal = $(this);
            modal.find('.modal-body #harga').text(harga);
            modal.find('.modal-body #biaya').text(biaya);
            modal.find('.modal-body #total').text(total);
            modal.find('.modal-body #input-harga').val(harga);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #bulan').val(bulan);
            modal.find('.modal-body #tahun').val(tahun);
            modal.find('.modal-body #biaya').val(biaya);
            modal.find('.modal-body #total').val(total);
        });
    });
</script>