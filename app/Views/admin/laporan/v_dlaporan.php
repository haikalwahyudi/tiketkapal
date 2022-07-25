<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">

                            <div class="col-md-10">
                                <form action="#" method="POST">
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="">Masukkan Tanggal Awal</label>
                                                    <input type="date" name="tgl_awal" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="">Masukkan Tanggal Akhir</label>
                                                    <input type="date" name="tgl_awal" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-icon-text">
                                                    <i class="ti-search btn-icon-prepend"></i>
                                                    Cari
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <br>
                                <a href="#" class="btn btn-primary">
                                    <i class="ti-printer"></i> Cekatk
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="display expandable-table" style="width:100%">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Nik</th>
                                        <th>No Hp</th>
                                        <th>Total Pembayaran</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data as $d) {
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $d->nm_pemesan; ?></td>
                                                <td><?= $d->jk; ?></td>
                                                <td><?= $d->tempat_lahir; ?>, <?= $d->tgl_lahir ?></td>
                                                <td><?= $d->tgl_pemesanan; ?></td>
                                                <td><?= $d->nik; ?></td>
                                                <td><?= $d->nohp; ?></td>
                                                <td><?= $d->total_pembayaran; ?></td>
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