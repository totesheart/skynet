

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
	<header class="header <?php if($setting->ishome != 1): ?> bg-white <?php endif; ?>">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?php echo e(route('front.index')); ?>">
					<img src="<?php echo e(asset('assets/front/img/'.$setting->header_logo)); ?>" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="ca-navbar">
					<ul class="navbar-nav ml-auto" id="nav">
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

						<?php if($setting->isfaq == 1): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php if(request()->path() == '/'): ?> #faq <?php else: ?> <?php echo e(route('front.index')); ?>#faq <?php endif; ?>"><?php echo e(__('Faq')); ?></a>
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
							<a class="nav-link about-area" href="<?php echo e(route('front.contact')); ?>"><?php echo e(__('Contact')); ?></a>
						</li>
						<?php endif; ?>

					</ul>
					
				</div>
				
			</nav>
		</div>
	</header>
	<!-- Header Area End -->

	<?php echo $__env->yieldContent('content'); ?>

	<!-- Footer Area Start -->
	<footer class="footer section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a class="f-logo " href="<?php echo e(route('front.index')); ?>">
						<img src="<?php echo e(asset('assets/front/img/'.$setting->footer_logo)); ?>" alt="">
					</a>
					<div class="social-link d-flex justify-content-center">
						<ul class="wrap">
							<?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class=" ">
								<a href="<?php echo e($social->url); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class=" ">
						<?php echo $setting->copyright_text; ?>

					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->


	<!-- All js links Start -->
	<script>
		var lat = <?php echo e($abouts->latitude); ?>;
		var lng = <?php echo e($abouts->longitude); ?>;
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

	<?php if(request()->path() == 'contact'): ?>
		<!-- map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&callback=initMap" async defer></script>
		<!-- google map activate js -->
		<script src="<?php echo e(asset('assets/front/js/map.js')); ?>"></script>
	<?php endif; ?>

	<?php if($setting->themes == 'resume' || $setting->themes == 'portfolio'): ?>
		<?php if(request()->path() == '/'): ?>
			<!-- map js -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&callback=initMap" async defer></script>
			<!-- google map activate js -->
			<script src="<?php echo e(asset('assets/front/js/map.js')); ?>"></script>
		<?php endif; ?>
	<?php endif; ?>

	<!-- main js -->
	<script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>

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
</html><?php /**PATH C:\xampp\htdocs\liveporichoy\core\resources\views/front/layout.blade.php ENDPATH**/ ?>