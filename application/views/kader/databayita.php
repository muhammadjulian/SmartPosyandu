        <!-- Begin Page Content -->
        <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Bayi dan Balita</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Nama Ibu Bayi/Balita</b></label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">-Pilih Salah Satu-</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label><b>Nama Bayi/Balita</b></label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">-Pilih Salah Satu-</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <div class="form-group">
                <label><b>Umur Bayi/Balita</b></label>
                <input type="number" class="form-control" name="umur" placeholder="Umur Bayi/Balita">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Berat Badan Byi/Balita</b></label>
                <input type="number" class="form-control" name="umur" placeholder="Berat Badan (Kg)">
              </div>
              <div class="form-group">
                <label><b>Tanggal Registrasi</b></label>
                <input type="date" id="datepicker" class="form-control" name="umur" placeholder="Berat Badan (Kg)">
              </div>
              <div class="form-group">
                <label><b>Catatan</b></label>
               <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <p align="right">
            <a href="" class="btn btn-danger">Save Data</a>
            <a href="" class="btn btn-success">Clear</a>
          </p>
        </div>
      </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Bayi & Balita</h6>
            </div>
            <div class="card-body">
              <p>
                <button class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus semua Data</button>
                <button class="btn btn-success"><i class="fas fa-file-csv"></i> Export to Excel</button>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Bayi/Balita</th>
                      <th>Nama Ibu</th>
                      <th>Umur</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>BB Saat Lahir</th>
                      <th>Tanggal registrasi</th>
                      <th>Catatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>BB Saat Lahir</th>
                      <th>Tanggal registrasi</th>
                      <th>Catatan</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <th>Fikri Fahmi Amin</th>
                      <th>Aida Sri Hastuti</th>
                      <th>70</th>
                      <th>Ciamis</th>
                      <th>07-07-1998</th>
                      <th>57Kg</th>
                      <th>19-12-2019</th>
                      <th>Lahir dengan keadaan Normal</th>
                      <th>
                          <a href="" class="badge badge-primary" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                          <a href="<?= base_url('kader/imunisasi'); ?>" class="badge badge-success" title="Edit data" >Imunisasi</a>
                        </th>
                    </tr>
                    <tr>
                      <th>2</th>
                      <th>Julian</th>
                      <th>Siti Maemunah</th>
                      <th>50</th>
                      <th>Bogor</th>
                      <th>10-02-1965</th>
                      <th>87Kg</th>
                      <th>22-06-2018</th>
                      <th>Lahir dengan keadaan Normal</th>
                      <th>
                          <a href="" class="badge badge-primary" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Imunisasi</a>
                        </th>
                    </tr>
                    <tr>
                      <th>3</th>
                      <th>Fikri Fahmi Amin</th>
                      <th>Aida Sri Hastuti</th>
                      <th>70</th>
                      <th>Ciamis</th>
                      <th>07-07-1998</th>
                      <th>57Kg</th>
                      <th>19-12-20019</th>
                      <th>Lahir dengan keadaan Normal</th>
                      <th>
                          <a href="" class="badge badge-primary" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Imunisasi</a>
                        </th>
                    </tr>
                    <tr>
                      <th>4</th>
                      <th>Fikri Fahmi Amin</th>
                      <th>Aida Sri Hastuti</th>
                      <th>70</th>
                      <th>Ciamis</th>
                      <th>07-07-1998</th>
                      <th>57Kg</th>
                      <th>19-12-20019</th>
                      <th>Lahir dengan keadaan Normal</th>
                      <th>
                          <a href="" class="badge badge-primary" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Imunisasi</a>
                        </th>
                    </tr>
                    <!-- PEMANGGILAN DATA PADA DATABASE -->
<!--                     <?php $i = 1; ?>
                    <?php foreach ($bayita as $by) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <th><?= $by['nik'] ?></th>
                        <th><?= $by['nik_ibu'] ?></th>
                        <th><?= $by['nama'] ?></th>
                        <th><?= $by['umur'] ?></th>
                        <th><?= $by['tempat_lahir'] ?></th>
                        <th><?= $by['tanggal_lahir'] ?></th>
                        <th><?= $by['bb_saat_lahir'] ?></th>
                        <th><?= $by['tanggal_registrasi'] ?></th>
                        <th><?= $by['catatan'] ?></th>
                        <th>
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                        </th>
                        <?php $i++; ?>
                      <?php endforeach; ?> -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
  });
</script>