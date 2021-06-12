@if($setting->isresume == 1)
<!-- Resume Area Start -->
<div id="eduandex" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2 class="">{{ $setting->resume_title }}</h2>
                    <span class="">{{ $setting->resume_title }}</span>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <div class="edu-box">
                    <h2 class="title">{{ $setting->education_title }}</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="education-list">
                                @foreach ($educations as $education)
                                    <div class="single-education  ">
                                        <h4 class="collage-name">
                                            {{ $education->school }}
                                        </h4>
                                        <p class="degree">{{ $education->field }}<span class="year">{{ $education->from_date }}  - {{ empty($education->date_to) ? 'Present' : $education->date_to }}</span>
                                        </p>
                                        <div class="description">
                                            <p>
                                                {{ $education->description }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="edu-box">
                    <h2 class="title">{{ $setting->experince_title }}</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="education-list">
                                @foreach ($experinces as $experince)
                                    <div class="single-education  ">
                                        <h4 class="collage-name">
                                            {{ $experince->company }}
                                        </h4>
                                        <p class="degree">{{ $experince->field }} <span class="year">{{ $experince->from_date }} - {{ empty($experince->date_to) ? 'Present' : $experince->date_to }}</span>
                                        </p>
                                        <div class="description">
                                            <p>
                                                {{ $experince->description }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row skill-area" id="statisticsSection">

            @foreach ($scategories as $scategory)
                @if($scategory->skills_type == 'line')
                    <div class="col-lg-6 skill-area-line">
                        <div class="skill-box">
                            <h4 class="title">
                                {{ $scategory->name }}
                            </h4>
                            <div class="skill-list">
                                @foreach ($scategory->skills as $key=>$skill)
                                    <div class="single-skill  ">
                                        <div class="label">
                                            <span>{{ $skill->name }}</span>
                                            <span>{{ $skill->level }}{{ __('%') }}</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                 role="progressbar" aria-valuenow="{{ $skill->level }}"
                                                 aria-valuemin="0" aria-valuemax="100"
                                                 style="width: {{ $skill->level }}%"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-6 skill-area-circle">
                        <div class="skill-box">
                            <h4 class="title">
                                {{ $scategory->name }}
                            </h4>
                            <div class="skill-list">
                                @foreach ($scategory->skills as $key=>$skill)
                                    <div class="single-skill  ">
                                        <div class="progress-circle position" data-percent="{{ $skill->level }}"
                                             data-duration="1000"
                                             data-color="#e9ecef, {{ $setting->base_color }}"></div>
                                        <div class="label mt-1 d-block text-center">
                                            <span>{{ $skill->name }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        @if($setting->isresumedownload == 1)
        <div class="row download-cv-area">
            <div class="col-lg-12 text-center">
                <a href="{{ asset('assets/front/file/'.$abouts->resume) }}" class="mybtn mybtn-bg "
                   download><span>{{ __('Download CV') }}</span></a>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Resume Area End -->
@endif