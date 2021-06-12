<?php if($setting->ishome == 1): ?>
<!--Hero Area Start-->
<?php if($setting->home_version == 'static'): ?>
    <?php if ($__env->exists('front.partials.static')) echo $__env->make('front.partials.static', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($setting->home_version == 'slider'): ?>
    <?php if ($__env->exists('front.partials.slider')) echo $__env->make('front.partials.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($setting->home_version == 'video'): ?>
    <?php if ($__env->exists('front.partials.video')) echo $__env->make('front.partials.video', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($setting->home_version == 'particles'): ?>
    <?php if ($__env->exists('front.partials.particles')) echo $__env->make('front.partials.particles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($setting->home_version == 'water'): ?>
    <?php if ($__env->exists('front.partials.water')) echo $__env->make('front.partials.water', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($setting->home_version == 'parallax'): ?>
    <?php if ($__env->exists('front.partials.parallax')) echo $__env->make('front.partials.parallax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<!--Hero Area End-->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\liveporichoy\core\resources\views/front/partials/section-partials/home.blade.php ENDPATH**/ ?>