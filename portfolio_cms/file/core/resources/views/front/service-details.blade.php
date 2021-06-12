@extends('front.layout')

@section('content')


    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
                        {{ $service->title }}
                    </h2>
                    <ul class="links">
                        <li>
                            <a href="{{ route('front.index') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            {{ $service->title }}
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
                        @if($service->featured_image != null)
                        <div class="main-image">
                        <img src="{{ asset('assets/front/img/'.$service->featured_image) }}" alt="">
                        </div>
                    @endif
                    <div class="content">
                    <h3 class="title">{{ $service->title }}</h3>
                        <div class="sort-dec mb-3">
                            {!!$service->description !!}
                        </div>
                        {!! $service->content !!}
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info service-category">
                        <div class="heading">
                            <h4 class="title">
                                {{ $setting->service_title }}
                            </h4>
                        </div>
                        <ul class="service-list">
                            @foreach ($services as $service)
                            <li>
                                <a href="{{route('front.servicedetails', $service->id)}}" class="service @if(request()->path() == 'service-details/'.$service->id) active @endif"><i class="fas fa-angle-double-right"></i>{{ $service->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Details Area End -->

@endsection
