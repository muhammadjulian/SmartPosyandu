        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Wanita Usia Subur & Pasangan Usia Subur</h6>
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
                      <th>Nama Wanita</th>
                      <th>Nama Pasangan</th>
                      <th>Kategori</th>
                      <th>Dasawisma</th>
                      <th>Jumlah Anak</th>
                      <th>Tahapan KS</th>
                      <th>Catatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Wanita</th>
                      <th>Nama Pasangan</th>
                      <th>Kategori</th>
                      <th>Dasawisma</th>
                      <th>Jumlah Anak</th>
                      <th>Tahapan KS</th>
                      <th>Catatan</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
<!--                     <tr>
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
                    </tr> -->
                    <!-- PEMANGGILAN DATA PADA DATABASE -->
                    <?php $i = 1; ?>
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
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div class="modal fade" id="modal_imunisasi" tabiindex="-1" role="dialog" aria-labelledwp="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Data WUS & PUS<h5> 
                  <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              <div class="modal-body ">
                <form method="post" id="form_jurusan">
                  <div class="form-group">
                    <label><b>Nama Wanita</b></label>
                      <select class="form-control" name="kode_jurusan" id="kode_jurusan" required>
                        <option>.:: Cari Nama Berdasarkan NIK ::.</option>
                        <option>12345678997 - AIDA SRI HASTUTI</option>
                        <option>67381263871 - SITI MAEMUNAH</option>
                        <option>98713263877 - ADHIRIANI SETIAWATY</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>Nama Pasangan</b></label>
                      <select class="form-control" name="kode_jurusan" id="kode_jurusan" required>
                        <option>.:: Cari Nama Berdasarkan NIK ::.</option>
                        <option>12345678997 - FIKRI FAHMI AMIN</option>
                        <option>67381263871 - JULIAN</option>
                        <option>98713263877 - ENCEP SUTARJA</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>Kategori</b></label>
                      <select class="form-control" name="kode_jurusan" id="kode_jurusan" required>
                        <option>.:: Pilih Kategori ::.</option>
                        <option>WUS ( Wanita Usia Subur )</option>
                        <option>PUS ( Pasangan Usia Subur)</option>
                        <option>Bayi/Balita</option>
                        <option>Lansia</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>Dasawisma</b></label>
                      <select class="form-control" name="kode_jurusan" id="kode_jurusan" required>
                        <option>.:: Pilih Nama Dasawisma ::.</option>
                        <option>DASAWISMA ANGGUR</option>
                        <option>DASAWISMA MANGGA</option>
                        <option>DASAWISMA JERUK</option>
                        <option>DASAWISMA SEMANGKA</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="tanggal"><b>Jumlah anak</b></label>
                      <input type="number" class="form-control" name="tanggal" id="tanggal" 
                      placeholder="Jumlah Anak" required />
                  </div>
                  <div class="form-group">
                    <label><b>Tahapan KS</b></label>
                      <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Tahapan KS" required>
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