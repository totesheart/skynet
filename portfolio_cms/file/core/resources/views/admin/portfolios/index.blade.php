@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Portfolios') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li class="breadcrumb-item">{{ __('Portfolios') }}</li>
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
                    <div class="card-header with-border">
                    <h3 class="card-title mt-1">{{ __('Portfolios List') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.portfolio.add') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> {{ __('Add Portfolio') }}
                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="idtable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Client') }}</th>
                                    <th>{{ __('Duration') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $id=>$portfolio)
                                <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>
                                        <img class="w-100" src="{{ asset('assets/front/img/'.$portfolio->featured_image) }}" alt="">
                                    </td>
                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->client_name }}</td>
                                    <td>{{date('jS M, Y', strtotime($portfolio->start_date))}} - {{date('jS M, Y', strtotime($portfolio->submission_date))}}</td>
                                    <td>@if($portfolio->status == 1)
                                            <span class="badge badge-success">{{ __('Completed') }}</span>
                                        @else
                                            <span class="badge badge-warning">{{ __('In Progress') }}</span>
                                        @endif
                                    </td>
                                    <td width="18%">
                                        <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>{{ __('Edit') }}</a>
                                        <a href="{{ route('admin.portfolio.delete', $portfolio->id ) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>{{ __('Delete') }}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
