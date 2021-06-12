<section class="home section" id="home">
    <div class="slider">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
            <img src="<?php echo e(asset('assets/front/img/'.$slider->image)); ?>" alt="">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="bg-overlay"></div>
    <div class="home-table">
        <div class="home-table-center">
            <div class="container">
                <div class="row justify-content-center">
                    <?php if( $setting->themes == 'agency'): ?>
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h2 class="ag_title"><?php echo e($setting->ag_title); ?></h2>
                                <p class="ag_subtitle">
                                    <?php echo e($setting->ag_subtitle); ?>

                                </p>
                                <div class="header_btn">
                                    <a href="<?php echo e(route('front.contact')); ?>"
                                    class="mybtn mybtn-bg"><span><?php echo e(__('Contact')); ?></span></a>
                                </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="col-lg-12">
                        <div class="text-center">
                            <div class="profile-img">
                                <img src="<?php echo e(asset('assets/front/img/'.$abouts->avatar)); ?>" alt="">
                            </div>
                            <h2 class="name">
                                <?php echo e($abouts->name); ?>

                            </h2>
                            <h2 class="header_title"><?php echo e($abouts->position_type); ?></h2>
                            <?php if($setting->ishomesocial == 1): ?>
                            <ul class="social_home list-unstyled text-center pt-4 wrap">
                                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-inline-item">
                                        <a href="<?php echo e($social->url); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>
                            <?php if($setting->ishomedownload == 1): ?>
                            <div class="header_btn">
                                <a href="<?php echo e(asset('assets/front/file/'.$abouts->resume)); ?>" class="mybtn mybtn-light" download><span><?php echo e(__('Download CV')); ?></span></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/partials/slider.blade.php ENDPATH**/ ?>