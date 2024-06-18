<!-- Form Hapus -->
<div id="Bayar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Yang harus dibayarkan</h5>
            </div>
            <div class="modal-body">
                <form action="controller/transaksi/bayar.php" method="POST">
                    <div class="form-group">
                        <table>
                            <tr>
                                <td>Tagihan</td>
                                <td> : </td>
                                <td><b id="harga"></b></td>
                            </tr>
                            <tr>
                                <td>Biaya Admin</td>
                                <td> : </td>
                                <td><b id="biaya"></b></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td> : </td>
                                <td><b id="total"></b></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="harga" id="input-harga" class="form-control">
                        <input type="hidden" name="id" id="id" class="form-control">
                        <input type="hidden" name="bulan" id="bulan" class="form-control">
                        <input type="hidden" name="tahun" id="tahun" class="form-control">
                        <input type="hidden" name="tanggal" class="form-control" value="<?= date('Y-m-d'); ?>">
                        <input type="hidden" name="biaya" id="biaya" class="form-control">
                        <input type="hidden" name="total" id="total" class="form-control">
                        <input type="number" name="bayar" class="form-control" placeholder="Masukan nominal sesuai dengan total">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Batal</button>
                <button class="btn  btn-primary">Bayar</button>
            </div>
            </form>
        </div>
    </div>
</div>