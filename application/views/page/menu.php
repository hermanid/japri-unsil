<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">JAPRI</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>
<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('crew');?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Crew</span></a>
</li>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Transaksi</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?php echo base_url('transaksi');?>">Tampilan</a>
      <a class="collapse-item" href="<?php echo base_url('transaksi/tambah');?>">Tambah</a>
    </div>
  </div>
  
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('harga');?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Harga Barang</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('diskon');?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Diskon</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('admin');?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Admin</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>