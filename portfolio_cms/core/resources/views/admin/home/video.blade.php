@extends('admin.layout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Home Video') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Home Video') }}</li>
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
                            <h3 class="card-title">{{ __('Update Home Video') }} </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.herosection.video.update') }}" method="POST">
                                @csrf

                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label  class="col-sm-12 control-label">{{ __('Home Video Link') }} <span
                                                        class="text-danger">*</span></label>

                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="hero_section_video" value="{{ $setting->hero_section_video }}" placeholder="{{ __('Enter Video Link') }}">
                                                @if ($errors->has('hero_section_video'))
                                                    <p class="text-danger"> {{ $errors->first('hero_section_video') }} </p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-block">{{ __('Update') }}</button>
                                            </div>
                                        </div>
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
