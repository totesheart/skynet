<?php if($setting->isfunfact == 1): ?>
<!-- Fun Fact Area Start -->
<div class="counterArea section-padding">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $funfacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funfact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6">
                    <!-- Single stat  -->
                    <div class="counter_box  ">
                        <div class="img">
                            <img class="w-60" src="<?php echo e(asset('assets/front/img/'.$funfact->icon)); ?>" alt="">
                        </div>
                        <div class="counter-w">
                            <h2 class="count"><?php echo e($funfact->value); ?></h2> <span>+</span>
                        </div>
                        <h3><?php echo e($funfact->name); ?></h3>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!--/.row -->
    </div>
    <!--/.container -->
</div>
<!-- Fun Fact Area End -->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\local\liveporichoy\core\resources\views/front/partials/section-partials/funfact.blade.php ENDPATH**/ ?>