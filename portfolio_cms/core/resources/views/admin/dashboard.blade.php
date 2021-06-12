@extends('admin.layout')

@section('content')
   <!-- Content Header (Page header) -->

   <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Welcome back,') }} {{ $adminprofile->first_name }} {{ $adminprofile->last_name }}!</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">{{ __('Services') }}</span>
                    <h4 class="info-box-number font-weight-normal">{{ $services_count->count() }}</h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-success">
                  <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">{{ __('Projects') }}</span>
                    <h4 class="info-box-number font-weight-normal">{{ $portfolios->count() }}</h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-warning">
                  <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">{{ __('Clients') }}</span>
                    <h4 class="info-box-number font-weight-normal">{{ $clients->count() }}</h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-danger">
                  <span class="info-box-icon"><i class="fas fa-comments"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">{{ __('Blogs') }}</span>
                    <h4 class="info-box-number font-weight-normal">{{ $blogs_count->count() }}</h4>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
        </div>
        <div class="row">
          @foreach ($funfacts as $funfact)
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon p-2">
                <img  class="w-60" src="{{ asset('assets/front/img/'.$funfact->icon) }}" alt="">
              </span>
              <div class="info-box-content align-self-center pl-3">
                <span class="info-box-number">
                 <h5 class="mb-0 pb-0"> <strong>{{ $funfact->value }}+</strong> </h5>
                </span>
                <span class="info-box-text">{{ $funfact->name }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          @endforeach
        </div>
      <!-- Main row -->
  
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection