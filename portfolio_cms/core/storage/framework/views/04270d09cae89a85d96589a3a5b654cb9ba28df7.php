<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Message')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Message')); ?></li>
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
                    <h3 class="card-title"><?php echo e(__('View Message')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('admin.message')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="border p-3 mb-4">
                                    <p><strong>Time : </strong> <?php echo e($message->created_at->diffForHumans()); ?></p>
                                    <p><strong>Name : </strong> <?php echo e($message->name); ?></p>
                                    <p><strong>Email : </strong> <?php echo e($message->email); ?></p>
                                    <p class="mb-0"><strong>Subject : </strong> <?php echo e($message->subject); ?></p>
                                </div>
                                <div class="border p-3  mb-4">
                                    <p><strong>Message : </strong></p>
                                    <p class="mb-0"><?php echo e($message->message); ?></p>
                                </div>
                                <a href="mailto:<?php echo e($message->email); ?>" class="btn btn-primary"><i class="fas fa-paper-plane"></i>Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/admin/message/view.blade.php ENDPATH**/ ?>