<?php $__env->startSection('content'); ?>

<div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Pricing Plans')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Pricing Plans')); ?></li>
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
                    <h3 class="card-title mt-1"><?php echo e(__('Pricing Plan List')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('admin.pricing.add')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add A Plan')); ?>

                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table id="idtable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo e(__('Plan Name')); ?></th>
                                <th><?php echo e(__('Currency')); ?></th>
                                <th><?php echo e(__('Price')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $pricingplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$pricingplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$id); ?></td>
                            <td><?php echo e($pricingplan->plan_name); ?></td>
                            <td><?php echo e($pricingplan->currency); ?></td>
                            <td><?php echo e($pricingplan->price); ?></td>
                            <td>
                                <?php if($pricingplan->status == 1): ?>
                                    <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                <?php else: ?>
                                    <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                <?php endif; ?>
                            </td>
                            <td width="18%">
                                <a href="<?php echo e(route('admin.pricing.edit', $pricingplan->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>
                                <a href="<?php echo e(route('admin.pricing.delete', $pricingplan->id )); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i><?php echo e(__('Delete')); ?></a>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/admin/pricing/index.blade.php ENDPATH**/ ?>