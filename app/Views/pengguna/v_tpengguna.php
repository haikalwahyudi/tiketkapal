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
          <h4 class="card-title">Tambah Data Pengguna</h4>
          <form class="forms-sample" action="<?= base_url(); ?>/Pengguna/tpenggunaAksi" method="POST">
            <div class="form-group">
              <label for="exampleInputUsername1">Nama</label>
              <input type="text" class="form-control" name="nama" id="exampleInputUsername1" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
            </div>
            <div class="form-group">
              <label class="col-sm-6 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="membershipRadios1" value="Laki-Laki" checked>
                    Laki-Laki
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="membershipRadios2" value="Perempuan">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">No Hp</label>
              <input type="number" class="form-control" name="nohp" id="exampleInputUsername1" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label for="exampleSelectGender">Level</label>
              <select class="form-control" name="level" id="exampleSelectGender">
                <option>-Pilih-</option>
                <option value="Admin">Admin</option>
                <option value="Pengguna">Pengguna</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2"><i class="ti-save"></i> Simpan</button>
            <a href="<?= base_url(); ?>/Pengguna" class="btn btn-light">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div><!-- content-wrapper ends -->

  <?= $this->endSection(); ?>