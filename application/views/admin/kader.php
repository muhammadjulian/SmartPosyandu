<!-- Begin Page Content -->
<script src="assets/vendor/chart.js/Chart.min.js"></script>
<!-- Page level plugin CSS-->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>

    <div class="row">
        <!--Box Kecil 1-->
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>6.550</h3>
                    <p>Data Bayita</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="<?= base_url('kader/databayita');?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!--Box Kecil 2-->
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>459</h3>
                    <p>Data Ibu Hamil</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="<?= base_url('kader/dataibuhamil');?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!--Box Kecil 4-->
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>238</h3>
                    <p>Data Ibu Nifas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="<?= base_url('kader/dataibunifas');?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>45.000</h3>
                    <p>Data Ibu Menyusui</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="<?= base_url('kader/dataibumenyusui');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!--Box Kecil 5-->
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>459</h3>
                    <p>Data Lansia</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!--Box Kecil 5-->
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3>459</h3>
                    <p>Data WUS</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!--Box Kecil 5-->
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>459</h3>
                    <p>Data PUS</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- CHART GRAFIK POSYANDU 1 -->
        <div class="col-lg-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Grafik Posyandu Kota Bogor</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <div class="card mb-3">
                        <div id="jmlh_poss"></div>
                            <script>
                                Highcharts.chart('jmlh_poss', {
                                    chart: {
                                        type: 'column'
                                    },
                                    title: {
                                        text: 'Kecamatan Kota Bogor'
                                    },
                                    subtitle: {

                                    },
                                    xAxis: {
                                        categories: [
                                            'Bogor Tengah',
                                            'Bogor Utara',
                                            'Bogor Selatan',
                                            'Bogor Timur',
                                            'Bogor Barat',
                                            'Tanah Sareal'
                                        ],
                                        crosshair: true
                                    },
                                    yAxis: {
                                        min: 0,
                                        title: {
                                            text: 'Rainfall (mm)'
                                        }
                                    },
                                    tooltip: {
                                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                            '<td style="padding:0"><b>{point.y:f} buah</b></td></tr>',
                                        footerFormat: '</table>',
                                        shared: true,
                                        useHTML: true
                                    },
                                    plotOptions: {
                                        column: {
                                            pointPadding: 0.2,
                                            borderWidth: 0
                                        }
                                    },
                                    series: [{
                                        name: 'Jumlah Posyandu ',
                                        data: [38, 50, 20, 10, 17, 13]

                                    }]
                                });
                            </script>
                    </div>
                  </div>
                </div>
             </div>
        </div>

        <!-- CHART GRAFIK POSYANDU 2 -->
        <div class="col-lg-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Grafik Strata Posyandu Kota Bogor</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <div id="jmlh_strata"></div>
                    <script>
                        Highcharts.chart('jmlh_strata', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Kecamatan Kota Bogor'
                            },
                            subtitle: {

                            },
                            xAxis: {
                                categories: [
                                    'Pratama',
                                    'Madya',
                                    'Purnama',
                                    'Mandiri'
                                ],
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Rainfall (mm)'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                    '<td style="padding:0"><b>{point.y:f} buah</b></td></tr>',
                                footerFormat: '</table>',
                                shared: true,
                                useHTML: true
                            },
                            plotOptions: {
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                            },
                            series: [{
                                name: 'Jumlah Posyandu ',
                                data: [50, 70, 20, 35]

                            }]
                        });
                    </script>
                      </div>
                </div>
             </div>
        </div>

        <!-- CHART GRAFIK POSYANDU 2 -->
        <div class="col-lg-7">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Total Pembagian Strata Per-Kecamatan</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="continer-fluid">
                        <div class="row">
                            <div id="container"></div>
                                <script type="text/javascript">
                                    Highcharts.chart('container',{ chart: { type: 'column' }, title: { text: 'Total Pembagian Stata Per-Kecamatan' }, xAxis: { categories: ['Bogor Tengah', 'Bogor Utara' , 'Bogor Selatan' , 'Bogor Timur' , 'Bogor Barat' , 'Tanah Sareal' ] }, yAxis: { allowDecimals: false, min: 0, title: { text: 'Strata Posyandu' } }, tooltip: { formatter: function () { return '<b>' + this.x + '</b><br/>' + this.series.name + ': ' + this.y + '<br/>' + 'Total Posyandu: ' + this.point.stackTotal; } }, plotOptions: { column: { stacking: 'normal' } }, series: [{ name: 'Pratama' , data: [5,5,7,8,9,10], stack: 'Strata' }, { name: 'Madya' , data: [7,6,9,1,2,1], stack: 'Strata' }, { name: 'Purnama' , data: [5,3,2,2,1,9], stack: 'Strata' }, { name: 'Mandiri' , data: [2,5,6,4,6,2], stack: 'Strata' }] }); </script></div> </div> <!-- /.container-fluid -->
                             </div>
            </div>
        </div>

                  <!-- DataTales Example -->
        <div class="row">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Wanita Usia Subur & Pasangan Usia Subur</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Kategori</th>
                      <th>Kegiatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Kategori</th>
                      <th>Kegiatan</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <th>Fikri Fahmi Amin</th>
                      <th>Aida Sri Hastuti</th>
                      <th>70</th>
                      <th>
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                        </th>
                    </tr>
                    <!-- PEMANGGILAN DATA PADA DATABASE -->
<!--                     <?php $i = 1; ?>
                    <?php foreach ($wuspus as $wp) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <th><?= $wp['biodata_id'] ?></th>
                        <th><?= $wp['biodata_pasangan'] ?></th>
                        <th><?= $wp['kategori_id'] ?></th>
                        <th><?= $wp['dasawisma_id'] ?></th>
                        <th><?= $wp['jumlah_anak'] ?></th>
                        <th><?= $wp['tahapan_ks'] ?></th>
                        <th><?= $wp['catatan'] ?></th>
                        <th>
                          <a href="" class="badge badge-primary" title="Lihat Detail" data-toggle="modal" data-target="#modal_bayita">Detail</a>
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Hapus Data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                        </th>
                        <?php $i++; ?>
                      <?php endforeach; ?> -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
        </div>      
    </div>
</div>
    <!-- End of Main Content -->