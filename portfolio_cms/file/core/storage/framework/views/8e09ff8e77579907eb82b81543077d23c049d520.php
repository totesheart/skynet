<?php if($setting->istestimonial == 1): ?>
<!-- Testimonial Area Start -->
<section class="testimonial section-padding" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2 class=""><?php echo e($setting->testimonial_title); ?></h2>
                    <span class=""><?php echo e($setting->testimonial_title); ?></span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="testimonial-slider">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slider-item">
                        <div class="single-review">
                            <div class="reviewr">
                                <div class="img">
                                    <img src="<?php echo e(asset('assets/front/img/'.$testimonial->image)); ?>" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">
                                        <?php echo e($testimonial->name); ?>

                                    </h4>
                                    <p>
                                        <?php echo e($testimonial->position); ?>

                                    </p>
                                </div>
                            </div>
                            <div class="main-content">
                                
                            <div class="stars">
                                <?php for($i = 0; $i < $testimonial->rating; $i++): ?>
                                    <i class="fas fa-star"></i>
                                <?php endfor; ?>
                            </div>
                                <p>
                                    <?php echo e($testimonial->message); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Testimonial Area End -->
<?php endif; ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/front/partials/section-partials/testimonials.blade.php ENDPATH**/ ?>