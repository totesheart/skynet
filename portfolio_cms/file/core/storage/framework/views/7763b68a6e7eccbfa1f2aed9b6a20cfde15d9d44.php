<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Page Visibility')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Page Visibility')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <form class="form-horizontal" action="<?php echo e(route('admin.pagevisibility.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title"><?php echo e(__('Update Page & Section Visibility')); ?> </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Home Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->ishome == '1' ? 'checked' : ''); ?> data-size="large" name="ishome" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('ishome')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('ishome')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">About Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isabout == '1' ? 'checked' : ''); ?> data-size="large" name="isabout" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isabout')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isabout')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Fun Fact Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isfunfact == '1' ? 'checked' : ''); ?> data-size="large" name="isfunfact" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isfunfact')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isfunfact')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Interests Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isinterests == '1' ? 'checked' : ''); ?> data-size="large" name="isinterests" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isinterests')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isinterests')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Service Section & Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isservice == '1' ? 'checked' : ''); ?> data-size="large" name="isservice" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isservice')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isservice')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Resume Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isresume == '1' ? 'checked' : ''); ?> data-size="large" name="isresume" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isresume')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isresume')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Testimonial Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->istestimonial == '1' ? 'checked' : ''); ?> data-size="large" name="istestimonial" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('istestimonial')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('istestimonial')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Portfolio Section & Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isportfolio == '1' ? 'checked' : ''); ?> data-size="large" name="isportfolio" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isportfolio')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isportfolio')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Pricing Plan Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->ispricingplan == '1' ? 'checked' : ''); ?> data-size="large" name="ispricingplan" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('ispricingplan')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('ispricingplan')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">FAQ Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isfaq == '1' ? 'checked' : ''); ?> data-size="large" name="isfaq" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isfaq')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isfaq')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Blog Section & Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isblog == '1' ? 'checked' : ''); ?> data-size="large" name="isblog" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isblog')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isblog')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Contact Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->iscontact == '1' ? 'checked' : ''); ?> data-size="large" name="iscontact" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('iscontact')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('iscontact')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Clients Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isclient == '1' ? 'checked' : ''); ?> data-size="large" name="isclient" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isclient')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isclient')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title"><?php echo e(__('Update Element Visibility')); ?> </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Home Download Button<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->ishomedownload == '1' ? 'checked' : ''); ?> data-size="large" name="ishomedownload" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('ishomedownload')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('ishomedownload')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Resume Download Button<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->isresumedownload == '1' ? 'checked' : ''); ?> data-size="large" name="isresumedownload" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('isresumedownload')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('isresumedownload')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Home Social links<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" <?php echo e($setting->ishomesocial == '1' ? 'checked' : ''); ?> data-size="large" name="ishomesocial" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                <?php if($errors->has('ishomesocial')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('ishomesocial')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Update')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
            </div>
            <!-- /.col -->
        </div>
    </div>


</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/admin/settings/page-visibility.blade.php ENDPATH**/ ?>