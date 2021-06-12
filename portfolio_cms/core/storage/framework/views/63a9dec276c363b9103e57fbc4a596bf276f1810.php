<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('About')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('About')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="card  card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__('Update About Information')); ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <?php if($setting->themes == 'agency'): ?>
                                <form class="form-horizontal" action="<?php echo e(route('admin.update_about_me')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('About Image')); ?>  <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/'.$about->profile_image)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="profile_image"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="profile_image" id="profile_image">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 445X480 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                            </div>
            
                                        </div>

                                        <div class="form-group row">
                                            <label for="about_title" class="col-sm-2 control-label"> <?php echo e(__('About Title')); ?> <span class="text-danger">*</span> </label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="about_title" value="<?php echo e($about->about_title); ?>">
                                                <?php if($errors->has('about_title')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('about_title')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="about_text" class="col-sm-2 control-label"> <?php echo e(__('About Text')); ?> <span class="text-danger">*</span>  </label>
            
                                            <div class="col-sm-10">
                                                    <textarea class="form-control textarea" name="about_text" rows="4"><?php echo e($about->about_text); ?></textarea>
                                                    <?php if($errors->has('about_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('about_text')); ?> </p>
                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                            </div>
                                        </div>
            
                                 </form>
                            <?php else: ?>
                            <form class="form-horizontal" action="<?php echo e(route('admin.update_about_me')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Profile Image')); ?> <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/'.$about->avatar)); ?>" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="avatar"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="avatar" id="avatar">
                                            </div>
                                            <p class="help-block text-info"><?php echo e(__('Upload 180X180 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                        </div>
        
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Big Profile Image')); ?>  <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e(asset('assets/front/img/'.$about->profile_image)); ?>" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="profile_image"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="profile_image" id="profile_image">
                                            </div>
                                            <p class="help-block text-info"><?php echo e(__('Upload 445X480 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                        </div>
        
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label"><?php echo e(__('Name')); ?> <span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" value="<?php echo e($about->name); ?>">
                                            <?php if($errors->has('name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
         
                                    <div class="form-group row">
                                        <label for="age" class="col-sm-2 control-label"> <?php echo e(__('Age')); ?> <span class="text-danger">*</span>  </label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="age" value="<?php echo e($about->age); ?>">
                                            <?php if($errors->has('age')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('age')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="residence" class="col-sm-2 control-label"> <?php echo e(__('Residence')); ?> <span class="text-danger">*</span>  </label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="residence" value="<?php echo e($about->residence); ?>">
                                            <?php if($errors->has('residence')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('residence')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="position_type" class="col-sm-2 control-label"> <?php echo e(__('Position Type')); ?> <span class="text-danger">*</span>  </label>
        
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" name="position_type" value="<?php echo e($about->position_type); ?>">
                                                <?php if($errors->has('position_type')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('position_type')); ?> </p>
                                                <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="about_title" class="col-sm-2 control-label"> <?php echo e(__('About Title')); ?> <span class="text-danger">*</span> </label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="about_title" value="<?php echo e($about->about_title); ?>">
                                            <?php if($errors->has('about_title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="about_text" class="col-sm-2 control-label"> <?php echo e(__('About Text')); ?> <span class="text-danger">*</span>  </label>
        
                                        <div class="col-sm-10">
                                                <textarea class="form-control textarea" name="about_text" rows="4"><?php echo e($about->about_text); ?></textarea>
                                                <?php if($errors->has('about_text')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('about_text')); ?> </p>
                                                <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="resume" class="col-sm-2 control-label"> <?php echo e(__('Resume')); ?> <span class="text-danger">*</span>  </label>
        
                                        <div class="col-sm-10">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="resume"><?php echo e(__('Choose a PDF file...')); ?></label>
                                                <input type="file" class="custom-file-input" name="resume" id="resume">
                                            </div>
                                            <p class="help-block text-info"><?php echo e(__('Required Formate PDF *')); ?>

                                            </p>
                                            <?php if($errors->has('resume')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('resume')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="freelance" class="col-sm-2 control-label"> <?php echo e(__('Freelance')); ?> <span class="text-danger">*</span>  </label>
                                        <div class="col-sm-10">

                                                <div class="icheck-success d-inline mr-2">
                                                        <input type="radio" id="available" name="freelance"  <?php echo e($about->freelance == 'Available' ? 'checked' : ' '); ?>  value="Available">
                                                        <label for="available"><?php echo e(__('Available')); ?></label>
                                                </div>

                                                <div class="icheck-success d-inline">
                                                    <input type="radio" id="unavailable" name="freelance"  <?php echo e($about->freelance == 'Unavailable' ? 'checked' : ' '); ?> value="Unavailable">
                                                    <label for="unavailable"><?php echo e(__('Unavailable')); ?></label>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                        </div>
                                    </div>
        
                            </form>
                            <?php endif; ?>
                            </div>
                        <!-- /.box-body -->
                    </div>
        
                </div>
            </div>
    </div>
  

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/admin/about/about-me.blade.php ENDPATH**/ ?>