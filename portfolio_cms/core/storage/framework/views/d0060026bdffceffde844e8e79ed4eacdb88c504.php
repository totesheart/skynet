<?php if($setting->isabout == 1): ?>
<!-- About Area Start -->
<div id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-box">
                    <div class="row">
                        <div class="col-md-5 d-flex align-self-center">
                            <div class="author-image">
                                <img src="<?php echo e(asset('assets/front/img/'.$abouts->profile_image)); ?>" alt="Author Image">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-self-center">
                            <div class="about-content">
                                <!-- Single Tab -->
                                <h4 class="about-heading"><?php echo e($abouts->about_title); ?></h4>
                                <p>
                                    <?php echo e($abouts->about_text); ?>

                                </p>
                                <?php if($setting->iscontact == 1): ?>
                                <a href="<?php echo e(route('front.contact')); ?>"
                                class="mybtn mybtn-bg"><span><?php echo e(__('Contact')); ?></span></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</div>
<!-- About Area End -->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/partials/section-partials/agency-about.blade.php ENDPATH**/ ?>