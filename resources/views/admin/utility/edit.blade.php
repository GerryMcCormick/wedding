@extends('admin')

@section('content')
    <h1 class="page-header">Edit Service</h1>

    <div class="table-responsive">
        {!! Form::model($service, ['url' => 'admin/service/update/' . $service->id, 'method' => 'PATCH', 'files' => true]) !!}

        @include('admin.partials.serviceform')

        <p>{!! Form::submit('Save Service', ['class' => 'btn btn-primary']) !!}</p>
        {!! Form::close() !!}
    </div>
@endsection