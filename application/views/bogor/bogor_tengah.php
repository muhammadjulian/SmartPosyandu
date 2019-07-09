<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="http://smartposyandu.kotabogor.go.id/assets/img/kotabogor.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Alfiar Wiguna">
  <title>Dashboard SMART Posyandu</title>
  <!-- Bootstrap core CSS-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/css/sb-admin.css" rel="stylesheet">
  <link href="http://smartposyandu.kotabogor.go.id//assets/select2.css" rel="stylesheet">
  <!-- <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/jquery/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/ckeditor/ckeditor.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/select2.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/chart.js/Chart.min.js"></script>
</head>


     
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://smartposyandu.kotabogor.go.id/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"></li>
      </ol> -->
      <!-- Icon Cards-->
      <!-- <div class="row"> -->
        <a href="http://smartposyandu.kotabogor.go.id/addedit/index/dana">
    <button class="btn btn-primary" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Tambah Data Sumber Dana</button>
</a>
<form action="http://smartposyandu.kotabogor.go.id/index.php/dashboard/export" method="post" accept-charset="utf-8">
   <div class="form-group" style="display: none;">
    <label for="exampleInputEmail1">Keterangan Anak</label>
    <textarea name="hasil" placeholder="Contoh : Anak 2 : Meninngggal 1">
            <thead>
					                <tr>
					                  <th>Nama Posyandu</th>
					                  <th>Uraian</th>
									  <th>Kas Masuk</th>
									  <th>Kas Keluar</th>
									  <th>Saldo</th>
					                  <th class='aksi'>Aksi</th>
					                </tr>
					              </thead><tbody>
							                <tr>
							                  <td>Kenanga</td>
							                  <td>tgl 12/12/2019</td>
											  <td>100.000</td>
											  <td>20.000</td>
											  <td>80.000</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dana/12><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dana/12><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Kenanga</td>
							                  <td>12</td>
											  <td>14</td>
											  <td>12</td>
											  <td>12</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dana/20180612081933><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dana/20180612081933><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              </tbody>    </textarea>
    <span class="field"><font color='RED'></font></span>
    <span class="field"><font color='GREEN'>Contoh : Anak 2 : Meninngggal 1</font></span>
   </div>
   <input type="text" name="judul" value="Tabel Data Dasawisma di Posyandu Kenanga" style="display: none;">
    <script type="text/javascript">
      CKEDITOR.replace( '' );
    </script>
  <button class="btn btn-success" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Export Excel</button>
</form><div class="card mb-3" style="overflow: auto;">
  <div class="card-header">
    <i class="fa fa-table"></i> Tabel Data Dasawisma di Posyandu Kenanga</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
					                <tr>
					                  <th>Nama Posyandu</th>
					                  <th>Uraian</th>
									  <th>Kas Masuk</th>
									  <th>Kas Keluar</th>
									  <th>Saldo</th>
					                  <th class='aksi'>Aksi</th>
					                </tr>
					              </thead><tbody>
							                <tr>
							                  <td>Kenanga</td>
							                  <td>tgl 12/12/2019</td>
											  <td>100.000</td>
											  <td>20.000</td>
											  <td>80.000</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dana/12><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dana/12><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Kenanga</td>
							                  <td>12</td>
											  <td>14</td>
											  <td>12</td>
											  <td>12</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dana/20180612081933><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dana/20180612081933><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              </tbody>      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>      <!-- </div> -->
      <!-- Area Chart Example-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Diskominfostandi 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="http://smartposyandu.kotabogor.go.id//assets/admin/#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Logout Sekarang ?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="http://smartposyandu.kotabogor.go.id//login/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/popper/popper.min.js"></script>
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/js/sb-admin-datatables.min.js"></script>
    <!-- <script src="http://smartposyandu.kotabogor.go.id//assets/admin/js/sb-admin-charts.js"></script> -->
  </div>
</body>

</html>
