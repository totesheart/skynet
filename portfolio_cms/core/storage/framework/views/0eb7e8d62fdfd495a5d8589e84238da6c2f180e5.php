

<?php $__env->startSection('content'); ?>

    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
					<?php echo e($setting->blog_title); ?>

                    </h2>
                    <ul class="links">
                        <li>
                            <a href="<?php echo e(route('front.index')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li>
                            <?php echo e(__('Blogs')); ?>

                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</header>
	<!-- Bread Crumb Area End -->

	<!-- Blog List  Area Start -->
	<section class="blogs blog-page sidebar section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
					<div class="row">
						<?php if(count($blogs) == 0): ?>
							<div class="col-md-12">
							  <div class="bg-light py-5">
								<h3 class="text-center"><?php echo e(__('NO BLOG FOUND')); ?></h3>
							  </div>
							</div>
						<?php else: ?>
						<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-6 col-md-6">
								<div class="blog-box ">
									<div class="blog-images">
										<img src="<?php echo e(asset('assets/front/img/'.$blog->main_image)); ?>" class="img-fluid" alt="">
									</div>
									<div class="blog-details">
										<ul class="post-meta-one">
											<li><p><i class="fa fa-user"></i> <?php echo e(__('By,')); ?> <span class="username"><?php echo e(__('Admin')); ?></span> </p></li>
											<li><p><i class="fa fa-clock-o"></i> <?php echo e(date ( 'd M, Y', strtotime($blog->created_at) )); ?> </p></li>
										</ul>

										<h3>
											<a class="blog-title" href='<?php echo e(route('front.blogdetails', $blog->slug)); ?>'>
												<?php echo e(strlen($blog->title) > 40 ? substr($blog->title, 0, 40) . '...' : $blog->title); ?> 
											</a>
										</h3>
										<a href="<?php echo e(route('front.blogdetails', $blog->slug)); ?>" class="readmore-btn"><span><?php echo e(__('Read More')); ?></span></a>

									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</div>
						
					<?php if($blogs->total() > 6): ?>
					<div class="row">
					   <div class="col-md-12">
						  <nav class="pagination-nav <?php echo e($blogs->total() > 6 ? 'mb-4' : ''); ?>">
							<?php echo e($blogs->appends(['term'=>request()->input('term'), 'month'=>request()->input('month'), 'year'=>request()->input('year'), 'category' => request()->input('category')])->links()); ?>

						  </nav>
					   </div>
					</div>
				  <?php endif; ?>

                </div>
                <div class="col-lg-4">
					<div class="blog-aside">
							<div class="serch-form ">
								<form action="#">
									<form action="<?php echo e(route('front.blogs', ['category' => request()->input('category'), 'month' => request()->input('month'), 'year' => request()->input('year')])); ?>" method="GET">
										<div class="searchbar">
											<input name="category" type="hidden" value="<?php echo e(request()->input('category')); ?>">
											<input name="month" type="hidden" value="<?php echo e(request()->input('month')); ?>">
											<input name="year" type="hidden" value="<?php echo e(request()->input('year')); ?>">
											<input name="term" type="text" placeholder="<?php echo e(__('Search Blogs')); ?>" value="<?php echo e(request()->input('term')); ?>">
											<button type="submit"><i class="fa fa-search"></i></button>
										</div>
									</form>
								</form>
								</div>
								<div class="categori ">
								<h4 class="title"><?php echo e(__('Categories')); ?></h4>
								<span class="separator"></span>
								<ul class="categori-list">
									<?php $__currentLoopData = $bcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li class=" <?php if(request()->input('category') == $bcategory->id): ?> active <?php endif; ?>">
											<a href="<?php echo e(route('front.blogs', ['term'=>request()->input('term'), 'category'=>$bcategory->id, 'month' => request()->input('month'), 'year' => request()->input('year')])); ?>">
												<span><i class="fas fa-angle-double-right"></i><?php echo e($bcategory->name); ?></span>
											</a>
										</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
								</div>
								<div class="recent-post-widget ">
								<h4 class="title"><?php echo e(__('Recent Post')); ?></h4>
								<span class="separator"></span>
									<ul class="post-list">
									<?php $__currentLoopData = $latestblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <div class="post">
                                                    <div class="post-img">
                                                        <img src="<?php echo e(asset('assets/front/img/'.$latestblog->main_image)); ?>" alt="">
                                                    </div>
                                                    <div class="post-details">
                                                        <a href="<?php echo e(route('front.blogdetails', $latestblog->slug)); ?>">
                                                            <h4 class="post-title">
                                                                    <?php echo e(strlen($latestblog->title) > 40 ? substr($latestblog->title, 0, 40) . '...' : $latestblog->title); ?> 
                                                            </h4>
                                                        </a>
                                                        <p class="date">
                                                                <?php echo e(date ( 'd M, Y', strtotime($latestblog->created_at) )); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </li> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
								<div class="archives ">
								<h4 class="title"><?php echo e(__('Archives')); ?></h4>
								<span class="separator"></span>
								<ul class="archives-list">
										<?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										  <?php
											$myArr = explode('-', $archive->date);
											$monthNum  = $myArr[0];
											$dateObj   = DateTime::createFromFormat('!m', $monthNum);
											$monthName = $dateObj->format('F');
										  ?>
										  <li class="single-category <?php if(request()->input('month') == $myArr[0] && request()->input('year') == $myArr[1]): ?> active <?php endif; ?>">
											<a href="<?php echo e(route('front.blogs', ['term'=>request()->input('term'), 'category'=>request()->input('category'),'month'=>$myArr[0], 'year'=>$myArr[1]])); ?>"><?php echo e($monthName); ?> <?php echo e($myArr[1]); ?></a>
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									 </ul>
								</div>
				</div>
                </div>
            </div>
        </div>
	</section>
	<!-- Blog List  Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\liveporichoy\core\resources\views/front/blogs.blade.php ENDPATH**/ ?>