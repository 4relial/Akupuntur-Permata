<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Table-With-Search.css">
</head>

<body class="bg-gradient-primary" style="background: rgb(0,102,52);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" data-bss-hover-animate="tada" style="background: url(&quot;<?= base_url(); ?>assets/img/WhatsApp_Image_2023-07-06_at_10.52.15-removebg-preview.png&quot;) center / contain no-repeat;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth') ?>">

                                        <?= form_error(
                                            'email',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" name="email"></div>

                                        <?= form_error(
                                            'password',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>
                                        
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: rgb(0,102,52);">Login</button>
                                        <hr>
                                        <hr>
                                    </form>
                                    <div class="text-center"></div>
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bs-init.js"></script>
    <script src="<?= base_url(); ?>assets/js/Table-With-Search-search-table.js"></script>
    <script src="<?= base_url(); ?>assets/js/theme.js"></script>
</body>

</html>