@extends('admin')

@section('content')
    <h1 class="page-header">Add New Service</h1>

    <div class="table-responsive">
        {!! Form::open(array('url' => 'admin/service/store', 'files' => true)) !!}

        @include('admin.partials.serviceform')

        <p>{!! Form::submit('Add Service', ['class' => 'btn btn-primary']) !!}</p>
        {!! Form::close() !!}
    </div>
@endsection