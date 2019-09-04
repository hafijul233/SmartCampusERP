<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 03/09/2019
 * Time: 1:32 AM
 * Description:
 */
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
  <link rel="shortcut icon" href="<?= base_url() . 'resources/images/favicon.png'; ?>">
</head>
<body>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
      <div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-transparent text-left p-5 text-center">
            <img src="<?= base_url() . 'resources/images/faces/face13.jpg'; ?>" class="lock-profile-img" alt="img">
            <?= form_open('authentication/lockscreen', array('class' => 'pt-5')); ?>
              <div class="form-group">
                <label for="examplePassword1">Password to unlock</label>
                <input type="password" class="form-control text-center" id="examplePassword1" placeholder="Password"
                       name="password" tabindex="1" required autofocus >
                <span class="text-danger"><?= form_error('password'); ?></span>
              </div>
              <div class="mt-5">
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium" >Unlock</button>
              </div>
              <?php $this->notification->alert(); ?>
              <div class="mt-3 text-center">
                <a href="<?= base_url() . 'authenticate/login'; ?>" class="auth-link text-white">Sign in using a different account</a>
              </div>
            <?= form_close(); ?>

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
<script src="<?= base_url() . 'resources/vendors/js/perfect-scrollbar.min.js'; ?>"></script>
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

