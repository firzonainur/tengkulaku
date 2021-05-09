<!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>Website <em>Penjualan</em> Produk Agrikultur</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Produk <em>Kita</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
           <div class="row">
                    <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM produk WHERE verifikasi='diterima' ");
                        while ($hasil = mysqli_fetch_array($sql)) {
                    ?>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="back/img/produk/<?= $hasil['foto'] ?>" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rp</sup><?php echo $hasil['harga']; ?>/Kg
                            </span>

                            <span style="margin-left: 100px">
                                <sup></sup>Penjual : <?php echo $hasil['id_user']; ?>
                            </span>

                            <h4><?php echo $hasil['nama_produk']; ?></h4>

                            <ul class="social-icons">
                                <li><a href="?url=detailProduk">View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <?php }; ?>
                
            </div>

            <br>

            <div class="main-button text-center">
                <a href="products.html">Lihat produk lain</a>
            </div>
        </div>
    </section>