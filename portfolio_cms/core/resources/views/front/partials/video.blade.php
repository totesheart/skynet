<section class="home home-bg section" id="home">
    <div id="bgndVideo" data-property="{videoURL:'{{$setting->hero_section_video}}',containment:'#home', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
    <div class="bg-overlay"></div>
    <div class="home-table">
        <div class="home-table-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2 class="name">
                                {{ $abouts->name }}
                            </h2>
                            <h2 class="header_title"> I'm a <span id="js-rotating">{{ $abouts->position_type }}</span> </h2>
                            <div class="header_btn">
                                <a href="#contact"
                                class="mybtn2"><span>{{ __('Hire Me') }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
