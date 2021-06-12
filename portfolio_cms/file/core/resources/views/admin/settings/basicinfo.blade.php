@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Basic Information') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Basic Information') }}</li>
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
                        <h3 class="card-title">{{ __('Update Basic Information') }} </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.setting.updateBasicinfo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="base_color" class="col-sm-2 control-label">{{ __('Theme Color') }}</label>
                                <div class="col-sm-10">
                                    <div class="input-group my-colorpicker2">
                                        <input type='text' id="colorpicker" name="base_color" value="#{{ $setting->base_color }}"/>
                                      </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Dark Mode</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" {{ $setting->is_dark == '1' ? 'checked' : '' }} data-size="large" name="is_dark" data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactive">
                                    @if ($errors->has('is_dark'))
                                        <p class="text-danger"> {{ $errors->first('is_dark') }} </p>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label  class="col-sm-2 control-label">{{ __('Site Title') }} <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="website_title" value="{{ $setting->website_title }}" placeholder="{{ __('Site Title') }}">
                                    @if ($errors->has('website_title'))
                                    <p class="text-danger"> {{ $errors->first('website_title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Contact Email (for Admin)') }} <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact_mail" value="{{ $setting->contact_mail }}" placeholder="{{ __('Enter Contact Mail') }}">
                                    @if ($errors->has('contact_mail'))
                                    <p class="text-danger"> {{ $errors->first('contact_mail') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Favicon') }} <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mb-3 show-img img-demo" src="{{ asset('assets/front/img/'.$setting->fav_icon) }}" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="fav_icon">{{ __('Choose New Image') }}</label>
                                        <input type="file" class="custom-file-input up-img" name="fav_icon" id="fav_icon">
                                    </div>
                                    <p class="help-block text-info">{{ __('Upload 40X40 (Pixel) Size image or Squre size image for best quality. 
                                        Only jpg, jpeg, png image is allowed.') }}
                                    </p>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Site Header Logo') }} <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mb-3 show-img img-demo" src="{{ asset('assets/front/img/'.$setting->header_logo) }}" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="header_logo">Choose New Image</label>
                                        <input type="file" class="custom-file-input up-img" name="header_logo" id="header_logo">
                                    </div>
                                    <p class="help-block text-info">{{ __('Upload 150X40 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.') }}
                                    </p>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Breadcrumb Image') }} <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/front/img/breadcrumb_image.jpg')}}" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="breadcrumb_image">{{ __('Choose New Image') }}</label>
                                        <input type="file" class="custom-file-input up-img" name="breadcrumb_image" id="breadcrumb_image">
                                    </div>
                                    <p class="help-block text-info">{{ __('Upload 1920X390 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.') }}
                                    </p>
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
