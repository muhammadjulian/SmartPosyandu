        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Posyandu</h6>
                </div>
                <div class="card-body">
                    <p>
                        <button class="btn btn-primary" title="tambah" data-toggle="modal" data-target="#modal_posyandu"><i class="fas fa-plus"></i></button>
                        <button class="btn btn-success"><i class="fas fa-file-csv"></i></button>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id </th>
                                    <th>Nama Kecamatan</th>
                                    <th>Nama Kelurahan</th>
                                    <th>Nama Posyandu</th>
                                    <th>Alamat</th>
                                    <th>Id Strata</th>
                                    <th>Lat</th>
                                    <th>Lng</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Nama Kelurahan</th>
                                    <th>Nama Posyandu</th>
                                    <th>Alamat</th>
                                    <th>Id Strata</th>
                                    <th>Lat</th>
                                    <th>Lng</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($posyandu as $pos) : ?>
                                    <tr>
                                        <th><?= $pos['id'] ?></th>
                                        <th><?= $pos['kecamatan'] ?></th>
                                        <th><?= $pos['kelurahan'] ?></th>
                                        <th><?= $pos['posyandu'] ?></th>
                                        <th><?= $pos['alamat'] ?></th>
                                        <th><?= $pos['strata'] ?></th>
                                        <th><?= $pos['lat'] ?></th>
                                        <th><?= $pos['lng'] ?></th>
                                        <th><a href="<?= base_url('kominfo/del_pos/') ?><?= $pos['id'] ?>" class="btn btn-danger"><span>Hapus</span></a></th>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal_posyandu" tabiindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Form posyandu<h5>
                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                        </div>

                        <div class="modal-body">
                            <form method="post" id="form_jurusan">
                                <div class="form-group">
                                    <label><b>Id</b></label>
                                    <input type="number" class="form-control" name="kelurahan_id" id="kelurahan_id" placeholder="Id Kelurahan" required>
                                </div>
                                <div class="form-group">
                                    <label><b>Id Kecamatan</b></label>
                                    <input type="Number" class="form-control" name="kecamatan_id" id="kecamatan_id" placeholder="Id Kecamatan" required>
                                </div>
                                <div class="Number">
                                    <label><b>Id Kelurahan</b></label>
                                    <input type="number" class="form-control" name="Kelurahan_id" id="Kelurahan_id" placeholder="Id Kelurahan" required>
                                </div>
                                <div class="form-group">
                                    <label><b>Nama Posyandu</b></label>
                                    <input type="text" class="form-control" name="nama_Posyandu" id="nama_Posyandu" placeholder="Nama Posyandu" required>
                                </div>
                                <div class="form-group">
                                    <label><b>Alamat</b></label>
                                    <input type="text" class="form-control" name="alamat_posyandu" id="alamat_posyandu" placeholder="Alamat Posyandu" required>
                                </div>
                                <div class="form-group">
                                    <label><b>Id Strata</b></b></label>
                                    <input type="number" class="form-control" name="strata_id" id="strata_id" placeholder="Id Strata" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal"><b>Lat</b></label>
                                    <input type="text" class="form-control" name="lat" id="lat" placeholder="Lat" required />
                                </div>
                                <div class="form-group">
                                    <label><b>Lng</b></label>
                                    <input type="text" class="form-control" name="lng" id="lng" placeholder="Lng" required>
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