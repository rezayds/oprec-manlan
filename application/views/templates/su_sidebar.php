      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-box-open"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Oprec Admin</div>
        </a>

        <?php $url = $this->uri->segment(2) ?>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= ($url == '') ? 'active' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('superuser') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item <?= ($url == 'list') ? 'active' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('superuser/list') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>List Asisten</span>
          </a>
        </li>
        <div class="sidebar-heading">
          Tahap Seleksi
        </div>
        <li class="nav-item <?= ($url == 'seleksi_berkas') ? 'active' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('superuser/seleksi_berkas') ?>">
            <i class="fas fa-fw fa-plus"></i>
            <span>Seleksi Berkas</span>
          </a>
        </li>
        <li class="nav-item <?= ($url == 'tes_tulis') ? 'active' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('superuser/tes_tulis') ?>">
            <i class="fas fa-fw fa-plus"></i>
            <span>Tes Tulis</span>
          </a>
        </li>
        <li class="nav-item <?= ($url == 'tutor_wawancara') ? 'active' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('superuser/tutor_wawancara') ?>">
            <i class="fas fa-fw fa-plus"></i>
            <span>Tutor Wawancara</span>
          </a>
        </li>
        <li class="nav-item <?= ($url == 'wawancara_staff') ? 'active' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('superuser/wawancara_staff') ?>">
            <i class="fas fa-fw fa-plus"></i>
            <span>Wawancara Staff</span>
          </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Components:</h6>
              <a class="collapse-item" href="buttons.html">Buttons</a>
              <a class="collapse-item" href="cards.html">Cards</a>
            </div>
          </div>
        </li> -->
            
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->