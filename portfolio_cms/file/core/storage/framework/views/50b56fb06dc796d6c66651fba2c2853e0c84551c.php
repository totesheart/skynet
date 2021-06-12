<?php if($setting->istestimonial == 1): ?>
<!-- Testimonial Area Start -->
<section class="testimonial section-padding" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->testimonial_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-review ">
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
                    <div class="stars">
                        <?php for($i = 0; $i < $testimonial->rating; $i++): ?>
                            <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </div>
                    <div class="content">
                        <p>
                            <?php echo e($testimonial->message); ?>

                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\liveporichoy\core\resources\views/front/partials/section-partials/testimonials.blade.php ENDPATH**/ ?>