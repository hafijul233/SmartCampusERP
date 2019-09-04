<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Controller_Title
$base = str_replace('_', ' ', $this->uri->segment(1));
$base = ucwords($base);

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
  <link rel="stylesheet" href="<?= base_url() . 'resources/vendors/material-design/css/materialdesignicons.min.css'; ?>">
  <link rel="stylesheet" href="<?= base_url() . 'resources/vendors/css/vendor.bundle.base.css'; ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <?php $this->load->view('_layout/style_loader'); ?>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() . 'resources/css/themes/horizontal-layout-light.css'; ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() . 'resources/images/favicon.png'; ?>" />
</head>
<body>
<div class="container-scroller">
  <!-- partial:partials/_horizontal-navbar.html -->
  <div class="horizontal-menu">
    <!-- User Header -->
    <?php $this->load->view('_layout/header'); ?>
    <!-- Navigation Bar -->
    <?php $this->load->view('_layout/navigator'); ?>
  </div>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <?php $this->load->view($view_path); ?>
      <!-- content-wrapper ends -->
      <!-- footer -->
      <?php $this->load->view('_layout/footer'); ?>
      <!-- /.footer -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="<?= base_url() . 'resources/vendors/js/jquery-3.2.1.min.js'; ?>"></script>
<script src="<?= base_url() . 'resources/vendors/js/popper.min.js'; ?>"></script>
<script src="<?= base_url() . 'resources/vendors/js/bootstrap.min.js'; ?>"></script>
<script src="<?= base_url() . 'resources/vendors/js/perfect-scrollbar.min.js'; ?>"></script>

<script src="<?= base_url() . 'resources/js/hoverable-collapse.js'; ?>"></script>
<script src="<?= base_url() . 'resources/js/template.js'; ?>"></script>
<!-- /.base.js -->
<!-- plugin js for this page -->
<?php $this->load->view('_layout/script_loader'); ?>
<!-- End custom js for this page-->
</body>
</html>