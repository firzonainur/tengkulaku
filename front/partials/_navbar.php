<!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">TENG<em>KULAKU</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li>
                                <a href="?url=home" <?php if (!isset($_GET['url']) || $_GET['url'] == 'home') echo 'class="active"'; else 'class=""'?>>Beranda</a>
                            </li>
                            <li>
                                <a href="?url=produk" <?php if (!isset($_GET['url']) || $_GET['url'] == 'produk') echo 'class="active"'; else 'class=""'?>>Produk</a>
                            </li>
                            <li>
                                <a href="?url=checkout" <?php if (!isset($_GET['url']) || $_GET['url'] == 'checkout') echo 'class="active"'; else 'class=""'?>>Checkout</a>
                            </li>
                            <li class="dropdown">
                                <a <?php if (!isset($_GET['url']) || $_GET['url'] == 'tentangKami') echo 'class="dropdown-toggle active"'; else 'class="dropdown-toggle"'?> data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">TENTANG</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="?url=tentangKami">TENTANG KAMI</a>
                                    <a class="dropdown-item" href="?url=ketentuan">KETENTUAN</a>
                                </div>
                            </li>
                            <li>
                                <a href="?url=kontak" <?php if (!isset($_GET['url']) || $_GET['url'] == 'kontak') echo 'class="active"'; else 'class=""'?>>Kontak</a>
                            </li>
                            <li>
                                <?php if (isset($_SESSION['level']) and $_SESSION['level'] == 'customer') { 
                                    $sesi=$_SESSION['id_user'];
                                    $sql = mysqli_query($conn, "SELECT * FROM user WHERE id_user=$sesi");
                                    while ($hasil = mysqli_fetch_array($sql)) {
                                ?>
                                    
                                        <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline"><?php echo $hasil['nama']; ?></span>
                                            <img class="img-profile rounded-circle" style="width: 20px; height: 20px;" src="assets/images/Profil.jpg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="back/index.php?url=daftarPesananCustomer">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Dashboard
                                            </a>
                                            <a class="dropdown-item" href="back/index.php?url=profil">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </a>
                                        </div>
                                    
                                <?php } 
                                    }else{ ?>
                                    <a href="login">login</a>
                                <?php } ?>
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->