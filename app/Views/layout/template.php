<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/template/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="<?= base_url(); ?>/template/images/favicon.png" /> -->
</head>

<body>
    <div class="container-scroller">

        <!-- Navbar / Header -->
        <?= $this->include('/layout/header'); ?>
        <!-- And Navbar / Header -->

        <div class="container-fluid page-body-wrapper">
            <!-- SideBar -->
            <?= $this->include('/layout/sidebar'); ?>
            <!-- And SideBar -->

            <div class="main-panel">

                <!-- Content -->
                <?= $this->renderSection('isi'); ?>
                <!-- And Content -->

                <!-- Footer -->
                <?= $this->include('/layout/footer'); ?>
                <!-- And Footer -->

            </div> <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= base_url(); ?>/template/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url(); ?>/template/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/template/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= base_url(); ?>/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url(); ?>/template/js/dataTables.select.min.js"></script>

    <!-- Plugin js for this page-->
    <script src="<?= base_url(); ?>/template/vendors/jquery-steps/jquery.steps.min.js"></script>
    <script src="<?= base_url(); ?>/template/vendors/jquery-validation/jquery.validate.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/template/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>/template/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>/template/js/template.js"></script>
    <script src="<?= base_url(); ?>/template/js/settings.js"></script>
    <script src="<?= base_url(); ?>/template/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url(); ?>/template/js/dashboard.js"></script>
    <script src="<?= base_url(); ?>/template/js/Chart.roundedBarCharts.js"></script>

    <!-- Custom js for this page-->
    <script src="<?= base_url(); ?>/template/js/wizard.js"></script>
    <!-- End custom js for this page-->
    <!-- <script type="text/javascript">
        $(document).ready(function(){
            $(.data).DataTable();
        });
    </script> -->
</body>

</html>