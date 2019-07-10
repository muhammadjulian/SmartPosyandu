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
              <p>Biodata Penduduk</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!--Box Kecil 2-->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>459</h3>
              <p>Data Posyandu</p>
            </div>
            <div class="icon">
              <i class="fas fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!--Box Kecil 4-->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>238</h3>
              <p>Desawisma</p>
            </div>
            <div class="icon">
              <i class="far fa-chart-bar"></i>
            </div>
            <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>45.000</h3>

              <p>Sumber Dana</p>
            </div>
            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <div class="row">


                <div class="col-lg-6">
                    <!--Grafik Box 1-->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Donut Chart</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <canvas id="myChart" width="100" height="100"></canvas>
                                <script>
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'line',
                                        pointStyle: 'star',
                                        data: {
                                            labels: ['Jan', 'Feb', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agust', 'Sept', 'Okt', 'Nov', 'Des'],
                                            datasets: [{
                                                label: 'Jumlah Sasaran ',
                                                data: [200, 300, 150, 425, 135, 155, 400, 550, 125, 300, 200, 400],
                                            }]
                                        },
                                        options: {
                                            elements: {
                                                line: {
                                                    tension: 0.2 // disables bezier curves
                                                }
                                            }
                                        }
                                    });
                                </script>
                        </div>
                    </div>
                    <!-- finish-->
                </div><!-- col-lg-6-->

                <div class="col-lg-6">
                    <!--Grafik Box 1-->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Donut Chart</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                        <canvas id="Chart" width="100" height="100"></canvas>
                            <script>
                                var ctx = document.getElementById('Chart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Bayi', 'Balita', 'WUS', 'PUS', 'Ibu Hamil', 'Ibu Menyusui', 'Lansia'],
                                        datasets: [{
                                            label: 'Berjumlah',
                                            data: [800, 700, 900, 1000, 500, 100, 450],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 3)',
                                                'rgba(54, 162, 235, 3)',
                                                'rgba(255, 206, 86, 3)',
                                                'rgba(75, 192, 192, 3)',
                                                'rgba(105, 20, 86, 3)',
                                                'rgba(99, 120, 102, 3)',
                                                'rgba(25, 19, 130, 3)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(105, 20, 86, 1)',
                                                'rgba(99, 120, 102, 1)',
                                                'rgba(25, 19, 130, 1)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!-- finish-->
                </div><!-- col-lg-6-->  

                <div class="col-lg-8">
                    <!--Grafik Box 1-->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Grafik Batang Jumlah Sasaran Posyandu Kenanga</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <canvas id="myBarChart" width="100" height="100"></canvas>                
                            <script type="text/javascript">
                                var ctx = document.getElementById("myBarChart");
                                var myLineChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["Bayi", "Balita", "WUS", "PUS", "Ibu Hamil", "Ibu Menyusui"],
                                        datasets: [{
                                            label: "Jumlahnya",
                                            backgroundColor: "rgba(2,117,216,1)",
                                            borderColor: "rgba(2,117,216,1)",
                                            data: [0, 33, 146, 145, 32, 4],
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
                            </script>
                        </div>
                    </div>
                    <!-- finish-->
                </div><!-- col-lg-8-->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->