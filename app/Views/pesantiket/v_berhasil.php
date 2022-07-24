<?= $this->extend('layout/pengguna/p_template'); ?>
<?= $this->section('isi'); ?>
<?php if (session()->getFlashdata('simpan')) { ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('simpan'); ?>
    </div>
<?php } ?>
<h6><a href="<?= base_url(); ?>/Pesantiket/riwayat" class="btn btn-primary">Lihat Riwayat Pembelian Tiket</a></h6>
<div class="row">
    <?php foreach ($cariId as $c) { ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Tiket Kapal
                </div>
                <div class="card-body">
                    <h6>Pembelian tiket berhasil, Silahkan melakukan pembayaran melalui data dibawah</h6>
                    <table class="table table-striped table-sm">
                        <tbody>
                            <tr>
                                <th>Rekening Tujuan</th>
                                <td>: <?= $c->bank ?></td>
                            </tr>
                            <tr>
                                <th>No Tujuan</th>
                                <td>: <?= $c->norek ?></td>
                            </tr>
                            <tr>
                                <th>Total Pembayaran</th>
                                <td>:Rp. <?= $c->total_pembayaran ?></td>
                            </tr>
                            <tr>
                                <th>Status Pembayaran</th>
                                <td>
                                    <?php if ($c->aksi == 1) { ?>
                                        <span class="badge badge-danger">Belum dibayar</span>
                                    <?php } elseif ($c->aksi == 2) { ?>
                                        <span class="badge badge-warning">Sedang diproses</span>
                                    <?php } else { ?>
                                        <span class="badge badge-success">Berhasil</span>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <?php if ($c->aksi == 1) { ?>
                                        <form action="<?= base_url(); ?>/Pesantiket/uploadbukti" method="POST" enctype="multipart/form-data">
                                            <label for="">Upload Bukti</label>
                                            <input type="file" class="form-control" name="gambar" required>
                                            <input type="hidden" name="id_pemesanan" value="<?= $c->id_pemesanan ?>">
                                            <button type="submit" class="btn btn-primary btn-sm mt-2">Upload Bukti</button>
                                        </form>
                                    <?php } elseif ($c->aksi == 2) { ?>
                                        <center>
                                            <p class="badge badge-secondary">Bukti Pembayaran sudah diupload</p>
                                        </center>
                                    <?php } else { ?>
                                        <a href="<?= base_url(); ?>/Pesantiket/cetaktiket2/<?= $c->id_pemesanan ?>" class="btn btn-primary btn-icon-text btn-sm">
                                            Cetak
                                            <i class="ti-printer btn-icon-prepend"></i>
                                        </a>
                                    <?php } ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <p>Silahkan melakukan pembayaran dan upload bukti pembayaran</p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?= $this->endSection(); ?>