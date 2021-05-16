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
            

            <?php if ($_SESSION['level'] == 'seller') : ?>

            <li class="nav-item active">
                <a class="nav-link" href="?url=dashboardSeller">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

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
                <a class="nav-link" href="?url=daftarPesan">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar Order</span></a>
            </li>


            <?php 
                endif;
                if ($_SESSION['level'] == 'admin') :
             ?>

             <li class="nav-item active">
                <a class="nav-link" href="?url=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

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
                if ($_SESSION['level'] == 'customer') :
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="?url=dashboardCustomer">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
             <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data 
            </div>
             <!-- Nav Item - Tambah Produk -->
            <li class="nav-item">
                <a class="nav-link" href="?url=dataPesanCustomer">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Pesanan</span></a>
            </li>

           

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Tengkulaku </strong>Dapatkan Promo Menarik</p>
                <a class="btn btn-success btn-sm" href="../index.php">Home</a>
            </div>


            <?php 
                endif;
            ?>

             <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->