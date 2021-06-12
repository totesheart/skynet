<!-- jQuery 3 -->
<script src="<?php echo e(asset('assets/admin/js/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Overlay Scrollbars js -->
<script src="<?php echo e(asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- Summernote js -->
<script src="<?php echo e(asset('assets/admin/plugins/summernote/summernote-bs4.min.js')); ?>"></script>


<script src="<?php echo e(asset('assets/admin/plugins/codemirror/codemirror.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/plugins/codemirror/javascript.js')); ?>"></script>
<!-- Sweetalert2 js -->
<script src="<?php echo e(asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!-- Bootstrap Colorpicker js -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/plugins/spectrum/spectrum.js')); ?>"></script>
<!-- Moment js -->
<script src="<?php echo e(asset('assets/admin/plugins/moment/moment.min.js')); ?>"></script>
<!-- Bootstrap Tagsinput js -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap-taginput/bootstrap-tagsinput.min.js')); ?>"></script>
<!-- Bs-custom-file-input js -->
<script src="<?php echo e(asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
<!-- Bootstrap-datepicker js -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
<!-- DropZone Js -->
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/dropzone/dropzone.min.js')); ?>">
<!-- Bootstrap-Iconpicker js -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap-iconpicker/bootstrap-iconpicker.bundle.min.js')); ?>"></script>
<!-- Bootstrap-Switch js -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap-switch/bootstrap-switch.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/admin/js/adminlte.min.js')); ?>"></script>
<!-- Custom js -->
<script src="<?php echo e(asset('assets/admin/js/custom.js')); ?>"></script>


<?php if(session()->has('success')): ?>
    <script>
        $(function() {
            $message = '<?php echo e(session('success')); ?>';
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                type: 'success',
                timer: 3000,
                title: $message
            })
        });
    </script>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <script>
        $(function() {
            $message = '<?php echo e(session('warning')); ?>';
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                type: 'warning',
                timer: 3000,
                title: $message
            })
        });
    </script>
<?php endif; ?>



<?php /**PATH C:\laragon\www\porichoy\core\resources\views/admin/partials/scripts.blade.php ENDPATH**/ ?>