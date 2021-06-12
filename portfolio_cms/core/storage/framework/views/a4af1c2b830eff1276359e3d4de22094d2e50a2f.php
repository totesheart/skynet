<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Portfolios')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Portfolios')); ?></li>
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
                    <div class="card-header with-border">
                    <h3 class="card-title mt-1"><?php echo e(__('Portfolios List')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('admin.portfolio.add')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add Portfolio')); ?>

                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('Image')); ?></th>
                                    <th><?php echo e(__('Title')); ?></th>
                                    <th><?php echo e(__('Client')); ?></th>
                                    <th><?php echo e(__('Duration')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$id); ?></td>
                                    <td>
                                        <img class="w-100" src="<?php echo e(asset('assets/front/img/'.$portfolio->featured_image)); ?>" alt="">
                                    </td>
                                    <td><?php echo e($portfolio->title); ?></td>
                                    <td><?php echo e($portfolio->client_name); ?></td>
                                    <td><?php echo e(date('jS M, Y', strtotime($portfolio->start_date))); ?> - <?php echo e(date('jS M, Y', strtotime($portfolio->submission_date))); ?></td>
                                    <td><?php if($portfolio->status == 1): ?>
                                            <span class="badge badge-success"><?php echo e(__('Completed')); ?></span>
                                        <?php else: ?>
                                            <span class="badge badge-warning"><?php echo e(__('In Progress')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td width="18%">
                                        <a href="<?php echo e(route('admin.portfolio.edit', $portfolio->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>
                                        <a href="<?php echo e(route('admin.portfolio.delete', $portfolio->id )); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i><?php echo e(__('Delete')); ?></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <?php if($count > 10): ?>
                    <div class="card-footer clearfix">
                        <?php echo e($portfolios->links()); ?>

                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\liveporichoy\core\resources\views/admin/portfolios/index.blade.php ENDPATH**/ ?>