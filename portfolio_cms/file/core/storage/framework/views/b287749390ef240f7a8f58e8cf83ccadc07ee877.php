<?php if($setting->ispricingplan == 1): ?>
<section class="pricing-palden section-padding" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->pricingplan); ?></h2>
                    <span><?php echo e($setting->pricingplan); ?></span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $pricingplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricingplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='col-xl-4 col-md-6'>
                <div class='pricing-item'>
                    <div class='pricing-deco'>
                        <div class='pricing-price '><span class='pricing-currency'><?php echo e($pricingplan->currency); ?></span><?php echo e($pricingplan->price); ?></div>
                        <h3 class='pricing-title '><?php echo e($pricingplan->plan_name); ?></h3>
                    </div>
                    <div class="list ">
                        <?php echo $pricingplan->content; ?>

                    </div>
                    <?php if($setting->iscontact == 1): ?>
                        <a href="#contact"
                        class="mybtn mybtn-bg "><span><?php echo e(__('Get Start')); ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/front/partials/section-partials/pricingplan.blade.php ENDPATH**/ ?>