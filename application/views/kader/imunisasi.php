        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Imunisasi</h6>
            </div>
            <div class="card-body">
              <p>
                <button class="btn btn-danger" title="tambah" data-toggle="modal" data-target="#modal_imunisasi"><i class="fas fa-plus"></i>  Tambah Imunisasi/Pemeriksaan</button>
                <button class="btn btn-success"><i class="fas fa-file-csv"></i> Export to Excel</button>
                <button class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th rowspan='2'>No</th>
                      <th rowspan='2'>Nama Balita</th>
                      <th rowspan='2'>Nama Layanan</th>
                      <th colspan='6'>Periode</th>
                      <th rowspan='2'>Jumlah Periode (/Tahun)</th>
                      <th class='aksi' rowspan='2'>Aksi</th>
                    </tr>
                    <tr>
                      <th> Ke- 1</th>
                      <th> Ke- 2</th>
                      <th> Ke- 3</th>
                      <th> Ke- 4</th>
                      <th> Ke- 5</th>
                      <th> Ke- 6</th>
                    </tr>
                  </thead>
                  <tbody>
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
                        <option>.:: Cari Nama Berdasarkan NIK ::.</option>
                        <option>12345678997 - AIDA SRI HASTUTI</option>
                        <option>67381263871 - SITI MAEMUNAH</option>
                        <option>98713263877 - ADHIRIANI SETIAWATY</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>Nama Bayi/Balita</b></label>
                      <select class="form-control" name="kode_jurusan" id="kode_jurusan" required>
                        <option>.:: Cari Nama Berdasarkan NIK ::.</option>
                        <option>12345678997 - AIDA SRI HASTUTI</option>
                        <option>67381263871 - SITI MAEMUNAH</option>
                        <option>98713263877 - ADHIRIANI SETIAWATY</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>Umur</b></label>
                      <input type="number" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Umur" required>
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