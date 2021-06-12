<?php if($setting->isinterests == 1): ?>
<!-- My Interest Area Start -->
<div id="interests" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->interest_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $interests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6">
                    <!-- Single stat  -->
                    <div class="interest_box ">
                        <div class="img">
                            <img src="<?php echo e(asset('assets/front/img/'.$interest->icon)); ?>" alt="">
                        </div>
                        <h3 class="name"><?php echo e($interest->name); ?></h3>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!--/.row -->
    </div>
    <!--/.container -->
</div>
<!-- My Interest Area End -->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/partials/section-partials/interests.blade.php ENDPATH**/ ?>