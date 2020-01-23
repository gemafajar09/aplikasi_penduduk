<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href=""></a>.</strong>
  
    <div class="float-right d-none d-sm-inline-block">
      <?= date('d-m-Y') ?>
    </div>
  </footer>
<aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="<?= $base_url ?>asset/vendor/jquery/jquery.min.js"></script>
<!-- <script src="<?= $base_url ?>asset/jquery.min.js"></script> -->
<script src="<?= $base_url ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= $base_url ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base_url ?>asset/plugins/moment/moment.min.js"></script>
<script src="<?= $base_url ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= $base_url ?>asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= $base_url ?>asset/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= $base_url ?>asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= $base_url ?>asset/dist/js/adminlte.js"></script>
<!-- <script src="<?= $base_url ?>asset/dist/js/pages/dashboard.js"></script> -->
<script src="<?= $base_url ?>asset/dist/js/demo.js"></script>
<script src="<?= $base_url ?>asset/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= $base_url ?>asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
