

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@if (request()->is('blog-details/*'))
	<meta name="description" content="{{ $blog->meta_description }}">
	<meta name="keywords" content="{{ $blog->meta_keywords }}">
	@else
	<meta name="description" content="{{ $setting->meta_description }}">
	<meta name="keywords" content="{{ $setting->meta_keywords }}">
	@endif
	<!-- Site Title -->
	<title>{{ $setting->website_title }}</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{  asset('assets/front/img/'.$setting->fav_icon) }}" type="image/png">
	<!-- bootstrap -->
	<link href="{{asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- plugin css -->
	<link href="{{asset('assets/front/css/plugin.css') }}" rel="stylesheet">
	<!-- Sweetalert2 css -->
	<link rel="stylesheet" href="{{ asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
	<!-- Main Style css -->
	<link href="{{asset('assets/front/css/style.css') }}" rel="stylesheet">
	<!-- responsive css -->
	<link href="{{asset('assets/front/css/responsive.css') }}" rel="stylesheet">
	<!-- dynamic Style change -->
	<link href="{{url('/')}}/assets/front/css/dynamic-style.php?color={{$setting->base_color}}" rel="stylesheet">

	@if($currentLang->direction == 'rtl')
		<!-- Main Style RTL css -->
		<link href="{{asset('assets/front/css/rtl.css') }}" rel="stylesheet">
		<!-- RTL responsive css -->
		<link href="{{asset('assets/front/css/rtl-responsive.css') }}" rel="stylesheet">
	@endif

	@if($setting->is_dark == 1)
	<!-- Dark Style  -->
	<link href="{{asset('assets/front/css/darktheme.css') }}" rel="stylesheet">
	@endif

</head>

<body class="@if($setting->is_dark == 1) darktheme @endif  @if($currentLang->direction == 'rtl') rtl @endif">
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
					<a href="{{ route('front.index') }}">
						<img src="{{ asset('assets/front/img/'.$abouts->avatar) }}" alt="">
					</a>
					<h4 class="name">
						{{ $abouts->name }}
					</h4>
				</div>
					<div id="ca-navbar">
						<ul class="navbar-nav" id="nav">
							@if($setting->ishome == 1)
								<li class="nav-item">
									<a class="nav-link" href="@if(request()->path() == '/') #home @else {{route('front.index')}}#home @endif">{{ __('Home') }}</a>
								</li>
							@endif
		
							@if($setting->isabout == 1)
							<li class="nav-item">
								<a class="nav-link" href="@if(request()->path() == '/') #about @else {{route('front.index')}}#about @endif">{{ __('About') }}</a>
							</li>
							@endif
		
							@if($setting->isservice == 1)
							<li class="nav-item">
								<a class="nav-link" href="@if(request()->path() == '/') #services @else {{route('front.index')}}#services @endif">{{ __('Service') }}</a>
							</li>
							@endif
		
							@if($setting->isresume == 1)
							<li class="nav-item">
								<a class="nav-link" href="@if(request()->path() == '/') #eduandex @else {{route('front.index')}}#eduandex @endif">{{ __('Resume') }}</a>
							</li>
							@endif
		
							@if($setting->isportfolio == 1)
							<li class="nav-item">
								<a class="nav-link" href="@if(request()->path() == '/') #portfolio @else {{route('front.index')}}#portfolio @endif">{{ __('Portfolio') }}</a>
							</li>
							@endif
							
							@if($setting->isblog == 1)
							<li class="nav-item  
							@if(request()->path() == 'blogs') active 
							@elseif(request()->is('blog-details/*')) active 
							@endif">
								<a class="nav-link" href="@if(request()->path() == '/') #blog @else {{route('front.index')}}#blog @endif">{{ __('Blogs') }}</a>
							</li>
							@endif
		
			
							@if($setting->iscontact == 1)
							<li class="nav-item  @if(request()->path() == 'contact') active  @endif">
								<a class="nav-link about-area" href="@if(request()->path() == '/') #contact @else {{route('front.index')}}#blog @endif">{{ __('Contact') }}</a>
							</li>
							@endif
		
						</ul>
					</div>
		
					<div class="header-bottom-area">
						<div class="menu-social-links">
							@foreach ($socials as $social)
								<a href="{{ $social->url }}"><i class="{{ $social->icon }}"></i></a>
							@endforeach
						</div>
					</div>
				
			</div>
			{{-- <div class="lanwrapper d-block d-lg-none">
				@if (count($langs) > 0)
				
				<div class="language">
					<a class="language-btn" href="#">
						{{ $currentLang->name }}
					</a>
					<ul class="language-dropdown">
					@foreach ($langs as $key => $lang)
					<li><a href='{{ route('changeLanguage', $lang->code) }}'>
							{{ $lang->name }}
					</a></li>
					@endforeach
					</ul>
				</div>
				@endif
			</div> --}}
		</nav>
	</header>
	<!-- Header Area End -->

	<div class="main-site-content">
		@yield('content')

		<!-- Footer Area Start -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class=" ">
							{!! $setting->copyright_text !!}
						</div>
					</div>
				</div>
			</div>
		</footer>
	<!-- Footer Area End -->
	</div>




	<!-- All js links Start -->
	<script>
		var wowjs = {{ $setting->iswow }}
	</script>
	<!-- Main Jquery  -->
	<script src="{{ asset('assets/front/js/jquery-1.12.4.min.js') }}"></script>
	<!-- plugins js -->
	<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
	<!-- plugins js -->
	<script src="{{asset('assets/front/js/plugins.js')}}"></script>
	<!-- Sweetalert2 js -->
	<script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

	<!-- main js -->
	<script src="{{asset('assets/front/js/main.js')}}"></script>

	@yield('scripts')

	@if($setting->is_tawkto	== 1)
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
				var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
				s1.async=true;
				s1.src='https://embed.tawk.to/{{ $setting->tawk_to_api_key }}/default';
				s1.charset='UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
		<!--End of Tawk.to Script-->
	@endif


	@if($setting->is_massenger	== 1)
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
		page_id="{{ $setting->is_massenger_id }}">
		</div>
	@endif	



	@if($setting->is_analytics	== 1)
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{ $setting->google_analytics_id }}"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '{{ $setting->google_analytics_id }}');
		</script>
	@endif

	@if (session()->has('success'))
		<script>
			$(function() {
				// Form Submit Success Message alert
				$message = '{{session('success')}}';
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
	@endif
</body>
</html>