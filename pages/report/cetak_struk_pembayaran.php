<!DOCTYPE html>
<html>

<head>
    <title>Struk Pembayaran</title>
    <!-- Favicon icon -->
    <link rel="icon" href="../../assets/images/icon listrik pintar.png" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="../../assets/css/plugins/prism-coy.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "../../controller/connection.php";

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM t_pembayaran join t_pelanggan on t_pembayaran.id_pelanggan = t_pelanggan.id_pelanggan where id_bayar = '$id'");
    $no = 0;

    ?>

    <div class="col-sm-12 col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Struk Pembayaran</h5>
                <table>
                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                        <tr class="ukuran">
                            <td>Nama Pelanggan</td>
                            <td>:</td>
                            <td><b><?= $row['nama_pelanggan']; ?></b></td>
                        </tr>
                        <tr class="ukuran">
                            <td>Tanggal Bayar</td>
                            <td>:</td>
                            <td><b><?= $row['tanggal']; ?></b></td>
                        </tr>
                        <tr class="ukuran">
                            <td>Bulan</td>
                            <td>:</td>
                            <td><b><?= $row['bulanbayar']; ?></b></td>
                        </tr>
                        <tr class="ukuran">
                            <td>Tahun</td>
                            <td>:</td>
                            <td><b><?= $row['tahunBayar']; ?></b></td>
                        </tr>
                        <tr class="ukuran">
                            <td>Total Bayar</td>
                            <td>:</td>
                            <td><b><?= $row['total_bayar']; ?></b></td>
                        </tr>
                    <?php } ?>
                </table>
                <a href="../../index.php?" class="btn  btn-primary">Home</a>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>
    <!-- Required Js -->
    <script src="../../assets/js/vendor-all.min.js"></script>
    <script src="../../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../../assets/js/ripple.js"></script>
    <script src="../../assets/js/pcoded.min.js"></script>

    <!-- prism Js -->
    <script src="../../assets/js/plugins/prism.js"></script>
    <!-- sweetalet -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- datatable -->
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>