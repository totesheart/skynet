@if($setting->ishome == 1)
<!--Hero Area Start-->
@if ($setting->home_version == 'static')
    @includeif('front.partials.static')
@elseif ($setting->home_version == 'slider')
    @includeif('front.partials.slider')
@elseif ($setting->home_version == 'video')
    @includeif('front.partials.video')
@elseif ($setting->home_version == 'particles')
    @includeif('front.partials.particles')
@elseif ($setting->home_version == 'water')
    @includeif('front.partials.water')
@elseif ($setting->home_version == 'parallax')
    @includeif('front.partials.parallax')
@endif
<!--Hero Area End-->
@endif