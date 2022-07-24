<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-6 offset-3">
      <div class="card">
        <div class="card-header">
          <h4 class="text-primary">Tambah Rekening Pembayaran</h4>
        </div>
        <div class="card-body">
          <?php if (session()->getFlashdata('simpan')) { ?>
            <div class="alert alert-success"><?= session()->getFlashdata('simpan') ?></div>
          <?php } ?>
          <form action="<?= base_url(); ?>/Rekening/trekeningaksi" method="POST">
            <div class="form-group">
              <label>Nama Bank</label>
              <input type="text" name="bank" class="form-control" required>
            </div>
            <div class="form-group">
              <label>No Rekening</label>
              <input type="number" name="norek" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>