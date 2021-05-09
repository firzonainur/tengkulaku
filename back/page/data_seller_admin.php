                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data</h1>
                    <p class="mb-4"> Data Seller</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Seller Tengkulaku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Profil</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $sql = mysqli_query($conn, "SELECT * FROM user WHERE level = 'seller'");
                                            while ($hasil = mysqli_fetch_array($sql)) :
                                        ?>
                                        <tr>
                                            <td class="text-center">
                                            <?= $hasil['profil'] ?>
                                            </td>
                                            <td><?= $hasil['nama'] ?></td>
                                            <td><?= $hasil['email'] ?></td>
                                            <td><?= $hasil['no_hp'] ?></td>
                                            <td><?= $hasil['alamat'] ?></td>
                                            <td><?= $hasil['kota'] ?></td>
                                            <td><?= $hasil['provinsi'] ?></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-success btn-circle">
                                                    <i class="fas fa-check"></i>
                                                </a> 
                                                <a href="#" class="btn btn-danger btn-circle">
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
