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

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
<div class="col-lg-12" style="overflow: auto;">
	  <div class="card-header">
	    <i class="fa fa-table"></i> Biodata Posyandu</div>
	  <div class="card-body">
	    <div class="table-responsive">
	      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	        <thead>
	        	<tr>
	        		<th>Nama Posyandu</th>
	        		<th>Ketua</th>
	        		<th>Sekertaris</th>
	        		<th>Bendahara</th>
	        	</tr>
	        </thead>
	        <tbody>
	        	<tr>
	        		<th>Kenanga</th>
	        		<th></th>
	        		<th></th>
	        		<th></th>
	        	</tr>
	        </tbody>
	      </table>
	    </div>
	  </div>
	  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
	</div>
	<div class="col-lg-8">
          <!-- Example Bar Chart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bar-chart"></i> Grafik Batang Jumlah Sasaran Posyandu Kenanga</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 my-auto">
              <canvas id="myBarChart" width="100" height="50"></canvas>
            </div>
           <!--  <div class="col-sm-4 text-center my-auto">
              <div class="h4 mb-0 text-primary">$34,693</div>
              <div class="small text-muted">YTD Revenue</div>
              <hr>
              <div class="h4 mb-0 text-warning">$18,474</div>
              <div class="small text-muted">YTD Expenses</div>
              <hr>
              <div class="h4 mb-0 text-success">$16,219</div>
              <div class="small text-muted">YTD Margin</div>
            </div> -->
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
              </div>
    </div>
	<div class="col-lg-4">
		<div class="card mb-3">
		<div class="card-header">
		  <i class="fa fa-pie-chart"></i> Grafik Lingkaran Jumlah Sasaran Posyandu Kenanga</div>
		<div class="card-body">
		  <canvas id="myPieChart" width="100%" height="100"></canvas>
		</div>
		<!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
		</div>
	</div>
	<div class="col-lg-12" style="overflow: auto;">
	  <div class="card-header">
	    <i class="fa fa-table"></i> Data Imunisasi Terbaru</div>
	  <div class="card-body">
	    <div class="table-responsive">
	      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	        <thead>
	        	<tr>
	        		<th>Nama Lengkap</th>
	        		<th>Kelompok</th>
	        		<th>Kegiatan</th>
	        	</tr>
	        </thead>
	        <tbody>
	        	
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>Muhamad Akbar Sakhi</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>ALTHAF FARID ATALLAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>Fathan Al Maisan Dzafar</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>DARREN OLIVER</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>DEXTER ORLANDO WIJAYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ALTHAF SAFARAZ</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>LUTHFIYAH SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD APRIYANDI SEPTIAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>NADA FATMA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>FAHIRA RAMADHANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>NADYA ALYSAA AGUSTIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>NASYWA KAYLA DIAN UTAMI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>NASYWA KAYLA DIAN UTAMI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>NASYWA KAYLA DIAN UTAMI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>NASYWA KAYLA DIAN UTAMI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>FANIA DELISTIA HAMBALI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>KEYSA GALUH RANTIKA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>BAGUS WICAKSONO</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>Syabil Shagufta Mekka</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD SABIQ ALFATIN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMAD HABIBIE ARRAUF</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>BALQIS SALSABILA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>MUHAMMAD ANDIKA  NUGRAHA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>Anindya Qaila Sastyaviani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>SCINDY ADZKIYYA SALIMAH</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>GATHAN ATHAYA RASYID TAMBUNAN</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>Muhammad Arsyaq Rabbani</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>SYAHWA PUTRI AHMADINA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>DELISA PERMATA AULIA </td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>RAISYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>RAISYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>RAISYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>RAISYA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi DPT / HB</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Campak</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pencatatan Pemberian ASI</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Vitamin A</td>
	        	</tr>
	        	<tr>
	        		<td>PUTRI ADELIA</td>
	        		<td>Bayi/Balita</td>
	        		<td>Pemberian Oralit</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi BCG</td>
	        	</tr>
	        	<tr>
	        		<td>MIRZHA HIDAYAT TULLAH WARDANI</td>
	        		<td>Bayi/Balita</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>ALMA DAMAYANTI DJAYAPRAWIRA</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>SRI KUNDARI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>SRI KUNDARI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>Rika Ratna Sari</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>DEWI  RATRI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>VENUZAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>ALMA DAMAYANTI DJAYAPRAWIRA</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>GITA WINA SETIA</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>Fitri Adiani Fatonah</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>MISDARWATI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>SITI AISYAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>SITI AISYAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>IMUNISASI TT</td>
	        	</tr>
	        	<tr>
	        		<td>RIRIN</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>RIRIN</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>IBU BETJI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi HB 0</td>
	        	</tr>
	        	<tr>
	        		<td>DESI ARI SANTI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>DESI ARI SANTI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>DESI ARI SANTI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>IMUNISASI TT</td>
	        	</tr>
	        	<tr>
	        		<td>SITI JUMALIYA</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>SITI JUMALIYA</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>WAHYULIATI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>WAHYULIATI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>SITI KOMARIAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>MARTINA</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>SRI MULITASARI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>INES AGUSTIN</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>NADIRA</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>DHESHI RAHMAWATI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>MISOH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>APRILIYANA WIDIASTUTI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>SITI MAESAROH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>ADE SITI SAMSIYAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>Desi Purnamasari</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>Desi Purnamasari</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>TEGUH RAHAYU SEPTIANI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>TEGUH RAHAYU SEPTIANI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>SUCIATY ANGGRAINI SP</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>SUCIATY ANGGRAINI SP</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>MUSTIKA META LESTARI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>MUSTIKA META LESTARI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>IMUNISASI TT</td>
	        	</tr>
	        	<tr>
	        		<td>JUANITA ZAKIAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>JUANITA ZAKIAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>NOVITA SARI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>ASTI NURLIZA S.Psi</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>MISNAWATI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>MISNAWATI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi TT</td>
	        	</tr>
	        	<tr>
	        		<td>MAELANI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>Agisti Salsabilla Azzahra</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Imunisasi Polio</td>
	        	</tr>
	        	<tr>
	        		<td>HENI NURAINI</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>
	        	<tr>
	        		<td>NAZIAH</td>
	        		<td>Ibu Hamil/WUS/PUS/Ibu Menyusui dan Ibu Nifas</td>
	        		<td>Pemberian Tablet Tambah Darah</td>
	        	</tr>	        </tbody>
	      </table>
	    </div>
	  </div>
	  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
	</div>
