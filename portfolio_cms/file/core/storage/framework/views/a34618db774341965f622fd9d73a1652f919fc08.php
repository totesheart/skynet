<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Scripts')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Scripts')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update Scripts')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.setting.updateScripts')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Tawk.to Status <span
                                            class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="checkbox" <?php echo e($setting->is_tawkto == '1' ? 'checked' : ''); ?> data-size="large" name="is_tawkto" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactive">
                                    <?php if($errors->has('is_tawkto')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_tawkto')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Tawk.to Site ID<span
                                    class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tawk_to_api_key" value="<?php echo e($setting->tawk_to_api_key); ?>" placeholder="Tawk.to API Key">
                                    <?php if($errors->has('tawk_to_api_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('tawk_to_api_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row mt-5">
                                <label class="col-sm-2 control-label">Messenger Status <span
                                            class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="checkbox" <?php echo e($setting->is_massenger == '1' ? 'checked' : ''); ?> data-size="large" name="is_massenger" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactive">
                                    <?php if($errors->has('is_massenger')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_massenger')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">FB Page ID<span
                                    class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="is_massenger_id" value="<?php echo e($setting->is_massenger_id); ?>" placeholder="Facebook Page ID">
                                    <?php if($errors->has('is_massenger_id')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_massenger_id')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row mt-5">
                                <label class="col-sm-2 control-label"><?php echo e(__('Disqus Status')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                        <input type="checkbox" <?php echo e($setting->is_disqus == '1' ? 'checked' : ''); ?> data-size="large" name="is_disqus" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactive">
                                        <?php if($errors->has('is_disqus')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_disqus')); ?> </p>
                                        <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Disqus Shortname')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="disqus_username" value="<?php echo e($setting->disqus_username); ?>" placeholder="<?php echo e(__('Disqus Shortname')); ?>">
                                    <?php if($errors->has('disqus_username')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('disqus_username')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row  mt-5">
                                <label class="col-sm-2 control-label">Google Analytics Status<span
                                            class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="checkbox" <?php echo e($setting->is_analytics == '1' ? 'checked' : ''); ?> data-size="large" name="is_analytics" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactive">
                                    <?php if($errors->has('is_analytics')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_analytics')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Google Analytics ID<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="google_analytics_id" value="<?php echo e($setting->google_analytics_id); ?>" placeholder="Google Analytics ID">
                                    <?php if($errors->has('google_analytics_id')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('google_analytics_id')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/admin/settings/scripts.blade.php ENDPATH**/ ?>