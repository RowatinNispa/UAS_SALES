<style>
.sidebar-lilac{
    background: linear-gradient(
        180deg,
        #DCCBFF 0%,
        #C8B6FF 50%,
        #B8A1FF 100%
    ) !important;
}

.sidebar-lilac .nav-link{
    color:white !important;
    font-weight:500;
}

.sidebar-lilac .nav-link i{
    color:white !important;
}

.sidebar-lilac .nav-item.active{
    background:rgba(255,255,255,0.15);
    border-radius:12px;
    margin:5px 10px;
}

.sidebar-lilac .sidebar-brand{
    color:white !important;
}

.sidebar-divider{
    border-top:1px solid rgba(255,255,255,0.25);
}
</style>

<ul class="navbar-nav sidebar sidebar-dark accordion"
style="background:linear-gradient(180deg,#312E81,#6D28D9);">

<?php 
    $role = $this->session->userdata('role');
     ?>

<a class="sidebar-brand d-flex align-items-center justify-content-center"
href="<?= site_url('dashboard') ?>">

    <div class="sidebar-brand-icon">
        <i class="fas fa-gem"></i>
    </div>

    <div class="sidebar-brand-text mx-3">
        SALES <sup>💜</sup>
    </div>

</a>

<hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="<?= site_url('dashboard') ?>">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span>
    </a>
</li>

<hr class="sidebar-divider">

<?php if($role == 'admin'){ ?>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('pelanggan') ?>">
        <i class="fas fa-users"></i>
        <span>Pelanggan</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('produk') ?>">
        <i class="fas fa-box"></i>
        <span>Produk</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('sales') ?>">
        <i class="fas fa-user-tie"></i>
        <span>Sales</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('sales_order') ?>">
        <i class="fas fa-shopping-cart"></i>
        <span>Sales Order</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('detail_order') ?>">
        <i class="fas fa-shopping-cart"></i>
        <span>Detail Order</span>
    </a>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan') ?>">
        <i class="fas fa-file-alt"></i>
        <span>Laporan</span>
    </a>
</li>

<?php } ?>

<?php if($role == 'sales') { ?>
 <li class="nav-item">
    <a class="nav-link" href="<?= site_url('sales_order') ?>">
        <i class="fas fa-shopping-cart"></i>
        <span>Sales Order</span>
    </a>
 </li>

 <li class="nav-item">
    <a class="nav-link" href="<?= site_url('detail_order') ?>">
        <i class="fas fa-shopping-cart"></i>
        <span>Detail Order</span>
    </a>
</li>

<?php } ?>

<?php if($role == 'manager') { ?>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan') ?>">
        <i class="fas fa-file-alt"></i>
        <span>Laporan</span>
    </a>
</li>

<?php } ?>

<li class="nav-item mt-auto">
    <a class="nav-link text-white"
       href="<?= site_url('auth/logout'); ?>"
       onclick="return confirm('Yakin logout?')">

        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span>

    </a>
</li>
</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">