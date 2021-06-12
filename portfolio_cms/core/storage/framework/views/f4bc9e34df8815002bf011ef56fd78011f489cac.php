<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Contact Information')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Contact Information')); ?> </li>
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
                            <h3 class="card-title"><?php echo e(__('Update Contact Information :')); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body"> 
                                <form class="form-horizontal" action="<?php echo e(route('admin.contact_info_update')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-2 control-label"> <?php echo e(__('Address')); ?> <span class="text-danger">*</span> </label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="address" value="<?php echo e($about->address); ?>">
                                                <?php if($errors->has('address')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('address')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mail" class="col-sm-2 control-label"> <?php echo e(__('E-mail')); ?> <span class="text-danger">*</span>  </label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="mail" value="<?php echo e($about->mail); ?>">
                                                <?php if($errors->has('mail')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('mail')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-2 control-label"> <?php echo e(__('Phone')); ?> <span class="text-danger">*</span>  </label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="phone" value="<?php echo e($about->phone); ?>">
                                                <?php if($errors->has('phone')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('phone')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="map" class="col-sm-2 control-label"> <?php echo e(__('Map Embed Code')); ?> <span class="text-danger">*</span>  </label>
            
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="map"><?php echo e($setting->map); ?></textarea>
                                                <?php if($errors->has('map')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('map')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                            </div>
                                        </div>
            
                                    </form>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>

            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/admin/about/contact-info.blade.php ENDPATH**/ ?>