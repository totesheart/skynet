<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo e($setting->website_title); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo e(asset('assets/front/img/'.$setting->fav_icon)); ?>" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
  <?php if ($__env->exists('admin.partials.styles')) echo $__env->make('admin.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('styles'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  
<div class="wrapper">

    <?php echo $__env->make('admin.partials.top-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('admin.partials.side-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php echo $__env->yieldContent('content'); ?>
  </div>
  <!-- /.content-wrapper -->

  <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<!-- ./wrapper -->

<?php if ($__env->exists('admin.partials.scripts')) echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/admin/layout.blade.php ENDPATH**/ ?>