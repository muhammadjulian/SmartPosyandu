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