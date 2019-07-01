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

<body class="fixed-nav sticky-footer " id="page-top">
  <!-- Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
        <a href="http://smartposyandu.kotabogor.go.id/addedit/index/dasawisma">
    <button class="btn btn-primary" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Tambah Data Dasawisma</button>
</a>
<form action="http://smartposyandu.kotabogor.go.id/index.php/dashboard/export" method="post" accept-charset="utf-8">
   <div class="form-group" style="display: none;">
    <label for="exampleInputEmail1">Keterangan Anak</label>
    <textarea name="hasil" placeholder="Contoh : Anak 2 : Meninngggal 1">
            <thead>
					                <tr>
					                  <th>Nama Dasawisma</th>
					                  <th>Alamat Dasawisma</th>
					                  <th class='aksi'>Aksi</th>
					                </tr>
					              </thead><tbody>
							                <tr>
							                  <td>Kenanga 2</td>
							                  <td></td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/20171005062720><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/20171005062720><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 5/5	</td>
							                  <td>Jl. Kenanga Blok J1 RT 05/05, Kebon Pedes, Kota Bogor	</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/20180116033211><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/20180116033211><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 1/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 02/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K1><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K1><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 2/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 01/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K2><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K2><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 3/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 03/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K3><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K3><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 4/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 05/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K4><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K4><button class='btn btn-error'>Hapus</button></a>
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
					                  <th>Nama Dasawisma</th>
					                  <th>Alamat Dasawisma</th>
					                  <th class='aksi'>Aksi</th>
					                </tr>
					              </thead><tbody>
							                <tr>
							                  <td>Kenanga 2</td>
							                  <td></td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/20171005062720><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/20171005062720><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 5/5	</td>
							                  <td>Jl. Kenanga Blok J1 RT 05/05, Kebon Pedes, Kota Bogor	</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/20180116033211><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/20180116033211><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 1/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 02/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K1><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K1><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 2/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 01/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K2><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K2><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 3/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 03/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K3><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K3><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>DASAWISMA KENANGA 4/5</td>
							                  <td>Jl. Kenanga Blok J1 RT 05/05, Kebon Pedes, Kota Bogor</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/dasawisma/K4><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/dasawisma/K4><button class='btn btn-error'>Hapus</button></a>
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
    <!-- Scroll to Top Button-->

    <!-- Logout Modal-->
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
