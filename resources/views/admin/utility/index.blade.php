@extends('admin')

@section('content')
    <h1 class="page-header">Services <a class="btn btn-primary" href="/admin/service/add">Add Service</a></h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>Service</th>
            <th>Created</th>
            <th>Updated</th>
            </thead>
            <tbody>
            @foreach($services as $item)
                <tr>
                    <td>
                        <a href="/admin/service/{{ $item->id }}">{{ $item->name}}</a>
                    </td>
                    <td>{{ date("d F Y",strtotime($item->created_at)) }}</td>
                    <td>{{ date("d F Y",strtotime($item->updated_at)) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection