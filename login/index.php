<?php 
    session_start();
    require '../login/fungsi/koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Login Tengkulaku</title>
  </head>
  <body>
    <!-- Container -->
    <div class="container" id="container">
      <!-- Row -->
      <div class="row">
        <!-- Sign Up -->
        <div class="col align-center flex-col sign-up">
          <div class="form-wrapper align-center">
            <form class="form sign-up" method="POST" action="fungsi/fungsi_registrasi.php">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" placeholder="Nama" name="nama" required="" />
              </div>
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="email" placeholder="Email" name="username" required="" />
              </div>
              
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password" name="password" required="" id="pass" />
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Confirm password" name="konfirmasi" required="" id="konf" />
              </div>
              <div style="margin-bottom: 20px;">
                <label style="margin-right: 10px;"> Daftar Sebagai : </label>
                 <label class="radio-inline">
                  <input type="radio" name="level" value="customer" > Customer
                </label>
                <label class="radio-inline">
                  <input type="radio" name="level" value="seller" > Seller
                </label>
                
              </div>
              <button type="submit" onclick="return cek()">Daftar</button>
              <p>
                <span>Sudah Mempunyai Akun ?</span>
                <b id="sign-in">Login Disini</b>
              </p>
            </form>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-up">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign Up -->
        <!-- Sign In -->
        <div class="col align-center flex-col sign-in"> 
          <div class="form-wrapper align-center">
            <form method="POST" action="fungsi/fungsi_login.php">
            <div class="form sign-in">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" placeholder="Username" name="username" required="" />
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password" name="password" required="" />
              </div>
              <button>Login</button>
              <p>
                <!-- <b>Forgot password?</b> -->
              </p>
              <p>
                <span> Belum punya akun ? </span>
                <b id="sign-up">Daftar Disini</b>
              </p>
            </div>
          </form>
          </div>
          

          <div class="form-wrapper">
            <div class="social-list align-center sign-in">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign In -->
      </div>
      <!-- End Row -->
      <!-- Content Section -->
      <div class="row content-row">
        <!-- Sign In Content -->
        <div class="col align-items flex-col">
          <div class="text sign-in">
            <h2>Silahkan Login</h2>
            <p>
              Tengkulaku adalah platform penjualan
            </p>
          </div>
          <div class="img sign-in">
            <img src="images/bg1.svg" alt="" />
          </div>
        </div>

        <!-- Sign Up Content -->
        <div class="col align-items flex-col">
          <div class="img sign-up">
            <img src="images/bg2.svg" alt="" />
          </div>
          <div class="text sign-up">
            <h2>Gabung Bersama Kami</h2>
            <p>
              Kami menjual sayur dan buah berkualitas
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->

    <!-- Script -->
    <script src="index.js"></script>
  </body>
</html>