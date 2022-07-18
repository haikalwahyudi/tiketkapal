<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-6 offset-3">
        <div class="card">
          <div class="card-header">
            <h5>Rekening Pembayaran</h5>
          </div>
          <div class="card-body">
            <form action="#" method="POST">
              <div class="form-group">
              <label>BRI</label>
              <input type="text" name="bri" class="form-control" required>
            </div>
            <div class="form-group">
              <label>BNI</label>
              <input type="text" name="bni" class="form-control" required>
            </div>
            <div class="form-group">
              <label>MANDIRI</label>
              <input type="text" name="mandiri" class="form-control" required>
            </div>
            <div class="form-group">
              <label>BCA</label>
              <input type="text" name="bca" class="form-control" required>
            </div>
            <div class="form-group">
              <label>NTB</label>
              <input type="text" name="ntb" class="form-control" required>
            </div>
            <div class="form-group">
              <label>OVO</label>
              <input type="text" name="ovo" class="form-control" required>
            </div>
            <div class="form-group">
              <label>DANA</label>
              <input type="text" name="dana" class="form-control" required>
            </div>
            <div class="form-group">
              <label>LINK AJA</label>
              <input type="text" name="linkaja" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>