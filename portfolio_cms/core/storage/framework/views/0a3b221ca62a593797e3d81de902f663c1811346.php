

<?php $__env->startSection('content'); ?>

    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
						<?php echo e($setting->contact_title); ?>

                    </h2>
                    <ul class="links">
                        <li>
                            <a href="<?php echo e(route('front.index')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li>
                            <?php echo e(__('Contact')); ?>

                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</header>
	<!-- Bread Crumb Area End -->


	<?php if ($__env->exists('front.partials.section-partials.contact')) echo $__env->make('front.partials.section-partials.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\local\liveporichoy\core\resources\views/front/contact.blade.php ENDPATH**/ ?>