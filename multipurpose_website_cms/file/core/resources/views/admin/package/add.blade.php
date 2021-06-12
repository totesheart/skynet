@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Packages') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Packages') }}</li>
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
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Add Package') }}</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.package'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('admin.package.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Language') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control lang" name="language_id">
                                                @foreach($langs as $lang)
                                                    <option value="{{$lang->id}}" {{ $lang->is_default == '1' ? 'selected' : '' }} >{{$lang->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('language_id'))
                                                <p class="text-danger"> {{ $errors->first('language_id') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                            @if ($errors->has('title'))
                                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Time') }}</label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="time" placeholder="{{ __('Time') }}" value="{{ old('time') }}">
                                            @if ($errors->has('time'))
                                                <p class="text-danger"> {{ $errors->first('time') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Price') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="price" placeholder="{{ __('Price') }}" value="{{ old('price') }}">
                                            @if ($errors->has('price'))
                                                <p class="text-danger"> {{ $errors->first('price') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Feature') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input name="feature" class="form-control" data-role="tagsinput" placeholder="{{ __('Feature') }}" value="{{ old('feature') }}" >
                                            @if ($errors->has('feature'))
                                                <p class="text-danger"> {{ $errors->first('feature') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="value" class="col-sm-2 control-label">{{ __('Order') }}<span class="text-danger">*</span></label>
                        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="serial_number" placeholder="{{ __('Order') }}" value="0">
                                            @if ($errors->has('serial_number'))
                                            <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
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
