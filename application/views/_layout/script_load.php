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
<!-- All Jquery -->
<script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url(); ?>resources/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url(); ?>resources/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>resources/js/custom.min.js"></script>
<!--This page JavaScript -->
<?php
if (isset($type)) {
foreach ($type as $script) {
if ($script == 'form') { ?>
  <!-- form script -->
  <script src="<?= base_url(); ?>assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
  <script src="<?= base_url(); ?>resources/js/pages/mask/mask.init.js"></script>
  <script src="<?= base_url(); ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/select2/dist/js/select2.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
  <script src="<?= base_url(); ?>assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/quill/dist/quill.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="<?= base_url(); ?>resources/js/pages/form.js"></script>
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