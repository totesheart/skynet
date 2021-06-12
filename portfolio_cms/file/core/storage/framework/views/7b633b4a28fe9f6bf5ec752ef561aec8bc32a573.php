<?php $__env->startSection('content'); ?>

<div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Educations')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Educations')); ?></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header with-border">
                        <h3 class="card-title mt-1"><?php echo e(__('Edit Education')); ?></h3>
                        <div class="card-tools">
                        <a href="<?php echo e(route('admin.education')); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                        </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.education.update', $education->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="school" class="col-sm-2 control-label"><?php echo e(__('School')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="school" placeholder="<?php echo e(__('School')); ?>" value="<?php echo e($education->school); ?>">
                                    <?php if($errors->has('school')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('school')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="field" class="col-sm-2 control-label"><?php echo e(__('Field')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="field" placeholder="<?php echo e(__('Field')); ?>" value="<?php echo e($education->field); ?>">
                                    <?php if($errors->has('field')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('field')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-2 control-label"><?php echo e(__('Description')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" rows="3" placeholder="<?php echo e(__('Description')); ?>"><?php echo e($education->description); ?></textarea>
                                    <?php if($errors->has('description')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('description')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="from_date"><?php echo e(__('From Year')); ?><span class="text-danger">*</span></label>
                                <div class="input-group col-sm-10">
                                    <div class="if">
                                        <input type="text" class="form-control" name="from_date" id="from_date" placeholder="<?php echo e(__('From Year')); ?>" value="<?php echo e($education->from_date); ?>">
                                    <?php if($errors->has('from_date')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('from_date')); ?> </p>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="date_to_grup">
                                <label class="col-sm-2 control-label" for="date_to"><?php echo e(__('Year To')); ?><span class="text-danger">*</span></label>
                                <div class="input-group col-sm-10">
                                    <div class="if">
                                        <input type="text" class="form-control" name="date_to" id="date_to" placeholder="<?php echo e(__('Year To')); ?>" value="<?php echo e($education->date_to); ?>">
                                    <br>
                                    <?php if($errors->has('date_to')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('date_to')); ?> </p>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="icheck-success d-inline date_to_grup_target">
                                        <input type="checkbox" id="date_check" value="1" name="current" <?php echo e($education->current == 1 ? 'checked' : ''); ?>>
                                        <label for="date_check">
                                                <?php echo e(__('I Currently Study')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\porichoy\core\resources\views/admin/education/edit.blade.php ENDPATH**/ ?>