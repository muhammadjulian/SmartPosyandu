        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Bayi & Balita</h6>
            </div>
            <div class="card-body">
              <p>
                <button class="btn btn-danger" title="tambah" data-toggle="modal" data-target="#modal_imunisasi"><i class="fas fa-plus"></i> Tambah Data</button>
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
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
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
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
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
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
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
                          <a href="" class="badge badge-success" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                          <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
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

          <div class="modal fade" id="modal_imunisasi" tabiindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Data Bayi & Balita<h5> 
                  <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              <div class="modal-body ">
                <form method="post" id="form_jurusan">
                  <div class="form-group">
                    <label><b>Nama Ibu</b></label>
                      <select class="form-control" name="kode_jurusan" id="kode_jurusan" required>
                        <option>-Pilih Salah Satu-</option>
                        <option>12345678997 - AIDA SRI HASTUTI</option>
                        <option>67381263871 - SITI MAEMUNAH</option>
                        <option>98713263877 - ADHIRIANI SETIAWATY</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>Nama Bayi/Balita</b></label>
                      <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <label><b>Umur</b></label>
                      <input type="number" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Umur" required>
                  </div>
                  <div class="form-group">
                    <label><b>Tempat Lahir</b></label>
                      <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggal"><b>Tanggal Lahir</b></label>
                      <input type="date" class="form-control" name="tanggal" id="tanggal" 
                      placeholder="YYYY-MM-DD" required />
                  </div>
                  <div class="form-group">
                    <label><b>Berat Badan Saat Lahir</b></label>
                      <input type="number" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Berat Badan Saat Lahir (Kg)" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggal"><b>Tanggal Registrasi</b></label>
                      <input type="date" class="form-control" name="tanggal" id="tanggal" 
                      placeholder="YYYY-MM-DD" required />
                  </div>
                  <div class="form-group">
                    <label><b>Catatan</b></label>
                      <textarea class="form-control" name="catatan" id="nama_jurusan" required></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-danger btn-sm" type="submit">Simpan</button>
                <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
  <script type="text/javascript">
    CKEDITOR.replace('catatan');
    $(document).ready(function(e){
      $("#tanggal").datepicker({
        format:"yyyy-mm-dd"
      });
  </script>