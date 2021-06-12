<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Home Video')); ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                        <li class="breadcrumb-item"><?php echo e(__('Home Video')); ?></li>
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
                            <h3 class="card-title"><?php echo e(__('Update Home Video')); ?> </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="<?php echo e(route('admin.herosection.video.update')); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label  class="col-sm-12 control-label"><?php echo e(__('Home Video Link')); ?> <span
                                                        class="text-danger">*</span></label>

                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="hero_section_video" value="<?php echo e($setting->hero_section_video); ?>" placeholder="<?php echo e(__('Enter Video Link')); ?>">
                                                <?php if($errors->has('hero_section_video')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('hero_section_video')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Update')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
        </div>


    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\local\liveporichoy\core\resources\views/admin/home/video.blade.php ENDPATH**/ ?>