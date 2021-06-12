<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Knowledge')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Knowledge')); ?></li>
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
                    <h3 class="card-title mt-1"><?php echo e(__('Knowledge List')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('admin.knowledge.add')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add Service')); ?>

                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table id="idtable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo e(__('Content')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $knowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$knowledge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$id); ?></td>
                                <td  width="50%">
                                    <?php echo e($knowledge->content); ?>

                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.knowledge.edit', $knowledge->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>
                                    <a href="<?php echo e(route('admin.knowledge.delete', $knowledge->id )); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i><?php echo e(__('Delete')); ?></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\local\liveporichoy\core\resources\views/admin/skill/knowledge/index.blade.php ENDPATH**/ ?>