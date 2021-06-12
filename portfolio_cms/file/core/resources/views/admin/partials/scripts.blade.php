<!-- jQuery 3 -->
<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Overlay Scrollbars js -->
<script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Summernote js -->
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- Data Table Js js -->
<script src="{{ asset('assets/admin/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>

{{--codemirror js--}}
<script src="{{ asset('assets/admin/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/codemirror/javascript.js') }}"></script>
<!-- Sweetalert2 js -->
<script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Bootstrap Colorpicker js -->
<script src="{{ asset('assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/spectrum/spectrum.js') }}"></script>
<!-- Moment js -->
<script src="{{ asset('assets/admin/plugins/moment/moment.min.js') }}"></script>
<!-- Bootstrap Tagsinput js -->
<script src="{{ asset('assets/admin/plugins/bootstrap-taginput/bootstrap-tagsinput.min.js') }}"></script>
<!-- Bs-custom-file-input js -->
<script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Bootstrap-datepicker js -->
<script src="{{ asset('assets/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- DropZone Js -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/dropzone/dropzone.min.js') }}">
<!-- Bootstrap-Iconpicker js -->
<script src="{{ asset('assets/admin/plugins/bootstrap-iconpicker/bootstrap-iconpicker.bundle.min.js') }}"></script>
<!-- Bootstrap-Switch js -->
<script src="{{ asset('assets/admin/plugins/bootstrap-switch/bootstrap-switch.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('assets/admin/js/custom.js') }}"></script>


@if (session()->has('success'))
    <script>
        $(function() {
            $message = '{{session('success')}}';
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
@endif

@if (session()->has('warning'))
    <script>
        $(function() {
            $message = '{{session('warning')}}';
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
@endif



