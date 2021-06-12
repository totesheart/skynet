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
                    <h3 class="card-title"><?php echo e(__('Message List:')); ?></h3>
                        <div class="card-tools">
                        <a href="<?php echo e(route('admin.message.deleteall')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-trash"></i><?php echo e(__('Delete All')); ?>

                        </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table  id="idtable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Email')); ?></th>
                                <th><?php echo e(__('Subject')); ?></th>
                                <th><?php echo e(__('Sending Time')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$id); ?></td>
                                <td>
                                    <?php echo e($message->name); ?>

                                </td> 
                                <td>
                                    <?php echo e($message->email); ?>

                                </td> 
                                <td>
                                    <?php echo e($message->subject); ?>

                                </td>
                                <td><?php echo e($message->created_at->diffForHumans()); ?></td> 
                                <td>
                                    <a href="<?php echo e(route('admin.message.view', $message->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="mailto:<?php echo e($message->email); ?>" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i></a>
                                    <a href="<?php echo e(route('admin.message.delete', $message->id )); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\local\liveporichoy\core\resources\views/admin/message/index.blade.php ENDPATH**/ ?>