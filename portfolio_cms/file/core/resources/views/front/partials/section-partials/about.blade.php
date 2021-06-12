@if($setting->isabout == 1)
<!-- About Area Start -->
<div id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2 class="">{{ $setting->about_title }}</h2>
                    <span class="">{{ $setting->about_title }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about-box">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 d-flex align-self-center justify-content-center">
                            <div class="author-image">
                                <img src="{{asset('assets/front/img/'.$abouts->profile_image) }}" alt="Author Image">
                            </div>
                        </div>
                        <div class="col-xl-8  col-lg-12 d-flex align-self-center">
                            <div class="about-content ">
                                <!-- Single Tab -->
                                <p>
                                    {!! $abouts->about_text !!}
                                </p>
                                <ul class="info-list">
                                    <li>
                                        <span class="title">{{ __('Age :') }}</span>
                                        <span class="value">{{ $abouts->age }}</span>
                                    </li>
                                    <li>
                                        <span class="title">{{ __('Residence :') }}</span>
                                        <span class="value">{{ $abouts->residence }}</span>
                                    </li>
                                    <li>
                                        <span class="title">{{ __('Freelance :') }}</span><span
                                                class="value">{{ $abouts->freelance }}</span>
                                    </li>
                                </ul>
                                @if($setting->isresumedownload == 1)
                                        <a href="{{ asset('assets/front/file/'.$abouts->resume) }}" class="mybtn mybtn-bg "
                                           download><span>{{ __('Download CV') }}</span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</div>
<!-- About Area End -->
@endif