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
                    <h3 class="card-title">{{ __('Message List:') }}</h3>
                        <div class="card-tools">
                        <a href="{{ route('admin.message.deleteall') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-trash"></i>{{ __('Delete All') }}
                        </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table  id="idtable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Subject') }}</th>
                                <th>{{ __('Sending Time') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($messages as $id=>$message)
                            <tr>
                                <td>{{ ++$id }}</td>
                                <td>
                                    {{ $message->name }}
                                </td> 
                                <td>
                                    {{ $message->email }}
                                </td> 
                                <td>
                                    {{ $message->subject }}
                                </td>
                                <td>{{ $message->created_at->diffForHumans() }}</td> 
                                <td>
                                    <a href="{{ route('admin.message.view', $message->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="mailto:{{ $message->email }}" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i></a>
                                    <a href="{{ route('admin.message.delete', $message->id ) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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

