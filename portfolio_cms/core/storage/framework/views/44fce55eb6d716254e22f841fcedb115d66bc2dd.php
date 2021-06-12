<?php $__env->startSection('content'); ?>


    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
					<?php echo e(__('Portfolio Details')); ?>

                    </h2>
                    <ul class="links">
                        <li>
                            <a href="<?php echo e(route('front.index')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li>
                            <?php echo e(__('Portfolio Details')); ?>

                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</header>
	<!-- Bread Crumb Area End -->

    <!-- Portfolio Details Area Start -->
	<div class="portfolio-details section-padding mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-content">
                    <div class="main-image idgallery">
                        <?php if($sliders->count() > 0): ?>
                            <div class="big-image popup-gallery">
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(asset('assets/front/img/'.$slider->image)); ?>">
                                        <img src="<?php echo e(asset('assets/front/img/'.$slider->image)); ?>" alt="">
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="slider-img">
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="slid-item">
                                        <img src="<?php echo e(asset('assets/front/img/'.$slider->image)); ?>" alt="">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?> 
                            <img src="<?php echo e(asset('assets/front/img/'.$portfolio->titlefeatured_image)); ?>" alt="">
                        <?php endif; ?>

                    </div>
                    <div class="content">
                        <h3 class="title"><?php echo e($portfolio->title); ?></h3>
                        <?php echo $portfolio->content; ?>

                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <ul>
                            <li>
                                   <h4> <?php echo e(__('Service')); ?> :</h4> <span><?php echo e($portfolio->service->title); ?></span>
                            </li>
                            <li>
                                    <h4><?php echo e(__('Client name')); ?> :</h4>  <span><?php echo e($portfolio->client_name); ?></span>
                            </li>
                            <li>
                                <h4><?php echo e(__('Start Date')); ?> :</h4> <span><?php echo e(date('jS M, Y', strtotime($portfolio->start_date))); ?></span>
                            </li>
                            <li>
                                <h4><?php echo e(__('End Date')); ?> :</h4> <span><?php echo e(date('jS M, Y', strtotime($portfolio->submission_date))); ?></span>
                            </li>
                            <li>
                                    <h4><?php echo e(__('Status')); ?> :</h4> <span><?php echo e($portfolio->status == 1 ? 'Completed' : 'In Progress'); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Details Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/front/portfolio-details.blade.php ENDPATH**/ ?>