                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produk</h1>
                    <p class="mb-4"> Silahkan Validasi Data Produk Dari Seller</p>

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
                                            <th>Seller</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $sql = mysqli_query($conn, "SELECT p.*, (SELECT u.nama from user u where u.id_user = p.id_user) as nama FROM produk p ");
                                            while ($hasil = mysqli_fetch_array($sql)) :
                                        ?>
                                        <tr>
                                            <td class="text-center"><img src="img/produk/<?= $hasil['foto'] ?>" class="img-thumbnail" alt="..." style="height: 50px; width:50px;"></td>
                                            <td><?= $hasil['nama_produk'] ?></td>
                                            <td><?= $hasil['harga'] ?></td>
                                            <td><?= $hasil['stok'] ?></td>
                                            <td><?= $hasil['id_kategori'] ?></td>
                                            <td><?= $hasil['deskripsi'] ?></td>
                                            <td><?= $hasil['verifikasi'] ?></td>
                                            <td><?= $hasil['tgl_upload'] ?></td>
                                            <td><?= $hasil['nama'] ?></td>
                                            <td class="text-center">
                                                <a href="fungsi/validasi_produk.php?id=<?=$hasil['id_produk'] ?>" class="btn btn-success btn-circle">
                                                    <i class="fas fa-check"></i>
                                                </a> 
                                                <a href="fungsi/hapus_produk_admin.php?id=<?= $hasil['id_produk'] ?>" class="btn btn-danger btn-circle">
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
