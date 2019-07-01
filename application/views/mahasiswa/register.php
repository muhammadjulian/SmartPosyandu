<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
 
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
  <link rel="shortcut icon" href="<?php base_url() ?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <form action="<?php echo base_url('login')?>" method="post" onsubmit="return cekform();">
                <div class="form-group">
                  <div class="input-group">
                    <input type="email" id="email" name='email' class="form-control" placeholder="...@student.itera.ac.id" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" id="password" name='password' class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" id="rpassword" name='rpassword' class="form-control" placeholder="Confirm Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="<?php echo base_url('login') ?>" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php base_url() ?>assets/js/vendor.bundle.base.js"></script>
  <script src="<?php base_url() ?>assets/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php base_url() ?>js/off-canvas.js"></script>
  <script src="<?php base_url() ?>js/misc.js"></script>
  <!-- endinject -->

<script type="text/javascript">
 function cekform()
 {
  var str = $("#email");
  var n = str.includes("@student.itera.ac.id");
  if (n == FALSE)
  {
   alert('bukan email itera');
   $("#email").focus();
   return false;
  }
  if (!$("#email").val())
  {
   alert('Maaf email tidak boleh kosong');
   $("#email").focus();
   return false;
  }

  if (!$("#password").val())
  {
   alert('Maaf password tidak boleh kosong');
   $("#password").focus();
   return false;
  }

  if (!$("#rpassword").val())
  {
   alert('Maaf pengulangan password tidak boleh kosong');
   $("#rpassword").focus();
   return false;
  }
  if ($("#password").val() != $("#rpassword").val())
  {
   alert('Maaf pengulangan password harus sama');
   $("#rpassword").focus();
   return false;
  }
 }
 </script>
</body>

