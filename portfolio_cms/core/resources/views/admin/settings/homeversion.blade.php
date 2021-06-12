@extends('admin.layout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Home Version') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                        class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Home Version') }}</li>
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
                            <h3 class="card-title">{{ __('Activate Home Version') }} </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('assets/admin/img/static.jpg')}}" alt=""
                                                         style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Static Version</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    @if ($setting->home_version == 'static')
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    @else
                                                        <form class="deleteform d-inline-block"
                                                              action="{{route('admin.homeversion.update')}}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="home_version" value="static">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm">
                                                                      <span class="btn-label">
                                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                                      </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('assets/admin/img/slider.jpg')}}" alt=""
                                                         style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Slider Version</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    @if ($setting->home_version == 'slider')
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    @else
                                                        <form class="deleteform d-inline-block"
                                                              action="{{route('admin.homeversion.update')}}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="home_version" value="slider">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm confirmbtn">
                                                                  <span class="btn-label">
                                                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                                                  </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('assets/admin/img/video.jpg')}}" alt=""
                                                         style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Video Version</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    @if ($setting->home_version == 'video')
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    @else
                                                        <form class="deleteform d-inline-block"
                                                              action="{{route('admin.homeversion.update')}}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="home_version" value="video">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm confirmbtn">
                                                                  <span class="btn-label">
                                                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                                                  </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('assets/admin/img/water.jpg')}}" alt=""
                                                         style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Water Version</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    @if ($setting->home_version == 'water')
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    @else
                                                        <form class="deleteform d-inline-block"
                                                              action="{{route('admin.homeversion.update')}}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="home_version" value="water">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm confirmbtn">
                                                                      <span class="btn-label">
                                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                                      </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('assets/admin/img/static.jpg')}}"
                                                         alt="" style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Parallax Version</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    @if ($setting->home_version == 'parallax')
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    @else
                                                        <form class="deleteform d-inline-block"
                                                              action="{{route('admin.homeversion.update')}}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="home_version" value="parallax">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm confirmbtn">
                                                                      <span class="btn-label">
                                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                                      </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('assets/admin/img/partical.jpg')}}"
                                                         alt="" style="width:100%;">
                                                    <h4 class="text-center mt-3 mb-0">Particles Version</h4>
                                                </div>
                                                <div class="card-footer text-center">
                                                    @if ($setting->home_version == 'particles')
                                                        <button type="submit"
                                                                class="btn btn-primary btn-sm">
                                                            Active
                                                        </button>
                                                    @else
                                                        <form class="deleteform d-inline-block"
                                                              action="{{route('admin.homeversion.update')}}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="home_version" value="particles">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm confirmbtn">
                                                                      <span class="btn-label">
                                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                                      </span>
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
        </div>


    </section>

@endsection
