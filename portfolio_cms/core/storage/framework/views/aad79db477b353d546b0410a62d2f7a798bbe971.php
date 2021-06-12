<?php if($setting->ispricingplan == 1): ?>
<section class="pricing-palden section-padding" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->pricingplan); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $pricingplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricingplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='col-lg-4 col-md-6'>
                <div class='pricing-item '>
                    <div class='pricing-deco'>
                        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                        </svg>
                        <div class='pricing-price'><span class='pricing-currency'><?php echo e($pricingplan->currency); ?></span><?php echo e($pricingplan->price); ?></div>
                        <h3 class='pricing-title'><?php echo e($pricingplan->plan_name); ?></h3>
                    </div>
                    <div class="list">
                        <?php echo $pricingplan->content; ?>

                    </div>
                    <?php if($setting->iscontact == 1): ?>
                        <a href="<?php echo e(route('front.contact')); ?>"
                        class="mybtn mybtn-bg"><span><?php echo e(__('Get Start')); ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/partials/section-partials/pricingplan.blade.php ENDPATH**/ ?>