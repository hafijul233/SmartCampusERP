<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 29/08/2019
 * Time: 1:39 PM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php
if (isset($type)) {
foreach ($type as $style) {
if ($style == 'form') { ?>
  <!-- form style -->
  <link rel="stylesheet" href="<?= base_url(). 'resources/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css'; ?>">
  <link rel="stylesheet" href="<?= base_url(). 'resources/vendors/datatables.net-bs4/dataTables.bootstrap4.css'; ?>">
<?php
} if($style == 'table') { ?>
  <!-- table style -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/extra-libs/multicheck/multicheck.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css">
<?php
} if ($style == 'chart') { ?>
  <!-- chart style -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/libs/flot/css/float-chart.css">
<?php
    }
  }
}
?>
