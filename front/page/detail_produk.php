<!-- ***** Call to Action Start ***** -->
<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT p.*, (SELECT u.kota FROM user u Where u.id_user = p.id_user) as nama FROM produk p Where p.id_produk = $id");
while ($hasil = mysqli_fetch_array($query)) :
?>
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <?php 
                        $a = str_split($hasil['harga']);
                        $b = 0;
                        $harga = '';
                        for ($i=count($a)-1; $i >= 0 ; $i--) {
                          if ($b++ == 3) {
                           $harga .= '.';  
                           $b = 1;
                          }
                            $harga .= $a[$i];
                        }
                        $a = strrev($harga);
                         ?>
                        <h2> <em><sup>Rp. <?= $a ?></sup>/Kg</em></h2>
                        <p><?= strtoupper($hasil['nama_produk']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section">
        <div class="container">
            <br>
            <br>

            <div class="row">
              <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="back/img/produk/<?= $hasil['foto'] ?>" alt="First slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <br>
              </div>

              <div class="col-md-4">
                <div class="contact-form">
                  <form action="#" id="contact">
                    <div class="form-group"><?=$hasil['deskripsi'] ?>
                      <p></p>
                    </div>
                    
                    <label>Area</label>
                    <span><?= $hasil['nama'] ?></span>

                    <div class="row">
                      <div class="col-md-6">
                        <label>Stok (Kg) <?= $hasil['stok'] ?> </label>
                      </div>
                    </div>
                    
                    <div class="main-button" style="display: inline-block;">
                        <a href='#' data-ket ='beli' data-id="<?= $hasil['id_produk']?>" class="cekLogin">Beli</a>
                    </div>
                    <div class="main-button" style="display: inline-block;">
                        <a href='#' data-ket ='keranjang' data-id="<?= $hasil['id_produk']?>" class="cekLogin">Keranjang</a>
                    </div>
                  </form>
                </div>

                <br>
              </div>
            </div>
        </div>
    </section>
<?php 
endwhile;
 ?>
    <!-- ***** Fleet Ends ***** -->