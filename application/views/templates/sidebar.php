  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-user-md"></i>
          </div>
          <div class="sidebar-brand-text mx-3"> <small>SmartPosyandu</small></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider ">

      <!-- Query Menu -->
      <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
        FROM `user_menu` JOIN `user_access_menu`
          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
       WHERE `user_access_menu`.`role_id`= $role_id
       ORDER BY `user_access_menu`.`menu_id` ASC
        ";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>


      <!-- Lopping MENU -->

      <?php foreach ($menu as $m) : ?>
          <div class="sidebar-heading">
              <?= $m['menu']; ?>
          </div>

          <!--Siapkan sub menu -->
          <?php
            $menuId = $m['id'];
            $querySubmenu = "SELECT *
            FROM `user_sub_menu` JOIN `user_menu`
              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
           WHERE `user_sub_menu`.`menu_id` =$menuId
           And `user_sub_menu`.`is_active`=1
            ";
            $subMenu = $this->db->query($querySubmenu)->result_array();
            ?>

          <?php foreach ($subMenu as $sm) : ?>
              <?php if ($title == $sm['title']) : ?>
                  <li class="nav-item active" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <?php else : ?>
                  <li class="nav-item" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <?php endif; ?>
                  <a class="nav-link">
                      <?php if ($role_id == 5) : ?>
                          <i class="fas fa-fw fa-cog"></i>
                          <span>Data Sasaran Posyandu</span>
                      </a>
                      <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                          <div class="bg-white py-2 collapse-inner rounded">
                              <h6 class="collapse-header">Data Sasaran:</h6>
                              <a class="collapse-item" href="login.html">Bayi dan Balita</a>
                              <a class="collapse-item" href="register.html">Ibu Hamil</a>
                              <a class="collapse-item" href="forgot-password.html">Ibu Nifas</a>
                              <a class="collapse-item" href="login.html">Ibu Menyusui</a>
                              <a class="collapse-item" href="register.html">WUS dan PUS</a>
                              <a class="collapse-item" href="forgot-password.html">Lansia</a>
                          </div>
                      </div>
                  </li>

              <?php else : ?>
                  <i class="<?= $sm['icon'] ?>"></i>
                  <span><?= $sm['title'] ?> </span></a>
              <?php endif; ?>

              </li>


          <?php endforeach; ?>
      <?php endforeach; ?>


      <!-- Nav Item - Dashboard -->



      <!-- Nav Item - Pages Collapse Menu -->


      <hr class="sidebar-divider">
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
              <i class="fas fa-sign-out-alt fa-fw"></i>
              <span>logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
  <!-- End of Sidebar -->