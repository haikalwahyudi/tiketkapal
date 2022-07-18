<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-6 offset-3">
      <div class="card">
        <div class="card-header">
          <h4 class="text-primary">Nomor Rekening Pembayaran</h4>
        </div>
        <div class="card-body">
          <?php if (session()->getFlashdata('ubah')) { ?>
            <div class="alert alert-success"><?= session()->getFlashdata('ubah') ?></div>
          <?php } ?>
          <form action="<?= base_url(); ?>/Rekening/urekeningAksi" method="POST">
            <div class="form-group">
              <label>BRI</label>
              <input type="text" name="bri" value="<?= $data[0]->bri ?>" class="form-control" required>
              <input type="hidden" name="id" value="<?= $data[0]->id_pembayaran ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>BNI</label>
              <input type="text" name="bni" value="<?= $data[0]->bni ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>MANDIRI</label>
              <input type="text" name="mandiri" value="<?= $data[0]->mandiri ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>BCA</label>
              <input type="text" name="bca" value="<?= $data[0]->bca ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>NTB</label>
              <input type="text" name="ntb" value="<?= $data[0]->ntb ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>OVO</label>
              <input type="text" name="ovo" value="<?= $data[0]->ovo ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>DANA</label>
              <input type="text" name="dana" value="<?= $data[0]->dana ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>LINK AJA</label>
              <input type="text" name="linkaja" value="<?= $data[0]->linkaja ?>" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>