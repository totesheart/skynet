<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Home Slider')); ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                        class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                        <li class="breadcrumb-item"><?php echo e(__('Home Slider')); ?></li>
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
                            <h3 class="card-title"><?php echo e(__('Update Home Slider')); ?> </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form action="<?php echo e(route('admin.slider.store')); ?>" class="dropzone" id="my-awesome-dropzone" enctype="multipart/formdata">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    <p class="help-block text-info mt-3"><?php echo e(__('Upload 1920X970 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="slider">
                                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="mg">
                                                <div class="img">
                                                    <img class="img-fluid" src="<?php echo e(asset('assets/front/img/'.$slider->image )); ?>" alt="">
                                                    <div class="overlay">
                                                        <a href="<?php echo e(route('admin.slider.delete', $slider->id )); ?>">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\porichoy\core\resources\views/admin/home/slider/index.blade.php ENDPATH**/ ?>