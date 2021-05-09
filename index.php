<?php 
    session_start();  
    require 'login/fungsi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
      <?php require 'front/partials/_head.php';?>
  </head>
    
    <body>
    
    <?php //require 'front/partials/_preloader.php' ?>

    <?php require 'front/partials/_navbar.php' ?>
    

    <!-- Main Content -->
    <?php 
                    if (isset($_GET['url'])){
                    $url = $_GET['url'];

                    switch ($url) {
                    case 'home':
                        include 'front/page/home.php';
                        break;
                    case 'produk':
                        include 'front/page/produk.php';
                        break;
                    case 'detailProduk':
                        include 'front/page/detail_produk.php';
                        break;
                    case 'checkout':
                        include 'front/page/checkout.php';
                        break;
                    case 'tentangKami':
                        include 'front/page/tentang_kami.php';
                        break;
                    case 'ketentuan':
                        include 'front/page/ketentuan.php';
                        break;
                     case 'kontak':
                        include 'front/page/kontak.php';
                        break;
                     
                    default:
                        include 'front/page/home.php';
                        break;
                    }
                    } else{
                        include 'front/page/home.php';
                    }
                ?>

    

    <!-- ***** Footer Start ***** -->
    <?php require 'front/partials/_footer.php' ?>
    
    <?php require 'front/partials/_logout.php'?>
    
    <?php require 'front/partials/_javascript.php' ?>
  </body>
</html>