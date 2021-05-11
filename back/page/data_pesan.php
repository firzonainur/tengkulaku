                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produk</h1>
                    <p class="mb-4"> Berikut Data Pembelian</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pembelian Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pembeli</th>
                                            <th>Jumlah Produk</th>
                                            <th>Biaya Produk</th>
                                            <th>Status Pembayaran</th>
                                            <th>Status Order</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $sql = mysqli_query($conn, "SELECT (SELECT u.nama From user u where u.id_user = p.id_pembeli) as nama, (SELECT count(*) FROM detail_pesan d where d.id_order = p.id_order) as jml, p.* FROM pesan p where p.id_order IN (SELECT d.id_order From detail_pesan d where d.id_seller = ".$_SESSION['id_user'].")");
                                            while ($hasil = mysqli_fetch_array($sql)) :
                                        ?>
                                        <tr>
                                            <td><?= $hasil['nama'] ?></td>
                                            <td><?= $hasil['jml'] ?></td>
                                            <td><?= $hasil['total'] ?></td>
                                            <td><?= $hasil['keterangan'] ?></td>
                                            <td><?= $hasil['status_order'] ?></td>
                                            <td class="text-center">
                                                <a href="" data-toggle="modal" data-target="#detailOrder" class="btn btn-success btn-circle detailButton" data-id="<?= $hasil['id_order'] ?>">
                                                    <i class="fas fa-book"></i>
                                                </a>
                                                <?php if ($hasil['keterangan'] == 'lunas'){ ?>
                                                    <a href="fungsi/hapus.php?id=<?= $hasil['id_produk'] ?>" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-plane"></i>
                                                    </a>
                                                <?php }else{ ?>
                                                    <button disabled="" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-plane"></i>
                                                    </button>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
