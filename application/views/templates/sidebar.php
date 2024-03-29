<?php
if ($this->session->userdata('role_id') == 1) {
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
      Menu admin kominfo
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('admin/index'); ?>">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dash</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('kominfo/biodata'); ?>">
        <i class="fas fa-users"></i>
        <span>Biodata</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('kominfo/kelurahan'); ?>">
        <i class="fas fa-landmark"></i>
        <span>Kelurahan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('kominfo/posyandu'); ?>">
        <i class="fas fa-clinic-medical"></i>
        <span>Posyandu</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('kominfo/strata'); ?>">
        <i class="fas fa-strikethrough"></i>
        <span>Strata</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Menu admin kader
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('kader/index'); ?>">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('kader/layanan_utama'); ?>">
        <i class="fas fa-tachometer-alt"></i>
        <span>Layanan Utama</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-stethoscope"></i>
        <span>Pelayanan</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url('kader/imunisasi'); ?>">Imunisasi</a>
          <a class="collapse-item" href="<?= base_url('kader/penimbangan'); ?>">Penimbangan</a>
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
          <a class="collapse-item" href="<?= base_url('kader/databayita'); ?>">Data Bayi/Balita</a>
          <a class="collapse-item" href="<?= base_url('kader/dataibuhamil'); ?>">Data Ibu Hamil</a>
          <a class="collapse-item" href="<?= base_url('kader/dataibunifas'); ?>">Data Ibu Nifas</a>
          <a class="collapse-item" href="<?= base_url('kader/dataibumenyusui'); ?>">Data Ibu Menyusui</a>
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
          <a class="collapse-item" href="#">Format 1</a>
          <a class="collapse-item" href="#">Fromat 2</a>
          <a class="collapse-item" href="#">Fromat 3</a>
          <a class="collapse-item" href="#">Fromat 4</a>
          <a class="collapse-item" href="#">Fromat 5</a>
          <a class="collapse-item" href="#">Fromat 6</a>
        </div>
      </div>
    </li>




    <!-- MASUK KE MENU ROLE KE 2 (DINKES) -->
  <?php
  } else if ($this->session->userdata('role_id') == 5) {
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('kader/index'); ?>">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-folder"></i>
          <span>Menu Utama</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('kader/biodata'); ?>">Biodata Penduduk</a>
            <a class="collapse-item" href="<?= base_url('kader/sumberdana'); ?>">Data Sumber Dana</a>
            <a class="collapse-item" href="<?= base_url('kader/dasawisma'); ?>">Dasawisma</a>
            <a class="collapse-item" href="<?= base_url('kader/jenislayanan'); ?>">Jenis Layanan</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-book"></i>
          <span>Data Posyandu</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('kader/databayita'); ?>">Data Bayi/Balita</a>
            <a class="collapse-item" href="<?= base_url('kader/dataibuhamil'); ?>">Data Ibu Hamil, Nifas,<br>Menyusui</a>
            <a class="collapse-item" href="forgot-password.html">Data Lansia</a>
            <a class="collapse-item" href="<?= base_url('kader/datawuspus'); ?>">Data WUS & PUS</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTree">
          <i class="fas fa-book"></i>
          <span>Pelayanan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('kader/penimbangan'); ?>">Penimbangan</a>
            <a class="collapse-item" href="<?= base_url('kader/dataibuhamil'); ?>">Pemeriksaan</a>
            <a class="collapse-item" href="forgot-password.html">Imunisasi</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTw" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-project-diagram"></i>
          <span>SIP</span>
        </a>
        <div id="collapseTw" class="collapse" aria-labelledby="headingTw" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('kader/SIP_format1'); ?>">Format 1</a>
            <a class="collapse-item" href="<?= base_url('kader/SIP_format2'); ?>">Fromat 2</a>
            <a class="collapse-item" href="<?= base_url('kader/SIP_format3'); ?>">Fromat 3</a>
            <a class="collapse-item" href="<?= base_url('kader/SIP_format4'); ?>">Fromat 4</a>
            <a class="collapse-item" href="<?= base_url('kader/SIP_format5'); ?>">Fromat 5</a>
            <a class="collapse-item" href="<?= base_url('kader/SIP_format6'); ?>">Fromat 6</a>
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