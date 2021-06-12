<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
       <?php echo e(__('About')); ?>

    </h1>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header  with-border">
                        <h3 class="card-title mt-1"><?php echo e(__('Add New Facts')); ?></h3>
                        <div class="card-tools">
                        <a href="<?php echo e(route('admin.funfact')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                        </a>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.funfact_store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Icon')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="icon"><?php echo e(__('Choose Image')); ?></label>
                                        <input type="file" class="custom-file-input up-img" name="icon" id="main_image">
                                    </div>
                                    <?php if($errors->has('icon')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('icon')); ?> </p>
                                    <?php endif; ?>
                                    <p class="help-block text-info"><?php echo e(__('Upload 65X65 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 control-label"><?php echo e(__('Name')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Enter Fact Name')); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="value" class="col-sm-2 control-label"><?php echo e(__('Value')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="value" placeholder="<?php echo e(__('Enter Fact Value')); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/admin/about/funfact/add.blade.php ENDPATH**/ ?>