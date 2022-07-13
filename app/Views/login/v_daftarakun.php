
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Buat Akun</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <!-- Alert -->
            <?php if (session()->getFlashdata('simpan')) { ?>
              <div class="alert alert-success" id="notif">
                <?= session()->getFlashdata('simpan'); ?>
              </div>
            <?php } ?>
            <!-- And Alert -->
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center text-primary">
                <h3>SIPTIKA</h3>
              </div>
              <h4>Belum punya akun?</h4>
              <h6 class="font-weight-light">Silahkan buat kaun terlebih dahulu</h6>
              <form class="forms-sample" action="<?= base_url(); ?>/Login/daftarAksi" method="POST">
            <div class="form-group">
              <label for="exampleInputUsername1">Nama</label>
              <input type="text" class="form-control" name="nama" id="exampleInputUsername1" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
            </div>
            <div class="form-group">
              <label class="col-sm-5 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-4">
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
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">BUAT AKUN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Kamu sudah punya akun? <a href="<?= base_url(); ?>/Login" class="text-primary">Masuk</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/template/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/template/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/template/js/template.js"></script>
  <script src="<?= base_url(); ?>/template/js/settings.js"></script>
  <script src="<?= base_url(); ?>/template/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
