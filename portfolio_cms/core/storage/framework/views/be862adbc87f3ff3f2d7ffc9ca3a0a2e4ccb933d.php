<?php $__env->startSection('content'); ?>

    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
                        <?php echo e(__('Blog Details')); ?>

                    </h2>
                    <ul class="links">
                        <li>
                            <a href="<?php echo e(route('front.index')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li>
                            <?php echo e(__('Blog Details')); ?>

                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</header>
	<!-- Bread Crumb Area End -->

    <!-- Blog Details Area Strat -->
    <section class="blog-details section-padding" id="blog-details">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="blog-content">
                <div class="content">
                    <div class="feature-image">
                        <img class="img-fluid" src="<?php echo e(asset('assets/front/img/'.$blog->main_image)); ?>" alt="">
                    </div>
                    <h3 class="title">
                        <?php echo e($blog->title); ?>

                    </h3>
                    <ul class="post-meta">
                    <li>
                        <a href="#">
                        <i class="fa fa-user"></i>
                        <span><?php echo e(__('By')); ?> <?php echo e(__('Admin')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-calendar"></i>
                        <span>
                                <?php echo e(date('F d, Y', strtotime($blog->created_at))); ?>

                        </span>
                        </a>
                    </li>
                    </ul>
                    <div class="content-body">
                        <?php echo $blog->content; ?>

                    </div>
                    <div class="tag-social-link text-center justify-content-center">
                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style d-inline-block">
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_email"></a>
                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->
                        </div>
                </div>
                </div>
               <div class="discus-comment-box">
                <?php if($setting->is_disqus	== 1): ?>
                <div id="disqus_thread" class="mt-5"></div>
                <script>
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = '//<?php echo e($setting->disqus_username); ?>.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
            <?php endif; ?> 
                </div>                     
            </div>
            <div class="col-lg-4">
                <div class="blog-aside">
                            <div class="serch-form">
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
                                <div class="categori">
                                <h4 class="title"><?php echo e(__('Categories')); ?></h4>
                                <span class="separator"></span>
                                <ul class="categori-list">
                                    <?php $__currentLoopData = $bcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php if(request()->input('bcategory') == $bcategory->id): ?> active <?php endif; ?>">
                                            <a href="<?php echo e(route('front.blogs', ['term'=>request()->input('term'), 'category'=>$bcategory->id, 'month' => request()->input('month'), 'year' => request()->input('year')])); ?>">
                                                <span><i class="fas fa-angle-double-right"></i><?php echo e($bcategory->name); ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                </div>
                                <div class="recent-post-widget">
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
                                <div class="archives">
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
    <!-- Blog Details Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porichoy\core\resources\views/front/blogdetails.blade.php ENDPATH**/ ?>