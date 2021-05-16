<?php 
    session_start();
    require '../login/fungsi/koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php require 'partials/_head.php'?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            <?php require 'partials/_sidebar.php'?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                     <?php require 'partials/_navbar.php'?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php 
                    if (isset($_GET['url'])){
                    $url = $_GET['url'];

                    switch ($url) {
                    case 'dashboardSeller':
                        include 'page/dashboard_seller.php';
                        break;
                     case 'profil':
                        include 'page/profil.php';
                        break;
                    case 'tambahProduk':
                        include 'page/tambah_produk.php';
                        break;
                    case 'daftarProduk':
                        include 'page/data_produk.php';
                        break;
                    case 'daftarPesan':
                        include 'page/data_pesan.php';
                        break;
                    // Admin
                    case 'dashboard':
                        include 'page/beranda.php';
                        break;
                    case 'daftarProdukAdmin':
                        include 'page/data_produk_admin.php';
                        break;
                    case 'daftarSellerAdmin':
                        include 'page/data_seller_admin.php';
                        break;
                    case 'daftarCustomerAdmin':
                        include 'page/data_customer_admin.php';
                        break;
                    //customer
                    case 'dashboardCustomer':
                        include 'page/dashboard_customer.php';
                        break;
                    case 'dataPesanCustomer':
                        include 'page/data_pesan_customer.php';
                        break;
                    default:
                        include 'page/default_dashboard.php';
                        break;
                    }
                    } else{
                        include 'page/default_dashboard.php';
                    }
                ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
                 <?php require 'partials/_footer.php'?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
        <?php require 'partials/_logout.php'?>

    <!-- Bootstrap core JavaScript-->
        <?php require 'partials/_javascript.php'?>

</body>

</html>