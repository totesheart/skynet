

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Site Themes')); ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                        class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                        <li class="breadcrumb-item"><?php echo e(__('Themes')); ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__('Activate Themes')); ?> </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('assets/admin/img/default.jpg')); ?>" alt=""
                                                         style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Default</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <?php if($setting->themes == 'default'): ?>
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    <?php else: ?>
                                                        <form class="deleteform d-inline-block"
                                                              action="<?php echo e(route('admin.themes.update')); ?>"
                                                              method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="themes" value="default">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm">
                                                                      <span class="btn-label">
                                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                                      </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('assets/admin/img/resume.jpg')); ?>" alt=""
                                                         style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Cv/Resume</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <?php if($setting->themes == 'resume'): ?>
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    <?php else: ?>
                                                        <form class="deleteform d-inline-block"
                                                              action="<?php echo e(route('admin.themes.update')); ?>"
                                                              method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="themes" value="resume">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm confirmbtn">
                                                                  <span class="btn-label">
                                                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                                                  </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('assets/admin/img/portfolio.jpg')); ?>" alt=""
                                                         style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Portfolio</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <?php if($setting->themes == 'portfolio'): ?>
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    <?php else: ?>
                                                        <form class="deleteform d-inline-block"
                                                              action="<?php echo e(route('admin.themes.update')); ?>"
                                                              method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="themes" value="portfolio">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm confirmbtn">
                                                                  <span class="btn-label">
                                                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                                                  </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('assets/admin/img/comming-soon.jpg')); ?>"
                                                         alt="" style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Comming Soon</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <button type="submit" class="btn btn-success btn-sm" disabled>
                                                            Deactive
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('assets/admin/img/comming-soon.jpg')); ?>"
                                                         alt="" style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Comming Soon</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <button type="submit" class="btn btn-success btn-sm" disabled>
                                                            Deactive
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('assets/admin/img/comming-soon.jpg')); ?>"
                                                         alt="" style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Comming Soon</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <button type="submit" class="btn btn-success btn-sm" disabled>
                                                            Deactive
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
        </div>


    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\liveporichoy\core\resources\views/admin/settings/themes.blade.php ENDPATH**/ ?>