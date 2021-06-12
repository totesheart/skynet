@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Pricing Plan') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li class="breadcrumb-item">{{ __('Pricing Plan') }}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card  card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Edit Pricing Plan') }}</h3>
                        <div class="card-tools">
                        <a href="{{ route('admin.pricing') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                        </a>
                        </div>
                        </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.pricing.update', $pricingplan->id ) }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan_number" value="three">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label">{{ __('Currency') }} 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="currency" value="{{ $pricingplan->currency }}" placeholder="{{ __('Enter Currency') }}">
                                            @if ($errors->has('currency'))
                                                <p class="text-danger"> {{ $errors->first('currency') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label">{{ __('Price') }} 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="price" value="{{ $pricingplan->price }}" placeholder="{{ __('Enter Price') }}">
                                            @if ($errors->has('price'))
                                                <p class="text-danger"> {{ $errors->first('price') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label">{{ __('Plan Name') }} 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="plan_name" value="{{ $pricingplan->plan_name }}" placeholder="{{ __('Plan Name') }}">
                                            @if ($errors->has('plan_name'))
                                                <p class="text-danger"> {{ $errors->first('plan_name') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-12 control-label">{{ __('Content') }} 
                                                <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-sm-12">
                                            <textarea name="content" class="form-control textarea"  rows="4" placeholder="{{ __('Write Content') }}">{{ $pricingplan->content }}</textarea>
                                            @if ($errors->has('content'))
                                                <p class="text-danger"> {{ $errors->first('content') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-12 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-12">
                                            <select class="form-control" name="status">
                                                <option value="0" {{ $pricingplan->status == 0 ? 'selected' : '' }}>{{ __('Unpublish') }}</option>
                                                <option value="1" {{ $pricingplan->status == 1 ? 'selected' : '' }}>{{ __('Publish') }}</option>
                                                </select>
                                            @if ($errors->has('status'))
                                                <p class="text-danger"> {{ $errors->first('status') }} </p>
                                            @endif
                                        </div>
                                    </div>
    
                                    <div class="form-group row mt-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
