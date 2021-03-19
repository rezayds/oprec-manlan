      <!-- Sidebar -->
      <ul class="navbar-nav amber darken-2 sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('asisten/dashboard') ?>">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Manajemen Lanjut</div>
        </a>

        <?php $url = $this->uri->segment(2) ?>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= ($url == '' || $url == 'dashboard') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url('asisten/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          Pengguna
        </div>
        <li class="nav-item <?= ($url == 'profile') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url('asisten/profile') ?>">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Profile</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?= base_url('dashboard/complete-register'); ?>">
            <i class="fas fa-user fa-fw"></i>
            <span>Lengkapi Data Diri</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('dashboard/upload-berkas'); ?>">
            <i class="fas fa-user fa-fw"></i>
            <span>Upload Berkas</span>
          </a>
        </li> -->
                
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('asisten/logout'); ?>">
            <i class="fas fa-sign-out-alt fa-fw"></i>
            <span>Logout</span>
          </a>
        </li>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->