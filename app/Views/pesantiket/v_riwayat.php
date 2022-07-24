<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>
<div class="content-wrapper">
    <?php if (session()->getFlashdata('simpan')) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('simpan'); ?>
        </div>
    <?php } ?>
    <div class="row">
        <?php if ($cariId) { ?>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <table class="display expandable-table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Total Pembayara</th>
                                    <th>Status Pembayara</th>
                                    <th>Bukti Transfer</th>
                                    <th>Upload Bukti</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($cariId as $c) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $c->nm_pemesan ?></td>
                                        <td><?= $c->jk ?></td>
                                        <td>Rp.<?= $c->total_pembayaran ?></td>
                                        <td>
                                            <?php if ($c->aksi == 1) { ?>
                                                <span class="badge badge-danger">Belum dibayar</span>
                                            <?php } elseif ($c->aksi == 2) { ?>
                                                <span class="badge badge-warning">Sedang diproses</span>
                                            <?php } else { ?>
                                                <span class="badge badge-success">Berhasil</span>
                                            <?php } ?>
                                        </td>
                                        <td> <img src="<?= base_url(); ?>/img/<?= $c->gambar; ?>" width="60%" alt="BuktiTf"> </td>
                                        <td>
                                            <?php if ($c->aksi == 3) { ?>
                                                <a href="<?= base_url(); ?>/Pesantiket/cetaktiket/<?= $c->id_pemesanan; ?>" class="btn btn-primary btn-icon-text btn-sm">
                                                    Cetak
                                                    <i class="ti-printer btn-icon-prepend"></i>
                                                </a>
                                            <?php } elseif ($c->aksi == 2) { ?>
                                                <p class="badge badge-secondary">Bukti pembayaran sudah diupload</p>
                                            <?php } else { ?>
                                                <form action="<?= base_url(); ?>/Pesantiket/uploadbuktiriwayat" method="POST" enctype="multipart/form-data">
                                                    <input type="file" name="gambar" width="5px" class="btn btn-primary btn-sm" required>
                                                    <input type="hidden" name="id_pemesanan" value="<?= $c->id_pemesanan ?>">
                                                    <button type="submit" class="btn btn-sm btn-primary mt-2">Upload</button>
                                                </form>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="alert alert-danger">
                <h3>Belum ada riwayat pemesanan tiket</h3>
                <a href="<?= base_url() ?>/pesantiket" class="nav-link">Pesan Tiket Sekarang</a>
            </div>
        <?php } ?>
    </div>
</div>

<?= $this->endSection(); ?>