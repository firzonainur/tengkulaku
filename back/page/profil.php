<div class="container-fluid">
   <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Profil</h1>
      </div>

       <div class="row">
          <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 text-center">
                        <h6 class="m-0 font-weight-bold text-priCard Example">Data Profil Anda</h6>
                    </div>
                    <div class="card-body m-auto">
                       <div class="" style="width: 18rem;">
                          <img src="img/undraw_profile.svg" class="card-img-top" alt="...">
                          <?php 
                              $no=1;
                              $sesi=$_SESSION['id_user'];
                              $sql = mysqli_query($conn, "SELECT * FROM user WHERE id_user=$sesi");
                              while ($hasil = mysqli_fetch_array($sql)) { 
                          ?>
                          <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $hasil['nama'] ?></h5>
                            <p class="card-text"></p>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center"><?php echo $hasil['alamat'] ?></li>
                            <li class="list-group-item text-center"><?php echo $hasil['kota'] ?></li>
                            <li class="list-group-item text-center"><?php echo $hasil['provinsi'] ?></li>
                            <li class="list-group-item text-center"><?php echo $hasil['level'] ?></li>
                          </ul>
                          <!-- <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                          </div> -->
                        <?php } ?>
                        </div>
                    </div>
                </div>
          </div>
          <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 text-center">
                        <h6 class="m-0 font-weight-bold text-priCard Example">Ubah Profil Anda</h6>
                    </div>
                    <div class="card-body m-auto">
                      <?php 
                              $no=1;
                              $sesi=$_SESSION['id_user'];
                              $sql = mysqli_query($conn, "SELECT * FROM user WHERE id_user=$sesi");
                              while ($hasil = mysqli_fetch_array($sql)) { 
                          ?>
                       <form method="POST" action="fungsi/update_profil.php" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-lg-6">
                              <input type="hidden" class="form-control" placeholder="" name="id" value="<?php echo $hasil['id_user'] ?>">
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?php echo $hasil['nama'] ?>">
                            </div>
                            <div class="form-group">
                              <label for="email">Email/Username</label>
                              <input type="text" class="form-control" id="email" name="email" value="<?php echo $hasil['email'] ?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="no_hp">No Hp</label>
                              <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $hasil['no_hp'] ?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <input class="form-control" id="alamat" type="text" name="alamat" value="<?php echo $hasil['alamat'] ?>">
                            </div>
                            <div class="form-group">
                              <label for="stok_produk">Kota/Kabupaten</label>
                              <input class="form-control" id="stok_produk" type="text" name="kota" value="<?php echo $hasil['kota'] ?>">
                            </div>
                            <div class="form-group">
                              <label for="stok_produk">Provinsi</label>
                              <input class="form-control" id="stok_produk" type="text" name="provinsi" value="<?php echo $hasil['provinsi'] ?>">
                            </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                                <label for="exampleFormControlFile1">Input Gambar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" >
                              </div>
                              <img src="img/undraw_profile.svg" class="img-thumbnail" alt="..." style="height: 100px; width:100px;">
                          </div>
                          <div class="form-group m-auto">
                            <input class="btn btn-primary" type="submit" value="Update" class="form-control" id="stok_produk" rows="3">
                          </div>

                          
                        </div>
                                          
                      </form>
                    <?php } ?>
                    </div>
                </div>
          </div>

        </div>

      
      
      <!-- forms -->
      <div class="row">
        <div class="col-lg-6">
         
        </div>
      </div>
</div>