<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <!-- Alert -->
            <?php if (session()->getFlashdata('simpan')) { ?>
                <div class="alert alert-success" id="notif">
                    <?= session()->getFlashdata('simpan'); ?>
                </div>
            <?php } elseif (session()->getFlashdata('ubah')) { ?>
                <div class="alert alert-success" id="notif">
                    <?= session()->getFlashdata('ubah'); ?>
                </div>
            <?php } elseif (session()->getFlashdata('hapus')) { ?>
                <div class="alert alert-success" id="notif">
                    <?= session()->getFlashdata('hapus'); ?>
                </div>
            <?php } ?>
            <!-- And Alert -->
            <div class="card">
                <div class="card-body">
                    <p class="card-title"><a href="<?= base_url(); ?>/Kapal/tkapal" type="button" class="btn btn-inverse-primary btn-sm"><i class="ti-plus menu-icon"></i> Tambah</a></p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="display expandable-table" style="width:100%">
                                    <thead>
                                        <th>NO</th>
                                        <th width="300px">GAMBAR</th>
                                        <th>NAMA KAPAL</th>
                                        <th>DESKRIPSI</th>
                                        <th>AKSI</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data as $d) {
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><img src="<?= base_url(); ?>/img/<?= $d->gambar; ?>" alt="gambar" width="40%"></td>
                                                <td><?= $d->nm_kapal; ?></td>
                                                <td><?= $d->deskripsi; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>/Kapal/ukapal/<?= $d->id_kapal; ?>" type="button" class="btn btn-inverse-warning btn-rounded btn-sm" title="Ubah">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                    <a href="<?= base_url(); ?>/Kapal/hkapal/<?= $d->id_kapal; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-inverse-danger btn-rounded btn-sm" title="Hapus">
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