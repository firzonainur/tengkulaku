<div class="container-fluid">
   <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
      </div>

       <div class="row">
        <div class="col-lg-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-priCard Example">Silahkan isi data</h6>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="fungsi/tambah_produk.php" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="nama_produk">Nama Produk</label>
                              <input type="text" class="form-control" id="nama_produk" placeholder="Contoh: Buah Apel" name="nama">
                            </div>
                            <div class="form-group">
                              <label for="deskripsi_produk">Deskripsi Produk</label>
                              <textarea class="form-control" id="deskripsi_produk" rows="3" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="kategori">Kategori</label>
                              <select class="form-control" id="kategori" name="kategori">
                                <option value="1">buah</option>
                              </select>
                            </div>

                            <label class="" for="harga">Username</label>
                              <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" class="form-control" id="harga" placeholder="Harga" name="harga">
                              </div>

                           <!--  <div class="form-group">
                              <label for="harga_produk">Harga Produk</label>
                              <input class="form-control" id="harga_produk" type="number" name="harga">
                            </div> -->

                             <div class="form-group mt-1">
                              <label for="stok_produk">Stok Produk</label>
                               <div class="input-group is-invalid">
                                <div class="custom-file">
                                  <input class="form-control" id="stok_produk" type="number" name="stok">
                                  
                                </div>
                                <div class="input-group-append">
                                   <div class="input-group-text">Kg</div>
                                </div>
                              </div>
                             </div>

                          
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                                <label for="exampleFormControlFile1">Input Gambar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar" accept="image/*" onchange="loadFileProduk(event)">
                              </div>
                              <div class="container-fluid">
                                <img id="imgsrcproduk" src="img/img-none.png" class="img-fluid" alt="...">
                              </div>
                              
                          </div>
                          <div class="form-group ml-auto mr-auto mt-2">
                            <input class="btn btn-primary" type="submit" value="Tambah" class="form-control" id="stok_produk" rows="3">
                          </div>

                          
                        </div>
                                          
                      </form>
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