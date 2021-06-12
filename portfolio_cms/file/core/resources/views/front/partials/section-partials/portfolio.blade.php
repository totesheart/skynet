@if($setting->isportfolio == 1)
<!-- Portfolio Area Start -->
<div id="portfolio" class="work-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2 class="">{{ $setting->portfolio_title }}</h2>
                    <span class="">{{ $setting->portfolio_title }}</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($portfolios as $portfolio)
                <div class="col-xl-4 col-md-6">
                    <div class="single-work mb-30">
                        <img src="{{asset('assets/front/img/'.$portfolio->featured_image) }}" alt="">
                        <div class="item-hover">
                            <div class="hover-content">
                                <h4>{{ strlen($portfolio->title) > 35 ? substr($portfolio->title, 0, 35).'...' :  $portfolio->title}}</h4>
                                <a href="{{ route('front.portfoliodetails', $portfolio->slug) }}"
                                class="work-link"><i class="fa fa-link"></i></a>
                                <a class="lightbox" href="{{asset('assets/front/img/'.$portfolio->featured_image) }}"
                                class="work-link"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-3">
            <div class="col-lg-12 text-center">
                <a class="mybtn mybtn-bg "
                   href="{{ route('front.portfolios') }}"><span>{{ __('View All') }}</span></a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Area End -->
@endif