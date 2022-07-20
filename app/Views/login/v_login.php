
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
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
            <?php if (session()->getFlashdata('gagal')) { ?>
              <div class="alert alert-danger" id="notif">
                <?= session()->getFlashdata('gagal'); ?>
              </div>
            <?php } ?>
            <!-- And Alert -->
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center text-primary">
                <h3>SIPTIKA</h3>
              </div>
              <!-- <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6> -->
              <form class="pt-3" action="<?= base_url(); ?>/login/cekLogin" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" required placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" required placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>

                  <a class="btn btn-primary btn-lg font-weight-medium auth-form-btn float-right" href="<?= base_url(); ?>/Home/landingpage">Kembali</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Belum punya akun? <a href="<?= base_url(); ?>/login/daftar" class="text-primary">Daftar</a>
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
