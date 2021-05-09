       <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TENGKULAKU</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="?url=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <?php if ($_SESSION['level'] == 'seller') : ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Produk
            </div>

            <!-- Nav Item - Tambah Produk -->
            <li class="nav-item">
                <a class="nav-link" href="?url=tambahProduk">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Tambah Produk</span></a>
            </li>

            <!-- Nav Item - Tambah Produk -->
            <li class="nav-item">
                <a class="nav-link" href="?url=daftarProduk">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar Produk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Order
            </div>

            <!-- Nav Item - Tambah Produk -->
            <li class="nav-item">
                <a class="nav-link" href="?url=daftarProduk">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar Order</span></a>
            </li>


            <?php 
                endif;
                if ($_SESSION['level'] == 'admin') :
             ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Validasi
            </div>

            <!-- Nav Item - Tambah Produk -->
            <li class="nav-item">
                <a class="nav-link" href="?url=daftarProdukAdmin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar Produk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Tambah Produk -->
            <li class="nav-item">
                <a class="nav-link" href="?url=daftarSellerAdmin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Seller</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?url=daftarCustomerAdmin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Customer</span></a>
            </li>
            <?php 
                endif;
            ?>
        </ul>
        <!-- End of Sidebar -->