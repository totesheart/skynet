<?php $__env->startSection('content'); ?>

<div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('FAQ')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('FAQ')); ?></li>
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
                    <h3 class="card-title"><?php echo e(__('Update Home Video')); ?> </h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.faqvideo.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label  class="col-sm-12 control-label"><?php echo e(__('FAQ Video Title')); ?> <span
                                                class="text-danger">*</span>
                                            </label>

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="faq_video_title" value="<?php echo e($setting->faq_video_title); ?>" placeholder="<?php echo e(__('Enter Video Title')); ?>">
                                        <?php if($errors->has('faq_video_title')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('faq_video_title')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-12 control-label"><?php echo e(__('FAQ Video Link')); ?> <span
                                                class="text-danger">*</span>
                                            </label>

                                    <div class="col-sm-12">
                                        <textarea name="faq_video" class="form-control" cols="30" rows="3" placeholder="<?php echo e(__('Enter Video Link')); ?>"><?php echo e($setting->faq_video); ?></textarea>
                                        <?php if($errors->has('faq_video')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('faq_video')); ?> </p>
                                        <?php endif; ?>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                    <h3 class="card-title mt-1"><?php echo e(__('FAQ List')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('admin.faq.add')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add FAQ')); ?>

                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo e(__('Title')); ?></th>
                                <th><?php echo e(__('Description')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$id); ?></td>
                            <td><?php echo e($faq->title); ?></td>
                            <td width="40%"><?php echo e($faq->description); ?></td>
                            <td width="18%">
                                <a href="<?php echo e(route('admin.faq.edit', $faq->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>
                                <a href="<?php echo e(route('admin.faq.delete', $faq->id )); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i><?php echo e(__('Delete')); ?></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\porichoy\core\resources\views/admin/faq/index.blade.php ENDPATH**/ ?>