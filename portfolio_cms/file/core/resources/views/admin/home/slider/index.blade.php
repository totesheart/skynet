@extends('admin.layout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Home Slider') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                        class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Home Slider') }}</li>
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
                            <h3 class="card-title">{{ __('Update Home Slider') }} </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form action="{{ route('admin.slider.store') }}" class="dropzone" id="my-awesome-dropzone" enctype="multipart/formdata">
                                        @csrf
                                    </form>
                                    <p class="help-block text-info mt-3">{{ __('Upload 1920X970 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.') }}
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="slider">
                                        @foreach($sliders as $slider)
                                            <div class="mg">
                                                <div class="img">
                                                    <img class="img-fluid" src="{{ asset('assets/front/img/'.$slider->image ) }}" alt="">
                                                    <div class="overlay">
                                                        <a href="{{ route('admin.slider.delete', $slider->id ) }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

