@extends('admin')

@section('content')
    <h1 class="page-header">Add New Category</h1>

    <div class="table-responsive">
        {!! Form::open(array('url' => 'admin/category/store', 'files' => true)) !!}

        <h5>Name</h5>
        <p>{!! Form::text('name', null, ['class' => 'form-control', 'label' => 'Name']) !!}</p>
        <p>{!! $errors->first('name', '<span class="help-block">:message</span>') !!}</p>

        <p>{!! Form::submit('Add Category', ['class' => 'btn btn-primary']) !!}</p>
        {!! Form::close() !!}
    </div>
@endsection