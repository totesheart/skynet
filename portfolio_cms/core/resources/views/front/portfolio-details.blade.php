@extends('front.layout')

@section('content')


    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
					{{ __('Portfolio Details') }}
                    </h2>
                    <ul class="links">
                        <li>
                            <a href="{{ route('front.index') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            {{ __('Portfolio Details') }}
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
                        @if($sliders->count() > 0)
                            <div class="big-image popup-gallery">
                                @foreach ($sliders as $slider)
                                    <a href="{{ asset('assets/front/img/'.$slider->image) }}">
                                        <img src="{{ asset('assets/front/img/'.$slider->image) }}" alt="">
                                    </a>
                                @endforeach
                            </div>
                            <div class="slider-img">
                                @foreach ($sliders as $slider)
                                    <div class="slid-item">
                                        <img src="{{ asset('assets/front/img/'.$slider->image) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        @else 
                            <img src="{{ asset('assets/front/img/'.$portfolio->titlefeatured_image) }}" alt="">
                        @endif

                    </div>
                    <div class="content">
                        <h3 class="title">{{ $portfolio->title }}</h3>
                        {!! $portfolio->content !!}
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <ul>
                            <li>
                                   <h4> {{ __('Service') }} :</h4> <span>{{ $portfolio->service->title }}</span>
                            </li>
                            <li>
                                    <h4>{{ __('Client name') }} :</h4>  <span>{{ $portfolio->client_name }}</span>
                            </li>
                            <li>
                                <h4>{{ __('Start Date') }} :</h4> <span>{{date('jS M, Y', strtotime($portfolio->start_date))}}</span>
                            </li>
                            <li>
                                <h4>{{ __('End Date') }} :</h4> <span>{{date('jS M, Y', strtotime($portfolio->submission_date))}}</span>
                            </li>
                            <li>
                                    <h4>{{__('Status') }} :</h4> <span>{{ $portfolio->status == 1 ? 'Completed' : 'In Progress' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Details Area End -->

@endsection
