<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
    <div class="row mb-5">
        <div class="col col-md-8 offset-2">
            <?php if (session()->getFlashdata('simpan')) { ?>
                <div class="alert alert-success" id="notif">
                    <?= session()->getFlashdata('simpan'); ?>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Kapal</h4>
                    <form class="forms-sample" action="<?= base_url(); ?>/Kapal/tkapalaksi" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Gambar</label>
                            <input type="file" class="form-control" name="gambar" id="exampleInputUsername1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Kapal</label>
                            <input type="text" class="form-control" name="nm_kapal" id="exampleInputUsername1" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Kapal</label>
                            <textarea name="deskripsi" cols="30" rows="5" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"><i class="ti-save"></i> Simpan</button>
                        <a href="<?= base_url(); ?>/kapal" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- content-wrapper ends -->

    <?= $this->endSection(); ?>