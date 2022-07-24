<div class="navbar">
    <div class="container">
        <a href="<?= base_url() ?>/Home/landingpage" class="navbar-brand">
            <h3 class="text-primary">SIPTIKA</h3>
        </a>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <!-- <img src="<?= base_url(); ?>/template/images/faces/face28.jpg" alt="profile" /> -->
                        <span class="mr-4">Hallo, <?= session()->get('nama') ?></span>
                        <i class="ti-user menu-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <!-- a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Settings
                    </a> -->
                        <a href="<?= base_url(); ?>/login/logout" class="dropdown-item" onclick="return confirm('Yakin ingin keluar?')">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>
        </div>
        <!--navbar-menu-->
    </div>
    <!--contauner-->
</div>