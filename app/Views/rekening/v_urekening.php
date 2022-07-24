<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-6 offset-3">
      <div class="card">
        <div class="card-header">
          <h4 class="text-primary">Ubah Rekening Pembayaran</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url(); ?>/Rekening/urekeningaksi" method="POST">
            <div class="form-group">
              <label>Nama Bank</label>
              <input type="text" name="bank" value="<?= $data->bank; ?>" class="form-control" required>
              <input type="hidden" name="id" value="<?= $data->id_pembayaran; ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>No Rekening</label>
              <input type="number" name="norek" value="<?= $data->norek; ?>" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Ubah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>