@if($setting->isservice == 1)
<!-- Service Area Start -->
<div id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2 class=" ">{{ $setting->service_title }}</h2>
                    <span class=" ">{{ $setting->service_title }}</span>
                </div>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            @foreach ($services as $service)
                <div class="col-xl-4 col-md-6">
                    <a href="{{route('front.servicedetails', $service->id)}}" class="item  ">
                        <img src="{{asset('assets/front/img/'.$service->image) }}" alt="">
                        <h6 class="title">{{ $service->title }}</h6>
                        <p>{{ $service->description }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!-- Service Area End -->
@endif