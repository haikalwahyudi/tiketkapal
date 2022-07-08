<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
     <div class="row">
            <div class="col-md-10 offset-1 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title"><a href="<?= base_url(); ?>/Pengguna/tpengguna" type="button" class="btn btn-inverse-primary btn-sm"><i class="ti-plus menu-icon"></i> Tambah</a></p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="display expandable-table" style="width:100%">
                          <thead>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>JENIS KELAMIN</th>
                            <th>NO HP</th>
                            <th>PASSWORD</th>
                            <th>LEVEL</th>
                            <th>AKSI</th>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            foreach ($data as $d) {
                            ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d->nm_pengguna; ?></td>
                          <td>udang@gmail.com</td>
                          <td>Laki-LAki</td>
                          <td>083124536726</td>
                          <td>udang1234</td>
                          <td>Admin</td>
                          <td>
                            <a href="<?= base_url(); ?>/Pengguna/upengguna" type="button" class="btn btn-inverse-warning btn-rounded btn-sm" title="Ubah">
                                <i class="ti-pencil"></i>
                            </a>
                            <a href="<?= base_url(); ?>/Error" type="button" class="btn btn-inverse-danger btn-rounded btn-sm" title="Hapus">
                                <i class="ti-trash"></i>
                            </a>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
</div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>