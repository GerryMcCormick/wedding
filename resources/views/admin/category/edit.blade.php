@extends('admin')

@section('content')
    <h1 class="page-header">Edit Category</h1>

    <div class="table-responsive">
        {!! Form::model($category, ['url' => 'admin/category/update/' . $category->id, 'method' => 'PATCH', 'files' => true]) !!}

        <h5>Name</h5>
        <p>{!! Form::text('name', null, ['class' => 'form-control', 'label' => 'Name']) !!}</p>
        <p>{!! $errors->first('name', '<span class="help-block">:message</span>') !!}</p>

        <p>{!! Form::submit('Save Category', ['class' => 'btn btn-primary']) !!}</p>
        {!! Form::close() !!}
    </div>
@endsection