<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="<?= site_url('assets/materio') ?>/assets/" data-template="vertical-menu-template-free"
  data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= site_url('assets/materio') ?>/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="<?= site_url('assets/materio') ?>/assets/vendor/fonts/remixicon/remixicon.css" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="<?= site_url('assets/materio') ?>/assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= site_url('assets/materio') ?>/assets/vendor/css/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= site_url('assets/materio') ?>/assets/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= site_url('assets/materio') ?>/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet"
    href="<?= site_url('assets/materio') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?= site_url('assets/materio') ?>/assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="<?= site_url('assets/materio') ?>/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= site_url('assets/materio') ?>/assets/js/config.js"></script>
</head>

<body>
  <div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-6 mx-4">
        <!-- Login -->
        <div class="card p-7">
          <div class="card-body mt-1">
            <h4 class="mb-1">Selamat datang 👋🏻</h4>
            <h6 class="mb-1">Silahkan login terlebih dahulu</h>
            <p class="mb-5"></p>
            <form id="formAuthentication" class="mb-5" action="<?php echo base_url() . 'C_login' ?>" method="POST">
              <div class="form-floating form-floating-outline mb-5">
                <input type="text" class="form-control" id="email" name="email"
                  placeholder="Enter your email or username" required autofocus />
                <label for="email">Email</label>
              </div>
              <div class="mb-5">
                <div class="form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input type="password" id="password" class="form-control" name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" required/>
                      <label for="password">Password</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
                  </div>
                </div>
              </div>
              <div class="mb-5">
                  <button class="btn btn-primary d-grid w-100" type="submit" name="login" value="login">Login</button>
                </div>
              <!-- <form id="formAuthentication" class="mb-5" action="index.html" method="POST">
                <div class="form-floating form-floating-outline mb-5">
                  <div class="page">
                    <h1>Login Form</h1>
                    <form method="post">
                      <div class="row">
                        <input type="email" autocomplete="off" name="email" placeholder="Email" required autofocus>
                        <input type="password" autocomplete="off" name="password" placeholder="Password" required>
                        <input type="submit" name="login" value="Login">
                    </form>
                  </div>
                </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= site_url('assets/materio') ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= site_url('assets/materio') ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= site_url('assets/materio') ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= site_url('assets/materio') ?>/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= site_url('assets/materio') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= site_url('assets/materio') ?>/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= site_url('assets/materio') ?>/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>