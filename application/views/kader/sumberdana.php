        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Biodata</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><b>NIK</b></label>
                                <input type="number" class="form-control" name="nik" placeholder="Masukan NIK">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label><b>Nama</b></label>
                                <input type="text" class="form-control" name="name" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label><b>Jenis Kelamin</b></label>
                                <form>
                                    <input type="radio" name="gender" value="Laki-laki" checked> Laki-laki
                                    <input type="radio" name="gender" value="Perempuan"> Perempuan<br>

                                </form>
                            </div>
                            <div class="form-group">
                                <label><b>Catatan</b></label>
                                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><b>Tempat Lahir</b></label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label><b>Tanggal lahir</b></label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tangal Lahir">
                            </div>
                            <div class="form-group">
                                <label><b>Id Posyandu</b></label>
                                <input type="number" class="form-control" name="posyandu_id" placeholder="Id Posyandu">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <p align="left">
                        <a href="" class="btn btn-warning">Clear</a>
                        <a href="" class="btn btn-success">Save Data</a>
                    </p>
                </div>
            </div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Biodata</h6>
                </div>
                <div class="card-body">
                    <p>
                        <button class="btn btn-success"><i class="fas fa-file-csv"></i> Convert to Ecxel</button>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Posyandu</th>
                                    <th>Uraian</th>
                                    <th>Kas Masuk</th>
                                    <th>Kas Keluar</th>
                                    <th>Saldo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Nama Posyandu</th>
                                    <th>Uraian</th>
                                    <th>Kas Masuk</th>
                                    <th>Kas Keluar</th>
                                    <th>Saldo</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($biodata as $bio) : ?>
                                    <tr>
                                        <th><?= $bio['nik'] ?></th>
                                        <th><?= $bio['nama'] ?></th>
                                        <th><?= $bio['jk'] ?></th>
                                        <th><?= $bio['tempat_lahir'] ?></th>
                                        <th><?= $bio['tanggal_lahir'] ?></th>
                                        <th><?= $bio['posyandu'] ?> </th>
                                        <th>
                                            <a href="" class="badge badge-warning" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Edit</a>
                                            <a href="" class="badge badge-danger" title="Edit data" data-toggle="modal" data-target="#modal_bayita">Delete</a>
                                        </th>

                                    </tr>
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
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="YYYY-MM-DD" required />
                                </div>
                                <div class="form-group">
                                    <label><b>Berat Badan Saat Lahir</b></label>
                                    <input type="number" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Berat Badan Saat Lahir (Kg)" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal"><b>Tanggal Registrasi</b></label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="YYYY-MM-DD" required />
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
                $(document).ready(function(e) {
                            $("#tanggal").datepicker({
                                format: "yyyy-mm-dd"
                            });
            </script>