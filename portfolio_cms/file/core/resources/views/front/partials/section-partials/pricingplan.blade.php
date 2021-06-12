@if($setting->ispricingplan == 1)
<section class="pricing-palden section-padding" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2>{{ $setting->pricingplan }}</h2>
                    <span>{{ $setting->pricingplan }}</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($pricingplans as $pricingplan)
            <div class='col-xl-4 col-md-6'>
                <div class='pricing-item'>
                    <div class='pricing-deco'>
                        <div class='pricing-price '><span class='pricing-currency'>{{ $pricingplan->currency }}</span>{{ $pricingplan->price }}</div>
                        <h3 class='pricing-title '>{{ $pricingplan->plan_name }}</h3>
                    </div>
                    <div class="list ">
                        {!! $pricingplan->content !!}
                    </div>
                    @if($setting->iscontact == 1)
                        <a href="#contact"
                        class="mybtn mybtn-bg "><span>{{ __('Get Start') }}</span></a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif