

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if(request()->is('blog-details/*')): ?>
	<meta name="description" content="<?php echo e($blog->meta_description); ?>">
	<meta name="keywords" content="<?php echo e($blog->meta_keywords); ?>">
	<?php else: ?>
	<meta name="description" content="<?php echo e($setting->meta_description); ?>">
	<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
	<?php endif; ?>
	<!-- Site Title -->
	<title><?php echo e($setting->website_title); ?></title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo e(asset('assets/front/img/'.$setting->fav_icon)); ?>" type="image/png">
	<!-- bootstrap -->
	<link href="<?php echo e(asset('assets/front/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<!-- plugin css -->
	<link href="<?php echo e(asset('assets/front/css/plugin.css')); ?>" rel="stylesheet">
	<!-- Sweetalert2 css -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
	<!-- Main Style css -->
	<link href="<?php echo e(asset('assets/front/css/style.css')); ?>" rel="stylesheet">
	<!-- responsive css -->
	<link href="<?php echo e(asset('assets/front/css/responsive.css')); ?>" rel="stylesheet">
	<!-- dynamic Style change -->
	<link href="<?php echo e(url('/')); ?>/assets/front/css/dynamic-style.php?color=<?php echo e($setting->base_color); ?>" rel="stylesheet">

	<?php if($currentLang->direction == 'rtl'): ?>
		<!-- Main Style RTL css -->
		<link href="<?php echo e(asset('assets/front/css/rtl.css')); ?>" rel="stylesheet">
		<!-- RTL responsive css -->
		<link href="<?php echo e(asset('assets/front/css/rtl-responsive.css')); ?>" rel="stylesheet">
	<?php endif; ?>

	<?php if($setting->is_dark == 1): ?>
	<!-- Dark Style  -->
	<link href="<?php echo e(asset('assets/front/css/darktheme.css')); ?>" rel="stylesheet">
	<?php endif; ?>

</head>

<body class="<?php if($setting->is_dark == 1): ?> darktheme <?php endif; ?>  <?php if($currentLang->direction == 'rtl'): ?> rtl <?php endif; ?>">
	<!-- Preloader Start -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- Preloader End -->

	<!-- Header Area Start -->
	<div class="menu-toogle-icon">
		<div id="nav-icon3" class="">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		  </div>
