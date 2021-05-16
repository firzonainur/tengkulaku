<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/check.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Let's <em>Checkout</em></h2>
                        <p>Tengkulaku Mudah Dalam Transaksi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="front/fungsi/fungsi.php?page=tumbasKeranjang" method="post">
                        <table class="table">
                            <tr>
                               <td>Nama Produk</td>
                               <td>Jumlah</td>
                               <td>Subtotal</td>
                            </tr>
                            <?php 
                                $total = 0;
                                $query = mysqli_query($conn, "SELECT id_user as seller, nama from user where id_user IN (SELECT distinct(id_seller) from keranjang where id_user = ".$_SESSION['id_user'].")");
                                while ($hasil = mysqli_fetch_array($query)) {
                            ?>
                                    <tr>
                                        <td colspan="2" align="center"><?= $hasil['nama'] ?></td>
                                        <td>&nbsp;</td>
                                    </tr>
                            <?php  
                                        $query1 = mysqli_query($conn, "SELECT k.*, (SELECT p.nama_produk from produk p where p.id_produk = k.id_produk) as nama from keranjang k where k.id_seller = ". $hasil['seller']." and k.id_user = ".$_SESSION['id_user']);
                                        while ($hasil1 = mysqli_fetch_array($query1)) {
                            ?>
                                            <tr>
                                                <td><?= $hasil1['nama'] ?></td>
                                                <td><?= $hasil1['kuantitas'] ?></td>
                                                <td><?= $hasil1['subtotal'] ?></td>
                                            </tr>
                            <?php                
                                        $total += $hasil1['subtotal']; 
                                        }
                            ?>
                                    </div>
                            <?php    
                                }
                            ?>
                            
                                <tr>
                                   <td colspan="2">Total</td>
                                   <td><?= $total ?></td>
                                   <input type="hidden" class="form-control total" name="total" id='bas_total0' readonly="" value="<?= $total ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right" colspan="3">
                                        <button data-ket ='baskett' data-id="<?= $hasil['id_produk']?>" class="cekLogin" type="button">Checkout</button>
                                    </td>
                                </tr>
                            </table>
                            <div class="modal fade" id="baskett" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Masukan Informasi Pembelian</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table" id="tableBasket">
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td><input type="text" class="form-control" name="alamat" id='bas_alamat' value=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td><input type="text" class="form-control" name="kota" id='bas_kota' value=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Provinsi</td>
                                                    <td><input type="text" class="form-control" name="provinsi" id='bas_provinsi' value=""></td>
                                                </tr>
                                                <tr>
                                                <td>Metode Kirim</td>
                                                <td>
                                                    <select name="metodekirim" id="" required="" class="form-control MKMK2">
                                                        <?php 
                                                            $query = mysqli_query($conn, "SELECT * FROM metode_kirim");
                                                            while ($hasil = mysqli_fetch_array($query)) { ?>
                                                                <option value="<?= $hasil['id_MK']?>/<?=$hasil['bayar_MK']?>"><?= $hasil['nama_MK']?>  --- <?=$hasil['bayar_MK']?></option>;
                                                        <?php }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Metode Bayar
                                                </td>
                                                <td>
                                                    <select name="metodebayar" id="" required="" class="form-control MBMB2">
                                                        <?php 
                                                            $query = mysqli_query($conn, "SELECT * FROM metode_bayar");
                                                            while ($hasil = mysqli_fetch_array($query)) {?>
                                                                <option value="<?= $hasil['id_MB']?>/<?= $hasil['biaya_MB']?>"><?= $hasil['nama_MB']?>  --- <?=$hasil['biaya_MB']?></option>;
                                                            <?php }
                                                         ?>
                                                    </select>
                                                </td>
                                            </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td><input type="text" class="form-control total" name="totalA" id='bas_totalA' readonly="" value=""></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </section>