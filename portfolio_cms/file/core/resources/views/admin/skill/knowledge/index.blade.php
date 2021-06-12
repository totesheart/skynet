@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Knowledge') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Knowledge') }}</li>
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
                    <h3 class="card-title mt-1">{{ __('Knowledge List') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.knowledge.add') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> {{ __('Add Service') }}
                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table id="idtable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Content') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($knowledges as $id=>$knowledge)
                            <tr>
                                <td>{{ ++$id }}</td>
                                <td  width="50%">
                                    {{ $knowledge->content }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.knowledge.edit', $knowledge->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>{{ __('Edit') }}</a>
                                    <a href="{{ route('admin.knowledge.delete', $knowledge->id ) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>{{ __('Delete') }}</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