</div>
<script type="text/javascript">
	var ctx = document.getElementById("myPieChart");
	var myPieChart = new Chart(ctx, {
	  type: 'pie',
	  data: {
	    labels: ["Bayi", "Balita", "WUS", "PUS", "Ibu Hamil", "Ibu Menyusui"],
	    datasets: [{
	      data: [0,33,146,145,32,4],
	      backgroundColor: ['GREEN', 'YELLOW', 'RED', 'BLUE', 'BROWN', 'ORANGE'],
	    }],
	  },
	});
	var ctx = document.getElementById("myBarChart");
	var myLineChart = new Chart(ctx, {
	  type: 'bar',
	  data: {
	    labels: ["Bayi", "Balita", "WUS", "PUS", "Ibu Hamil", "Ibu Menyusui"],
	    datasets: [{
	      label: "Jumlahnya",
	      backgroundColor: "rgba(2,117,216,1)",
	      borderColor: "rgba(2,117,216,1)",
	      data: [0,33,146,145,32,4],
	    }],
	  },
	  options: {
	    scales: {
	      xAxes: [{
	        time: {
	          unit: 'month'
	        },
	        gridLines: {
	          display: false
	        },
	        ticks: {
	          maxTicksLimit: 6
	        }
	      }],
	      yAxes: [{
	        ticks: {
	          min: 0,
	          max: 146,
	          maxTicksLimit: 5
	        },
	        gridLines: {
	          display: true
	        }
	      }],
	    },
	    legend: {
	      display: false
	    }
	  }
	});
</script>      <!-- </div> -->
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
