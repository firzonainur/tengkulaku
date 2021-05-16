                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produk</h1>
                    <p class="mb-4"> Berikut Data produk Anda</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th>Upload</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $sql = mysqli_query($conn, "SELECT p.*, (SELECT k.nama_kategori FROM kategori k where k.id_kategori = p.id_kategori) as kategori FROM produk p where id_user = " . $_SESSION['id_user']);
                                            while ($hasil = mysqli_fetch_array($sql)) :
                                        ?>
                                        <tr>
                                            <td class="text-center"><img src="img/produk/<?= $hasil['foto'] ?>" class="img-thumbnail" alt="..." style="height: 90px; width:160px;"></td>
                                            <td><?= $hasil['nama_produk'] ?></td>
                                            <td><?= $hasil['harga'] ?></td>
                                            <td><?= $hasil['stok'] ?></td>
                                            <td><?= $hasil['kategori'] ?></td>
                                            <td><?= $hasil['deskripsi'] ?></td>
                                            <td><?= $hasil['verifikasi'] ?></td>
                                            <td><?= $hasil['tgl_upload'] ?></td>
                                            <td class="text-center">
                                               
                                                <a href="fungsi/hapus.php?id=<?= $hasil['id_produk'] ?>" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
