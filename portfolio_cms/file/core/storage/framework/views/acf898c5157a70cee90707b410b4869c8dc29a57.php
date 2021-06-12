<?php $__env->startSection('content'); ?>
   <!-- Content Header (Page header) -->

   <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Welcome back,')); ?> <?php echo e($adminprofile->first_name); ?> <?php echo e($adminprofile->last_name); ?>!</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('Services')); ?></span>
                    <h4 class="info-box-number font-weight-normal"><?php echo e($services_count->count()); ?></h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-success">
                  <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('Projects')); ?></span>
                    <h4 class="info-box-number font-weight-normal"><?php echo e($portfolios->count()); ?></h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-warning">
                  <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('Clients')); ?></span>
                    <h4 class="info-box-number font-weight-normal"><?php echo e($clients->count()); ?></h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-danger">
                  <span class="info-box-icon"><i class="fas fa-comments"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('Blogs')); ?></span>
                    <h4 class="info-box-number font-weight-normal"><?php echo e($blogs_count->count()); ?></h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
        </div>
        <div class="row">
          <?php $__currentLoopData = $funfacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funfact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon p-2">
                <img  class="w-60" src="<?php echo e(asset('assets/front/img/'.$funfact->icon)); ?>" alt="">
              </span>
              <div class="info-box-content align-self-center pl-3">
                <span class="info-box-number">
                 <h5 class="mb-0 pb-0"> <strong><?php echo e($funfact->value); ?>+</strong> </h5>
                </span>
                <span class="info-box-text"><?php echo e($funfact->name); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <!-- Main row -->
  
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>