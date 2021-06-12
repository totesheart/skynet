<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Fun Facts')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Fun Facts')); ?></li>
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
                    <h3 class="card-title mt-1"><?php echo e(__('Fun Facts List')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('admin.funfact_add')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add Client')); ?>

                        </a>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                        <th>#</th>
                        <th><?php echo e(__('Icon')); ?></th>
                        <th><?php echo e(__('Name')); ?></th>
                        <th><?php echo e(__('Value')); ?></th>
                        <th><?php echo e(__('Action')); ?></th>
                        </tr>
                        <?php $__currentLoopData = $funfacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$funfact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$id); ?></td>
                            <td>
                                <img  class="w-60" src="<?php echo e(asset('assets/front/img/'.$funfact->icon)); ?>" alt="">
                            </td>
                            <td><?php echo e($funfact->name); ?></td>
                            <td><?php echo e($funfact->value); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.funfact_edit', $funfact->id )); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>
                                <a href="<?php echo e(route('admin.funfact_delete', $funfact->id )); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i><?php echo e(__('Delete')); ?></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody></table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/admin/about/funfact/index.blade.php ENDPATH**/ ?>