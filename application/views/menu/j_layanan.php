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
  <link href="http://smartposyandu.kotabogor.go.id//assets/select2.css" rel="stylesheet">
  <!-- <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/jquery/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/ckeditor/ckeditor.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/select2.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/chart.js/Chart.min.js"></script>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
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
        <a href="http://smartposyandu.kotabogor.go.id/addedit/index/jenis_layanan">
    <button class="btn btn-primary" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Tambah Data Pelayanan</button>
</a>
<form action="http://smartposyandu.kotabogor.go.id/index.php/dashboard/export" method="post" accept-charset="utf-8">
   <div class="form-group" style="display: none;">
    <label for="exampleInputEmail1">Keterangan Anak</label>
    <textarea name="hasil" placeholder="Contoh : Anak 2 : Meninngggal 1">
            <thead>
					                <tr>
					                  <th>Nama Layanan</th>
					                  <th>Periode Pelayanan</th>
					                  <th class='aksi'>Aksi</th>
					                </tr>
					              </thead><tbody>
							                <tr>
							                  <td>Imunisasi HB 0</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092826><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092826><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi BCG</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092827><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092827><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi Polio</td>
							                  <td>4 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092828><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092828><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi DPT / HB</td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092829><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092829><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi Campak</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092830><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092830><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi TT</td>
							                  <td>5 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092831><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092831><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pencatatan Pemberian ASI</td>
							                  <td>6 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092832><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092832><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Vitamin A</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092833><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092833><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Oralit</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092834><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092834><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Tablet Tambah Darah</td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092835><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092835><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>IMUNISASI TT</td>
							                  <td>5 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092836><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092836><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Ganguan Mental Emusional</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612060428><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612060428><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Kognitif</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612060444><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612060444><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Penilaian Resiko Malnutrisi (MNA)</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612070919><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612070919><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Penilaian Resiko Jatuh</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612070955><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612070955><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Ginjal</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071017><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071017><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Penglihatan</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071030><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071030><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Pendengaran</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071047><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071047><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Kholesterol</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071114><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071114><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gula Darah</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071128><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071128><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>HB</td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071152><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071152><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>ST Fungsional Dan Lab</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071220><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071220><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Tensi Darah</td>
							                  <td>12 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612075255><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612075255><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>asam urat </td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712034840><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712034840><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan ginjal </td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712040737><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712040737><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Imunisasi Bayi</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712070948><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712070948><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan ginjal</td>
							                  <td>4 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712071019><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712071019><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Sesak Nafas</td>
							                  <td>5 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712072115><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712072115><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              </tbody>    </textarea>
    <span class="field"><font color='RED'></font></span>
    <span class="field"><font color='GREEN'>Contoh : Anak 2 : Meninngggal 1</font></span>
   </div>
   <input type="text" name="judul" value="Tabel Data Pelayanan yang tersedia di Posyandu Kenanga" style="display: none;">
    <script type="text/javascript">
      CKEDITOR.replace( '' );
    </script>
  <button class="btn btn-success" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Export Excel</button>
</form><div class="card mb-3" style="overflow: auto;">
  <div class="card-header">
    <i class="fa fa-table"></i> Tabel Data Pelayanan yang tersedia di Posyandu Kenanga</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
					                <tr>
					                  <th>Nama Layanan</th>
					                  <th>Periode Pelayanan</th>
					                  <th class='aksi'>Aksi</th>
					                </tr>
					              </thead><tbody>
							                <tr>
							                  <td>Imunisasi HB 0</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092826><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092826><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi BCG</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092827><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092827><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi Polio</td>
							                  <td>4 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092828><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092828><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi DPT / HB</td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092829><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092829><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi Campak</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092830><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092830><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Imunisasi TT</td>
							                  <td>5 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092831><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092831><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pencatatan Pemberian ASI</td>
							                  <td>6 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092832><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092832><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Vitamin A</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092833><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092833><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Oralit</td>
							                  <td>1 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092834><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092834><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Tablet Tambah Darah</td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092835><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092835><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>IMUNISASI TT</td>
							                  <td>5 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20171008092836><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20171008092836><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Ganguan Mental Emusional</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612060428><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612060428><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Kognitif</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612060444><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612060444><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Penilaian Resiko Malnutrisi (MNA)</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612070919><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612070919><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Penilaian Resiko Jatuh</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612070955><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612070955><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Ginjal</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071017><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071017><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Penglihatan</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071030><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071030><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan Pendengaran</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071047><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071047><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Kholesterol</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071114><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071114><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gula Darah</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071128><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071128><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>HB</td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071152><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071152><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>ST Fungsional Dan Lab</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612071220><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612071220><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Tensi Darah</td>
							                  <td>12 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180612075255><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180612075255><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>asam urat </td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712034840><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712034840><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan ginjal </td>
							                  <td>3 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712040737><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712040737><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Pemberian Imunisasi Bayi</td>
							                  <td>2 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712070948><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712070948><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Gangguan ginjal</td>
							                  <td>4 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712071019><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712071019><button class='btn btn-error'>Hapus</button></a>
							                  </td>
							                </tr>
							              
							                <tr>
							                  <td>Sesak Nafas</td>
							                  <td>5 Kali</td>
							                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/edit/jenis_layanan/20180712072115><button class='btn btn-warning'>Ubah</button></a>
							                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/jenis_layanan/20180712072115><button class='btn btn-error'>Hapus</button></a>
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
