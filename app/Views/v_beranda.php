<?= $this->extend('/layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat Datang <?= session()->get('nama'); ?></h3>
                </div>
            </div>
        </div>
    </div>
    <?php if (session()->get('level') == "Admin") { ?>
        <div class="row">
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Data Kapal</p>
                                <p class="fs-30 mb-2"><?= $jkpl; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Data Pengguna</p>
                                <p class="fs-30 mb-2"><?= $jp; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card" style="background-color: #BEB4DD">
                    <div class="card-people">
                        <img src="<?= base_url(); ?>/img/kapal.png" alt="people">
                        <!-- <div class="weather-info">
                        <div class="d-flex">
                            <div>
                                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                            </div>
                            <div class="ml-2">
                                <h4 class="location font-weight-normal">Bangalore</h4>
                                <h6 class="font-weight-normal">India</h6>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>

        </div>
    <?php } elseif (session()->get('level') == "Pengguna") { ?>
        <div class="row">
            <div class="col-md-6 grid-margin transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Data Tiket</p>
                        <p class="fs-30 mb-2"><?= $jt ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card" style="background-color: #BEB4DD">
                    <div class="card-people">
                        <img src="<?= base_url(); ?>/img/kapal.png" alt="people">
                        <!-- <div class="weather-info">
                        <div class="d-flex">
                            <div>
                                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                            </div>
                            <div class="ml-2">
                                <h4 class="location font-weight-normal">Bangalore</h4>
                                <h6 class="font-weight-normal">India</h6>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>

        </div>
    <?php } ?>
</div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>