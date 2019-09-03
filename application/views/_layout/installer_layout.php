<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 29/08/2019
 * Time: 2:51 AM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>resources/images/favicon.png">
  <title><?= ucwords($this->uri->segment(2)) . ' - ' . APP_NAME; ?></title>
  <!-- Custom CSS -->
  <link href="<?= base_url(); ?>assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/libs/jquery-steps/steps.css" rel="stylesheet">
  <link href="<?= base_url(); ?>resources/css/style.min.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
  <div class="lds-ripple">
    <div class="lds-pos"></div>
    <div class="lds-pos"></div>
  </div>
</div>
<!-- Main wrapper - style you can find in pages.scss -->
<div id="main-wrapper">
  <!-- Topbar header - style you can find in pages.scss -->
  <header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
      <div class="navbar-header" data-logobg="skin5">
        <!-- This is for the sidebar toggle which is visible on mobile only -->
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
            class="ti-menu ti-close"></i></a>
        <!-- Logo -->
        <a class="navbar-brand" href="index.html">
          <!-- Logo icon -->
          <b class="logo-icon p-l-10">
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <img src="<?= base_url(); ?>resources/images/logo-icon.png" alt="homepage" class="light-logo"/>
          </b>
          <!--/.Logo icon -->
          <!-- Logo text -->
          <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?= base_url(); ?>resources/images/logo-text.png" alt="homepage"
                                  class="light-logo"/>

                        </span>
          <!-- Logo icon -->
          <!-- <b class="logo-icon"> -->
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <!-- <img src="<?= base_url(); ?>resources/images/logo-text.png" alt="homepage" class="light-logo" /> -->

          <!-- </b> -->
          <!--/.Logo icon -->
        </a>
        <!-- /.Logo -->
        <!-- Toggle which is visible on mobile only -->
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
           data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
      </div>
      <!-- /.Logo -->
      <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
        <!-- toggle and nav items -->
        <ul class="navbar-nav float-left mr-auto">
          <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                                                    href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                class="mdi mdi-menu font-24"></i></a></li>
          <!-- Search -->
          <li class="nav-item search-box"><a class="nav-link waves-effect waves-dark"
                                             href="javascript:void(0)"><i class="ti-search"></i></a>
            <form class="app-search position-absolute">
              <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                class="srh-btn"><i class="ti-close"></i></a>
            </form>
          </li>
        </ul>
        <!-- Right side toggle and nav items -->
        <ul class="navbar-nav float-right">
          <!-- User profile and search -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                src="<?= base_url(); ?>resources/images/users/1.jpg" alt="user" class="rounded-circle"
                width="31"></a>
            <div class="dropdown-menu dropdown-menu-right user-dd animated">
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My
                Profile</a>
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My
                Balance</a>
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                Inbox</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i>
                Account Setting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"><i
                  class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
              <div class="dropdown-divider"></div>
              <div class="p-l-30 p-10"><a href="javascript:void(0)"
                                          class="btn btn-sm btn-success btn-rounded">View Profile</a>
              </div>
            </div>
          </li>
          <!-- User profile and search -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- /.Topbar header -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav" class="p-t-30">
          <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                      href="index.html" aria-expanded="false"><i
                class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
          <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                      href="charts.html" aria-expanded="false"><i
                class="mdi mdi-chart-bar"></i><span class="hide-menu">Charts</span></a></li>
          <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                      href="widgets.html" aria-expanded="false"><i
                class="mdi mdi-chart-bubble"></i><span class="hide-menu">Widgets</span></a></li>
          <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                      href="tables.html" aria-expanded="false"><i
                class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a></li>
          <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                      href="grid.html" aria-expanded="false"><i
                class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>
          <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                      href="javascript:void(0)" aria-expanded="false"><i
                class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>
            <ul aria-expanded="false" class="collapse  first-level">
              <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                    class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a>
              </li>
              <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                    class="mdi mdi-note-plus"></i><span
                    class="hide-menu"> Form Wizard </span></a></li>
            </ul>
          </li>
          <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                      href="pages-buttons.html" aria-expanded="false"><i
                class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>
          <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                      href="javascript:void(0)" aria-expanded="false"><i
                class="mdi mdi-face"></i><span class="hide-menu">Icons </span></a>
            <ul aria-expanded="false" class="collapse  first-level">
              <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                    class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a>
              </li>
              <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                    class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons </span></a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                      href="pages-elements.html" aria-expanded="false"><i
                class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span></a></li>
          <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                      href="javascript:void(0)" aria-expanded="false"><i
                class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
            <ul aria-expanded="false" class="collapse  first-level">
              <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                    class="mdi mdi-view-dashboard"></i><span
                    class="hide-menu"> Dashboard-2 </span></a></li>
              <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                    class="mdi mdi-multiplication-box"></i><span
                    class="hide-menu"> Gallery </span></a></li>
              <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                    class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a>
              </li>
              <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                    class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a>
              </li>
              <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                    class="mdi mdi-message-outline"></i><span
                    class="hide-menu"> Chat Option </span></a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.Sidebar navigation -->
    </div>
    <!-- /.Sidebar scroll-->
  </aside>
  <!-- /.Left Sidebar - style you can find in sidebar.scss  -->
  <!-- Page wrapper  -->
  <div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title"><?= ucwords($this->uri->segment(2)); ?></h4>
          <div class="ml-auto text-right">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                    href="<?= base_url(); ?>"><?= ucwords($this->uri->segment(1)); ?></a></li>
                <li class="breadcrumb-item active"
                    aria-current="page"><?= ucwords($this->uri->segment(2)); ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- /.Bread crumb and right sidebar toggle -->
      <?php
      $this->load->view($view_path);
      $this->load->view('_layout/footer');
      ?>
  </div>
  <!-- /.Page wrapper  -->
</div>
<!-- /.Wrapper -->
<!-- All Jquery -->
<script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url(); ?>resources/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url(); ?>resources/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>resources/js/custom.min.js"></script>
<!-- this page js -->
<script src="<?= base_url(); ?>assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script>
  // Basic Example with form
  var form = $("#example-form");
  form.validate({
    errorPlacement: function errorPlacement(error, element) {
      element.before(error);
    },
    rules: {
      confirm: {
        equalTo: "#password"
      }
    }
  });
  form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex) {
      form.validate().settings.ignore = ":disabled,:hidden";
      return form.valid();
    },
    onFinishing: function (event, currentIndex) {
      form.validate().settings.ignore = ":disabled";
      return form.valid();
    },
    onFinished: function (event, currentIndex) {
      alert("Submitted!");
    }
  });
</script>
</body>
</html>

