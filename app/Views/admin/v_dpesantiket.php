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
            <?php } ?>
            <!-- And Alert -->
            <div class="card">
                <div class="card-body">
                    <!-- <p class="card-title"><a href="<?= base_url(); ?>/Pengguna/tpengguna" type="button" class="btn btn-inverse-primary btn-sm"><i class="ti-plus menu-icon"></i> Tambah</a></p> -->
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="display expandable-table" style="width:100%">
                                    <thead>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>TANGGAL PEMESANAN</th>
                                        <th>PENUMPANG DEWASA</th>
                                        <th>PENUMPANG BAYI</th>
                                        <th>JENIS KENDARAAN</th>
                                        <th>BUKTI TRANSFER</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data as $d) {
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $d->nm_pemesan; ?></td>
                                                <td><?= $d->tgl_pemesanan; ?></td>
                                                <td><?= $d->dewasa ?></td>
                                                <td><?= $d->bayi ?></td>
                                                <td><?= $d->jeniskendaraan; ?></td>
                                                <td>
                                                    <?php if ($d->gambar == "default.png") { ?>
                                                        <span class="badge badge-secondary">Bukti pembayaran belum diupload</span>
                                                    <?php } else { ?>
                                                        <img src="<?= base_url(); ?>/img/<?= $d->gambar; ?>" alt="gambar" width="40%">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($d->aksi == 1) { ?>
                                                        <span class="badge badge-danger">Menunggu pembayaran</span>
                                                    <?php } elseif ($d->aksi == 2) { ?>
                                                        <span class="badge badge-warning">Menunggu Konfirmasi</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-success">Dikonfirmasi</span>
                                                    <?php } ?>
                                                <td>
                                                    <?php if ($d->aksi == 1) { ?>
                                                        <span class="badge badge-danger"></span>
                                                    <?php } elseif ($d->aksi == 2) { ?>
                                                        <a href="<?= base_url(); ?>/Pesantiket/konfirmasi/<?= $d->id_pemesanan; ?>" onclick="return confirm('Yakin ingin konfirmasi pemesanan ini')" type="button" class="btn btn-inverse-success btn-rounded btn-sm" title="Konfirmasi">
                                                            <i class="ti-check"></i>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a href="<?= base_url(); ?>/Pesantiket/cetaktiket3/<?= $d->id_pemesanan; ?>" class="btn btn-primary btn-icon-text btn-sm">
                                                            <i class="ti-printer btn-icon-prepend text-center"></i>
                                                        </a>
                                                    <?php } ?>
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