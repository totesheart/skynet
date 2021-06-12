<section class="home home-bg section" id="home">
    <div id="bgndVideo" data-property="{videoURL:'<?php echo e($setting->hero_section_video); ?>',containment:'#home', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
    <div class="bg-overlay"></div>
    <div class="home-table">
        <div class="home-table-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/front/partials/video.blade.php ENDPATH**/ ?>