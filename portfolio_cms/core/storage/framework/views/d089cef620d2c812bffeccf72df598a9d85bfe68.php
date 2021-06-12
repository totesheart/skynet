

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
      <!-- Main row -->
      <div class="row">
        <section class="col-lg-5">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <?php echo e(__('About Me')); ?>

                </h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('admin.about_me')); ?>" class="btn btn-tool btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
                <!-- /.card-tools -->
              </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?php echo e(asset('assets/front/img/'.$abouts->avatar)); ?>" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><b><?php echo e($abouts->name); ?></b></h3>

              <p class="text-muted text-center"><?php echo e($abouts->position_type); ?></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b><?php echo e(__('Age :')); ?></b> <a class="float-right"><?php echo e($abouts->age); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(__('Residence :')); ?></b> <a class="float-right"><?php echo e($abouts->residence); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(__('E-mail :')); ?></b> <a class="float-right"><?php echo e($abouts->mail); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(__('Phone :')); ?></b> <a class="float-right"><?php echo e($abouts->phone); ?></a>
                </li>
              </ul>
              <a href="#" class="btn btn-primary btn-block"><?php echo e(__('My Resume')); ?></a>
            </div>
            <!-- /.card-body -->
          </div>
        </section>
        <section class="col-lg-7">
          <div class="row">
            <?php $__currentLoopData = $funfacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funfact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6 col-md-6">
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
               Latest Blogs
              </h3>
              <div class="card-tools">
                  <a href="<?php echo e(route('admin.blog')); ?>" class="btn btn-tool btn-sm">
                      <i class="fas fa-edit"></i>
                  </a>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$id); ?></td>
                            <td>
                                <img class="w-80" src="<?php echo e(asset('assets/front/img/'.$blog->main_image)); ?>" alt="">
                            </td>
                            <td>
                                <?php echo e($blog->title); ?>

                            </td> 
                            <td>
                                <a class="btn btn-outline-primary btn-sm" href="<?php echo e(route('front.blogdetails', $blog->slug)); ?>" target="_blank">
                                  <i class="fas fa-eye mr-0"></i>
                                </a>
                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
        </section>
      </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\liveporichoy\core\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>