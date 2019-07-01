<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap core CSS-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/select2.css" rel="stylesheet">
  <!-- <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/jquery/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/ckeditor/ckeditor.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/select2.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/chart.js/Chart.min.js"></script>
</head>

<body>
  <!-- Navigation-->
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
        <a href="http://smartposyandu.kotabogor.go.id/addedit/index/penimbangan/lansia">
    <button class="btn btn-primary" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Tambah Data Penimbangan Lansia</button>
</a>
<form action="http://smartposyandu.kotabogor.go.id/index.php/dashboard/export" method="post" accept-charset="utf-8">
   <div class="form-group" style="display: none;">
    <label for="exampleInputEmail1">Keterangan Anak</label>
    <textarea name="hasil" placeholder="Contoh : Anak 2 : Meninngggal 1">
            <thead>
											<tr>
							                  <th rowspan='2'>Nama Lansia</th>
							                  <th colspan='12'>Hasil Penimbangan (Kg)</th>
							                  <th rowspan='2'>Nama Dasawisma</th>
							                  <th class='aksi' rowspan='2'>Aksi</th>
							                </tr>
							                <tr>
							                  <th>Jan</th><th>Feb</th><th>Mar</th><th>Aprl</th><th>Mei</th><th>Juni</th><th>Juli</th><th>Agst</th><th>Sptm</th><th>Oktb</th><th>Nov</th><th>Des</th>
							                </tr>
							              </thead><tbody></tbody>    </textarea>
    <span class="field"><font color='RED'></font></span>
    <span class="field"><font color='GREEN'>Contoh : Anak 2 : Meninngggal 1</font></span>
   </div>
   <input type="text" name="judul" value="Tabel Data Penimbangan Balita dan Bayi di Posyandu Kenanga" style="display: none;">
    <script type="text/javascript">
      CKEDITOR.replace( '' );
    </script>
  <button class="btn btn-success" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Export Excel</button>
</form><div class="card mb-3" style="overflow: auto;">
  <div class="card-header">
    <i class="fa fa-table"></i> Tabel Data Penimbangan Balita dan Bayi di Posyandu Kenanga</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
											<tr>
							                  <th rowspan='2'>Nama Lansia</th>
							                  <th colspan='12'>Hasil Penimbangan (Kg)</th>
							                  <th rowspan='2'>Nama Dasawisma</th>
							                  <th class='aksi' rowspan='2'>Aksi</th>
							                </tr>
							                <tr>
							                  <th>Jan</th><th>Feb</th><th>Mar</th><th>Aprl</th><th>Mei</th><th>Juni</th><th>Juli</th><th>Agst</th><th>Sptm</th><th>Oktb</th><th>Nov</th><th>Des</th>
							                </tr>
							              </thead><tbody></tbody>      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>      <!-- </div> -->
      <!-- Area Chart Example-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
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
