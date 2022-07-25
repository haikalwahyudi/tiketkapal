<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Landing Page SIPTIKA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>/landingpage/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>/landingpage/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/landingpage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>/landingpage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>/landingpage/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">SIPTIKA</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Beranda</a>
                        <?php if (session()->get('log_in') == true) { ?>
                            <a href="<?= base_url() ?>/Home" class="nav-item nav-link">Dashboard</a>
                        <?php } ?>
                        <?php if (session()->get('log_in') == true) { ?>
                            <a href="<?= base_url() ?>/pesantiket" class="nav-item nav-link">Pesan Tiket</a>
                        <?php } else { ?>
                            <a href="<?= base_url() ?>/Login" onclick="return confirm('Anda belum login, silahkan login terlebih dahulu')" class="nav-item nav-link">Pesan Tiket</a>
                        <?php } ?>
                        <!-- <a href="#" class="nav-item nav-link">Kapal</a> -->
                        <!-- <a href="#about" class="nav-item nav-link">About</a> -->
                        <!-- <a href="#overview" class="nav-item nav-link">Overview</a>
                        <a href="#features" class="nav-item nav-link">Features</a>
                        <a href="#pricing" class="nav-item nav-link">Pricing</a> -->
                        <!-- <a href="#testimonial" class="nav-item nav-link">Testimonial</a> -->
                        <a href="#contact" class="nav-item nav-link">Kontak</a>
                    </div>
                    <?php

                    use CodeIgniter\Database\Query;

                    if (session()->get('log_in') == true) { ?>
                        <a href="<?= base_url(); ?>/Login/logout" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Keluar</a>
                    <?php } else { ?>
                        <a href="<?= base_url(); ?>/Login" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Masuk</a>
                    <?php } ?>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <?php if (session()->get('log_in') == true) { ?>
                                <h4 class="text-white mb-4 animated slideInDown">Selamat datang <?= session()->get('nama'); ?></h4>
                            <?php } ?>
                            <h1 class="text-white mb-4 animated slideInDown">Selamat datang di website kami</h1>
                            <p class="text-white pb-3 animated slideInDown">Silahkan melakukan pemesanan tiket anda melalui tombol dibawah.</p>
                            <!-- <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 58px;">
                                <button type="button" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Free Trail</button>
                            </div> -->
                            <?php if (session()->get('log_in') == true) { ?>
                                <a href="<?= base_url() ?>/pesantiket" class="btn btn-light rounded-pill btn-lg">Pesan Tiket</a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/login" onclick="return confirm('Anda belum login, silahkan login terlebih dahulu')" class="btn btn-light rounded-pill btn-lg">Pesan Tiket</a>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="<?= base_url(); ?>/img/awal.png" alt="kapal" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <!-- <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-edit text-primary mb-4"></i>
                            <h5 class="mb-3">Fully Customizable</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-sync text-primary mb-4"></i>
                            <h5 class="mb-3">App Integration</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-draw-polygon text-primary mb-4"></i>
                            <h5 class="mb-3">Drag And Drop</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End -->


        <!-- Advanced Feature Start -->
        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Data</h1>
                    <!-- <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="advanced-feature-item text-center rounded py-2 px-2">
                            <img src="<?= base_url(); ?>/img/default.png" alt="kapal" width="100%">
                            <h5 class="mb-3 mt-3">Fully Customizable</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="advanced-feature-item text-center rounded py-2 px-2">
                            <img src="<?= base_url(); ?>/img/default.png" alt="kapal" width="100%">
                            <h5 class="mb-3 mt-3">App Integration</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-2 px-2">
                            <img src="<?= base_url(); ?>/img/default.png" alt="kapal" width="100%">
                            <h5 class="mb-3 mt-3">High Resolution</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="advanced-feature-item text-center rounded py-2 px-2">
                            <img src="<?= base_url(); ?>/img/default.png" alt="kapal" width="100%">
                            <h5 class="mb-3 mt-3">Drag And Drop</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advanced Feature End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Data Data Kapal Di Pelabuhan</h1>
                    <!-- <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p> -->
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                    <?php
                    $db = \Config\Database::connect();
                    $query = $db->query("SELECT * FROM kapal")->getResult();
                    foreach ($query as $kpl) {
                    ?>
                        <div class="testimonial-item rounded my-4">
                            <div class="advanced-feature-item text-center rounded py-2 px-2">
                                <img src="<?= base_url(); ?>/img/<?= $kpl->gambar; ?>" alt="kapal" width="100%">
                                <h5 class="mb-3 mt-3"><?= $kpl->nm_kapal; ?></h5>
                                <p class="m-0"><?= $kpl->deskripsi; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">What Our Clients Say</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded my-4">
                        <div class="advanced-feature-item text-center rounded py-2 px-2">
                            <img src="<?= base_url(); ?>/img/default.png" alt="kapal" width="100%">
                            <h5 class="mb-3 mt-3">Fully Customizable</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url(); ?>/landingpage/img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url(); ?>/landingpage/img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Hubungi Kami</h1>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Telpon</p>
                                <h5 class="mb-0">+012 345 6789</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Email</p>
                                <h5 class="mb-0">info@gmail.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Alamat</p>
                                <h5 class="mb-0">Jln. ....</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">

            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">Copyright © <?= date('Y') ?>. Udang <a href="https://anakdesapk.blogspot.com/" target="_blank">Anak Desa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/easing/easing.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url(); ?>/landingpage/js/main.js"></script>
</body>

</html>