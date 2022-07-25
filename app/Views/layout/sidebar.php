<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <?php if (session()->get('level') == "Admin") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/home">
                    <i class="ti-dashboard menu-icon"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/Pesantiket/dtiket">
                    <i class="ti-files menu-icon"></i>
                    <span class="menu-title">Data Pemesanan Tiket</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/error"">
                <i class=" ti-receipt menu-icon"></i>
                    <span class="menu-title">Data Transaksi</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/Kapal"">
                <i class=" ti-agenda menu-icon"></i>
                    <span class="menu-title">Data Kapal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/rekening"">
                <i class=" ti-credit-card menu-icon"></i>
                    <span class="menu-title">Rekening Pembayaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/Laporan"">
                <i class=" ti-agenda menu-icon"></i>
                    <span class="menu-title">Laporan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="ti-face-smile menu-icon"></i>
                    <span class="menu-title">Data Pengguna</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>/Pengguna">Pengguna</a></li>
                    </ul>
                </div>
            </li>
        <?php } else if (session()->get('level') == "Pengguna") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/home">
                    <i class="ti-dashboard menu-icon"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/home/landingpage">
                    <i class="ti-home menu-icon"></i>
                    <span class="menu-title">Landing Page</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/pesantiket/riwayat">
                    <i class="ti-reload menu-icon"></i>
                    <span class="menu-title">Riwayat</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>
<!-- partial -->