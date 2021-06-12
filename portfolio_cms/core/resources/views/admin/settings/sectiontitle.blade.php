@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Section Title') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Section Title') }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Update Section Title') }} </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.setting.updateSectiontitle') }}" method="POST">
                            @csrf
                            
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('About Title') }} <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="about_title" value="{{ $setting->about_title }}" placeholder="{{ __('About Title') }}">
                                    @if ($errors->has('about_title'))
                                    <p class="text-danger"> {{ $errors->first('about_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Interests Title') }} <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="interest_title" value="{{ $setting->interest_title }}" placeholder="{{ __('Interests Title') }}">
                                    @if ($errors->has('interest_title'))
                                    <p class="text-danger"> {{ $errors->first('interest_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Education Title') }} <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="education_title" value="{{ $setting->education_title }}" placeholder="{{ __('Education Title') }}">
                                    @if ($errors->has('education_title'))
                                    <p class="text-danger"> {{ $errors->first('education_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Experince Title') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="experince_title" value="{{ $setting->experince_title }}" placeholder="{{ __('Experince Title') }}">
                                    @if ($errors->has('experince_title'))
                                    <p class="text-danger"> {{ $errors->first('experince_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Client Title') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="client_title" value="{{ $setting->client_title }}" placeholder="{{ __('Client Title') }}">
                                    @if ($errors->has('client_title'))
                                    <p class="text-danger"> {{ $errors->first('client_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Service Title') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="service_title" value="{{ $setting->service_title }}" placeholder="{{ __('Service Title') }}">
                                    @if ($errors->has('service_title'))
                                    <p class="text-danger"> {{ $errors->first('service_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Portfolio Title') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="portfolio_title" value="{{ $setting->portfolio_title }}" placeholder="{{ __('Portfolio Title') }}">
                                    @if ($errors->has('portfolio_title'))
                                    <p class="text-danger"> {{ $errors->first('portfolio_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Resume Title') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="resume_title" value="{{ $setting->resume_title }}" placeholder="{{ __('Resume Title') }}">
                                    @if ($errors->has('resume_title'))
                                    <p class="text-danger"> {{ $errors->first('resume_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Knowledge') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="knowledge" value="{{ $setting->knowledge }}" placeholder="{{ __('Kowledge Title') }}">
                                    @if ($errors->has('knowledge'))
                                    <p class="text-danger"> {{ $errors->first('knowledge') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Pricing Plan') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pricingplan" value="{{ $setting->pricingplan }}" placeholder="{{ __('Pricing Plan Title') }}">
                                    @if ($errors->has('pricingplan'))
                                    <p class="text-danger"> {{ $errors->first('pricingplan') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Testimonial Title') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="testimonial_title" value="{{ $setting->testimonial_title }}" placeholder="{{ __('Testimonial Title') }}">
                                    @if ($errors->has('testimonial_title'))
                                    <p class="text-danger"> {{ $errors->first('testimonial_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Blog Title') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="blog_title" value="{{ $setting->blog_title }}" placeholder="{{ __('Blog Title') }}">
                                    @if ($errors->has('blog_title'))
                                    <p class="text-danger"> {{ $errors->first('blog_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Faq Title') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="faq_title" value="{{ $setting->faq_title }}" placeholder="{{ __('Faq Title') }}">
                                    @if ($errors->has('faq_title'))
                                    <p class="text-danger"> {{ $errors->first('faq_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Contact Title') }}<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact_title" value="{{ $setting->contact_title }}" placeholder="{{ __('Contact Title') }}">
                                    @if ($errors->has('contact_title'))
                                    <p class="text-danger"> {{ $errors->first('contact_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
    </div>


</section>

@endsection
