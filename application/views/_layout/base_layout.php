<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Page_Title
$title = str_replace('_', ' ', $this->uri->segment(2));
$title = ucwords($title);

// Controller_Title
$base = str_replace('_', ' ', $this->uri->segment(1));
$base = ucwords($base);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() . 'dist/img/favicon.png'; ?>">
  <title><?= $title . ' | ' . APP_NAME; ?></title>
    <?php
    $this->load->view('_layout/style_load');
    ?>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="lds-ripple">
    <div class="lds-pos"></div>
    <div class="lds-pos"></div>
  </div>
</div>
<!-- Main wrapper -->
<div id="main-wrapper">
  <!-- Topbar header -->
    <?php
    $role = $this->session->user_role;

    $this->load->view('_layout/' . $role . '/header');
    ?>
  <!-- Sidebar -->
    <?php
    $this->load->view('_layout/' . $role . '/sidebar');
    ?>
  <!-- Page wrapper  -->
  <div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title"><?= strtoupper($title); ?></h4>
          <div class="ml-auto text-right">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?= base_url() . $this->uri->segment(1); ?>"><?= $base; ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $title; ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Container fluid  -->
      <?php
      $this->load->view($view_path);
      ?>
    <!-- footer -->
      <?php
      $this->load->view('_layout/footer');
      ?>
    <!-- End footer -->
  </div>
  <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->
<?php
$this->load->view('_layout/script_load');
?>
</body>
</html>