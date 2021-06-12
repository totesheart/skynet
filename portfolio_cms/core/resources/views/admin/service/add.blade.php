@extends('admin.layout')

@section('content')

<div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Services') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li class="breadcrumb-item">{{ __('Services') }}</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header  with-border">
                                <h3 class="card-title mt-1">{{ __('Add Service') }}</h3>
                                <div class="card-tools">
                                <a href="{{ route('admin.service') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Icon') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="w-100 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                                                <input type="file" class="custom-file-input up-img" name="image" id="image">
                                            </div>
                                            <p class="help-block text-info">{{ __('Upload 70X70 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.') }}
                                            </p>
                                            @if ($errors->has('image'))
                                                <p class="text-danger"> {{ $errors->first('image') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Feature Image') }} <br> <small>(Optional)</small> </label>
    
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="featured_image">{{ __('Choose Image') }}</label>
                                                <input type="file" class="custom-file-input up-img" name="featured_image" id="featured_image">
                                            </div>
                                            <p class="help-block text-info">{{ __('Upload 70X70 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.') }}
                                            </p>
                                            @if ($errors->has('featured_image'))
                                                <p class="text-danger"> {{ $errors->first('featured_image') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                            @if ($errors->has('title'))
                                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                                            @endif
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 control-label">{{ __('Short Description') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" placeholder="{{ __('Short Description') }}" rows="3">{{ old('title') }}</textarea>
                                            @if ($errors->has('description'))
                                                <p class="text-danger"> {{ $errors->first('description') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Content') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content" class="form-control textarea" placeholder="{{ __('Content') }}" rows="3">{{ old('content') }}</textarea>
                                            @if ($errors->has('content'))
                                                <p class="text-danger"> {{ $errors->first('content') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                                <option value="0">{{ __('Unpublish') }}</option>
                                                <option value="1">{{ __('Publish') }}</option>
                                                </select>
                                            @if ($errors->has('status'))
                                                <p class="text-danger"> {{ $errors->first('status') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                        </div>
                                    </div>
        
                                </form>
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
