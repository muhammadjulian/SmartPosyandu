        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?= form_error('layananutama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

          <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"> -->
          <?php if ($this->session->flashdata('message')) : ?>
            <div class="row mt-3">
              <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data Layanan berhasil
                  <strong><?= $this->session->flashdata('message'); ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Data Layanan Utama</h6>
            </div>
            <div class="card-body">
              <p>
                <button class="btn btn-danger" title="tambah" data-toggle="modal" data-target="#modal_layanan"><i class="fas fa-plus"></i> Tambah Data</button>
                <button class="btn btn-success"><i class="fas fa-file-csv"></i> Export to Excel</button>
                <button class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Layanan Utama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Layanan Utama</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($layanan_utama as $lyu) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <th><?= $lyu['layananutama'] ?></th>
                        <th>
                          <a href="#" class="badge badge-success" title="hapus data" data-toggle="modal" data-target="#modal_layananedit">edit</a>
                          <a href="#" class="badge badge-danger" title="hapus data" data-toggle="modal" data-target="#modal_konfirmasi">delete</a>
                        </th>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- MODAL FADE INPUT DATA -->
          <div class="modal fade" id="modal_layanan" tabiindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Tambah Layanan Utama<h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                </div>
                <div class="modal-body">
                  <!-- FORM INPUT LAYANAN -->
                  <form action="<?= base_url('kader/layanan_utama'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" name="layananutama" id="layananutama" placeholder="Layanan Utama" required>
                    </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-danger btn-sm" type="submit">Simpan</button>
                  <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <!-- MODAL FADE UBAH DATA -->
          <div class="modal fade" id="modal_layananedit" tabiindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Ubah Data Layanan Utama<h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                </div>
                <div class="modal-body">
                  <!-- FORM INPUT LAYANAN -->
                  <form action="<?= base_url('kader/layanan_utama'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" name="layananutama" id="layananutama" value="<?= $lyu['layananutama']; ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                  <a href="<?= base_url(); ?>kader/editlayanan/" class="btn btn-danger btn-sm">Ubah</a>
                  <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <!-- MODAL KONFIRMASI -->
          <div class="modal fade" id="modal_konfirmasi" tabiindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Konfirmasi<h4>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                </div>
                <div class="modal-body">
                  <p id="confirm_str">Apakah anda yakin akan menghapus data? </p>
                </div>
                <div class="modal-footer">
                  <a class="btn btn-danger" href="<?= base_url(); ?>kader/deletelayanan/<?= $lyu['id']; ?>">Hapus</a>
                  <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                </div>
              </div>
            </div>
          </div>