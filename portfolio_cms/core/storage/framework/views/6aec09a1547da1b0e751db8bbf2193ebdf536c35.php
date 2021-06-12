<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Footer')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Footer')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Footer Information')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.footer.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
   
                            <div class="form-group row">
                                <label for="footer_logo" class="col-sm-2 control-label"><?php echo e(__('Site Footer Logo')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/'.$setting->footer_logo)); ?>" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="footer_logo"><?php echo e(__('Choose New Image')); ?></label>
                                        <input type="file" class="custom-file-input up-img" name="footer_logo" id="footer_logo">
                                    </div>
                                    <p class="help-block text-info"><?php echo e(__('Upload 150X40 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Copyright Text')); ?><span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control textarea" name="copyright_text" placeholder="<?php echo e(__('Copyright Text')); ?>"><?php echo e($setting->copyright_text); ?></textarea>
                                    <?php if($errors->has('copyright_text')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('copyright_text')); ?> </p>
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


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\local\liveporichoy\core\resources\views/admin/footer/index.blade.php ENDPATH**/ ?>