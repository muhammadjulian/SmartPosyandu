<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Smart Posyandu</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php base_url() ?>assets/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php base_url() ?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php base_url() ?>images/logoPosyandu.png"  />
</head>


<div class="atas">
<div class="row">
  
<div class="col-md-2">
  <a>
    <img src="<?php base_url() ?>images/logoPosyandu.png" height="50" weight="250">
  </a>  
</div>
&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
<div class="atas col-md-6">
    <h3> Smart Posyandu
    <br>Pemerintah Kota Bogor</h3>
    <h5>" Balita Sehat, Generasi Penyelamat "</h5>
</div>
</div>
</div>

<body>
    
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 ">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="<?php echo base_url('profiledosen')?>" class="nav-link">
              <i class="menu-icon mdi mdi-table"></i>PROFILE DOSEN
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('sop')?>" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>SOP</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('faq')?>" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>FAQ</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php base_url() ?>images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php base_url() ?>images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php base_url() ?>images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Reza Pahlevi</span>
              <img class="img-xs rounded-circle" src="<?php base_url() ?>images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Menu Utama</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('menu/sumberdana') ?>">Data Sumberdana</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('menu/dasawisma') ?>">Dasawisma</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('menu/J_layanan') ?>">Jenis Layanan</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-dapos" aria-expanded="false" aria-controls="ui-dapos">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Data Posyandu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-dapos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('datapos/wuspus') ?>">Data WUS dan PUS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('datapos/bumil') ?>">Data Bumil, Bufas,<br>dan Menyusui</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('datapos/bayi') ?>">Data Bayi dan Balita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('datapos/lansia') ?>">Data Lansia</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-pelayanan" aria-expanded="false" aria-controls="ui-pelayanan">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Pelayanan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-pelayanan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('pelayanan/P_bumil') ?>">Penimbangan Ibu Hamil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('pelayanan/P_bayi') ?>">Penimbangan Bayi dan Balita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('pelayanan/P_lansia') ?>">Penimbangan Lansia</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-sip" aria-expanded="false" aria-controls="ui-sip">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">SIP</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-sip">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('sip/format1') ?>">Format 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('sip/format2') ?>">Format 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('sip/format3') ?>">Format 3</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('sip/format4') ?>">Format 4</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('sip/format5') ?>">Format 5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('sip/format6') ?>">Format 6</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('catatan_kematian/balita_bumil') ?>">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Catatan Kematian<br>Balita dan Ibu Hamil</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- main-panel ends -->
      
      <!-- disini konten -->
    <?php $this->load->view($konten); ?>
    <!-- /.konten -->

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a>Muhammad Julian</a>. All rights reserved </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Diskominfostandi Kota Bogor
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>

        <!-- partial -->
     
  <!-- plugins:js -->
  <script src="<?php base_url() ?>assets/js/vendor.bundle.base.js"></script>
  <script src="<?php base_url() ?>assets/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php base_url() ?>js/off-canvas.js"></script>
  <script src="<?php base_url() ?>js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php base_url() ?>js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>