@extends('admin.layout')

@section('content')

<div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Pricing Plans') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li class="breadcrumb-item">{{ __('Pricing Plans') }}</li>
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
                    <h3 class="card-title mt-1">{{ __('Pricing Plan List') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pricing.add') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> {{ __('Add A Plan') }}
                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table id="idtable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Plan Name') }}</th>
                                <th>{{ __('Currency') }}</th>
                                <th>{{ __('Price') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pricingplans as $id=>$pricingplan)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td>{{ $pricingplan->plan_name }}</td>
                            <td>{{ $pricingplan->currency }}</td>
                            <td>{{ $pricingplan->price }}</td>
                            <td>
                                @if($pricingplan->status == 1)
                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                @else
                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                @endif
                            </td>
                            <td width="18%">
                                <a href="{{ route('admin.pricing.edit', $pricingplan->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>{{ __('Edit') }}</a>
                                <a href="{{ route('admin.pricing.delete', $pricingplan->id ) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>{{ __('Delete') }}</a>
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
