<footer class="main-footer text-sm">
    <div class="float-right d-none d-sm-block"><b>Version</b> <?php echo $versi_app ?></div>
    <strong>Power By <a href="https://buildapp.my.id" target="_blank">Buildapp</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo WEB_ROOT ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo WEB_ROOT ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo WEB_ROOT ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo WEB_ROOT ?>/plugins/toastr/toastr.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo WEB_ROOT ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Select2 -->
<script src="<?php echo WEB_ROOT ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Diagram -->
<script src="<?php echo WEB_ROOT ?>/files/Chart.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo WEB_ROOT ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo WEB_ROOT ?>/dist/js/demo.js"></script>

<script src="<?php echo WEB_ROOT ?>/config/cekinput.js"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
</body>

</html>