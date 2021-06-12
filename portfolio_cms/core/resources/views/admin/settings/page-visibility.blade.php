@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Page Visibility') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Page Visibility') }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <form class="form-horizontal" action="{{ route('admin.pagevisibility.update') }}" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ __('Update Page & Section Visibility') }} </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Home Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->ishome == '1' ? 'checked' : '' }} data-size="large" name="ishome" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('ishome'))
                                                    <p class="text-danger"> {{ $errors->first('ishome') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">About Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isabout == '1' ? 'checked' : '' }} data-size="large" name="isabout" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isabout'))
                                                    <p class="text-danger"> {{ $errors->first('isabout') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Fun Fact Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isfunfact == '1' ? 'checked' : '' }} data-size="large" name="isfunfact" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isfunfact'))
                                                    <p class="text-danger"> {{ $errors->first('isfunfact') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Interests Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isinterests == '1' ? 'checked' : '' }} data-size="large" name="isinterests" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isinterests'))
                                                    <p class="text-danger"> {{ $errors->first('isinterests') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Service Section & Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isservice == '1' ? 'checked' : '' }} data-size="large" name="isservice" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isservice'))
                                                    <p class="text-danger"> {{ $errors->first('isservice') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Resume Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isresume == '1' ? 'checked' : '' }} data-size="large" name="isresume" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isresume'))
                                                    <p class="text-danger"> {{ $errors->first('isresume') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Testimonial Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->istestimonial == '1' ? 'checked' : '' }} data-size="large" name="istestimonial" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('istestimonial'))
                                                    <p class="text-danger"> {{ $errors->first('istestimonial') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Portfolio Section & Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isportfolio == '1' ? 'checked' : '' }} data-size="large" name="isportfolio" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isportfolio'))
                                                    <p class="text-danger"> {{ $errors->first('isportfolio') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Pricing Plan Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->ispricingplan == '1' ? 'checked' : '' }} data-size="large" name="ispricingplan" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('ispricingplan'))
                                                    <p class="text-danger"> {{ $errors->first('ispricingplan') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Blog Section & Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isblog == '1' ? 'checked' : '' }} data-size="large" name="isblog" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isblog'))
                                                    <p class="text-danger"> {{ $errors->first('isblog') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Contact Page<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->iscontact == '1' ? 'checked' : '' }} data-size="large" name="iscontact" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('iscontact'))
                                                    <p class="text-danger"> {{ $errors->first('iscontact') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Clients Section<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isclient == '1' ? 'checked' : '' }} data-size="large" name="isclient" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isclient'))
                                                    <p class="text-danger"> {{ $errors->first('isclient') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ __('Update Element Visibility') }} </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Home Download Button<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->ishomedownload == '1' ? 'checked' : '' }} data-size="large" name="ishomedownload" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('ishomedownload'))
                                                    <p class="text-danger"> {{ $errors->first('ishomedownload') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Resume Download Button<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->isresumedownload == '1' ? 'checked' : '' }} data-size="large" name="isresumedownload" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('isresumedownload'))
                                                    <p class="text-danger"> {{ $errors->first('isresumedownload') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 control-label">Home Social links<span
                                                        class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" {{ $setting->ishomesocial == '1' ? 'checked' : '' }} data-size="large" name="ishomesocial" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                                @if ($errors->has('ishomesocial'))
                                                    <p class="text-danger"> {{ $errors->first('ishomesocial') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Update') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
            </div>
            <!-- /.col -->
        </div>
    </div>


</section>

@endsection
