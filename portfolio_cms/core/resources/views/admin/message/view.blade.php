@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Message') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Message') }}</li>
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
                    <h3 class="card-title">{{ __('View Message') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.message') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="border p-3 mb-4">
                                    <p><strong>Time : </strong> {{ $message->created_at->diffForHumans() }}</p>
                                    <p><strong>Name : </strong> {{ $message->name }}</p>
                                    <p><strong>Email : </strong> {{ $message->email }}</p>
                                    <p class="mb-0"><strong>Subject : </strong> {{ $message->subject }}</p>
                                </div>
                                <div class="border p-3  mb-4">
                                    <p><strong>Message : </strong></p>
                                    <p class="mb-0">{{ $message->message }}</p>
                                </div>
                                <a href="mailto:{{ $message->email }}" class="btn btn-primary"><i class="fas fa-paper-plane"></i>Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection

