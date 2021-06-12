<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('SEO Information')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('SEO Information')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update SEO Information')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.setting.updateSeoinfo')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="meta_keywords" class="col-sm-2 control-label"><?php echo e(__('Meta Keywords')); ?> </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($setting->meta_keywords); ?>">
                                    <?php if($errors->has('meta_keywords')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('meta_keywords')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="meta_description" class="col-sm-2 control-label"><?php echo e(__('Meta Description')); ?></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($setting->meta_description); ?></textarea>
                                    <?php if($errors->has('meta_description')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('meta_description')); ?> </p>
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
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
    </div>


</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\porichoy\core\resources\views/admin/settings/seo.blade.php ENDPATH**/ ?>