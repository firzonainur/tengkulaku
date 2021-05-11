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
                                   <input type="hidden" value="<?= $total ?>" name="total">
                                </tr>
                                <tr>
                                    <td align="right" colspan="3">
                                        <button type="submit">checkout</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </section>
