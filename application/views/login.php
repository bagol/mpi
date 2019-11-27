<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/'); ?>cooladmin/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/'); ?>cooladmin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <?php if ($this->session->flashdata('msg')): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= $this->session->flashdata('msg') ?> 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php endif ?>
                        <div class="login-logo">
                            <h2>Login</h2>
                        </div>
                        <div class="login-form">
                            <form action="<?= base_url('Login/verifikasi')?>" method="post">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input class="au-input au-input--full" type="text" name="nip" placeholder="NIP" autocomplete="0">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" autocomplete="0">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Lupa Password</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>cooladmin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/'); ?>cooladmin/js/main.js"></script>

</body>

</html>
<!-- end document-->