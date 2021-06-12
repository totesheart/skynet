<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Section Title')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Section Title')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update Section Title')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.setting.updateSectiontitle')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Interests Title')); ?> <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="interest_title" value="<?php echo e($setting->interest_title); ?>" placeholder="<?php echo e(__('Interests Title')); ?>">
                                    <?php if($errors->has('interest_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('interest_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Education Title')); ?> <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="education_title" value="<?php echo e($setting->education_title); ?>" placeholder="<?php echo e(__('Education Title')); ?>">
                                    <?php if($errors->has('education_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('education_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Experince Title')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="experince_title" value="<?php echo e($setting->experince_title); ?>" placeholder="<?php echo e(__('Experince Title')); ?>">
                                    <?php if($errors->has('experince_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('experince_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Client Title')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="client_title" value="<?php echo e($setting->client_title); ?>" placeholder="<?php echo e(__('Client Title')); ?>">
                                    <?php if($errors->has('client_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('client_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Service Title')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="service_title" value="<?php echo e($setting->service_title); ?>" placeholder="<?php echo e(__('Service Title')); ?>">
                                    <?php if($errors->has('service_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('service_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Portfolio Title')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="portfolio_title" value="<?php echo e($setting->portfolio_title); ?>" placeholder="<?php echo e(__('Portfolio Title')); ?>">
                                    <?php if($errors->has('portfolio_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('portfolio_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Resume Title')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="resume_title" value="<?php echo e($setting->resume_title); ?>" placeholder="<?php echo e(__('Resume Title')); ?>">
                                    <?php if($errors->has('resume_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('resume_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Knowledge')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="knowledge" value="<?php echo e($setting->knowledge); ?>" placeholder="<?php echo e(__('Kowledge Title')); ?>">
                                    <?php if($errors->has('knowledge')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('knowledge')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Pricing Plan')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pricingplan" value="<?php echo e($setting->pricingplan); ?>" placeholder="<?php echo e(__('Pricing Plan Title')); ?>">
                                    <?php if($errors->has('pricingplan')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('pricingplan')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Testimonial Title')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="testimonial_title" value="<?php echo e($setting->testimonial_title); ?>" placeholder="<?php echo e(__('Testimonial Title')); ?>">
                                    <?php if($errors->has('testimonial_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('testimonial_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Blog Title')); ?><span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="blog_title" value="<?php echo e($setting->blog_title); ?>" placeholder="<?php echo e(__('Blog Title')); ?>">
                                    <?php if($errors->has('blog_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('blog_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Faq Title')); ?><span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="faq_title" value="<?php echo e($setting->faq_title); ?>" placeholder="<?php echo e(__('Faq Title')); ?>">
                                    <?php if($errors->has('faq_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('faq_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Contact Title')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact_title" value="<?php echo e($setting->contact_title); ?>" placeholder="<?php echo e(__('Contact Title')); ?>">
                                    <?php if($errors->has('contact_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('contact_title')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/admin/settings/sectiontitle.blade.php ENDPATH**/ ?>