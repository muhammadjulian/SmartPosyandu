<?php
  if($this->session->userdata('role_id')==1){
?>
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-user-md"></i>
          </div>
          <div class="sidebar-brand-text mx-3"> <small>SmartPosyandu</small></div>
      </a>
      <!-- MENU UNTUK ROLE ID 1 (ADMIN) -->
      <hr class="sidebar-divider ">
      <!-- Nav Item - Dashboard -->
        <!-- Heading -->
        <div class="sidebar-heading">
          Interface
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
      </ul>
      <!-- End of Sidebar -->


        <!-- MASUK KE MENU ROLE KE 2 (DINKES) -->
          <?php
            }else if($this->session->userdata('role_id')==5){
          ?>
          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-user-md"></i>
              </div>
              <div class="sidebar-brand-text mx-3">Smart<small>Posyandu</small></div>
            </a>

          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            Menu admin kader
          </div>
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item " >
             <a class="nav-link" href="<?= base_url('kader/index');?>">
              <i class="fas fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-stethoscope"></i>
              <span>Pelayanan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('kader/imunisasi');?>">Imunisasi</a>
                <a class="collapse-item" href="utilities-border.html">Penimbangan</a>
                <a class="collapse-item" href="utilities-animation.html">Pemeriksaan</a>
                <a class="collapse-item" href="utilities-other.html">Pencatatan Kematian</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-book"></i>
              <span>Sasaran Posyandu</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('kader/databayita');?>">Data Bayi/Balita</a>
                <a class="collapse-item" href="<?= base_url('kader/dataibuhamil');?>">Data Ibu Hamil</a>
                <a class="collapse-item" href="<?= base_url('kader/dataibunifas');?>">Data Ibu Nifas</a>
                <a class="collapse-item" href="<?= base_url('kader/dataibumenyusui');?>">Data Ibu Menyusui</a>
                <a class="collapse-item" href="forgot-password.html">Data Lansia</a>
                <a class="collapse-item" href="forgot-password.html">Data WUS</a>
                <a class="collapse-item" href="forgot-password.html">Data PUS</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-project-diagram"></i>
              <span>SIP</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('kader/SIP_format1');?>">Format 1</a>
                <a class="collapse-item" href="<?= base_url('kader/SIP_format2');?>">Fromat 2</a>
                <a class="collapse-item" href="<?= base_url('kader/SIP_format3');?>">Fromat 3</a>
                <a class="collapse-item" href="<?= base_url('kader/SIP_format4');?>">Fromat 4</a>
                <a class="collapse-item" href="<?= base_url('kader/SIP_format5');?>">Fromat 5</a>
                <a class="collapse-item" href="<?= base_url('kader/SIP_format6');?>">Fromat 6</a>
              </div>
            </div>
          </li>
          <?php
            }
          ?>

          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
      </ul>
      <!-- End of Sidebar -->