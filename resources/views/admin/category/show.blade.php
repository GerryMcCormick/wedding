@extends('admin')

@section('content')

    <a class="btn btn-default" href="/admin/category/{{ $category->id }}/edit">Edit Category</a>

    <h1> Category </h1>

    <h4>Name</h4>
    <p>{{ $category->name }} </p>

@endsection