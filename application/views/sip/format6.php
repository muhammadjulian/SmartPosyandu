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
 
  <div class="content-wrapper">
    <div class="container-fluid">
      
        <a href="http://smartposyandu.kotabogor.go.id/sip/export_format6" class="btn btn-success" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Export Excel</a>

<div class="card mb-3" style="overflow: auto;">
  <div class="card-header">
    <i class="fa fa-table"></i> DATA HASIL KEGIATAN POSYANDU</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
      	<thead>
      		<tr>
				<th rowspan="3">NO</th>
      			<th colspan="4">IBU HAMIL</th>
      			<th rowspan="3">JUMLAH IBU YANG MENYUSUI</th>
      			<th rowspan="3">JUMLAH IBU NIFAS YANG MENDAPAT KAPSUL VITAMIN A</th>
      			<th colspan="3">JUMLAH PESERTA KB YANG MENDAPAT PELAYANAN ULANG</th>
      			<th colspan="5">PENIMBANGAN BAYI DAN BALITA (JUMLAH)</th>
      			<th colspan="2">JUMLAH BAYI DAN BALITA</th>
      			<th colspan="10">JUMLAH BAYI YANG DIIMUNISASI</th>
      			<th colspan="5">JUMLAH WUS DAN BUMIL YANG DAPAT IMUNISASI</th>
      			<th colspan="2">BALITA YANG MENDERITA DIARE</th>
      			<th rowspan="3">KETERANGAN</th>
      		</tr>
      		<tr>
				<th rowspan="2">BULAN</th>
      			<th rowspan="2">JUMLAH</th>
      			<th rowspan="2">JUMLAH YANG MEMERIKSAKAN DIRI</th>
      			<th rowspan="2">JUMLAH YANG MENDAPAT TT</th>
      			<th rowspan="2">KONDOM</th>
      			<th rowspan="2">PIL</th>
      			<th rowspan="2">SUNTIK</th>
      			<th rowspan="2">JUMLAH BALITA SASARAN Posyandu (S)</th>
      			<th rowspan="2">YANG MEMILIKI KMS BUKU KIA (K)</th>
      			<th rowspan="2">YANG DITIMBANG (D)</th>
      			<th rowspan="2">YANG NAIK (N)</th>
      			<th rowspan="2">YANG BGM</th>
      			<th rowspan="2">YANG MENDAPAT KAPSUL VITAMIN A</th>
      			<th rowspan="2">YANG MENDAPAT PMT PENYULUHAN</th>
      			<th rowspan="2">HB 0 (HB NOL)</th>
      			<th rowspan="2">BCG</th>
      			<th colspan="4">POLIO</th>
      			<th colspan="3">DPT/HB</th>
      			<th rowspan="2">CAMPAK</th>
      			<th rowspan="2">I</th>
      			<th rowspan="2">II</th>
      			<th rowspan="2">III</th>
      			<th rowspan="2">IV</th>
      			<th rowspan="2">V</th>
      			<th rowspan="2">JUMLAH BALITA</th>
      			<th rowspan="2">JUMLAH YANG MENDAPAT ORALIT</th>
      		</tr>
      		<tr>
				<th>I</th>
      			<th>II</th>
      			<th>III</th>
      			<th>IV</th>
      			<th>I</th>
      			<th>II</th>
      			<th>III</th>
      		</tr>
      		<tr>
      			      				<th>1</th>
      			      				<th>2</th>
      			      				<th>3</th>
      			      				<th>4</th>
      			      				<th>5</th>
      			      				<th>6</th>
      			      				<th>7</th>
      			      				<th>8</th>
      			      				<th>9</th>
      			      				<th>10</th>
      			      				<th>11</th>
      			      				<th>12</th>
      			      				<th>13</th>
      			      				<th>14</th>
      			      				<th>15</th>
      			      				<th>16</th>
      			      				<th>17</th>
      			      				<th>18</th>
      			      				<th>19</th>
      			      				<th>20</th>
      			      				<th>21</th>
      			      				<th>22</th>
      			      				<th>23</th>
      			      				<th>24</th>
      			      				<th>25</th>
      			      				<th>26</th>
      			      				<th>27</th>
      			      				<th>28</th>
      			      				<th>29</th>
      			      				<th>30</th>
      			      				<th>31</th>
      			      				<th>32</th>
      			      				<th>33</th>
      			      				<th>34</th>
      			      				<th>35</th>
      			      		</tr>
      	</thead>
<tbody>

      		<tr style="text-align: center;">
                        <td>1</td>
                        <td style="text-align: left;">Januari</td>
                        <td>3</td>
                        <td>3</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>2</td>
                        <td style="text-align: left;">Februari</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>0</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>3</td>
                        <td style="text-align: left;">Maret</td>
                        <td>2</td>
                        <td>2</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>6</td>
                        <td>6</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>0</td>
                        <td>5</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>4</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>4</td>
                        <td style="text-align: left;">April</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>4</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>0</td>
                        <td>4</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>4</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>5</td>
                        <td style="text-align: left;">Mei</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>0</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>6</td>
                        <td style="text-align: left;">Juni</td>
                        <td>4</td>
                        <td>4</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>7</td>
                        <td style="text-align: left;">Juli</td>
                        <td>1</td>
                        <td>6</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>0</td>
                        <td>4</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>4</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>8</td>
                        <td style="text-align: left;">Agustus</td>
                        <td>4</td>
                        <td>4</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>1</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>9</td>
                        <td style="text-align: left;">September</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td>0</td>
                        <td>5</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td>5</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>10</td>
                        <td style="text-align: left;">Oktober</td>
                        <td>3</td>
                        <td>3</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>0</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>11</td>
                        <td style="text-align: left;">November</td>
                        <td>2</td>
                        <td>2</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>1</td>
                        <td>-</td>
                  </tr>
                  <tr style="text-align: center;">
                        <td>12</td>
                        <td style="text-align: left;">Desember</td>
                        <td>2</td>
                        <td>2</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>0</td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td>-</td>
                  </tr>

      	</tbody>
      </table>
    </div>
  </div>
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
