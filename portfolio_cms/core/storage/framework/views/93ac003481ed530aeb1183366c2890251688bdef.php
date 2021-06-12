<?php if($setting->isportfolio == 1): ?>
<!-- Portfolio Area Start -->
<div id="portfolio" class="work-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->portfolio_title); ?></h2>
                </div>
            </div>
        </div>

        <div class="card-columns ">
            <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div class="single-work">
                        <img src="<?php echo e(asset('assets/front/img/'.$portfolio->featured_image)); ?>" alt="">
                        <div class="item-hover">
                            <div class="hover-content">
                                <h4><?php echo e(strlen($portfolio->title) > 35 ? substr($portfolio->title, 0, 35).'...' :  $portfolio->title); ?></h4>
                                <a href="<?php echo e(route('front.portfoliodetails', $portfolio->slug)); ?>"
                                   class="work-link"><i class="fa fa-link"></i></a>
                                <a class="lightbox" href="<?php echo e(asset('assets/front/img/'.$portfolio->featured_image)); ?>"
                                   class="work-link"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row mt-3">
            <div class="col-lg-12 text-center">
                <a class="mybtn mybtn-bg "
                   href="<?php echo e(route('front.portfolios')); ?>"><span><?php echo e(__('View All')); ?></span></a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Area End -->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\liveporichoy\core\resources\views/front/partials/section-partials/portfolio.blade.php ENDPATH**/ ?>