<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $page_title . ' | ' . APP_NAME; ?></title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url() . 'resources/vendors/typicons/typicons.css'; ?>">
  <link rel="stylesheet" href="<?= base_url() . 'resources/vendors/css/vendor.bundle.base.css'; ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() . 'resources/css/themes/horizontal-layout-light.css'; ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() . 'resources/images/favicon.png'; ?>"/>
</head>
<body>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="main-panel">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="http://www.urbanui.com/polluxui/template/images/logo-dark.svg" alt="logo">
              </div>
              <h4>Oooh! Forgot Password</h4>
              <h6 class="font-weight-light">Enter your recovery Email Address</h6>
                <?= form_open('authenticate/login', array('class' => 'pt-3')); ?>
              <div class="form-group">
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                       placeholder="Email Address"
                       name="email" value="<?= set_value('email'); ?>" tabindex="1" required autofocus>
                <span class="text-danger"><?= form_error('email'); ?></span>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn">RECOVER
                </button>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Keep me signed in
                  </label>
                </div>
                <a href="<?= base_url() . 'authenticate/login'; ?>" class="auth-link text-black">Try Login?</a>
              </div>
                <?= form_close(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="<?= base_url() . 'resources/vendors/js/vendor.bundle.base.js'; ?>"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?= base_url() . 'resources/js/off-canvas.js'; ?>"></script>
<script src="<?= base_url() . 'resources/js/hoverable-collapse.js'; ?>"></script>
<script src="<?= base_url() . 'resources/js/template.js'; ?>"></script>
<script src="<?= base_url() . 'resources/js/settings.js'; ?>"></script>
<script src="<?= base_url() . 'resources/js/todolist.js'; ?>"></script>
<!-- endinject -->
</body>
</html>