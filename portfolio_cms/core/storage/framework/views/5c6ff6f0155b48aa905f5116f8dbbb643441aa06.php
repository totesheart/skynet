<?php $__env->startSection('content'); ?>


    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
                        <?php echo e($service->title); ?>

                    </h2>
                    <ul class="links">
                        <li>
                            <a href="<?php echo e(route('front.index')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li>
                            <?php echo e($service->title); ?>

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
                        <?php if($service->featured_image != null): ?>
                        <div class="main-image">
                        <img src="<?php echo e(asset('assets/front/img/'.$service->featured_image)); ?>" alt="">
                        </div>
                    <?php endif; ?>
                    <div class="content">
                    <h3 class="title"><?php echo e($service->title); ?></h3>
                        <div class="sort-dec mb-3">
                            <?php echo $service->description; ?>

                        </div>
                        <?php echo $service->content; ?>

                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info service-category">
                        <div class="heading">
                            <h4 class="title">
                                <?php echo e($setting->service_title); ?>

                            </h4>
                        </div>
                        <ul class="service-list">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('front.servicedetails', $service->id)); ?>" class="service <?php if(request()->path() == 'service-details/'.$service->id): ?> active <?php endif; ?>"><i class="fas fa-angle-double-right"></i><?php echo e($service->title); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Details Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/front/service-details.blade.php ENDPATH**/ ?>