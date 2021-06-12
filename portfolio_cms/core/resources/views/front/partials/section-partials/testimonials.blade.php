@if($setting->istestimonial == 1)
<!-- Testimonial Area Start -->
<section class="testimonial section-padding" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2 class="">{{ $setting->testimonial_title }}</h2>
                    <span class="">{{ $setting->testimonial_title }}</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="testimonial-slider">
                    @foreach ($testimonials as $testimonial)
                    <div class="slider-item">
                        <div class="single-review">
                            <div class="reviewr">
                                <div class="img">
                                    <img src="{{asset('assets/front/img/'.$testimonial->image) }}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">
                                        {{ $testimonial->name }}
                                    </h4>
                                    <p>
                                        {{ $testimonial->position }}
                                    </p>
                                </div>
                            </div>
                            <div class="main-content">
                                
                            <div class="stars">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                                <p>
                                    {{ $testimonial->message }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Testimonial Area End -->
@endif