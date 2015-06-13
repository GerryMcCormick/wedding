@extends('admin')

@section('content')
    <h1 class="page-header">Categories <a class="btn btn-primary" href="/admin/category/add">Add Category</a></h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>Category</th>
            <th>Created</th>
            <th>Updated</th>
            </thead>
            <tbody>
            @foreach($categories as $item)
                <tr>
                    <td>
                        <a href="/admin/category/{{ $item->id }}">{{ $item->name }}</a>
                    </td>
                    <td>{{ date("d F Y",strtotime($item->created_at)) }}</td>
                    <td>{{ date("d F Y",strtotime($item->updated_at)) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection