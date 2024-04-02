<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | E-Arsip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">
    <!-- App css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" disabled />
    <link href="<?php echo base_url() ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" disabled />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- icons -->
    <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">
                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <h2 class="logo text-center logo-lg">
                                        Login
                                    </h2>
                                </div>
                                <p class="text-muted mb-4 mt-3">Selamat datang di Sistem Informasi Arsip</p>
                            </div>
                            <?php
                            if ($this->session->flashdata('success')) {
                                ?>
                                <div class="alert alert-success alert-dismissible fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Berhasil!</strong> <?php echo $this->session->flashdata('success'); ?>
                                </div>
                                <?php
                            }
                            if ($this->session->flashdata('error')) {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Galar!</strong> <?php echo $this->session->flashdata('error'); ?>
                                </div>
                                <?php
                            }
                            ?>
                            <form action="" method="POST">
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required=""
                                        placeholder="Masukkan alamat email" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Masukkan password" name="password" required>
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-lg" type="submit"> Log In </button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <footer class="footer footer-alt text-white">
        <script>document.write(new Date().getFullYear())</script> &copy; E-Arsip | Development By Carina Purba
    </footer>
    <!-- Vendor js -->
    <script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

</body>

</html>