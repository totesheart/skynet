<?php if($setting->isfaq == 1): ?>
<!-- Blog Area Start -->
<section id="faq" class="faq section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->faq_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-box">
                    <div class="accordion" id="tour-faq">
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->first): ?>

                                <div class="single-accordion ">
                                    <div class="accordion-header">
                                        <h4 class="title" data-toggle="collapse"
                                            data-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="true"
                                            aria-controls="collapse<?php echo e($faq->id); ?>">
                                             <?php echo e($faq->title); ?>

                                        </h4>
                                    </div>

                                    <div id="collapse<?php echo e($faq->id); ?>" class="collapse show" data-parent="#tour-faq">
                                        <div class="accordion-body">
                                            <?php echo e($faq->description); ?>

                                        </div>
                                    </div>
                                </div>

                            <?php else: ?>

                                <div class="single-accordion ">
                                    <div class="accordion-header">
                                        <h4 class="title" data-toggle="collapse"
                                            data-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="false"
                                            aria-controls="collapse<?php echo e($faq->id); ?>">
                                             <?php echo e($faq->title); ?>

                                        </h4>
                                    </div>

                                    <div id="collapse<?php echo e($faq->id); ?>" class="collapse" data-parent="#tour-faq">
                                        <div class="accordion-body">
                                            <?php echo e($faq->description); ?>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video-box ">
                    <div class="video">
                        <h4 class="title">
                            <?php echo e($setting->faq_video_title); ?>

                        </h4>
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $setting->faq_video; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->
<?php endif; ?><?php /**PATH C:\laragon\www\porichoy\core\resources\views/front/partials/section-partials/faq.blade.php ENDPATH**/ ?>