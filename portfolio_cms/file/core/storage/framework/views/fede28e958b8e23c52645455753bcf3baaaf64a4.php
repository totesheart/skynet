<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Basic Information')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Basic Information')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update Basic Information')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.setting.updateBasicinfo')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <div class="form-group row">
                                <label for="base_color" class="col-sm-2 control-label"><?php echo e(__('Theme Color')); ?></label>
                                <div class="col-sm-10">
                                    <div class="input-group my-colorpicker2">
                                        <input type='text' id="colorpicker" name="base_color" value="#<?php echo e($setting->base_color); ?>"/>
                                      </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Dark Mode</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" <?php echo e($setting->is_dark == '1' ? 'checked' : ''); ?> data-size="large" name="is_dark" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactive">
                                    <?php if($errors->has('is_dark')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_dark')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Site Animation</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" <?php echo e($setting->iswow == '1' ? 'checked' : ''); ?> data-size="large" name="iswow" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactive">
                                    <?php if($errors->has('iswow')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('iswow')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 control-label"><?php echo e(__('Site Title')); ?> <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="website_title" value="<?php echo e($setting->website_title); ?>" placeholder="<?php echo e(__('Site Title')); ?>">
                                    <?php if($errors->has('website_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('website_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Contact Email (for Admin)')); ?> <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact_mail" value="<?php echo e($setting->contact_mail); ?>" placeholder="<?php echo e(__('Enter Contact Mail')); ?>">
                                    <?php if($errors->has('contact_mail')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('contact_mail')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Favicon')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/'.$setting->fav_icon)); ?>" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="fav_icon"><?php echo e(__('Choose New Image')); ?></label>
                                        <input type="file" class="custom-file-input up-img" name="fav_icon" id="fav_icon">
                                    </div>
                                    <p class="help-block text-info"><?php echo e(__('Upload 40X40 (Pixel) Size image or Squre size image for best quality. 
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Site Header Logo')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/'.$setting->header_logo)); ?>" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="header_logo">Choose New Image</label>
                                        <input type="file" class="custom-file-input up-img" name="header_logo" id="header_logo">
                                    </div>
                                    <p class="help-block text-info"><?php echo e(__('Upload 150X40 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Breadcrumb Image')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/breadcrumb_image.jpg')); ?>" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="breadcrumb_image"><?php echo e(__('Choose New Image')); ?></label>
                                        <input type="file" class="custom-file-input up-img" name="breadcrumb_image" id="breadcrumb_image">
                                    </div>
                                    <p class="help-block text-info"><?php echo e(__('Upload 1920X390 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\porichoy\core\resources\views/admin/settings/basicinfo.blade.php ENDPATH**/ ?>