<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= '404' . ' | ' . APP_NAME; ?> </title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= SITE_ROOT; ?>resources/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= SITE_ROOT; ?>resources/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= SITE_ROOT; ?>resources/css/themes/horizontal-layout-light.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= SITE_ROOT; ?>resources/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center text-center error-page bg-warning">
      <div class="row flex-grow">
        <div class="col-lg-7 mx-auto text-white">
          <div class="row align-items-center d-flex flex-row">
            <div class="col-lg-6 text-lg-right pr-lg-4">
              <h1 class="display-1 mb-0 text-white">DB</h1>
            </div>
            <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
              <h2 class="text-white">Oooh! <?= $heading; ?></h2>
              <h3 class="font-weight-light text-white"><?= $message; ?></h3>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 text-center mt-xl-2">
              <a class="text-white font-weight-medium" href="<?= SITE_ROOT . 'home/dashboard'; ?>">Back to home</a>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 mt-xl-2">
              <p class="text-white font-weight-medium text-center">Copyright &copy; 2018  All rights reserved.</p>
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
<script src="<?= SITE_ROOT; ?>resources/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?= SITE_ROOT; ?>resources/js/off-canvas.js"></script>
<script src="<?= SITE_ROOT; ?>resources/js/hoverable-collapse.js"></script>
<script src="<?= SITE_ROOT; ?>resources/js/template.js"></script>
<script src="<?= SITE_ROOT; ?>resources/js/settings.js"></script>
<script src="<?= SITE_ROOT; ?>resources/js/todolist.js"></script>
<!-- endinject -->
</body>
</html>