</div>
	<header class="header side-menu">
		<nav class="my-navbar">
			
			
			<div class="d-flex flex-column justify-content-between h100">
				
				<div class="header-top-area">
					<a href="<?php echo e(route('front.index')); ?>">
						<img src="<?php echo e(asset('assets/front/img/'.$abouts->avatar)); ?>" alt="">
					</a>
					<h4 class="name">
						<?php echo e($abouts->name); ?>

					</h4>
				</div>
					<div id="ca-navbar">
						<ul class="navbar-nav" id="nav">
							<?php if($setting->ishome == 1): ?>
								<li class="nav-item">
									<a class="nav-link" href="<?php if(request()->path() == '/'): ?> #home <?php else: ?> <?php echo e(route('front.index')); ?>#home <?php endif; ?>"><?php echo e(__('Home')); ?></a>
								</li>
							<?php endif; ?>
		
							<?php if($setting->isabout == 1): ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php if(request()->path() == '/'): ?> #about <?php else: ?> <?php echo e(route('front.index')); ?>#about <?php endif; ?>"><?php echo e(__('About')); ?></a>
							</li>
							<?php endif; ?>
		
							<?php if($setting->isservice == 1): ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php if(request()->path() == '/'): ?> #services <?php else: ?> <?php echo e(route('front.index')); ?>#services <?php endif; ?>"><?php echo e(__('Service')); ?></a>
							</li>
							<?php endif; ?>
		
							<?php if($setting->isresume == 1): ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php if(request()->path() == '/'): ?> #eduandex <?php else: ?> <?php echo e(route('front.index')); ?>#eduandex <?php endif; ?>"><?php echo e(__('Resume')); ?></a>
							</li>
							<?php endif; ?>
		
							<?php if($setting->isportfolio == 1): ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php if(request()->path() == '/'): ?> #portfolio <?php else: ?> <?php echo e(route('front.index')); ?>#portfolio <?php endif; ?>"><?php echo e(__('Portfolio')); ?></a>
							</li>
							<?php endif; ?>
							
							<?php if($setting->isblog == 1): ?>
							<li class="nav-item  
							<?php if(request()->path() == 'blogs'): ?> active 
							<?php elseif(request()->is('blog-details/*')): ?> active 
							<?php endif; ?>">
								<a class="nav-link" href="<?php if(request()->path() == '/'): ?> #blog <?php else: ?> <?php echo e(route('front.index')); ?>#blog <?php endif; ?>"><?php echo e(__('Blogs')); ?></a>
							</li>
							<?php endif; ?>
		
			
							<?php if($setting->iscontact == 1): ?>
							<li class="nav-item  <?php if(request()->path() == 'contact'): ?> active  <?php endif; ?>">
								<a class="nav-link about-area" href="<?php if(request()->path() == '/'): ?> #contact <?php else: ?> <?php echo e(route('front.index')); ?>#blog <?php endif; ?>"><?php echo e(__('Contact')); ?></a>
							</li>
							<?php endif; ?>
		
						</ul>
					</div>
		
					<div class="header-bottom-area">
						<div class="menu-social-links">
							<?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<a href="<?php echo e($social->url); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				
			</div>
			
		</nav>
	</header>
	<!-- Header Area End -->

	<div class="main-site-content">
		<?php echo $__env->yieldContent('content'); ?>

		<!-- Footer Area Start -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class=" ">
							<?php echo $setting->copyright_text; ?>

						</div>
					</div>
				</div>
			</div>
		</footer>
	<!-- Footer Area End -->
	</div>




	<!-- All js links Start -->
	<script>
		var wowjs = <?php echo e($setting->iswow); ?>

	</script>
	<!-- Main Jquery  -->
	<script src="<?php echo e(asset('assets/front/js/jquery-1.12.4.min.js')); ?>"></script>
	<!-- plugins js -->
	<script src="<?php echo e(asset('assets/front/js/bootstrap.min.js')); ?>"></script>
	<!-- plugins js -->
	<script src="<?php echo e(asset('assets/front/js/plugins.js')); ?>"></script>
	<!-- Sweetalert2 js -->
	<script src="<?php echo e(asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

	<!-- main js -->
	<script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>

	<?php echo $__env->yieldContent('scripts'); ?>

	<?php if($setting->is_tawkto	== 1): ?>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
				var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
				s1.async=true;
				s1.src='https://embed.tawk.to/<?php echo e($setting->tawk_to_api_key); ?>/default';
				s1.charset='UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
		<!--End of Tawk.to Script-->
	<?php endif; ?>


	<?php if($setting->is_massenger	== 1): ?>
		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>
		window.fbAsyncInit = function() {
			FB.init({
			xfbml            : true,
			version          : 'v5.0'
			});
		};

		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your customer chat code -->
		<div class="fb-customerchat"
		attribution=setup_tool
		page_id="<?php echo e($setting->is_massenger_id); ?>">
		</div>
	<?php endif; ?>	



	<?php if($setting->is_analytics	== 1): ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($setting->google_analytics_id); ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '<?php echo e($setting->google_analytics_id); ?>');
		</script>
	<?php endif; ?>

	<?php if(session()->has('success')): ?>
		<script>
			$(function() {
				// Form Submit Success Message alert
				$message = '<?php echo e(session('success')); ?>';
				Swal.fire({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					type: 'success',
					timer: 6000,
					title: $message
				})
			});
		</script>
	<?php endif; ?>
</body>
</html><?php /**PATH C:\laragon\www\pfolio-new\core\resources\views/front/layout.blade.php ENDPATH**/ ?>