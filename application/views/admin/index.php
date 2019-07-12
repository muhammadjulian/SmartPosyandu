<!-- Begin Page Content -->
<script src="assets/vendor/chart.js/Chart.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<!-- Page level plugin CSS-->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Kota
    </h1>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Seluruh Posyandu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1800</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Per-Kecamatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1800</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">per-kecamatan</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">500</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dasawisma</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7">

            <div class="card mb-3">
                <div class="card-header">
                    <i class="far fa-chart-bar"></i> Grafik Posyandu Kota Bogor</div>
                <div id="jmlh_pos"></div>
                <script>
                    Highcharts.chart('jmlh_pos', {
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
        <div class="col-lg-5">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="far fa-chart-bar"></i> Grafik Strata Posyandu Kota Bogor</div>
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

    <div class="container-fluid">
        <div class="row">
            <div id="container"></div>

            <script type=text/javascript> Highcharts.chart('container', { chart: { type: 'column' }, title: { text: 'Total Pembagian Stata Per-Kecamatan' }, xAxis: { categories: ['Bogor Tengah', 'Bogor Utara' , 'Bogor Selatan' , 'Bogor Timur' , 'Bogor Barat' , 'Tanah Sareal' ] }, yAxis: { allowDecimals: false, min: 0, title: { text: 'Strata Posyandu' } }, tooltip: { formatter: function () { return '<b>' + this.x + '</b><br/>' + this.series.name + ': ' + this.y + '<br/>' + 'Total Posyandu: ' + this.point.stackTotal; } }, plotOptions: { column: { stacking: 'normal' } }, series: [{ name: 'Pratama' , data: [5,5,7,8,9,10], stack: 'Strata' }, { name: 'Madya' , data: [7,6,9,1,2,1], stack: 'Strata' }, { name: 'Purnama' , data: [5,3,2,2,1,9], stack: 'Strata' }, { name: 'Mandiri' , data: [2,5,6,4,6,2], stack: 'Strata' }] }); </script> </div> </div> </div> <!-- /.container-fluid -->

                </div>
<!-- End of Main Content -->