<?php
if ($_SESSION['level'] == "") {
    $_SESSION['gagal_login'] = "Website Khusus Member";
    header("location:../signin.php");
}
?>

<style>
    .ukuran {
        height: 50;
    }
</style>
<!-- modal add -->
<div id="DetailPelanggan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <table>
                    <tr class="ukuran">
                        <td>No Meteran</td>
                        <td>:</td>
                        <td><b id="no-meter"></b></td>
                    </tr>
                    <tr class="ukuran">
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><b id="nama"></b></td>
                    </tr>
                    <tr class="ukuran">
                        <td>Alamat</td>
                        <td>:</td>
                        <td><b id="alamat"></b></td>
                    </tr>
                    <tr class="ukuran">
                        <td>Daya</td>
                        <td>:</td>
                        <td><b id="daya"></b> Watt</td>
                    </tr>
                    <tr class="ukuran">
                        <td>Email</td>
                        <td>:</td>
                        <td><b id="email"></b></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-primary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal add -->