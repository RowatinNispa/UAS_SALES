<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login PT JAYA MAJU</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
    rel="stylesheet"
    type="text/css">

    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>"
    rel="stylesheet">


    <!-- TAMBAHAN CSS -->
    <style>
    body{
        background: linear-gradient(
        135deg,
        #74ebd5,
        #ACB6E5
        );
    }

    .card{
        border-radius:20px;
    }

    .bg-login-image{
        background:url("<?=base_url('assets/img/logo.png');?>");
        background-position:center;
        background-size:cover;
        background-repeat:no-repeat;
    }

    .judul-login{
        font-size:32px;
        font-weight:bold;
        color:#17a2b8;
    }

    .subjudul{
        color:gray;
        margin-bottom:30px;
    }

    .form-control-user{
        border-radius:30px;
    }

    .btn-user{
        border-radius:30px;
        background:#17a2b8;
        border:none;
    }

    .btn-user:hover{
        background:#138496;
    }

    .login-card{
        margin-top:70px;
    }

    </style>
</head>

<body>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card login-card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- GAMBAR -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>

                            <!-- FORM LOGIN -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="judul-login">
                                            PT JAYA MAJU
                                        </h1>
                                        <p class="subjudul">
                                            Sales Order Management System
                                        </p>
                                    </div>

                                    <?php if ($this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= $this->session->flashdata('error'); ?>
                                        </div>

                                    <?php endif; ?>
                                    <form class="user"
                                    method="post"
                                    action="<?= site_url('auth/login');?>">
                                        <div class="form-group">
                                            <input
                                            type="text"
                                            name="username"
                                            class="form-control form-control-user"
                                            placeholder="Username"
                                            required>
                                        </div>

                                        <div class="form-group">
                                            <input
                                            type="password"
                                            name="password"
                                            class="form-control form-control-user"
                                            placeholder="Password"
                                            required>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="customCheck">
                                                <label
                                                class="custom-control-label"
                                                for="customCheck">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>

                                        <button
                                        type="submit"
                                        class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>
</body>
</html>