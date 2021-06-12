@if($setting->isblog == 1)
<!-- Blog Area Start -->
<section id="blog" class="blogs  section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2 class="">{{ $setting->blog_title }}</h2>
                    <span class="">{{ $setting->blog_title }}</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)
                <div class="col-xl-4 col-md-6">
                    <div class="blog-box ">
                        <div class="blog-images">
                            <img src="{{asset('assets/front/img/'.$blog->main_image) }}" class="img-fluid"
                                    alt="">
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta-one ">
                                <li><p><i class="fa fa-user"></i> {{__('By')}} <span
                                                class="username">{{__('Admin')}}</span></p></li>
                                <li><p>
                                        <i class="fa fa-clock-o"></i> {{date ( 'd M, Y', strtotime($blog->created_at) )}}
                                    </p></li>
                            </ul>
                            <h3>
                                <a class="blog-title " href='{{route('front.blogdetails', $blog->slug)}}'>
                                    {{strlen($blog->title) > 40 ? substr($blog->title, 0, 40) . '...' : $blog->title}}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="mybtn mybtn-bg "
                   href="{{ route('front.blogs') }}"><span>{{ __('View All') }}</span></a>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->
@endif