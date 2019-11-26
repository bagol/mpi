<?php if($this->session->userdata('role') == 'admin'){ ?>
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="<?= base_url('admin') ?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="<?= base_url('Admin/user') ?>"><i class="fas fa-users"></i>User</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="<?= base_url('Admin/cabang') ?>"><i class="zmdi zmdi-city-alt"></i>Cabang</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-file"></i>Laporan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="<?= base_url('admin') ?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="<?= base_url('Admin/user') ?>"><i class="fas fa-users"></i>User</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="<?= base_url('Admin/cabang') ?>"><i class="zmdi zmdi-city-alt"></i>Cabang</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-file"></i>Laporan</a>
                    </li>
                </ul>

            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
<?php }else if($this->session->userdata('role') == 'penerima') {?>
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                </ul>

            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

<?php }else if($this->session->userdata('role') == 'penyidik') {?>
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                </ul>

            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

<?php }else if($this->session->userdata('role') == 'resolusi') {?>
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="<?= base_url(); ?>/images/Logo/landscape.png" width="200px" alt="Ombudsman" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Pengaduan</a>
                    </li>
                </ul>

            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

<?php }?>
