<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Home Agency')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Home Agency')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update Home Agency')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.herosection.agency.update')); ?>" method="POST"">
                            <?php echo csrf_field(); ?>
                        
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label  class="col-sm-12 control-label"><?php echo e(__('Home Title')); ?> <span
                                                    class="text-danger">*</span></label>

                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="ag_title" value="<?php echo e($setting->ag_title); ?>" placeholder="<?php echo e(__('Enter Title')); ?>">
                                            <?php if($errors->has('ag_title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('ag_title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-12 control-label"><?php echo e(__('Home Sub Title')); ?> <span
                                                    class="text-danger">*</span></label>

                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="ag_subtitle" id="" cols="30" rows="3"  placeholder="<?php echo e(__('Enter Sub Title')); ?>"><?php echo e($setting->ag_subtitle); ?></textarea>
                                            <?php if($errors->has('ag_subtitle')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('ag_subtitle')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/admin/home/agency.blade.php ENDPATH**/ ?>