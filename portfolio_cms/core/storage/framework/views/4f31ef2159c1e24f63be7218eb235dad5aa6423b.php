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
	<div class="portfolio-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
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
                    <div class="aside-contact-form">
                        <div class="heading">
                            <h4 class="title">
                                <?php echo e($setting->contact_title); ?>

                            </h4>
                        </div>
                            <div class="contact-form">
                                    <form id="contact-form" method="post" action="<?php echo e(route('front.sendmail')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <i class="fa fa-user-o"></i>
                                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="<?php echo e(__('Name*')); ?>" required="required"
                                                            data-error="Name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <i class="fa fa-envelope-o"></i>
                                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="<?php echo e(__('Email*')); ?>" required="required"
                                                            data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <i class="fa fa-question-circle-o"></i>
                                                        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="<?php echo e(__('Subject*')); ?>" required="required"
                                                            data-error="Subject is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <i class="fa fa-comment-o"></i>
                                                        <textarea id="form_message" name="message" class="form-control" placeholder="<?php echo e(__('Message*')); ?>" rows="7" required="required"
                                                            data-error="Please,leave us a message."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="mybtn mybtn-bg"><span><?php echo e(__('Send Message')); ?></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form> <!-- End Contact From -->
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Details Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/service-details.blade.php ENDPATH**/ ?>