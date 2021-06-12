@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Contact Information') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Contact Information') }} </li>
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
                            <h3 class="card-title">{{ __('Update Contact Information :') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body"> 
                                <form class="form-horizontal" action="{{ route('admin.contact_info_update') }}" method="POST">
                                    @csrf
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-2 control-label"> {{ __('Address') }} <span class="text-danger">*</span> </label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="address" value="{{ $about->address }}">
                                                @if ($errors->has('address'))
                                                    <p class="text-danger"> {{ $errors->first('address') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mail" class="col-sm-2 control-label"> {{ __('E-mail') }} <span class="text-danger">*</span>  </label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="mail" value="{{ $about->mail }}">
                                                @if ($errors->has('mail'))
                                                    <p class="text-danger"> {{ $errors->first('mail') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-2 control-label"> {{ __('Phone') }} <span class="text-danger">*</span>  </label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="phone" value="{{ $about->phone }}">
                                                @if ($errors->has('phone'))
                                                    <p class="text-danger"> {{ $errors->first('phone') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="map" class="col-sm-2 control-label"> {{ __('Map Embed Code') }} <span class="text-danger">*</span>  </label>
            
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="map">{{ $setting->map }}</textarea>
                                                @if ($errors->has('map'))
                                                    <p class="text-danger"> {{ $errors->first('map') }} </p>
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
                        <!-- /.card-body -->
                    </div>

            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
