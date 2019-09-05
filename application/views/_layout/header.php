<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar top-navbar col-lg-12 col-12 p-0">
  <div class="container-fluid">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="index.html"><img
            src="http://www.urbanui.com/polluxui/template/images/logo.svg" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img
            src="http://www.urbanui.com/polluxui/template/images/logo-mini.svg" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link">
            <img
                src="<?= base_url() . 'writable/profile_pic/' . (isset($_SESSION['profile_pic']) ? $this->session->profile_pic : 'default_user_pic.png'); ?>"
                alt="profile"/>
            <span class="nav-profile-name"><?= $this->session->full_name; ?></span>
          </a>
        </li>
        <li class="nav-item nav-user-status dropdown">
          <p class="mb-0">Last login was 23 hours ago.</p>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-date dropdown">
          <a class="nav-link d-flex justify-content-center align-items-center date datepicker" href="javascript:void(0)" id="datepicker-popup"
             data-toggle="dropdown" id="profileDropdown">
            <h6 class="date mb-0">Today : Mar 23</h6>
            <i class="typcn typcn-calendar"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
             id="messageDropdown" href="#" data-toggle="dropdown">
            <i class="typcn typcn-mail mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <p class="mb-0 font-weight-normal dropdown-header text-center">Messages</p>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="<?= base_url() . 'resources/images/faces/face4.jpg'; ?>" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  The meeting is cancelled
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="<?= base_url() . 'resources/images/faces/face2.jpg'; ?>" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  New product launch
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="<?= base_url() . 'resources/images/faces/face3.jpg'; ?>" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  Upcoming board meeting
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown mr-0">
          <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
             id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="typcn typcn-user mx-0"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
               aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal dropdown-header text-center">User Panel</p>
            <a class="dropdown-item preview-item"
               href="<?= base_url() . 'user/profile/' . $this->session->user_name; ?>">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="typcn typcn-user-outline mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal"><?= $this->session->user_name . '\'s Profile'; ?></h6>
                <p class="font-weight-light small-text mb-0 text-muted text-center text-capitalize">
                    <?= $this->session->user_role; ?>
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item" href="<?= base_url() . 'setting/user_account'; ?>">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="typcn typcn-cog-outline mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Account Settings</h6>
              </div>
            </a>
            <a class="dropdown-item preview-item" href="<?= base_url() . 'authenticate/logout'; ?>">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="typcn typcn-arrow-back mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Logout</h6>
              </div>
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
              data-toggle="horizontal-menu-toggle">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div>
  </div>
</nav>

