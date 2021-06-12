<?php if($setting->isabout == 1): ?>
<!-- About Area Start -->
<div id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-box ">
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
                                    <?php echo $abouts->about_text; ?>

                                </p>
                                <ul class="info-list">
                                    <li>
                                        <span class="title"><?php echo e(__('Age :')); ?></span>
                                        <span class="value"><?php echo e($abouts->age); ?></span>
                                    </li>
                                    <li>
                                        <span class="title"><?php echo e(__('Residence :')); ?></span>
                                        <span class="value"><?php echo e($abouts->residence); ?></span>
                                    </li>
                                    <li>
                                        <span class="title"><?php echo e(__('Address :')); ?></span>
                                        <span class="value"><?php echo e($abouts->address); ?></span>
                                    </li>
                                    <li>
                                        <span class="title"><?php echo e(__('E-mail :')); ?></span>
                                        <span class="value"><a href="mailto:<?php echo e($abouts->mail); ?>"><?php echo e($abouts->mail); ?></a></span>
                                    </li>
                                    <li>
                                        <span class="title"><?php echo e(__('Phone :')); ?></span><span
                                                class="value"><?php echo e($abouts->phone); ?></span>
                                    </li>
                                    <li>
                                        <span class="title"><?php echo e(__('Freelance :')); ?></span><span
                                                class="value"><?php echo e($abouts->freelance); ?></span>
                                    </li>
                                </ul>
                                <?php if($setting->themes == 'default'): ?>
                                    <?php if($setting->iscontact == 1): ?>
                                    <a href="<?php echo e(route('front.contact')); ?>"
                                    class="mybtn mybtn-bg"><span><?php echo e(__('Contact Me')); ?></span></a>
                                    <?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/partials/section-partials/about.blade.php ENDPATH**/ ?>