<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Home Static')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Home Static')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update Home Static')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.herosection.static.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                        
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/heroarea_bg.jpg')); ?>" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="heroarea_bg"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="heroarea_bg" id="heroarea_bg">
                                            </div>
                                            <p class="help-block text-info"><?php echo e(__('Upload 1920X970 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\local\liveporichoy\core\resources\views/admin/home/static.blade.php ENDPATH**/ ?>