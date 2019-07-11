        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Ibu Menyusui</h6>
            </div>
            <div class="card-body">
              <p>
                <button class="btn btn-primary" title="tambah" data-toggle="modal" data-target="#modal_imunisasi"><i class="fas fa-plus"></i></button>
                <button class="btn btn-success"><i class="fas fa-file-csv"></i></button>
                <button class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Berat Badan Saat Lahir</th>
                      <th>Tanggal registrasi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Berat Badan Saat Lahir</th>
                      <th>Tanggal registrasi</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal_imunisasi" tabiindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Data Bayi & Balita<h5> 
                  <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              <div class="modal-body">
                <form method="post" id="form_jurusan">
                  <div class="form-group">
                    <label><b>NIK</b></label>
                      <input type="number" class="form-control" name="kode_jurusan" id="kode_jurusan" placeholder="Nomor Induk Kependudukan" required>
                  </div>
                  <div class="form-group">
                    <label><b>Nama Lengkap</b></label>
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
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
  <script type="text/javascript">
    $(document).ready(function(e){
      $("#tanggal").datepicker({
        format:"yyyy-mm-dd"
      });
  </script>