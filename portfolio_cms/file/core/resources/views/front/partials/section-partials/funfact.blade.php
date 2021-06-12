@if($setting->isfunfact == 1)
<!-- Fun Fact Area Start -->
<div class="counterArea section-padding">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($funfacts as $funfact)
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!-- Single stat  -->
                    <div class="counter_box  ">
                        <div class="img">
                            <img class="w-60" src="{{ asset('assets/front/img/'.$funfact->icon) }}" alt="">
                        </div>
                        <div class="counter-w">
                            <h2 class="count">{{ $funfact->value }}</h2> <span>+</span>
                        </div>
                        <h3>{{ $funfact->name }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
        <!--/.row -->
    </div>
    <!--/.container -->
</div>
<!-- Fun Fact Area End -->
@endif