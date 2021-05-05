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
                    case 'dashboard':
                        include 'page/beranda.php';
                        break;
                    case 'tambahProduk':
                        include 'page/tambah_produk.php';
                        break;
                    case 'daftarProduk':
                        include 'page/data_produk.php';
                        break;
                    default:
                        include 'page/beranda.php';
                        break;
                    }
                    } else{
                        include 'page/beranda.php';
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