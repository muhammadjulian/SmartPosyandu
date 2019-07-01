<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="<?php base_url() ?>assets/loginstyle.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
  <link rel="icon" type="image/png" href="<?php base_url() ?>assets/gambar/favicon.png">
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
  <link rel="shortcut icon" href="<?php base_url() ?>images/logoposyandu.png" />
</head>
<style type="text/css">
              #latarbelakang {
                  background-color: rgba(0, 0, 0, 0.57);
                  padding: 20px;
              }
              body{
             		background-blend-mode: darken;
             		transition: 3s;
             	}
              blockquote {
               background-color: rgba(0, 0, 0, 0.57);
              }
             	html {
             	    position: relative;
             	    min-height: 100%;
             	}
             	.carousel-fade .carousel-inner .item {
             	    opacity: 0;
             	    transition-property: opacity;
             	}
             	.carousel-fade .carousel-inner .active {
             	    opacity: 1;
             	}
             	.carousel-fade .carousel-inner .active.left,
             	.carousel-fade .carousel-inner .active.right {
             	    left: 0;
             	    opacity: 0;
             	    z-index: 1;
             	}
             	.carousel-fade .carousel-inner .next.left,
             	.carousel-fade .carousel-inner .prev.right {
             	    opacity: 1;
             	}
             	.carousel-fade .carousel-control {
             	    z-index: 2;
             	}
             	@media all and (transform-3d),
             	(-webkit-transform-3d) {
             	    .carousel-fade .carousel-inner > .item.next,
             	    .carousel-fade .carousel-inner > .item.active.right {
             	        opacity: 0;
             	        -webkit-transform: translate3d(0, 0, 0);
             	        transform: translate3d(0, 0, 0);
             	    }
             	    .carousel-fade .carousel-inner > .item.prev,
             	    .carousel-fade .carousel-inner > .item.active.left {
             	        opacity: 0;
             	        -webkit-transform: translate3d(0, 0, 0);
             	        transform: translate3d(0, 0, 0);
             	    }
             	    .carousel-fade .carousel-inner > .item.next.left,
             	    .carousel-fade .carousel-inner > .item.prev.right,
             	    .carousel-fade .carousel-inner > .item.active {
             	        opacity: 1;
             	        -webkit-transform: translate3d(0, 0, 0);
             	        transform: translate3d(0, 0, 0);
             	    }
             	}
             	.item:nth-child(1) {
             	    background: url(<?php base_url() ?>assets/bglogin/1.JPG) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(2) {
             	    background: url(<?php base_url() ?>assets/bglogin/2.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(3) {
             	    background: url(<?php base_url() ?>assets/bglogin/3.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(4) {
             	    background: url(<?php base_url() ?>assets/bglogin/4.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(5) {
             	    background: url(<?php base_url() ?>assets/bglogin/5.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(6) {
             	    background: url(<?php base_url() ?>assets/bglogin/6.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.carouselnew {
             	    z-index: -99;
             	}
             	.carouselnew .item {
             	    position: fixed;
             	    width: 100%;
             	    height: 100%;
             	}
             	.title {
             	  text-align: center;
             	  margin-top: 20px;
             	  padding: 10px;
             	  text-shadow: 2px 2px #000;
             	  color: #FFF;
             	}
          </style>
          <script type="text/javascript">
          	$('#mybgcarousel').carousel({interval: 2000});
          	$('#myCarousel').carousel({interval: 500});
          </script>
<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="<?php echo base_url('')?>" method="post" onsubmit="return cekform();">
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="email" id="email" name='email' class="form-control" placeholder="....@student.itera.ac.id" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" id="password" name='password' class="form-control" placeholder="*********" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group has-feedback">
						        <div class="col-xs-5">
						          <p><?php echo $image ?></p>
						        </div>
						      </div>
						      <div class="form-group has-feedback">
						        <input type="text" name="captcha_code" id="captcha_code" class="form-control" placeholder="Ketikkan kode diatas" required>
						        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
						      </div>

                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="text-center">
           <p><font color="#1a1816">- Atau -</font></p>
						    </div>
						    <div  class="form-group d-flex justify-content-center">
						      <div class="col-xs-8">
						       <div class="text-center " >
						        
                    <a href="<?php echo base_url();?>Lupapas" >
						         <i class="text-black text-small" ></i>
                     <div class="text-center">
						         <p>Lupa Password</p>
                     </div>
						        </a>
                    
						       </div>
                  </div>
                  </div>
                 
						      <!-- /.col -->
						     
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="<?php echo base_url('register') ?>" class="text-black text-small">Create new account</a>
                </div>
              </form>
            </div>
            
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Kelompok 4. All rights reserved.</p>
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
  
  <script type="text/javascript">
 function cekform()
 {
  if (!$("#email").val() && !$("#password").val()) {
    alert('Email dan Password tidak boleh kosong');
    $("#email").focus();
    $("#password").focus();
    return false;
  }

  if (!$("#email").val())
  {
   alert('Email tidak boleh kosong');
   $("#email").focus();
   return false;
  }

  if (!$("#password").val())
  {
   alert('Password tidak boleh kosong');
   $("#password").focus();
   return false;
  }

 }
 </script>
  <!-- endinject -->
</body>

</html>