<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
    <div class="card">
        <div class="card-header text-center">Filter Laporan</div>
        <div class="card-body">
            <form action="<?= base_url(); ?>/Laporan/filter" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Tanggal Awal</label>
                            <input type="date" name="tgl_awal" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Tanggal Akhir</label>
                            <input type="date" name="tgl_akhir" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">&nbsp;</label>
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="ti-search"></i> Cari</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> <br>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Laporan Tanggal</h6>
                            <p><?= $tanggal['awal']; ?> - <?= $tanggal['akhir']; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a href="<?= base_url(); ?>/Laporan/filter" class="btn btn-primary float-right">
                                <i class="ti-printer"></i> Cekatk
                            </a>
                        </div>
                    </div><br>
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
                                        foreach ($caridata as $d) {
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