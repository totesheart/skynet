<?php if($setting->isblog == 1): ?>
<!-- Blog Area Start -->
<section id="blog" class="blogs  section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->blog_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box ">
                        <div class="blog-images">
                            <img src="<?php echo e(asset('assets/front/img/'.$blog->main_image)); ?>" class="img-fluid"
                                    alt="">
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta-one">
                                <li><p><i class="fa fa-user"></i> <?php echo e(__('By')); ?> <span
                                                class="username"><?php echo e(__('Admin')); ?></span></p></li>
                                <li><p>
                                        <i class="fa fa-clock-o"></i> <?php echo e(date ( 'd M, Y', strtotime($blog->created_at) )); ?>

                                    </p></li>
                            </ul>
                            <h3>
                                <a class="blog-title" href='<?php echo e(route('front.blogdetails', $blog->slug)); ?>'>
                                    <?php echo e(strlen($blog->title) > 40 ? substr($blog->title, 0, 40) . '...' : $blog->title); ?>

                                </a>
                            </h3>
                            <a href="<?php echo e(route('front.blogdetails', $blog->slug)); ?>"
                                class="readmore-btn"><span><?php echo e(__('Read More')); ?></span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="mybtn mybtn-bg "
                   href="<?php echo e(route('front.blogs')); ?>"><span><?php echo e(__('View All')); ?></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/partials/section-partials/blog.blade.php ENDPATH**/ ?>