<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login PT JAYA MAJU</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {

            min-height: 100vh;

            background:
                linear-gradient(rgba(10, 15, 40, .55),
                    rgba(10, 15, 40, .65)),
                url("<?= base_url('assets/img/ptmaju.png'); ?>");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-login {
            width: 100%;
            max-width: 1200px;
            padding: 30px;
        }

        select.form-control {
            background: rgba(255, 255, 255, .10) !important;
            color: white !important;
            border: none !important;
            border-bottom: 1px solid rgba(255, 255, 255, .5) !important;
            border-radius: 0 !important;
            box-shadow: none !important;
        }

        select.form-control option {
            color: black;
        }

        /* =======================
   NAVBAR
======================= */

        .top-navbar {

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 15px 30px;

            border-radius: 20px;

            background: rgba(255, 255, 255, .08);

            backdrop-filter: blur(15px);

            border: 1px solid rgba(255, 255, 255, .20);

            margin-bottom: 50px;
        }

        .logo-brand {

            color: white;

            font-size: 24px;

            font-weight: 700;

            letter-spacing: 1px;
        }

        .nav-menu a {

            color: white;

            text-decoration: none;

            margin: 0 15px;

            font-size: 14px;

            transition: .3s;
        }

        .nav-menu a:hover {

            color: #6ee7ff;
        }

        .search-box {

            padding: 8px 18px;

            border-radius: 30px;

            border: 1px solid rgba(255, 255, 255, .25);

            color: white;

            background: rgba(255, 255, 255, .08);
        }

        /* =======================
   LOGIN CARD
======================= */

        .login-wrapper {

            display: flex;

            justify-content: center;
        }

        .login-card {

            width: 450px;

            padding: 45px;

            border-radius: 25px;

            background: rgba(255, 255, 255, .08);

            backdrop-filter: blur(20px);

            border: 1px solid rgba(255, 255, 255, .25);

            box-shadow:
                0 20px 60px rgba(0, 0, 0, .45);

            color: white;
        }

        .logo-area {

            text-align: center;

            margin-bottom: 20px;
        }

        .logo-area i {

            font-size: 60px;

            color: #6ee7ff;

            text-shadow:
                0 0 20px rgba(110, 231, 255, .8);
        }

        .login-title {

            text-align: center;

            font-size: 38px;

            font-weight: 700;

            margin-bottom: 5px;
        }

        .login-subtitle {

            text-align: center;

            margin-bottom: 35px;

            color: rgba(255, 255, 255, .8);
        }

        /* =======================
   FORM
======================= */

        .form-control {

            background: transparent !important;

            border: none !important;

            border-bottom: 1px solid rgba(255, 255, 255, .5) !important;

            border-radius: 0 !important;

            color: white !important;

            box-shadow: none !important;

            padding-left: 0 !important;
        }

        .form-control::placeholder {

            color: rgba(255, 255, 255, .6);
        }

        .form-control:focus {

            border-bottom: 2px solid #6ee7ff !important;
        }

        .btn-login {

            width: 100%;

            border: none;

            padding: 14px;

            border-radius: 12px;

            font-weight: 700;

            color: white;

            margin-top: 10px;

            background: linear-gradient(135deg,
                    #00c6ff,
                    #0072ff);

            transition: .3s;
        }

        .btn-login:hover {

            transform: translateY(-2px);

            box-shadow:
                0 10px 20px rgba(0, 114, 255, .4);
        }

        .alert {

            border-radius: 12px;

            border: none;
        }

        .footer-text {

            text-align: center;

            margin-top: 20px;

            font-size: 13px;

            color: rgba(255, 255, 255, .7);
        }

        @media(max-width:768px) {

            .nav-menu {
                display: none;
            }

            .top-navbar {
                justify-content: center;
            }

            .login-card {
                width: 100%;
            }

        }
    </style>

</head>

<body>

    <div class="container-login">

        <div class="top-navbar">

            <div class="logo-brand">
                PT JAYA MAJU
            </div>

        </div>

        <div class="login-wrapper">

            <div class="login-card">

                <div class="logo-area">
                    <i class="fas fa-angle-double-up"></i>
                </div>

                <h1 class="login-title">
                    LOGIN
                </h1>

                <p class="login-subtitle">
                    PT JAYA MAJU
                </p>

                <?php if ($this->session->flashdata('error')): ?>

                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error'); ?>
                    </div>

                <?php endif; ?>

                <form method="post"
                    action="<?= site_url('auth/login'); ?>">

                    <div class="form-group mb-4">
                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            placeholder="Username"
                            required>
                    </div>

                    <dv class="form-group mb-4">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="password"
                            required>
                    </dv>

                    <div class="form-group mb-4">
                        <select
                            name="role"
                            class="form-control"
                            required>

                            <option value="">
                                -- Pilih Role --
                            </option>

                            <option value="admin">
                                Admin
                            </option>

                            <option value="manager">
                                manager
                            </option>

                            <option value="sales">
                                Sales
                            </option>
                        </select>
                    </div>

                    <button
                        type="submit"
                        class="btn-login">

                        Masuk

                    </button>

                </form>

                <div class="footer-text">
                    Inovasi Untuk Masa Depan
                </div>

            </div>

        </div>

    </div>

    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>