    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login/fungsi/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="beli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="front/fungsi/fungsi.php?page=tumbas" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Informasi Pembelian</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table" id="tableBeli">
                        <input type="hidden" value="" id="b_id_produk" name="id_produk">
                        <input type="hidden" value="" id="b_id_seller" name="id_seller">
                        <input type="hidden" value="" id="b_stok">
                        <tr>
                            <td>Produk</td>
                            <td><input type="text" class="form-control" name="nama" id='b_nama' readonly="" value=""></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" class="form-control" name="harga" id='b_harga' readonly="" value=""></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>
                                <button class='buttonJumlah' id='b_kurang' type="button" data-id="kurang" disabled="">-</button>
                                <input type="text" class="form-control" name="jml" id='b_jml' readonly="" value="1">
                                <button class='buttonJumlah' id='b_tambah' type="button" data-id="tambah">+</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" class="form-control total" name="total" id='b_total' readonly="" value=""></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" class="form-control" name="alamat" id='b_alamat' value=""></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td><input type="text" class="form-control" name="kota" id='b_kota' value=""></td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td><input type="text" class="form-control" name="provinsi" id='b_provinsi' value=""></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="keranjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="front/fungsi/fungsi.php?page=masukKranjang" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Informasi Pembelian</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table" id="tableBeli">
                        <input type="hidden" value="" id="k_id_produk" name="id_produk">
                        <input type="hidden" value="" id="k_id_seller" name="id_seller">
                        <input type="hidden" id="k_stok">
                        <tr>
                            <td>Produk</td>
                            <td><input type="text" class="form-control" id='k_nama' disabled="" value=""></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" class="form-control" id='k_harga' disabled="" value=""></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>
                                <button class='buttonJumlahK' type="button" id="k_kurang" data-id="kurang" disabled="">-</button>
                                <input type="text" class="form-control" name="jml" id='k_jml' readonly="" value="1">
                                <button class='buttonJumlahK' type="button" id="k_tambah" data-id="tambah">+</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" class="form-control" id='k_total' readonly="" ="" name="total"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </form>
        </div>
    </div>