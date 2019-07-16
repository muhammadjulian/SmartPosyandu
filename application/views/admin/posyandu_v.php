        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Posyandu Bogor Kota</h6>
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
                      <th>Nama Posyandu</th>
                      <th>Kelurahan</th>
                      <th>Alamat</th>
                      <th>Strata</th>
                      <th>lat</th>
                      <th>lng</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Posyandu</th>
                      <th>Kelurahan</th>
                      <th>Alamat</th>
                      <th>Strata</th>
                      <th>lat</th>
                      <th>lng</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($posyandu as $ps) : ?>
                      <tr>
                        <th><?= $ps['posyandu']; ?></th>
                        <th><?= $ps['kelurahan_id']; ?></th>
                        <th><?= $ps['alamat']; ?></th>
                        <th><?= $ps['strata_id']; ?></th>
                        <th><?= $ps['lat']; ?></th>
                        <th><?= $ps['lng']; ?></th>
                        <th>
                          <a href="" class="btn btn-primary">Edit</a>
                          <a href="" class="btn btn-primary">Hapus</a>
                        </th>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal_imunisasi" tabiindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Tambah Posyandu<h5> 
                  <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              <div class="modal-body">
                <form method="post" id="form_jurusan">
                  <div class="form-group">
                    <label><b>Nama Posyandu</b></label>
                      <input type="text" class="form-control" name="posyandu" id="posyandu" placeholder="Nama Posyandu" required>
                  </div>
                  <div class="form-group">
                    <label><b>Kelurahan</b></label>
                    <select class="form-control" id="" name="Kelurahan">
                      <option>Ciomas</option>
                      <option>Cimanggu</option>
                      <option>Ciapus</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label><b>Alamat</b></label>
                      <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Alamat " required>
                  </div>
                  <div class="form-group">
                    <label><b>Strata</b></label>
                    <select class="form-control" id="">
                      <option>Pratama</option>
                      <option>Madya</option>
                      <option>Purnama</option>
                      <option>Mandiri</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary btn-sm" type="submit" id="save">Simpan</button>
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