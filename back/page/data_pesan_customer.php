                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Customer</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan Customer</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr>
                                            <td>No</td>
                                            <td>Tanggal Pesan</td>
                                            <td>Biaya Produk</td>
                                            <td>Metode Kirim</td>
                                            <td>Biaya Kirim</td>
                                            <td>Total</td>
                                            <td>Metode Bayar</td>
                                            <td>Status Bayar</td>
                                            <td>Status Order</td>
                                            <td>Detail</td>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                                $query = mysqli_query($conn, "SELECT p.*, (SELECT nama_MK FROM metode_kirim where id_MK = p.metode_kirim) as kirim, (SELECT nama_MB FROM metode_bayar where id_MB = p.metode_bayar) as bayar FROM pesan p where id_pembeli = ".$_SESSION['id_user']);
                                                while ($hasil = mysqli_fetch_array($query)) { ?>
                                                    <tr>
                                                        <td><?=$no++ ?></td>
                                                        <td><?=$hasil['tgl_pesan'] ?></td>
                                                        <td><?=$hasil['biaya_produk'] ?></td>
                                                        <td><?=$hasil['kirim'] ?></td>
                                                        <td><?=$hasil['biaya_kirim'] ?></td>
                                                        <td><?=$hasil['total'] ?></td>
                                                        <td><?=$hasil['bayar'] ?></td>
                                                        <td><?=$hasil['keterangan'] ?></td>
                                                        <td><?=$hasil['status_order'] ?></td>
                                                        <td>
                                                            <a href="" data-toggle="modal" data-target="#detailPesanan" class="btn btn-success btn-circle detailPesananB" data-id="<?= $hasil['id_order'] ?>">
                                                                <i class="fas fa-book"></i>
                                                            </a>
                                                        </td>        
                                                    </tr>
                                            <?php }
                                             ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                
                    <div class="modal fade" id="detailPesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="isidetailpesan">
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>