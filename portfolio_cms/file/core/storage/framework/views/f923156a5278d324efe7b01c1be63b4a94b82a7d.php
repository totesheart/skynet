<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Pricing Plan')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Pricing Plan')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card  card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1"><?php echo e(__('Edit Pricing Plan')); ?></h3>
                        <div class="card-tools">
                        <a href="<?php echo e(route('admin.pricing')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                        </a>
                        </div>
                        </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.pricing.update', $pricingplan->id )); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="plan_number" value="three">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label"><?php echo e(__('Currency')); ?> 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="currency" value="<?php echo e($pricingplan->currency); ?>" placeholder="<?php echo e(__('Enter Currency')); ?>">
                                            <?php if($errors->has('currency')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('currency')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label"><?php echo e(__('Price')); ?> 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="price" value="<?php echo e($pricingplan->price); ?>" placeholder="<?php echo e(__('Enter Price')); ?>">
                                            <?php if($errors->has('price')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('price')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label"><?php echo e(__('Plan Name')); ?> 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="plan_name" value="<?php echo e($pricingplan->plan_name); ?>" placeholder="<?php echo e(__('Plan Name')); ?>">
                                            <?php if($errors->has('plan_name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('plan_name')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label"><?php echo e(__('Content')); ?> 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <textarea name="content" class="form-control textarea"  rows="4" placeholder="<?php echo e(__('Write Content')); ?>"><?php echo e($pricingplan->content); ?></textarea>
                                            <?php if($errors->has('content')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('content')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-12 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-12">
                                            <select class="form-control" name="status">
                                                <option value="0" <?php echo e($pricingplan->status == 0 ? 'selected' : ''); ?>><?php echo e(__('Unpublish')); ?></option>
                                                <option value="1" <?php echo e($pricingplan->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Publish')); ?></option>
                                                </select>
                                            <?php if($errors->has('status')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="form-group row mt-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/admin/pricing/edit.blade.php ENDPATH**/ ?>