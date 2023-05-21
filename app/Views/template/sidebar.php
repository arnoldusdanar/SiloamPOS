<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="apoteker">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-solid fa-cash-register"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Siloam Apps Back End</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="apoteker">
    <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    My Profile
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-solid fa-user"></i>
        <span>Interaction</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data User:</h6>
            <a class="collapse-item" href="buttons.html">Absensi</a>
            <a class="collapse-item" href="cards.html">Aktivitas User</a>
            <a class="collapse-item" href="<?= base_url(); ?>Kasir">Transaksi_Harian</a>
            <a class="collapse-item" href="<?= base_url(); ?>Nakes">Transaksi_Nakes</a>
            <a class="collapse-item" href="<?= base_url(); ?>Grosir">Transaksi_Grosir</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-solid fa-pen"></i>
        <span>Edit Profile</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Edit:</h6>
            <a class="collapse-item" href="utilities-color.html">Username-Password</a>
            <a class="collapse-item" href="utilities-border.html">Edit Profile</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Input
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-solid fa-database"></i>
        <span>Data Apotek</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Barang:</h6>
            <a class="collapse-item" href="login.html">Barang Masuk</a>
            <a class="collapse-item" href="forgot-password.html">Edit Barang</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Pelanggan:</h6>
            <a class="collapse-item" href="404.html">Pelanggan Baru</a>
            <a class="collapse-item" href="blank.html">Edit Pelanggan</a>
            <h6 class="collapse-header">Supplier:</h6>
            <a class="collapse-item" href="404.html">Edit Supplier</a>
            <a class="collapse-item" href="blank.html">Tagihan Supplier</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
        aria-expanded="true" aria-controls="collapsePages3">
        <i class="fas fa-solid fa-capsules"></i>
        <span>Transaksi</span>
    </a>
    <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Barang:</h6>
            <a class="collapse-item" href="login.html">Barang Masuk</a>
            <a class="collapse-item" href="register.html">Edit Penjualan</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Pelanggan:</h6>
            <a class="collapse-item" href="404.html">Pelanggan Baru</a>
            <a class="collapse-item" href="blank.html">Edit Pelanggan</a>
            <h6 class="collapse-header">Supplier:</h6>
            <a class="collapse-item" href="404.html">Edit Supplier</a>
            <a class="collapse-item" href="blank.html">Tagihan Supplier</a>
        </div>
    </div>
</li>

   
</li>
 <!-- Divider -->
 <hr class="sidebar-divider">
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
        aria-expanded="true" aria-controls="collapsePages2">
        <i class="fas fa-solid fa-file-invoice"></i>
        <span>Laporan</span>
    </a>
    <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Transaksi:</h6>
            <a class="collapse-item" href="login.html">Penjualan</a>
            <a class="collapse-item" href="register.html">Pengeluaran</a>
            <a class="collapse-item" href="forgot-password.html">Laporan Laba Rugi</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Buku Harian:</h6>
            <a class="collapse-item" href="404.html">Pelanggan</a>
            <a class="collapse-item" href="blank.html">Supplier</a>
            <h6 class="collapse-header">Buku Besar Pembantu:</h6>
            <a class="collapse-item" href="404.html">Penjualan</a>
            <a class="collapse-item" href="blank.html">Pembelian</a>
        </div>
    </div>
   
</li>
  <!-- Divider -->
<hr class="sidebar-divider">
<!-- Nav Item - Charts -->

<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('logout') ?>/">
    <i class="fas fa-sign-out-alt fa-fw"></i>
        <span>Log Out</a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>