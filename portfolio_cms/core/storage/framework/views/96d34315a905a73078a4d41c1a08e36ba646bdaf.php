<?php $__env->startSection('content'); ?>


    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
					<?php echo e($setting->portfolio_title); ?>

                    </h2>
                    <ul class="links">
                        <li>
                            <a href="<?php echo e(route('front.index')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li>
                            <?php echo e(__('Portfolios')); ?>

                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</header>
    <!-- Bread Crumb Area End -->
    
  	<!-- Portfolio Area Start -->
    <div id="work" class="work-area section-padding work-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="portfolio-category">
                        <li class="<?php if(empty(request()->input('category'))): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('front.portfolios')); ?>"><?php echo e(__('All')); ?></a>
                        </li>

                        <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php if(request()->input('category') == $scategory->id): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('front.portfolios', ['category'=>$scategory->id])); ?>">
                                <?php echo e($scategory->title); ?>

                            </a>      
                        </li>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            
                <?php if(count($portfolios) == 0): ?>
                <div class="row">
                    <div class="col-lg-12 py-5 bg-light text-center mb-4">
                        <h3 class="mb-0"><?php echo e(__('NO PORTFOLIO FOUND')); ?></h3>
                    </div>
                </div>
                <?php else: ?>
                <div class="row">
                    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-work mb-30">
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
                <?php endif; ?>
           
            <?php if($portfolios->total() > 9): ?>
            <div class="row">
                <div class="col-md-12">
                    <nav class="pagination-nav">
                    <?php echo e($portfolios->appends(['category' => request()->input('category')])->links()); ?>

                    </nav>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Portfolio Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/front/portfolios.blade.php ENDPATH**/ ?>