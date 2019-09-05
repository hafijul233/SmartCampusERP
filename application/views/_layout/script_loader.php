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
  <script src="<?= base_url(). 'resources/js/navbar.js'; ?>"></script>
<?php
if (isset($type)) {
foreach ($type as $script) {
if ($script == 'form') { ?>
  <!-- form script -->
  <script src="<?= base_url(). 'resources/js/pages/form.js'; ?>"></script>

<?php } if ($script == 'table') { ?>
  <!-- table script -->
  <script src="<?= base_url(); ?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
  <script src="<?= base_url(); ?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
  <script src="<?= base_url(); ?>assets/extra-libs/DataTables/datatables.min.js"></script>
  <script src="<?= base_url(); ?>resources/js/pages/table.js"></script>
<?php } if ($script == 'chart') { ?>
  <!-- chart script -->
  <script src="<?= base_url(); ?>assets/libs/chart/matrix.interface.js"></script>
  <script src="<?= base_url(); ?>assets/libs/chart/excanvas.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/flot/jquery.flot.js"></script>
  <script src="<?= base_url(); ?>assets/libs/flot/jquery.flot.pie.js"></script>
  <script src="<?= base_url(); ?>assets/libs/flot/jquery.flot.time.js"></script>
  <script src="<?= base_url(); ?>assets/libs/flot/jquery.flot.stack.js"></script>
  <script src="<?= base_url(); ?>assets/libs/flot/jquery.flot.crosshair.js"></script>
  <script src="<?= base_url(); ?>assets/libs/chart/jquery.peity.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/chart/matrix.charts.js"></script>
  <script src="<?= base_url(); ?>assets/libs/chart/jquery.flot.pie.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/chart/turning-series.js"></script>
  <script src="<?= base_url(); ?>resources/js/pages/chart/chart-page-init.js"></script>
  <?php
        }
    }
}
?>