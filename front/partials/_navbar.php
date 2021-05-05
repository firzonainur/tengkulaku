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
                            <li><a href="login">login</a></li>
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