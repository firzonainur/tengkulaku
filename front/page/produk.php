    <!-- ***** Call to Action Start ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/PASAR.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Produk <em>kami</em></h2>
                        <p>Kami menyediakan produk-produk berharga rendah namun tetap berkualitas tinggi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
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

                            <p><?php echo $hasil['deskripsi']; ?></p>

                            <ul class="social-icons">
                                <li><a href="?url=detailProduk">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <?php }; ?>
                
            </div>

            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
